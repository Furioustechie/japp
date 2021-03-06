<?php

namespace App\Http\Controllers;
use Auth;
use App;
Use Session;
use Alert;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Appeal;
use App\Court;
use App\Doctype;
use App\Document;
use App\Application;
use App\Newappeal;
use App\prisoner_transfer_history;
use App\Status;
use App\Appealstatus;
use App\User;
use App\Sections;
use App\Acts;
use App\Prison;
use App\Sentence;
use DB;
use Notfiable;
use Gate;
use App\Notifications\jappNotification;
use App\Notification;
use Carboon\Carbon;
use Toastr;
use phpDocumentor\Reflection\Types\Void_;
use Illuminate\Notifications\Notifiable;
use function GuzzleHttp\json_encode;

class AppealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('isUser')) {
            abort(401, 'You are not authorized here!');
        }
        $user_id = Auth::user()->id;
        // echo $user_id;
        // exit;

        $appeals = Appeal::all();
        $test = Appealstatus::all();
        //$document = Document::all();
        //$doctype = Doctype::all();
        $appDetails = DB::select('SELECT na.id, prisons.name as prison_name,prisoner.prisoner_name as prisoner_name,cases.caseno as case_no, 
                                         law_acts.name as act_name, courts.name_en as court_name, na.privacy
                                  FROM newappeals na
                                  INNER JOIN prisons ON na.prisonid = prisons.id
                                  INNER JOIN law_acts ON na.act_id  = law_acts.id
                                  INNER JOIN courts ON na.courtid  = courts.id
                                  INNER JOIN prisoner ON na.prisonerid  = prisoner.id
                                  INNER JOIN cases ON cases.id = na.caseid
                                  
                                  WHERE na.user_id = "'.$user_id.'"');
          

          
        $send['appeals']=$appeals;
        $send['appDetails']=$appDetails;
       
        return view('appeals.index', $send)->with('appeals', $appeals);
        return view('appeals.modals')->with('appeals', $appeals);
    }

    public function hcDetails()
    {
        if (!Gate::allows('isAdmin')) {
            abort(401, 'You are not authorized here!');
        }
        $user_id = Auth::user()->id;

        // echo $user_id;
        // exit;

        $appeals = Appeal::all();
        //$test = Appealstatus::all();
        //$document = Document::all();
        //$doctype = Doctype::all();
        // $appDetails = DB::select('SELECT na.id, prisons.name as prison_name,prisoner.prisoner_name as prisoner_name,cases.caseno as case_no,
        //                                  offences.name as offence_name, courts.name_en as court_name, na.privacy
        //                           FROM newappeals na
        //                           INNER JOIN prisons ON na.prisonid = prisons.id
        //                           INNER JOIN offences ON na.offenceid  = offences.id
        //                           INNER JOIN courts ON na.courtid  = courts.id
        //                           INNER JOIN prisoner ON na.prisonerid  = prisoner.id
        //                           INNER JOIN cases ON cases.id = na.caseid
        //                           ');
          
        $appDetails = DB::table('newappeals AS na')
          ->join('prisons', 'na.prisonid', '=', 'prisons.id')
          ->join('law_acts', 'na.act_id', '=', 'law_acts.id')
          ->join('courts', 'na.courtid', '=', 'courts.id')
          ->join('prisoner', 'na.prisonerid', '=', 'prisoner.id')
          ->join('cases', 'cases.id', '=', 'na.caseid')

          ->select(
              'na.id',
              'na.prisonid',
              'prisons.id AS prison_id',
              'prisons.name AS prison_name',
              'prisoner.prisoner_name AS prisoner_name',
              'cases.caseno AS case_no',
              'law_acts.name AS act_name',
              'courts.name_en AS court_name',
              'na.privacy'
          )
          ->paginate(10);
        $showlog = DB::table('notifications');
        $send['appeals']=$appeals;
        $send['appDetails']=$appDetails;
       
        return view('appeals.hcDetails', $send);
        //return view ('appeals.modals',$send);
        //return view ('appeals.hcDetails');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appeals.appealForm');
    }
    public function fetchme(Request $request){
        if ($request->ajax()) {
            $xv = $request->filter;
            $appDetails = DB::table('filterByStatus')
                ->Where('prison_id', '=', 2)
                ->Where('maxStatus', '=', $xv)
                ->get();
        //    $send['myDetails']=$myDetails; 
        //     return view('prisonDashboard',$send);
           
            echo $appDetails;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('submit')) {
            $this->validate($request, [
                'prisoner_no' => 'required',
                'prisoner_name' => 'required',
                'caseno' => 'required',
               // 'filename' => 'mimes:jpeg,png,jpg,pdf|max:1999'  //To allow null |nullable
                ]);
        }
                   
        $document = Document::all();
        $doctype = Doctype::all();
                                    
        $data = array();
        $dtype = array();
             
        $nextId = DB::table('newappeals')->max('id');
        $nextId1 = DB::table('newappeals')->max('id')+1; //Increment ID for documents table
        $files = $request->file('filename');
        if ($request->hasFile('filename')) {
            $data=array();
            foreach ($files as $file) {
                $name=uniqid().$file->getClientOriginalName(); //uniqid(). This has been use to make each file unique
                $file->move(public_path().'/files/', $name);
                $data[] = $name;
            }
        }
                
        // $appeal= new Appeal();
        $document= new Document();
        $doctype= new Doctype();
        //$appeal->caseno = $request->input('caseno');
                        
        // array to save doctype and filname
        //dd($prisonerNxtId);
        //Prisoner Table Data Insertion Block
        DB::table('prisoner')->insert([
        ['prisoner_no' => $request->input('prisoner_no'),
        'prisoner_name' => $request->input('prisoner_name'),
        'prisoner_gender' => $request->input('prisoner_gender'),
        'created_at' => date('Y-m-d h:s:i'),
        'updated_at' => date('Y-m-d h:s:i')]
    ]);
    
        $prisonerNxtId = DB::table('prisoner')->max('id'); // For PRISONER Tables Prisonerid Column
        // Cases Table Data Insertion Block
        DB::table('cases')->insert([
        ['caseno' => $request->input('caseno'),
            'created_at' => date('Y-m-d h:s:i'),
            'updated_at' => date('Y-m-d h:s:i')]
    ]);

        $typeid = $request->input('doctype'); //doctype ID
        if(!empty($typeid)){
            $result = array();
            $values = array($typeid, $data);
                            
            foreach ($typeid as $index => $key) {
                @$t = array();
                foreach ($values as $value) {
                    @$t[] = $value[$index];
                }
                $result[$key]  = $t;
            }// end of doctype
            foreach ($result as $r) {                     //Loop for Doctype and Filename Column
                DB::table('documents')->insert([
                    ['appealid' => $nextId1,
                    'doctypeid' => $r[0],
                    'attached' => '1', // It is optional and hardcoded
                    //'filename' => $r[1].time(),
                    'filename' => $r[1],
                    'created_at' => date('Y-m-d h:s:i'),
                    'updated_at' => date('Y-m-d h:s:i')]
                ]);
            }
        }
                                                     
        // Documents Table Data Insertion Block
                        
        $sections = $request->input('section_name');//Receive value
                            $sec_result = array();                      //initialize empty array
                            $sec_values = array($sections);             //initialize array with received value
                            foreach ($sections as $index=>$key) {         //loop through on received value and initialize in index variable with keys
                                $sectios_arr = array();                 //initialize new empty array
                                foreach ($sec_values as $val) {           //again loop through recieved array value
                                    $sectios_arr[] = $val[$index];      //store $index in new variable $val in array style
                                }
                                $sec_result[$key] = $sectios_arr;       //now store $keys into $sec_result variable which is initailized as empty array
                            }
        // $result = array();
        foreach ($sec_result as $section_val) {
            DB::table('act_sections')->insert([
                                    'appeal_id' => $nextId1,
                                    'act_id' => $request->input('act_name'),
                                    'section_id' => $section_val[0],
                                    'created_at' => date('Y-m-d h:s:i'),
                                    'updated_at' => date('Y-m-d h:s:i')
                                ]);
        }

        // NewAppeals Table Data Insertion Block
        $casesNxtId = DB::table('cases')->max('id'); // For NEWAPPEALS Tables caseid Column
        DB::table('newappeals')->insert([
            ['prisonid' => $request->input('prison_id'),
            'prisonerid' => $prisonerNxtId ,
            'courtid' => $request->input('sentencingcourt'),
            'appeals_to_courtid' => $request->input('appeals_to_court'),
            'caseid' => $casesNxtId,
            'act_id' => $request->input('act_name'),
            //'section_id' => $request->input('section_name'),
            'sentenceid' => $request->input('sentencetype'),
            'resultsid' => 1,
            'user_id' => Auth::user()->id,
            'created_at' => date('Y-m-d h:s:i'),
            'updated_at' => date('Y-m-d h:s:i')]
        ]);
                      
        // SMS integration with Appeal
                      
        /*
        $url = "http://66.45.237.70/api.php";
                $number= $request->input('mobile');
                $text=$request->input('message');
                $data= array(
                'username'=>"01812370702",
                'password'=>"CVXTE3FN",
                'number'=>"$number",
                'message'=>"$text"
                );

                $ch = curl_init(); // Initialize cURL
                curl_setopt($ch, CURLOPT_URL,$url);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $smsresult = curl_exec($ch);
                $p = explode("|",$smsresult);

        */
        /*-----------------Notification From Prison To High Court--------------------------------------- */
        $applToUser = DB::table('newappeals')->where('id', $nextId1)->first();
        // Get Appeal ID
                        $prison_name = DB::table('prisons')->where('id', $request->input('prison_id'))->first(); //Get Prison ID
                        $caseno = $request->input('caseno');//Get case no
                        $msg='New Appeals From '.$prison_name->name.'(On Cace:'.$caseno.')'; // Get Prison Name
                        $arr=array('data'=> $msg, 'appeal_id' =>$applToUser->id,'case_id'=>$caseno);
        // $auth_user_id= Auth::user()->id;
        User::find($applToUser->appeals_to_courtid)->notify(new jappNotification($arr));
        //$appeal->save();  Eloquant Insert
        //$this->notify(new jappNotification());

        /*-----------------End of Notification From Prison To High Court--------------------------------------- */
        //Toastr::success('Success!', 'New appeal has been sumitted successfully');
        return redirect('prisonDashboard')->with('success', 'New appeal has been sumitted successfully'); //submit application
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $test1 = Newappeals::find($id);
        // $test = Appealstatus::find($id);
     
        // $apStatus = DB::table('newappeals')
        //     ->join('appealstatus', 'newappeals.id', '=', 'appealstatus.newappealsid')
        //     ->join('status', 'newappeals.id', '=', 'status.statusid')
        //     ->select('status.status_name', 'appealstatus.statusid')
        //     ->where('Appealstatus.newappealsid', '=', $test)
        //     ->get();
        //     $send['apt']=$apStatus;
        //     return redirect('appeals',$send)->with('appealstatus',$test);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $appeal = Appeal::find($id);
        // return view ('appeals.edit')->with('appeal',$appeal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //Update AppealStatus Table
    {
        //dd($request);
        //
        if ($request->hasFile('file_bj')) {
            //
            $validatedData = $request->validate([
                //'prisonerno' => 'required',
                'file_app' => 'mimes:jpeg,png,jpg,pdf|nullable|max:1999'
       ]);
        } else {
            $this->validate($request, [
        
                //'rejectgrant' => 'required'
            ]);
        }
        //$applStatus = DB::table('appealstatus'); // For PRISONER Tables Prisonerid Column
        if ($request->has('courts_submit')) {
            $appeals = Newappeal::find($request->input('appeal_id'));
            $appealNO =  $appeals->appeal_number;
            if ($request->input('case_no')) {
                $appealNO = $request->input('case_no');
            }
            DB::table('newappeals')
                ->where('id', $request->input('appeal_id'))
                ->update(['prisonid' => $request->input('prison_name'), 'appeal_number' => $appealNO ]);

            $has_status_name = DB::table('appealstatus')->where(array('statusid'=>$request->input('status_id'),'newappeals_id'=>$request->input('appeal_id')))->first();
            //dd($has_status_name);
            if (empty($has_status_name)) {
                //return redirect('/hcDetails')->with('error','State Remain Same');
                DB::table('appealstatus')->insert([
                     ['statusid' => $request->input('status_id'),
                        'newappeals_id' => $request->input('appeal_id'),
                        'state' => $request->input('state'),
                        //'remarks' => $request->input('rejectgrant'),
                         'created_at' => date('Y-m-d h:s:i'),
                            'updated_at' => date('Y-m-d h:s:i')]
        ]);
                //     $update_prisonName = Newappeal::where('id', '=', $request->input('appeal_id') )->first();
                //     $update_prisonName->prisonid = $request->input('prison_name');
                //           $update_prisonName->save();
                // dd( $update_prisonName);
                /*-----------------Notification From High Court To Prison--------------------------------------- */

                $appl = DB::table('newappeals')->where('id', $request->input('appeal_id'))->first();
                // $notifiable_user = DB::table('SELECT id FROM users WHERE prison_id = "'.$appl->prisonid.'"');
                //dd($appl->id); // Get Appeal ID
                $casename = DB::table('cases')->where('id', $appl->caseid)->first(); //Get caseId from Appeals Table
                //$pname = DB::table('prisons')->where('id',$appl->prisonid)->first(); //Get caseId from Appeals Table
                $st_name = DB::table('status')->where('id', $request->input('status_id'))->first(); //Get StatusId
                            
                $caseno = $casename->caseno;
                $msg='Update : '.$st_name->status_name.' (ON '.$casename->caseno.')';
                $arr=array('data'=> $msg, 'appeal_id' => $appl->id,'case_id'=>$caseno);
                //dd($arr);
                $users = DB::select('select id from users where prison_id= "'.$appl->prisonid.'"');
                //print_r($users);exit;
                foreach ($users as $userr) {
                    User::find($userr->id)->notify(new jappNotification($arr)); // ** Find value needed to be dynamic
                }
                // \Notification::send($users, new jappNotification($arr));
                /*-----------------End of Notification From High Court To Prison--------------------------------------- */

                return redirect('/hcDetails')->with('success', 'State Updated Successfully');
                //return redirect('/dashboard')->with('success', 'State Updated Successfully');

            }
//         else{
//             DB::table('appealstatus')->where(array('statusid'=>$request->input('status_id'),'newappeals_id'=>$request->input('appeal_id')))->first()
//             ->update([
//                 ['state' => $request->input('state'),
//                        'updated_at' => date('Y-m-d h:s:i')]
//    ]);
//    return redirect('/hcDetails')->with('success','Application Updated Successfully');
//         }
            else {
                DB::table('appealstatus')->where(array('statusid'=>$request->input('status_id'),'newappeals_id'=>$request->input('appeal_id')))
                        ->update([
                            'state' => $request->input('state'),
                                   'updated_at' => date('Y-m-d h:s:i')
               ]);
                //dd( $asdf);
                /*-----------------Notification From High Court To Prison--------------------------------------- */

                $appl = DB::table('newappeals')->where('id', $request->input('appeal_id'))->first(); // Get Appeal ID
                $casename = DB::table('cases')->where('id', $appl->caseid)->first(); //Get caseId from Appeals Table
                //$pname = DB::table('prisons')->where('id',$appl->prisonid)->first(); //Get caseId from Appeals Table
                $st_name = DB::table('status')->where('id', $request->input('status_id'))->first(); //Get StatusId
                $caseno = $casename->caseno;
                $msg='Update : '.$st_name->status_name.' (ON '.$casename->caseno.')';
                $arr=array('data'=> $msg,'appeal_id'=>$appl->id,'case_id'=>$caseno);
                // $users = User::all()->where('prisonid',$appl->prisonid);
                $users = DB::select('select id from users where prison_id= "'.$appl->prisonid.'"');
                //print_r($users);exit;
                foreach ($users as $userr) {
                    User::find($userr->id)->notify(new jappNotification($arr)); // ** Find value needed to be dynamic
                }
                //\Notification::send($users, new jappNotification($arr));
                // User::find($appl->prisonid)->notify(new jappNotification($arr)); // ** Find value needed to be dynamic
                /*-----------------End of Notification From High Court To Prison--------------------------------------- */
                return redirect('/hcDetails')->with('success', 'State Updated Successfully');
                //return redirect('/dashboard')->with('success', 'State Updated Successfully');

            }
        }
                // $appeals->save();
                //return redirect('appeals')->with('success','Application Updated');
                $test1 = Newappeal::find($id);
                $test = Appealstatus::find($id);
                $apStatuses = DB::select('SELECT status.status_name, appealstatus.statusid
                            FROM newappeals na
                            INNER JOIN appealstatus ON na.id = appealstatus.newappeals_id
                            INNER JOIN status ON appealstatus.statusid = status.id
                            WHERE appealstatus.newappeals_id="'.$test1.'"');
                //$tt1 = Appealstatus::where('statusid','=', $test)->with('status')->first();
                //$lastStatus = DB::table('newappeals')->max('statusid')->where($test1);
                $send['apt']=$apStatuses;
                //$send['aptt']=$lastStatus;
                return redirect('appeals.index', $send)->with('appealstatus', $test, $lastStatus);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function updateTest(Request $request, $id){
        $appeals = Newappeal::find($request->appeal_id);
        $has_prison_name = DB::table('newappeals')->where('id','=', $request->appeal_id)->first();
        $has_jailappealNo = DB::table('newappeals')->where('id','=', $request->appeal_id)->first();
        $jailAppealNO = $has_jailappealNo->appeal_number;
        $current_prison = $has_prison_name->prisonid;
        if(empty($jailAppealNO)){
            DB::table('newappeals')
            ->where('id', $request->appeal_id)
            ->update(['prisonid' => $request->prison_name, 'appeal_number' => $request->japp_no ]);
        }
        if ((!empty($request->status_id)) && (!empty($request->state))) {
            //echo 'Hi';
            $has_status_name = DB::table('appealstatus')->where(array('statusid'=>$request->status_id,'newappeals_id'=>$request->appeal_id))->first();
            //dd($has_status_name);
            if (empty($has_status_name)) {
                //if((!empty($request->status_id)) AND (!empty($request->state))){
                //return redirect('/hcDetails')->with('error','State Remain Same');
                        DB::table('appealstatus')->insert([
                            ['statusid' => $request->status_id,
                            'newappeals_id' => $request->appeal_id,
                            'state' => $request->state,
                            'remarks' => $request->input('rejectgrant'),
                            'created_at' => date('Y-m-d h:s:i'),
                            'updated_at' => date('Y-m-d h:s:i')]
                        ]);
                        //   }
                        /*-----------------Notification From High Court To Prison--------------------------------------- */
                        $appl = DB::table('newappeals')->where('id', $request->appeal_id)->first();
                        // $notifiable_user = DB::table('SELECT id FROM users WHERE prison_id = "'.$appl->prisonid.'"');
                        //dd($appl->id); // Get Appeal ID
                        $casename = DB::table('cases')->where('id', $appl->caseid)->first(); //Get caseId from Appeals Table
                        //$pname = DB::table('prisons')->where('id',$appl->prisonid)->first(); //Get caseId from Appeals Table
                        $st_name = DB::table('status')->where('id', $request->status_id)->first(); //Get StatusId
                        $caseno = $casename->caseno;
                        $msg='Update : '.$st_name->status_name.' (ON '.$casename->caseno.')';
                        $arr=array('data'=> $msg, 'appeal_id' => $appl->id,'case_id'=>$caseno);
                        //dd($arr);
                        $users = DB::select('select id from users where prison_id= "'.$appl->prisonid.'"');
                        //print_r($users);exit;
                        foreach ($users as $userr) {
                            User::find($userr->id)->notify(new jappNotification($arr)); // ** Find value needed to be dynamic
                        }
                        // \Notification::send($users, new jappNotification($arr));
                        /*-----------------End of Notification From High Court To Prison--------------------------------------- */
                        echo 'Status Updated Successfully';
                      }
                      elseif(!empty($has_status_name)) {
                       
                                $query = DB::select(' SELECT *,appealstatus.id as appsid FROM `all_appeals` 
                                LEFT JOIN appealstatus ON appealstatus.newappeals_id = all_appeals.id
                                WHERE all_appeals.id="'.$request->appeal_id.'"
                                ORDER BY appealstatus.id DESC
                                LIMIT 1');
                                $id_state =  $query[0]->appsid;
                                $update_State = App\Appealstatus::find($id_state);
                                $update_State->state = $request->state;
                                $update_State->save();
                                //   }
                                /*-----------------Notification From High Court To Prison--------------------------------------- */
                                $appl = DB::table('newappeals')->where('id', $request->appeal_id)->first();
                                // $notifiable_user = DB::table('SELECT id FROM users WHERE prison_id = "'.$appl->prisonid.'"');
                                //dd($appl->id); // Get Appeal ID
                                $casename = DB::table('cases')->where('id', $appl->caseid)->first(); //Get caseId from Appeals Table
                                //$pname = DB::table('prisons')->where('id',$appl->prisonid)->first(); //Get caseId from Appeals Table
                                $st_name = DB::table('status')->where('id', $request->status_id)->first(); //Get StatusId
                                $caseno = $casename->caseno;
                                $msg='Update : '.$st_name->status_name.' (ON '.$casename->caseno.')';
                                $arr=array('data'=> $msg, 'appeal_id' => $appl->id,'case_id'=>$caseno);
                                //dd($arr);
                                $users = DB::select('select id from users where prison_id= "'.$appl->prisonid.'"');
                                //print_r($users);exit;
                                foreach ($users as $userr) {
                                    User::find($userr->id)->notify(new jappNotification($arr)); // ** Find value needed to be dynamic
                                }
                                // \Notification::send($users, new jappNotification($arr));
                                /*-----------------End of Notification From High Court To Prison--------------------------------------- */
                                echo 'Status Updated! Complete Successfully';
                              }
     
                    }elseif((!empty($request->status_id)) && (empty($request->state))) {
                        echo 'Sorry! Please Select State';
                    }
                    elseif((empty($request->status_id)) && ($current_prison == $request->prison_name)){
                        echo 'Nothing Changed!';
                    }
                    else{
                            DB::table('newappeals')
                            ->where('id', $request->appeal_id)
                            ->update(['prisonid' => $request->prison_name]);
                            echo 'Prison Updated Successfully';
                            //echo $has_prison_name->id;
                        }
           
        
    }

    public function updateByHC(Request $request, $id)
    {
        $appeals = Newappeal::find($request->appeal_id);
        $appealNO =  $appeals->appeal_number;
        //dd($request->courts_submit);
        //
        if (!empty($request->courts_submit)) {
            //$validatedData = $request->validate([
            //   'prisonerno' => 'required',
            //          'file_app' => 'mimes:jpeg,png,jpg,pdf|nullable|max:1999'
            //]);
            //} else{
            $this->validate($request, [
             'rejectgrant' => 'required'
         ]);
        }
        //$applStatus = DB::table('appealstatus'); // For PRISONER Tables Prisonerid Column
        if ((empty($request->status_id)) and (empty($request->state))) {
            DB::table('newappeals')
            ->where('id', $request->appeal_id)
            ->update(['prisonid' => $request->prison_name, 'appeal_number' => $appealNO ]);
        }
        ///////
        if ($request->courts_submit == 'submit' and (!empty($request->status_id))) {
            if ($request->case_no) {
                $appealNO = $request->case_no;
            }
       
            $has_status_name = DB::table('appealstatus')->where(array('statusid'=>$request->status_id,'newappeals_id'=>$request->appeal_id))->first();
            //dd($has_status_name);
            if (empty($has_status_name)) {
                //if((!empty($request->status_id)) AND (!empty($request->state))){
                //return redirect('/hcDetails')->with('error','State Remain Same');
                DB::table('appealstatus')->insert([
                        ['statusid' => $request->status_id,
                        'newappeals_id' => $request->appeal_id,
                        'state' => $request->state,
                        //'remarks' => $request->input('rejectgrant'),
                            'created_at' => date('Y-m-d h:s:i'),
                            'updated_at' => date('Y-m-d h:s:i')]
                    ]);
                //   }
            
                /*-----------------Notification From High Court To Prison--------------------------------------- */
                $appl = DB::table('newappeals')->where('id', $request->appeal_id)->first();
                // $notifiable_user = DB::table('SELECT id FROM users WHERE prison_id = "'.$appl->prisonid.'"');
                //dd($appl->id); // Get Appeal ID
                $casename = DB::table('cases')->where('id', $appl->caseid)->first(); //Get caseId from Appeals Table
                //$pname = DB::table('prisons')->where('id',$appl->prisonid)->first(); //Get caseId from Appeals Table
                $st_name = DB::table('status')->where('id', $request->status_id)->first(); //Get StatusId
                $caseno = $casename->caseno;
                $msg='Update : '.$st_name->status_name.' (ON '.$casename->caseno.')';
                $arr=array('data'=> $msg, 'appeal_id' => $appl->id,'case_id'=>$caseno);
                //dd($arr);
                $users = DB::select('select id from users where prison_id= "'.$appl->prisonid.'"');
                //print_r($users);exit;
                foreach ($users as $userr) {
                    User::find($userr->id)->notify(new jappNotification($arr)); // ** Find value needed to be dynamic
                }
                // \Notification::send($users, new jappNotification($arr));
                /*-----------------End of Notification From High Court To Prison--------------------------------------- */
                return redirect('/hcDetails')->with('success', 'State Updated Successfully');
            } elseif (!empty($request->status_id)) {
                DB::table('appealstatus')->where(array('statusid'=>$request->status_id,'newappeals_id'=>$request->appeal_id))
                     ->update([
                         'state' => $request->state,
                                'updated_at' => date('Y-m-d h:s:i')
            ]);
                //dd( $asdf);
                /*-----------------Notification From High Court To Prison--------------------------------------- */

                $appl = DB::table('newappeals')->where('id', $request->appeal_id)->first(); // Get Appeal ID
                $casename = DB::table('cases')->where('id', $appl->caseid)->first(); //Get caseId from Appeals Table
                //$pname = DB::table('prisons')->where('id',$appl->prisonid)->first(); //Get caseId from Appeals Table
                $st_name = DB::table('status')->where('id', $request->status_id)->first(); //Get StatusId
                $msg='Update : '.$st_name->status_name.' (ON '.$casename->caseno.')';
                $arr=array('data'=> $msg,'appeal_id'=>$appl->id);
                // $users = User::all()->where('prisonid',$appl->prisonid);
                $users = DB::select('select id from users where prison_id= "'.$appl->prisonid.'"');
                //print_r($users);exit;
                foreach ($users as $userr) {
                    User::find($userr->id)->notify(new jappNotification($arr)); // ** Find value needed to be dynamic
                }
                //\Notification::send($users, new jappNotification($arr));
                // User::find($appl->prisonid)->notify(new jappNotification($arr)); // ** Find value needed to be dynamic
                /*-----------------End of Notification From High Court To Prison--------------------------------------- */
                return redirect('/hcDetails')->with('success', 'State Updated Successfully');
            } else {
                return redirect('/hcDetails')->with('success', 'State Updated Successfully');
            }
        }
        // $appeals->save();
     //return redirect('appeals')->with('success','Application Updated');
    //  $test1 = Newappeal::find($id);
    //  $test = Appealstatus::find($id);
    //              $apStatuses = DB::select('SELECT status.status_name, appealstatus.statusid
    //              FROM newappeals na
    //              INNER JOIN appealstatus ON na.id = appealstatus.newappeals_id
    //              INNER JOIN status ON appealstatus.statusid = status.id
    //              WHERE appealstatus.newappeals_id="'.$test1.'"');
    //      //$tt1 = Appealstatus::where('statusid','=', $test)->with('status')->first();
    //       //$lastStatus = DB::table('newappeals')->max('statusid')->where($test1);
    //      $send['apt']=$apStatuses;
    //      //$send['aptt']=$lastStatus;
    //                  return redirect('appeals.index',$send)->with('appealstatus',$test,$lastStatus);
    }

    // test relationship in eloquent model
    public function user($username)
    {
        // $send['user']=Newappeal::where('user_id',11)->first();
        $send['user'] = User::where('name', $username)->firstOrFail();
        //$send['usersid'] = User::find()->where('id', 11)->get();

        //  dd($userID);
        return view('/profile', $send);
    }

    //test Prison Dashboard
    public function prisonDashboardData(Request $request, $lang=null)
    {
        if (!Gate::allows('isUser')) {
            abort(401, 'You are not authorized here!');
        }
        $notify_appeal_id = $request->appsid;
        // Session::put('Locale',$lang);
        //App::setLocale($lang);
        //Session::put('locale',$lang);
        $user_id = Auth::user()->id;
        $prison_id = Auth::user()->prison_id;
        // $appealResolved_forPrison =  DB::select('SELECT count(statusid) as totalAppealResolved FROM appealstatus
        // INNER JOIN newappeals ON appealstatus.newappeals_id = newappeals.id
        // INNER JOIN users ON users.prison_id = newappeals.prisonid
        // WHERE statusid = (SELECT id FROM status ORDER BY id DESC limit 1) AND newappeals.prisonid = '.$prison_id.'');
        //dd($prisonid_forAppealStatus);
        $countAppeals_byPrison = DB::select('SELECT count(id) AS totalid, max(created_at) as maxDate FROM `newappeals` WHERE prisonid = '.$prison_id.'');
        $countAppealsResolved_byPrison = DB::select('SELECT count(id) AS totalid, max(updated_at) as maxUpdatedDate FROM `appealresolved_prison` WHERE prison_id = '.$prison_id.'');

        $lastYearAppeals_byPrison = DB::select('SELECT count(id) as totalAppeal FROM newappeals WHERE created_at AND DATE_SUB(NOW(), INTERVAL 1 MONTH) AND prisonid = '.$prison_id.'');
        $cc_missing_count_forPrison = DB::select('SELECT COUNT(id) as total_cc_missing  FROM newappeals 
        WHERE newappeals.id IN (select appealid from documents where doctypeid NOT IN (3)) AND prisonid = '.$prison_id.'');
        
        $district_name = DB::Select('SELECT name FROM prisons where disid = (select district_id from users where id='.$user_id.')');
        $courts_Name = DB::Select('SELECT id,name_en,disid FROM courts');
        //dd($courts_Name);
        

        // echo $user_id;
        // exit;

        $appeals = Appeal::all();
        $test = Appealstatus::all();
        //$document = Document::all();
        //$doctype = Doctype::all();
        $appDetails = DB::select('SELECT na.id,na.created_at, prisons.name as prison_name,prisoner.prisoner_name as prisoner_name,cases.caseno as case_no, 
                                         law_acts.name as act_name, courts.name_en as court_name, na.privacy, max(appealstatus.statusid) as maxStatus                                  FROM newappeals na
                                  INNER JOIN prisons ON na.prisonid = prisons.id
                                  INNER JOIN law_acts ON na.act_id  = law_acts.id
                                  INNER JOIN courts ON na.courtid  = courts.id
                                  INNER JOIN prisoner ON na.prisonerid  = prisoner.id
                                  INNER JOIN cases ON cases.id = na.caseid
                                  LEFT JOIN appealstatus on appealstatus.newappeals_id = na.id
                                --   INNER JOIN users ON users.prison_id = na.prisonid
                                  
                                  WHERE  na.prisonid = "'.$prison_id.'"
                                  
                                  GROUP BY na.id
                                  ORDER BY na.id DESC');
        
        // $timeInterval = DB::select('SELECT created_at from newappeals WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()');
        //$string = implode(' ', $timeInterval);

        $appDetails_thisYear = DB::table('thisyearappealforprison')
          ->select('id', 'prison_id', 'prison_name', 'prisoner_name', 'case_no', 'act_name', 'court_name')
          ->where('thisyearappealforprison.prison_id', $prison_id)
          ->paginate(5);
       
        //$overdue_prison = DB::table('overdue_hc')
        $overdue_prison = DB::table('testoverdue')
         ->select('id', 'prison_id', 'prison_name', 'prisoner_name', 'case_no', 'act_name', 'court_name')
         ->where('testoverdue.prison_id', '=', $prison_id)
         ->where('testoverdue.states', '!=', 'red')
         ->Where('testoverdue.statusid', '!=', 10)
         ->Where('testoverdue.overdue', '=', 'yes')
         //->Where('testoverdue.mydate', '>', 10)
         ->paginate(5);

        $overduePrison_count = DB::select('SELECT count(id) as totalAppeal, min(mydate) as maxDay FROM overdue_hc WHERE prison_id = '.$prison_id.' AND statusid !=10 AND mydate > 10');
        $appDetails_pendingForCC_Prison = DB::table('pendingforcc_prison')
          ->select('id', 'prison_id', 'prison_name', 'prisoner_name', 'case_no', 'act_name', 'court_name', 'states')
          ->where('pendingforcc_prison.prison_id', $prison_id)
          ->paginate(5);
        $count_incompleteApplication_Prison = DB::select('SELECT count(id) as totalAppeal, max(updated_at) as maxDate FROM pendingforcc_prison WHERE prison_id = '.$prison_id.'');


        $appDetails_appealResolved_Prison = DB::table('appealresolved_prison')
          ->select('id', 'prison_id', 'prison_name', 'prisoner_name', 'case_no', 'act_name', 'court_name')
          ->where('appealresolved_prison.prison_id', $prison_id)
          ->paginate(5);



        //dd($string);
        $appDetails_thisYear1 = DB::select('SELECT na.id, prisons.id as prison_id, prisons.name as prison_name,prisoner.prisoner_name as prisoner_name,cases.caseno as case_no, 
          law_acts.name as act_name, courts.name_en as court_name, na.privacy
                    FROM newappeals na
                    INNER JOIN prisons ON na.prisonid = prisons.id
                    INNER JOIN law_acts ON na.act_id  = law_acts.id
                    INNER JOIN courts ON na.courtid  = courts.id
                    INNER JOIN prisoner ON na.prisonerid  = prisoner.id
                    INNER JOIN cases ON cases.id = na.caseid
                    WHERE  na.created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() AND na.prisonid = "'.$prison_id.'" ');
                 
        $Details_appeal = DB::table('all_appeals')->where('id','=', $notify_appeal_id )->get();

        $send['countAppeals_byPrison']=$countAppeals_byPrison;
        $send['lastYearAppeals_byPrison']=$lastYearAppeals_byPrison;
        $send['cc_missing_count_forPrison']=$cc_missing_count_forPrison;
        $send['appDetails_pendingForCC_Prison']=$appDetails_pendingForCC_Prison;
        $send['appDetails_appealResolved_Prison']=$appDetails_appealResolved_Prison;
        $send['countAppealsResolved_byPrison']=$countAppealsResolved_byPrison;
        $send['count_incompleteApplication_Prison']=$count_incompleteApplication_Prison;

        $send['appDetails_thisYear']=$appDetails_thisYear;
        $send['overdue_prison']=$overdue_prison;
        $send['overduePrison_count']=$overduePrison_count;

        $send['appeals']=$appeals;
        $send['appDetails']=$appDetails;
        $send['district_name']=$district_name;
        $send['courts_Name']=$courts_Name;
        $send['Details_appeal']=$Details_appeal;
        $send['notify_appeal_id']=$notify_appeal_id;

        //return redirect()->back();
        return view('prisonDashboard', $send);
        // return view ('appeals.modals')->with('appeals',$appeals);
    }
    public function fetch_data(Request $request)
    {
        $prison_id = Auth::user()->prison_id;
        if ($request->ajax()) {
       
        //$overdue_prison = DB::table('overdue_hc')
        $overdue_prison = DB::table('testoverdue') // testoverdue (table name) have to be changed
        ->select('id', 'prison_id', 'prison_name','prisoner_name','case_no','act_name', 'court_name')
        ->where('testoverdue.prison_id', $prison_id)
        ->where('testoverdue.states','!=', 'red')
        //->where('overdue_hc.mydate', '>', 10 )
        ->where('testoverdue.overdue', '=', 'yes' )
        ->Where('testoverdue.statusid', '!=', 10 )
        ->paginate(5);
            return view('inc_prison.thisYearData', compact('overdue_prison'))->render();
        }
    }
    public function fetch_appealIncomplete(Request $request)
    {
        $prison_id = Auth::user()->prison_id;
        if ($request->ajax()) {
            $appDetails_pendingForCC_Prison = DB::table('pendingforcc_prison')
        ->select('id', 'prison_id', 'prison_name', 'prisoner_name', 'case_no', 'act_name', 'court_name', 'states')
        ->where('pendingforcc_prison.prison_id', $prison_id)
        ->paginate(5);
            return view('inc_prison.appealIncomplete', compact('appDetails_pendingForCC_Prison'))->render();
        }
    }
   
    public function getPrisonDB()
    {
        return view('prisonDashboard_data');
    }
    public function getDocName()
    {
        $docname = Doctype::all();
        return view('prisonDashboard',compact('docname'));
    }
    public function getAppealHistory()
    {
        $user_id = Auth::user()->id;
        $appeals = Appeal::all();
        $test = Appealstatus::all();
      
        $appDetails = DB::select('SELECT na.id, prisons.name as prison_name,prisoner.prisoner_name as prisoner_name,cases.caseno as case_no, 
                                         law_acts.name as act_name, courts.name_en as court_name, na.privacy, appealstatus.id as appsid
                                  FROM newappeals na
                                  INNER JOIN prisons ON na.prisonid = prisons.id
                                  INNER JOIN law_acts ON na.act_id  = law_acts.id
                                  INNER JOIN courts ON na.courtid  = courts.id
                                  INNER JOIN prisoner ON na.prisonerid  = prisoner.id
                                  INNER JOIN cases ON cases.id = na.caseid
                                  WHERE na.user_id = "'.$user_id.'"');
        // $accountName = DB::table('users')->select('id', 'name', 'email', 'phone')->get();
        return Datatables::of($appDetails)
            ->addColumn('action', function ($appDetails) {
                return '<a href="#" data-toggle="modal" data-target="#edit_appeal"  data-id="'.$appDetails->id.'" class="edit_appeal"><i class="material-icons">edit</i></a> '
                .'<a href="#" class="accountNameDelete delete" data-id="'.$appDetails->id.'"><i class="material-icons">delete</i></a>';
                    })
            ->make(true);
        return view('prisonDashboard_data1', $appDetails);
    }
    public function updateFrmPrison(request $request, $id)
    {
        $user_type = Auth::user()->user_type;
        //dd($user_type);
        $output = '';
        $split_Id = $id;
        Auth()->user()->unreadNotifications->where('appeal_id','=',$split_Id)->markAsRead();
        $status_name = DB::select('SELECT * FROM status');
        $appDetail = DB::select(
        'SELECT na.id, prisons.name as prison_name,prisoner.prisoner_name as prisoner_name,cases.caseno as case_no, 
                                         law_acts.name as act_name,law_section.name as section_name,courts.name_en as court_name, appealstatus.id as appsid
                                  FROM newappeals na
                                  INNER JOIN prisons ON na.prisonid = prisons.id
                                  INNER JOIN law_acts ON na.act_id  = law_acts.id
                                --   INNER JOIN law_section ON na.section_id  = law_section.id
                                LEFT JOIN act_sections ON na.id = act_sections.appeal_id
                                LEFT JOIN law_section ON law_section.id = act_sections.section_id
                                  INNER JOIN courts ON na.courtid  = courts.id
                                  INNER JOIN prisoner ON na.prisonerid  = prisoner.id
                                  INNER JOIN cases ON cases.id = na.caseid
                                  LEFT JOIN appealstatus ON appealstatus.newappeals_id = na.id 
                                  WHERE na.id = "'.$id.'"
                                  ORDER BY appealstatus.id DESC
                                  LIMIT 1'
                                  );
        // $appDetail = DB::table('newappeals')
        // ->join('prisons', 'newappeals.prisonid', '=', 'prisons.id')
        // ->join('offences', 'newappeals.offenceid', '=', 'offences.id')
        // ->join('courts', 'newappeals.courtid', '=', 'courts.id')
        // ->join('prisoner', 'newappeals.prisonerid', '=', 'prisoner.id')
        // ->join('cases', 'cases.id', '=', 'newappeals.caseid')
        // ->join('appealstatus', 'newappeals.id', '=', 'appealstatus.newappeals_id')
        // ->select('newappeals.id', 'prisons.name as prison_name', 'prisoner.prisoner_name as prisoner_name', 'cases.caseno as case_no','offences.name as offence_name','courts.name_en as court_name','appealstatus.id as appsid')
        // ->where('newappeals.id', '=', $id );
        // //->take(1);

        $documents = DB::select('SELECT doctype.docname, documents.filename
                            FROM newappeals na
                            
                                INNER JOIN documents ON na.id = documents.appealid
                                INNER JOIN doctype ON doctype.id = documents.doctypeid
                            
                                WHERE na.id="'.$id.'"');
        // print_r($documentsd);
                            
        $appStatus = DB::select('SELECT status.status_name, appealstatus.statusid
                            FROM newappeals na
                                                                                    
                            INNER JOIN appealstatus ON na.id = appealstatus.newappeals_id
                            INNER JOIN status ON appealstatus.statusid = status.id
    
                            WHERE na.id="'.$id.'"');
    
        // Custom Query for Displaying Status
        $apStatus = DB::select('SELECT S.status_name, IFNULL((SELECT statusid FROM appealstatus WHERE statusid=S.id AND newappeals_id="'.$id.'"),0) 
        AS statusid,IFNULL((SELECT remarks FROM appealstatus WHERE statusid=S.id AND newappeals_id="'.$id.'"),"Nothing") 
        AS remarks, (SELECT state FROM appealstatus WHERE statusid=S.id AND newappeals_id="'.$id.'") as stateno,(SELECT updated_at FROM appealstatus WHERE statusid=S.id AND newappeals_id="'.$id.'") as status_updated_at
        FROM status AS S');

        $last_state =  DB::select('select * from appealstatus where newappeals_id="'.$id.'" order by statusid desc limit 1');
                                                                    
        $totalrow =  DB::select('select COUNT(*) as status_count from appealstatus where newappeals_id="'.$id.'"');
        
        $total=$totalrow[0]->status_count;
        // print_r($totalrow);
        $total= $total+1;
            
        @$date1 = date_create(@$last_state[0]->updated_at);
        @$date2 = date_create(date('Y-m-d H:i:s'));
        @$diff = date_diff($date1, $date2);
        @$mydate = $diff->format("%a");
        // $apStatus = DB::select('SELECT S.status_name,
        // IFNULL((SELECT statusid FROM appealstatus WHERE
        // statusid=S.id AND newappeals_id="'.$id.'"),0)
        // AS statusid,(SELECT state FROM appealstatus WHERE
        // statusid=S.id AND newappeals_id="'.$id.'") as stateno, (SELECT updated_at FROM appealstatus WHERE
        // statusid=S.id AND newappeals_id="'.$id.'") as updated_at
        // FROM status AS S');
       
        //dd($documents);
            
        // Custom Query for Max StatusID Status
        
        foreach ($appDetail as $row) {
            
           //$showlog = DB::select('SELECT * FROM notifications WHERE appeal_id="'.$row->id.'" ORDER BY updated_at'); 
           $showlog = DB::table('notifications')->where('appeal_id',$row->id)->paginate(5); 
        
            
            $output .= '';
            //echo '<form>';
            echo '<span class="col-md-5 offset-sm-1 border border-primary">';
        echo '<legend class="modal-title w-100 font-weight-bold" style="color:black">Application Details</legend><br>';
        echo '<form action="prisonDashboard/updateFromPrison" method="post"> <input type="hidden" name="_token" value="' . csrf_token() . '">';
        echo '<div class="md-form form-group mt-2">';
        echo '<input type="hidden" class="form-control" id="appStatus_id" name="appStatus_id" value="'.$row->appsid.'">';
        // echo '<label class="label text-success font-weight-bold" for="">AppStatus ID</label></div>';
        echo '<input type="text" class="form-control" id="appeal_id" name="appeal_id" value="'.$row->id.'" readonly>';
        echo '<label class="label text-success font-weight-bold" for="">Appeal ID</label></div>';
        echo '<div class="md-form form-group mt-2">';
        echo '<input type="text" class="form-control" id="prison_name" name="prison_name" value="'.$row->prison_name.'" disabled>';
        echo '<label class="label text-success font-weight-bold" for="">Prison Name</label></div>';
        echo '<div class="md-form form-group mt-2">';
        echo '<input type="text" class="form-control" id="court_name" name="court_name" value="'.$row->court_name.'" disabled>';
        echo '<label class="label text-success font-weight-bold" for="">Sentencing Court</label></div>';
        echo '<div class="md-form form-group mt-2">';
        echo '<input type="text" class="form-control" id="prisoner_name" name="prisoner_name" value="'.$row->prisoner_name.'" disabled></div>';
        echo '<label class="label text-success font-weight-bold" for="">Prisoner Name</label>';
        echo '<div class="md-form form-group mt-2">';
        echo '<input type="text" class="form-control" id="act_name" name="act_name" value="'.$row->act_name.' '.$row->section_name.'" disabled>';
        echo '<label class="label text-success font-weight-bold" for="">Offence Details</label></div>';
        echo '<div class="md-form form-group mt-2">';
        echo '<input type="text" class="form-control" id="case_no" name="case_no" value="'.$row->case_no.'" disabled>';
        echo '<label class="label text-success font-weight-bold" for="">Case NO</label></div>';
        echo '<div class="md-form form-group mt-2">';
        echo '<label class="label text-success font-weight-bold" for="">Attachments:</label><br>';
        foreach($documents as $document){
        if($document->docname == 'BJ_Form'){
            echo'<label class="md-form form-group">';
            echo'BJ Form: </label><a href="/files/'.$document->filename.'" target="_blank">';
            echo'<span class="label label-default">'.$document->filename.'</span></a><br>';
        }
        if($document->docname == 'APP_Form'){
            echo'<label class="md-form form-group">';
            echo'Application Form: </label><a href="/files/'.$document->filename.'" target="_blank">';
            echo'<span class="label label-default ">'.$document->filename.'</span></a>';
        }
        if($document->docname == 'ACK Letter'){
            echo'<label class="md-form form-group">Application';
            echo'Application Form: </label><a href="/files/'.$document->filename.'" target="_blank">';
            echo'<span class="label label-default ">'.$document->filename.'</span></a>';
        }
       
        }
        echo '<br>';
        echo '<hr>';
if($user_type == 'user'){
    // print_r($last_state);
    // exit;
    if(@$last_state[0]->state == 'red' && @$last_state[0]->statusid == 2){
        echo '<div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" name="options" unchecked required><span class="form-check-sign"><span class="check" name="check"></span></span><h5 style="color:red;">Requested Documents have been sent *</h5></label></div>';
        echo '<button type="submit" value="updateState" name="updateState">Update</button>';
    }
} 

echo '</form>';
echo '</div>';
echo '</span>';

       echo '<span class="col-md-5 border border-primary">';
       echo '<legend class="modal-title w-100 font-weight-bold" style="color:black">Application Progress</legend><br>';
       echo '<div class="col-md-12">';
       echo '<div class="form-group">';
       echo '<div class="bs-vertical-wizard" id="appeal_details">';
       echo '<ul>';
       $k=1;
       $i=$k+1;
       foreach($status_name as $key=> $pp){
           $customLoop = $key+1;
       @$item = null;
      
       foreach($apStatus as $struct){
       if ($pp->id == $struct->statusid)
       {
       @$item = $struct;
       break;
       }
       }
       if($item){
       if($struct->stateno == 'yellowgreen'){
           echo '<li class="complete">';
           echo '<a href="#">'.$pp->status_name.'';
           echo '<i class="ico fa fa-check ico-check" style="color:green"></i>';
           echo '<span class="desc">Update on '. $struct->status_updated_at.'</span>';
           echo '<span class="desc">Remarks: '. $struct->remarks.'</span>';
           echo '</span>';
           echo '</a>';
           echo '</li>';
       }
       else{
           echo '<li class="complete">';
           echo '<a href="#">'.$pp->status_name.'';
           echo '<i class="ico fa fa-close ico-close" style="color:red"></i>';
           echo '<span class="desc">Update on '. $struct->status_updated_at.'</span>';
           echo '<span class="desc">Remarks: '. $struct->remarks.'</span>';
           echo '</span>';
           echo '</a>';
           echo '</li>';
       }
       }else
       {
        if(($mydate > 10 ) AND ($total == $customLoop) AND ((@$last_state[0]->state != 'red') AND (@$last_state[0]->state != 'todo'))) {

               echo '<li class="complete">';
               echo '<a href="#" class="text-warning">'.$pp->status_name.'';
               echo '<i class="ico fa fa-exclamation-circle" style="color:orange"></i>';
               echo '<span class="desc">Nothing Yet! Something</span>';
               echo '</a>';
               echo '</li>';
               
           }
           else{
               echo '<li>';
               echo '<a href="#">'.$pp->status_name.'';
               echo '<span class="desc">Nothing Yet!</span>';
               echo '</a>';
               echo '</li>';
           }
       }
       }
       echo '</ul>';
       echo '</div>';
       echo '</div>';
       echo '</div>';
       echo '</span>';
       echo '<span class="col-md-10 offset-sm-1 border border-info">';
       echo '<a class="btn btn-success" class="font-weight-bold" style="color:white" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">View Detail Log</a>
            <div class="collapse" id="collapseExample">
            <div class="card card-body">
            <div class="card-header card-header-success">
        ';
            foreach ($showlog as $log) {
                $logview = json_decode($log->data);
                echo '
            <p><i class="material-icons" style="vertical-align: middle;">calendar_today</i> On "'.$log->updated_at.'"</p>
            <p><i class="material-icons" style="vertical-align: middle;">check_circle</i>"'.$logview->data.'"</p>
            <hr>
            ';
            }
            echo '
            </div>
            '.$showlog->links().'
            </div>
           </div>';

            echo '</span>';
            // echo '</form>';
            
        }
    
    
}
public function updateFromPrison(Request $request ){
     
        $appealStatus_id = $request->input('appStatus_id');
        //dd($appealStatus_id);
      
                            // $appDetail = DB::table('newappeals')
                            //     ->join('prisons', 'newappeals.prisonid', '=', 'prisons.id')
                            //     ->join('offences', 'newappeals.offenceid', '=', 'offences.id')
                            //     ->join('courts', 'newappeals.courtid', '=', 'courts.id')
                            //     ->join('prisoner', 'newappeals.prisonerid', '=', 'prisoner.id')
                            //     ->join('cases', 'cases.id', '=', 'newappeals.caseid')
                            //     ->join('appealstatus', 'newappeals.id', '=', 'appealstatus.newappeals_id')
                            //     ->select('newappeals.id', 'prisons.name as prison_name', 'prisoner.prisoner_name as prisoner_name', 'cases.caseno as case_no','offences.name as offence_name','courts.name_en as court_name','appealstatus.id as appsid')
                            //     ->where('newappeals.id', '=', $appealStatus_id )
                            //     ->orderBy('appealstatus.id', 'desc')
                            //     ->take(1);
        
                                $id_state =  $appealStatus_id;
                                $update_State = App\Appealstatus::find($id_state);
                                $update_State->state = 'todo';
                                $update_State->save();

                                 /*-----------------Notification From Prison--------------------------------------- */

                                    $appl = DB::table('newappeals')->where('id',$request->input('appeal_id'))->first(); // Get Appeal ID
                                    
                                    $casename = DB::table('cases')->where('id',$appl->caseid)->first(); //Get caseId from Appeals Table
                                    
                                    $st_name = DB::table('status')->where('id',2)->first(); //Get StatusId
                                    $caseno = $casename->caseno; 
                                    //$msg='Update : '.$st_name->status_name.' (ON '.$casename->caseno.')';
                                    $msg = 'Requested Document Has Been Sent'.'(ON '.$casename->caseno.')';
                                    $arr=array('data'=> $msg,'appeal_id'=>$appl->id,'case_id'=>$caseno);
                                    
                                    $applToUser = DB::table('newappeals')->where('id',$appl->id)->select('appeals_to_courtid')->first();
                                    //dd($applToUser->appeals_to_courtid);
                                    User::find($applToUser->appeals_to_courtid)->notify(new jappNotification($arr));

    
                                Alert::success('success', 'Updated Successfully!!');

        return redirect('prisonDashboard'); //->with('success','Updated Successfully!!');
}
public function search(Request $request ){
    //if(!(isset($request))){ 
        if (isset($request->search)){
            $search = $request->search;
            //dd($search);
            $appDetails = DB::table('newappeals AS na')
            ->join('prisons', 'na.prisonid', '=', 'prisons.id')
            ->join('law_acts', 'na.act_id', '=', 'law_acts.id')
            ->join('courts', 'na.courtid', '=', 'courts.id')
            ->join('prisoner', 'na.prisonerid', '=', 'prisoner.id')
            ->join('cases', 'cases.id', '=', 'na.caseid')
    
            ->select('na.id', 'prisons.name AS prison_name','prisoner.prisoner_name AS prisoner_name','cases.caseno AS case_no', 
            'law_acts.name AS act_name', 'courts.name_en AS court_name', 'na.privacy','prisons.id AS prison_id')
            ->where('na.id', 'like', '%'.$search.'%')
            ->orWhere('prisons.name', 'like', '%'.$search.'%')
            ->orWhere('cases.caseno', 'like', '%'.$search.'%')
            ->paginate(10);
            return view('hcDetails',['appDetails' => $appDetails]);
        }
    
        
    else{
        return redirect('hcDetails')->with('error','Nothing Found!!');

    }
}
public function testedit(Request $request){
    //$search = $id;
    $Details_appeal = DB::table('all_appeals')->where('id','=', $request->id)->get();
    $value = $request->session()->get('key');
    echo $value;

    // $Details_appeal = DB::table('newappeals AS na')
    // ->join('prisons', 'na.prisonid', '=', 'prisons.id')
    // ->join('law_acts', 'na.act_id', '=', 'law_acts.id')
    // ->join('courts', 'na.courtid', '=', 'courts.id')
    // ->join('prisoner', 'na.prisonerid', '=', 'prisoner.id')
    // ->join('cases', 'cases.id', '=', 'na.caseid')

    // ->select('na.id', 'prisons.name AS prison_name','prisoner.prisoner_name AS prisoner_name','cases.caseno AS case_no', 
    // 'law_acts.name AS act_name', 'courts.name_en AS court_name', 'na.privacy','prisons.id AS prison_id')
    // ->where('na.id', '=', $search);
    // ->orWhere('prisons.name', 'like', '%'.$search.'%')
    // ->orWhere('cases.caseno', 'like', '%'.$search.'%')
    // ->paginate(10);
    return view('inc_hc.editAppeals',['Details_appeal' => $Details_appeal]);
}
public function searchbyID( Request $request ){
  
    if (isset($request->search)){
        $search = $request->search;
        
        //dd($search);
        $appDetails = DB::table('newappeals AS na')
            ->join('prisons', 'na.prisonid', '=', 'prisons.id')
            ->join('law_acts', 'na.act_id', '=', 'law_acts.id')
            ->join('courts', 'na.courtid', '=', 'courts.id')
            ->join('prisoner', 'na.prisonerid', '=', 'prisoner.id')
            ->join('cases', 'cases.id', '=', 'na.caseid')
    
            ->select(
                'na.id',
                'prisons.name AS prison_name',
                'prisoner.prisoner_name AS prisoner_name',
                'cases.caseno AS case_no',
                'law_acts.name AS act_name',
                'courts.name_en AS court_name',
                'na.privacy',
                'prisons.id AS prison_id'
            )
            ->where('na.id', 'like', '%'.$search.'%')
            // ->orWhere('prisons.name', 'like', '%'.$search.'%')
            // ->orWhere('cases.caseno', 'like', '%'.$search.'%')
            ->paginate(10);
        return view('appeals.hcDetails', ['appDetails' => $appDetails]);
    }
    else{
        return redirect('appeals.hcDetails')->with('error','Nothing Found!!');
    }
    // } else {
    //     return redirect('hcDetails')->with('error', 'Nothing Found!!');
    //}
}

    public function hc_appeal_details(){

        return 'Nothing' ;
    }

        public function getDetail()
        {
          $user_id = Auth::user()->id;
          $appeals = Appeal::all();
          $appDetails = DB::table('newappeals AS na')
          ->select('na.id','cases.caseno AS case_no', 'prisons.name AS prison_name')

          ->join('prisons', 'na.prisonid', '=', 'prisons.id')
          ->join('law_acts', 'na.act_id', '=', 'law_acts.id')
          ->join('courts', 'na.courtid', '=', 'courts.id')
          ->join('prisoner', 'na.prisonerid', '=', 'prisoner.id')
          ->join('cases', 'cases.id', '=', 'na.caseid')
          ->get();

               return Datatables::of($appDetails)
                ->addColumn('status', function ($appDetails) {
                    
                      $apStatus = Status::all();
                      foreach($apStatus as $ap)
                    return 'Hi ' . $ap->id. '!';
                })
                ->addColumn('action', function ($appDetails) {
                    return '<a href="#" data-toggle="modal" data-target="#edit_accountName"  data-id="'.$appDetails->id.'" class="edit_accountName"><i class="material-icons">edit</i></a> '
                    .'<a href="#" class="accountNameDelete delete" data-id="'.$appDetails->id.'"><i class="material-icons">delete</i></a>';
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->rawColumns(['delete' => 'delete','action' => 'action'])
                ->make(true);
        }

        public function testonly()
        {
           
          $status_name = Status::all();
            $user_id = Auth::user()->id;
          $appeals = Appeal::all();
          $appDetails = DB::table('newappeals AS na')
          ->select('na.id','cases.caseno AS case_no', 'prisons.name AS prison_name')

          ->join('prisons', 'na.prisonid', '=', 'prisons.id')
          ->join('law_acts', 'na.act_id', '=', 'law_acts.id')
          ->join('courts', 'na.courtid', '=', 'courts.id')
          ->join('prisoner', 'na.prisonerid', '=', 'prisoner.id')
          ->join('cases', 'cases.id', '=', 'na.caseid')
          ->get();
            
            foreach($appDetails as $appeal){
                $data= "<ol class='etapier'>";
            
        $apStatus = DB::select('SELECT S.status_name,
        IFNULL((SELECT statusid FROM appealstatus WHERE
        statusid=S.id AND newappeals_id="'.$appeal->id.'"),0)
        AS statusid,(SELECT state FROM appealstatus WHERE
        statusid=S.id AND newappeals_id="'.$appeal->id.'") as stateno, (SELECT updated_at FROM appealstatus WHERE
        statusid=S.id AND newappeals_id="'.$appeal->id.'") as updated_at
        FROM status AS S');

        $last_state =  DB::select('select * from appealstatus where newappeals_id="'.$appeal->id.'" order by statusid desc limit 1');
        
        $totalrow =  DB::select('select COUNT(*) as status_count from appealstatus where newappeals_id="'.$appeal->id.'"');
        
        $total=$totalrow[0]->status_count;
      // print_r($totalrow);
        $total= $total+1;
            
            @$date1 = date_create(@$last_state[0]->updated_at);
            @$date2 = date_create(date('Y-m-d H:i:s'));
            @$diff = date_diff(@$date1,@$date2);
            @$mydate = $diff->format("%a");

       
        foreach($status_name as $s_name){

       
        $item = null;
       
       
        foreach($apStatus as $key=>$struct){
        
        if ($s_name->id == $struct->statusid){
        $item = $struct;
        break;
       
        }
        }
        if($item){
        echo "<li>'".$s_name->status_name."'</li>";
             
        }else{
        
        if(($mydate > 10 ) AND ($total == @$loop->iteration) AND (@$last_state[0]->state != 'red') ){
            echo "<li>'".$s_name->status_name."'</li>";
           
       }else{
        
        echo "<li>Dummy Text</li>";

         
          }
      }
  }


  echo "</ol>";
}
$send['data']=$data;
return view('test');   
 }

 public function showLog(){

    $logview = DB::table('notifications');
 }



 public function dynamicCourtsList($district_id){
    $courts_Name = DB::Select('SELECT id,name_en FROM courts WHERE disid = "'.$district_id.'"');
    echo json_encode($courts_Name);
 }
 public function dynamicSectionList($act_id){
    $sections = DB::Select('SELECT id,name FROM law_section WHERE act_id = "'.$act_id.'"');
    echo json_encode($sections);
 }
    public function prisonHistory(Request $request){
        $id =  $request->appeal_id; 
       $mydata = DB::Select('SELECT case_no,prison_id,appeal_no,ph.updated_at,prisoner.prisoner_name as prname,prisons.name prison_Name FROM prisoner_transfer_history ph
       LEFT JOIN prisons ON prisons.id = ph.prison_id
       LEFT JOIN cases ON cases.id = ph.case_no
       LEFT JOIN prisoner ON prisoner.id = ph.prisoner_id WHERE appeal_no = "'.$id.'"');
        // $mydata = DB::table('prisoner_transfer_history ph')
        // ->join('prisons', 'ph.prison_id', '=', 'prisons.id')
        // ->join('prisoner', 'ph.prisoner_id', '=', 'prisoner.id')
        // ->join('cases', 'cases.id', '=', 'ph.case_no')
        // ->select('ph.id', 'prisons.name AS prison_name','prisoner.prisoner_name AS prisoner_name','cases.caseno AS case_no','prisons.id AS prison_id')
        // ->where('ph.appeal_id','=', $id);
        if(!empty($mydata)){
            echo'<table class="table-bordered display nowrap dtr-inline table-responsive" style="width:100%">';
            echo'<thead class="text-primary">';
            echo'<th style="white-space: nowrap;">Prison ID</th>';
            echo'<th style="white-space: nowrap;">Prison Name</th>';
            echo'<th style="white-space: nowrap;">Case NO.</th>';
            echo'<th style="white-space: nowrap;">Updated_At</th>';
            echo'</thead>';
            echo'<tbody style="white-space: nowrap;">';
            foreach ($mydata as $data){
                echo '';
                echo'<tr>';
                echo'<td>'.$data->prison_id.'</td></td>';
                echo'<td>'.$data->prison_Name.'</td>';
                echo'<td>'.$data->case_no.'</td>';
                echo'<td>'.$data->updated_at.'</td>';
                echo'</tr>';
                }
                echo'</tbody>';
                echo'</table>';
        }
        else{
            echo'This is the First Prison';
        }

       
    }  
    public function all_sections(){
        $all_sections = DB::Sections();
    }    

}
