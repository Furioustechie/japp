<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appeal;
use App\Doctype;
use App\Document;
use App\Application;
use App\Newappeal;
use App\Status;
use App\Appealstatus;
use App\User;
use DB;
use Notfiable;
use Gate;
use App\Notifications\jappNotification;
use App\Notification;
use Carboon\Carbon;

class AppealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appeals = Appeal::all();
        $test = Appealstatus::all();
        //$document = Document::all();
        //$doctype = Doctype::all();
        $appDetails = DB::select('SELECT na.id, prisons.name as prison_name,prisoner.prisoner_name as prisoner_name,cases.caseno as case_no, 
                                         offences.name as offence_name, courts.name_en as court_name, na.privacy
                                  FROM newappeals na
                                  INNER JOIN prisons ON na.prisonid = prisons.id
                                  INNER JOIN offences ON na.offenceid  = offences.id
                                  INNER JOIN courts ON na.courtid  = courts.id
                                  INNER JOIN prisoner ON na.prisonerid  = prisoner.id
                                  INNER JOIN cases ON cases.id = na.caseid');
          

          
        $send['appeals']=$appeals;
        $send['appDetails']=$appDetails;
        return view ('appeals.index',$send)->with('appeals',$appeals);
        return view ('appeals.modals')->with('appeals',$appeals);
        
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
                    $this->validate($request,[
        
                            'prisoner_no' => 'required|max:255',
                            'prisoner_name' => 'required'
                            ]);
                                $document = Document::all();
                                $doctype = Doctype::all();
                                    
                                $data = array(); 
                                $dtype = array();
             
                        $nextId = DB::table('newappeals')->max('id');
                        $nextId1 = DB::table('newappeals')->max('id')+1; //Increment ID for documents table
                        $files = $request->file('filename');
                        if($request->hasFile('filename'))
                        {
                            $data=array(); 
                            foreach ($files as $file) {
                            $name=$file->getClientOriginalName();
                                $file->move(public_path().'/files/', $name);  
                            $data[] = $name;
                            }
                        }
                
                        $appeal= new Appeal();
                        $document= new Document();
                        $doctype= new Doctype();
                        $appeal->caseno = $request->input('caseno');
                        
                        // array to save doctype and filname

                        $typeid = $request->input('doctype'); //doctype ID
                        $result = array();
                        $values = array($typeid, $data);
                        
                        foreach($typeid as $index => $key) {
                            $t = array();
                            foreach($values as $value) {
                                $t[] = $value[$index];
                            }
                            $result[$key]  = $t;
                        }// end of doctype
                     
                        
                                                      
                            
                        
                        //Prisoner Table Data Insertion Block
                        DB::table('prisoner')->insert([
                        ['prisoner_no' => $request->input('prisoner_no'), 
                        'prisoner_name' => $request->input('prisoner_name'), 
                        'prisoner_gender' => $request->input('prisoner_gender'), 
                            'created_at' => date('Y-m-d h:s:i'),
                            'updated_at' => date('Y-m-d h:s:i')]
                        ]);
                        // Cases Table Data Insertion Block
                        $prisonerNxtId = DB::table('prisoner')->max('id'); // For PRISONER Tables Prisonerid Column
                        DB::table('cases')->insert([
                            ['caseno' => $request->input('prisoner_no'), 
                                'created_at' => date('Y-m-d h:s:i'),
                                'updated_at' => date('Y-m-d h:s:i')]
                        ]);
                        // NewAppeals Table Data Insertion Block
                        $casesNxtId = DB::table('cases')->max('id'); // For NEWAPPEALS Tables caseid Column
                        DB::table('newappeals')->insert([
                            ['prisonid' => $request->input('prisonid'), 
                            'prisonerid' => $prisonerNxtId, 
                            'courtid' => $request->input('sentencingcourt'), 
                            'caseid' => $casesNxtId, 
                            'offenceid' => $request->input('offencetype'),
                            'sentenceid' => $request->input('sentencetype'), 
                            'resultsid' => 1,
                            'created_at' => date('Y-m-d h:s:i'),
                            'updated_at' => date('Y-m-d h:s:i')]
                        ]);
                        // Documents Table Data Insertion Block
                        foreach($result as $r){                     //Loop for Doctype and Filename Column
                            DB::table('documents')->insert([
                                ['appealid' => $nextId1, 
                                'doctypeid' => $r[0], 
                                'attached' => '1', 
                                'filename' => $r[1].time(),
                                'created_at' => date('Y-m-d h:s:i'),
                                'updated_at' => date('Y-m-d h:s:i')]
                            ]);
                            
                            }
                        //     
                      
                /*-----------------Notification From Prison To High Court--------------------------------------- */
                        $prison_name = DB::table('prisons')->where('id',$request->input('prisonid'))->first(); //Get Prison ID
                        $msg='New Appeals From '.$prison_name->name; // Get Prison Name
                        $arr=array('data'=> $msg);
                         User::find(3)->notify(new jappNotification($arr));
                        //$appeal->save();  Eloquant Insert
                        //$this->notify(new jappNotification());
                /*-----------------End of Notification From Prison To High Court--------------------------------------- */
                         return redirect('appealForm')->with('success', 'Application Submitted'); //submit application
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
      //  dd('update');
        //
        if($request->hasFile('file_bj')){

            //
            $validatedData = $request->validate([
                //'prisonerno' => 'required',
                'file_app' => 'mimes:jpeg,png,jpg,pdf|nullable|max:1999'
       ]);
        } else{

            $this->validate($request,[
        
                'rejectgrant' => 'required'
            ]);
        }
        $appeals = Newappeal::find($id);
       
        //$applStatus = DB::table('appealstatus'); // For PRISONER Tables Prisonerid Column
        if ($request->has('courts_submit')) {
            $has_status_name = DB::table('appealstatus')->where(array('statusid'=>$request->input('status_id'),'newappeals_id'=>$request->input('appeal_id')))->first();
            if(empty($has_status_name)){
                 DB::table('appealstatus')->insert([
                     ['statusid' => $request->input('status_id'), 
                        'newappeals_id' => $request->input('appeal_id'),
                         'created_at' => date('Y-m-d h:s:i'),
                            'updated_at' => date('Y-m-d h:s:i')]
        ]);
       // $appeals->caseno = $request->input('caseno');
        // $appeals->caseno = $request->input('caseno');
        // $appeals->caseno = $request->input('caseno');
        // $appeals->caseno = $request->input('caseno');
        // $appeals->caseno = $request->input('caseno');
        //$appeals->isgrant = $request->has('options1');
       // $appeals->remarks = $request->input('rejectgrant');
       // $appeals->isgrant = $request->has('options1');

      /*-----------------Notification From High Court To Prison--------------------------------------- */
        $appl = DB::table('newappeals')->where('id',$request->input('appeal_id'))->first(); // Get Appeal ID
        $casename = DB::table('cases')->where('id',$appl->caseid)->first(); //Get caseId from Appeals Table
        $st_name = DB::table('status')->where('id',$request->input('status_id'))->first(); //Get StatusId
        $msg='Update : '.$st_name->status_name.' (ON '.$casename->caseno.')';
        $arr=array('data'=> $msg);
        User::find()->notify(new jappNotification($arr));
     /*-----------------End of Notification From High Court To Prison--------------------------------------- */

        return redirect('appeals')->with('success','Application Updated Successfully');
            }
        
        else{
            return redirect('appeals')->with('error','Already Exists');
        }

    }
       // $appeals->save();
        //return redirect('appeals')->with('success','Application Updated');
        $test1 = Newappeals::find($id);
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
            
                        return redirect('appeals.index',$send)->with('appealstatus',$test,$lastStatus);
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
   
   
   
    














}
