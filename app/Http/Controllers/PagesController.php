<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;
use App\Appeal;
use App\User;
use App\Application;
use App\Doctype;
use App\Document;
use App\Newappeal;
use App\Status;
use App\Appealstatus;
use App\Sections;
use App\Acts;
use DB;
use Gate;
use App\Notifications\jappNotification;
use App\Notification;
use Carboon\Carbon;
use Illuminate\Support\Facades\Redirect;
//use App\AppDetails;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function services(){
        return view('services');
    }
    public function form(){
        return view('form');
    }
    // public function __construct()
    // {
    //     // Closure as callback
    //     $this->beforeFilter(function(){
    //         if(!Auth::check()) {
    //             return 'no';
    //         }
    //     });

    //     // or register filter name
    //     // $this->beforeFilter('auth');
    //     //
    //     // and place this to app/filters.php
    //     // Route::filter('auth', function()
    //     // {
    //     //  if(!Auth::check()) {
    //     //      return 'no';
    //     //  }
    //     // });
    // }

    public function dashboard(Request $request){
        if(!Gate::allows('isAdmin')){
            abort(401,'You are not authorized here!');
        }

        $notify_appeal_id = $request->appsid;
    
    
    
        // $myvar = '';
        // if($request){
        //     $myvar =$request->appsid;
        // }
        
        //App::setLocale($lang);
       // Session::put('locale',$lang);
        $appeals = Appeal::all();

        //$totalAppeals = Newappeal::select((count('id')) as 'total', max('created_at') as 'maxDate')->where('id', '>', 0)->get();
        $countAppeals = DB::select('SELECT count(id) as total, max(created_at) as maxDate FROM newappeals WHERE id > 0');
        //$countAppeals = $totalAppeals->count();
        //$lastYearAppeals = DB::select('SELECT count(id) as totalAppeal FROM newappeals WHERE created_at  AND DATE_SUB(NOW(), INTERVAL 1 MONTH)');
        $overdue_count = DB::select('SELECT count(id) as totalAppeal, min(mydate) as maxDay FROM overdue_hc WHERE statusid !=10 AND mydate > 10');

        $appealResolved = DB::select('SELECT count(statusid) as totalAppealResolved,max(updated_at) as maxDate FROM appealstatus WHERE statusid = (SELECT id FROM status ORDER BY id DESC limit 1)');
        $overDue = DB::select('SELECT vid FROM takeaction');
        $PendingForAction = DB::select('SELECT id, date_of_sentence,datatotakeaction.caseno,name FROM datatotakeaction');
        $data_PieChart = DB::select('SELECT prisoner_name,prisoner_gender, dob, prisoner.id FROM prisoner   JOIN   newappeals ON newappeals.id = prisoner.id');
        $totalOnhearing = DB::select('SELECT statusid FROM totalonhearing');
        $PendingOnHearing = DB::select('SELECT id, date_of_sentence,onhearingdetails.caseno,name FROM onhearingdetails');
        $totalsByPrison = DB::select('SELECT name, prisonsId, totalsByPrison FROM totalappealbyprison');
        $totalByStatus = DB::select('SELECT status_name,totalAppeals FROM appealsbystatus');
        $totalByGender = DB::select('SELECT status_name,totalAppeals FROM appealsbystatus');
        $pieChartBySentences = DB::select('SELECT sentence_name, totalAppeals FROM appealsbysentence');
        //dd($pieChartBySentences);
        // foreach($appealStates as $aps){
// $output = array(
//     'statusid' => $aps->statusid,
//      'newappeals_id' => $aps->newappeals_id,
//     'state' => $aps->state
// );
 //dd($json_appealStates);
// }

/* ------------- Data format for charts ---------------- */
$pieChartBySentence="";
foreach($pieChartBySentences as $pieBySentence){

    $pieChartBySentence.= "['".$pieBySentence->sentence_name."',".$pieBySentence->totalAppeals."],";
}

$data="";
foreach($data_PieChart as $dataPie){

    $data.= "['".$dataPie->prisoner_name."','".$dataPie->prisoner_gender."',".$dataPie->dob.",".$dataPie->id."],";
}
$bar_chart="";
foreach ($totalsByPrison as $bar_data) {
    $bar_chart.="['". $bar_data->name."',". $bar_data->totalsByPrison."],";
}
$appealsByStatus = "";
foreach($totalByStatus as $byStatus){
    $appealsByStatus.="['". $byStatus->status_name."',". $byStatus->totalAppeals."],";
}


/* ------------- Data format for charts ---------------- */      
        $cc_missing = DB::select('select newappeals.id,newappeals.date_of_sentence,cases.caseno,prisons.name
                        FROM newappeals 
                        INNER JOIN cases ON newappeals.caseid = cases.id
                        INNER JOIN documents ON newappeals.id = documents.appealid 
                        INNER JOIN prisons ON newappeals.prisonid = prisons.id 
                        WHERE newappeals.id IN (select appealid from documents where doctypeid NOT IN (3))'
                     );
        $incomplete = DB::table('hc_incomplete')->get();

                     $cc_missing_count = DB::select('select COUNT(cases.caseno) as total_cc_missing
                     FROM newappeals 
                     INNER JOIN cases ON newappeals.caseid = cases.id
                     INNER JOIN documents ON newappeals.id = documents.appealid 
                     WHERE newappeals.id IN (select appealid from documents where doctypeid NOT IN (3))');
        
        
         $barlist = DB::table('appeals')
        ->select('gender')
        ->groupBy('gender')
        ->get();
        //return response()->json($barlist);
        
        $barlist1 = DB::table('appeals')
        ->select(DB::raw('count(*) as total,gender'))
        ->groupBy('gender')
        ->get();
        
        $sentence = DB::table('appeals')
        ->select(DB::raw('count(*) as stotal,sentencetype'))
        ->groupBy('sentencetype')
        ->get();

        // dd($sentence);
    
    
        //---------------Genderwise data ---------------//
    
        $gen="";
        $tot="";

        foreach($barlist1 as $bar){
            $gen.="'".$bar->gender."',";
            $tot.="'".$bar->total."',";
        }
        
        $gen= substr($gen,0, -1);
        $tot= substr($tot,0, -1);        


         //---------------SentenceType data ---------------//
    
        $st="";
        foreach($sentence as $sent){
            $st.="'".$sent->sentencetype."',";
        }
        $st= substr($st,0, -1);

        $sttotal="";
        foreach($sentence as $sent){
            $sttotal.="'".$sent->stotal."',";
        }
        $sttotal= substr($sttotal,0, -1);

        $appStat = DB::select('SELECT na.id, prisons.name,prisoner.prisoner_name as prisoner_name, law_acts.name as act_name, courts.name_en as court_name
        FROM newappeals na
        INNER JOIN prisons ON na.prisonid = prisons.id
          INNER JOIN law_acts ON na.act_id  = law_acts.id
          INNER JOIN courts ON na.courtid  = courts.id
          INNER JOIN documents ON na.id = documents.appealid
          INNER JOIN prisoner ON na.prisonerid  = prisoner.id');
    $appealStates = DB::select('SELECT statusid, newappeals_id, state FROM appealstatus ');

    // $appDetails_allRecords = DB::table('appdetails')->orderBy('id', 'asc')->paginate(5);
    $appDetails_allRecords = DB::table('all_appeals')->orderBy('id', 'desc')->paginate(10);


    $overdue_hc = DB::table('overdue_hc')
    ->select('id', 'prison_id', 'prison_name','prisoner_name','case_no','act_name', 'court_name')
    ->where('overdue_hc.mydate', '>', 10 )
    ->Where('overdue_hc.statusid', '!=', 10 )
    ->paginate(5);

    $incompleteApplication_ForHC = DB::table('pendingforcc_prison')
    ->select('id', 'prison_id', 'prison_name','prisoner_name','case_no','act_name', 'court_name')
    //->where('pendingforcc_prison.prison_id', $prison_id )
    ->paginate(5);
    $count_incompleteApplication_ForHC = DB::select('SELECT count(id) as totalIncompleteAppeal, max(updated_at) as maxDate FROM pendingforcc_prison');
    $appDetails_appealResolved_ForHC = DB::table('appealresolved_prison')
    ->select('id', 'prison_id', 'prison_name','prisoner_name','case_no','act_name', 'court_name')
    //->where('appealresolved_prison.prison_id', $prison_id )
    ->paginate(5);
    // if($request->ajax()){
    //     dd($request->id);
    // }
    
    //$myvar = $request->id;
    $Details_appeal = DB::table('all_appeals')->where('id','=', $notify_appeal_id )->get();
    

    // dd($Details_appeal);

        $send['count']=$countAppeals;
        //$send['count1']=$lastYearAppeals;
        $send['overdue_count']=$overdue_count;
        $send['totalappealResolved'] = $appealResolved;
        $send['gender']=$gen;
        $send['total']=$tot;
        $send['sentype']=$st;
        $send['stotal']=$sttotal;
        $send['appealStatus']=$appStat;
        $send['appeals'] = $appeals;
        $send['cc_missing']=$cc_missing;
        $send['incomplete']=$incomplete;
        $send['cc_missing_count']=$cc_missing_count;
        $send['overDue']=$overDue; 
        $send['PendingForAction']=$PendingForAction; 
        $send['data_PieChart']=$data_PieChart;
        $send['totalOnhearing']=$totalOnhearing;
        $send['PendingOnHearing']=$PendingOnHearing;
        $send['totalsByPrison']=$totalsByPrison;
        $send['data']=$data;
        $send['bar_chart']=$bar_chart;
        $send['appealsByStatus']=$appealsByStatus;
        $send['pieChartBySentence']=$pieChartBySentence;
        $send['overdue_hc']=$overdue_hc;
        $send['incompleteApplication_ForHC']=$incompleteApplication_ForHC;
        $send['appDetails_appealResolved_ForHC']=$appDetails_appealResolved_ForHC;
        $send['count_incompleteApplication_ForHC']=$count_incompleteApplication_ForHC;
        $send['appDetails_allRecords']=$appDetails_allRecords;
        $send['Details_appeal']=$Details_appeal;
        $send['notify_appeal_id']=$notify_appeal_id;


        $send['user'] = User::find(1);
       // User::find(1)->notify(new jappNotification);
      
       if(!empty($notify_appeal_id)){
       $notification_Records = DB::table('all_appeals')->select('id')->where('id','=',$notify_appeal_id)->get();
       $split_caseId = $notification_Records[0]->id;
       Auth()->user()->unreadNotifications->where('appeal_id','=',$split_caseId)->markAsRead();
       //return view ('dashboard', $send)->with('appeals',$appeals);
       //return redirect('dashboard')->with('status','Information Updated!');
   }
    return view ('dashboard', $send)->with('appeals',$appeals);
   
    }
    public function notificationUpdate(Request $request){
        $case_id = $request->case_no;
        //Test case for update from notification
            $notification_Records = DB::table('all_appeals')->where('case_no','=',$case_id)->get();
            $split_caseno = $notification_Records[0]->case_no;
            echo $split_caseno;
            Auth()->user()->unreadNotifications->where('case_id','=',$split_caseno)->markAsRead();
            //return redirect()->back();

    //end test case
    }
    public function dashboardStats(){
        if(!Gate::allows('isAdmin')){
            abort(401,'You are not authorized here!');
        }
        $appeals = Appeal::all();

        $totalAppeals = Newappeal::where('id', '>', 0)->get();
        $countAppeals = $totalAppeals->count();
        $overdue_count = DB::select('SELECT count(id) as totalAppeal FROM overdue_hc WHERE statusid !=10 AND mydate > 10');

        $appealResolved = DB::select('SELECT count(statusid) as totalAppealResolved, max(updated_at) as maxDate FROM appealstatus WHERE statusid = (SELECT id FROM status ORDER BY id DESC limit 1)');
        $overDue = DB::select('SELECT vid FROM takeaction');
        $PendingForAction = DB::select('SELECT id, date_of_sentence,datatotakeaction.caseno,name FROM datatotakeaction');
        $data_PieChart = DB::select('SELECT prisoner_name,prisoner_gender, dob, prisoner.id FROM prisoner   JOIN   newappeals ON newappeals.id = prisoner.id');
        $totalOnhearing = DB::select('SELECT statusid FROM totalonhearing');
        $PendingOnHearing = DB::select('SELECT id, date_of_sentence,onhearingdetails.caseno,name FROM onhearingdetails');
        $totalsByPrison = DB::select('SELECT name, prisonsId, totalsByPrison FROM totalappealbyprison');
        $totalByStatus = DB::select('SELECT status_name,totalAppeals FROM appealsbystatus');
        $totalByGender = DB::select('SELECT status_name,totalAppeals FROM appealsbystatus');
        $pieChartBySentences = DB::select('SELECT sentence_name, totalAppeals FROM appealsbysentence');
      
        /* ------------- Data format for charts ---------------- */
        $pieChartBySentence="";
        foreach($pieChartBySentences as $pieBySentence){

            $pieChartBySentence.= "['".$pieBySentence->sentence_name."',".$pieBySentence->totalAppeals."],";
        }

        $data="";
        foreach($data_PieChart as $dataPie){

            $data.= "['".$dataPie->prisoner_name."','".$dataPie->prisoner_gender."',".$dataPie->dob.",".$dataPie->id."],";
        }
        $bar_chart="";
        foreach ($totalsByPrison as $bar_data) {
            $bar_chart.="['". $bar_data->name."',". $bar_data->totalsByPrison."],";
        }
        $appealsByStatus = "";
        foreach($totalByStatus as $byStatus){
            $appealsByStatus.="['". $byStatus->status_name."',". $byStatus->totalAppeals."],";
        }


/* ------------- Data format for charts ---------------- */      
        $cc_missing = DB::select('select newappeals.id,newappeals.date_of_sentence,cases.caseno,prisons.name
                        FROM newappeals 
                        INNER JOIN cases ON newappeals.caseid = cases.id
                        INNER JOIN documents ON newappeals.id = documents.appealid 
                        INNER JOIN prisons ON newappeals.prisonid = prisons.id 
                        WHERE newappeals.id IN (select appealid from documents where doctypeid NOT IN (3))'
                     );
        $incomplete = DB::table('hc_incomplete')->get();

                     $cc_missing_count = DB::select('select COUNT(cases.caseno) as total_cc_missing
                     FROM newappeals 
                     INNER JOIN cases ON newappeals.caseid = cases.id
                     INNER JOIN documents ON newappeals.id = documents.appealid 
                     WHERE newappeals.id IN (select appealid from documents where doctypeid NOT IN (3))');
        
        
         $barlist = DB::table('appeals')
        ->select('gender')
        ->groupBy('gender')
        ->get();
        //return response()->json($barlist);
        
        $barlist1 = DB::table('appeals')
        ->select(DB::raw('count(*) as total,gender'))
        ->groupBy('gender')
        ->get();
        
        $sentence = DB::table('appeals')
        ->select(DB::raw('count(*) as stotal,sentencetype'))
        ->groupBy('sentencetype')
        ->get();

        // dd($sentence);
    
    
        //---------------Genderwise data ---------------//
    
        $gen="";
        $tot="";

        foreach($barlist1 as $bar){
            $gen.="'".$bar->gender."',";
            $tot.="'".$bar->total."',";
        }
        
        $gen= substr($gen,0, -1);
        $tot= substr($tot,0, -1);        


         //---------------SentenceType data ---------------//
    
        $st="";
        foreach($sentence as $sent){
            $st.="'".$sent->sentencetype."',";
        }
        $st= substr($st,0, -1);

        $sttotal="";
        foreach($sentence as $sent){
            $sttotal.="'".$sent->stotal."',";
        }
        $sttotal= substr($sttotal,0, -1);

        $appStat = DB::select('SELECT na.id, prisons.name,prisoner.prisoner_name as prisoner_name, law_acts.name as act_name, courts.name_en as court_name
        FROM newappeals na
        INNER JOIN prisons ON na.prisonid = prisons.id
          INNER JOIN law_acts ON na.act_id  = law_acts.id
          INNER JOIN courts ON na.courtid  = courts.id
          INNER JOIN documents ON na.id = documents.appealid
          INNER JOIN prisoner ON na.prisonerid  = prisoner.id');


    $overdue_hc = DB::table('overdue_hc')
    ->select('id', 'prison_id', 'prison_name','prisoner_name','case_no','act_name', 'court_name')
    ->where('overdue_hc.mydate', '>', 10 )
    ->Where('overdue_hc.statusid', '!=', 10 )
    ->paginate(5)
    ->setPageName('other_page');

    $incompleteApplication_ForHC = DB::table('pendingforcc_prison')
    ->select('id', 'prison_id', 'prison_name','prisoner_name','case_no','act_name', 'court_name')
    //->where('pendingforcc_prison.prison_id', $prison_id )
    ->paginate(5);
    $count_incompleteApplication_ForHC = DB::table('pendingforcc_prison')->count();

    $appDetails_appealResolved_ForHC = DB::table('appealresolved_prison')
    ->select('id', 'prison_id', 'prison_name','prisoner_name','case_no','act_name', 'court_name')
    //->where('appealresolved_prison.prison_id', $prison_id )
    ->paginate(5);

    $queryAll = DB::select('SELECT prisons.name, count(newappeals.id) TotalAppeals, districts.name as districtName, divisions.name as divisionName FROM `prisons` 
                            Left JOIN newappeals ON newappeals.prisonid = prisons.id
                            INNER JOIN districts ON districts.id = prisons.disid
                            INNER JOIN divisions ON divisions.id = districts.divid
                            GROUP BY prisons.name');
 
        $send['count']=$countAppeals;
        $send['overdue_count']=$overdue_count;
        $send['totalappealResolved'] = $appealResolved;
        $send['gender']=$gen;
        $send['total']=$tot;
        $send['sentype']=$st;
        $send['stotal']=$sttotal;
        $send['appealStatus']=$appStat;
        $send['appeals'] = $appeals;
        $send['cc_missing']=$cc_missing;
        $send['incomplete']=$incomplete;
        $send['cc_missing_count']=$cc_missing_count;
        $send['overDue']=$overDue; 
        $send['PendingForAction']=$PendingForAction; 
        $send['data_PieChart']=$data_PieChart;
        $send['totalOnhearing']=$totalOnhearing;
        $send['PendingOnHearing']=$PendingOnHearing;
        $send['totalsByPrison']=$totalsByPrison;
        $send['data']=$data;
        $send['bar_chart']=$bar_chart;
        $send['appealsByStatus']=$appealsByStatus;
        $send['pieChartBySentence']=$pieChartBySentence;
        $send['overdue_hc']=$overdue_hc;
        $send['incompleteApplication_ForHC']=$incompleteApplication_ForHC;
        $send['appDetails_appealResolved_ForHC']=$appDetails_appealResolved_ForHC;
        $send['count_incompleteApplication_ForHC']=$count_incompleteApplication_ForHC;
        $send['queryAll']=$queryAll;

        //$send['appDetails_allRecords']=$appDetails_allRecords;



        $send['user'] = User::find(1);
  
       
       return view ('inc_hc.stats', $send)->with('appeals',$appeals);

    }
        // function filterByStatus(Request $request){
        //     $status_id = 1;
        //     $appDetails_allRecords = DB::table('filterByStatus')->where('maxStatus','=',$status_id);
        //     //echo 'Return From Controller';

        // }
    function fetch_data_ForOverdue(Request $request)
    {
    
     if($request->ajax() )
     {
        $overdue_hc = DB::table('overdue_hc')
        ->select('id', 'prison_id', 'prison_name','prisoner_name','case_no','act_name', 'court_name')
        ->where('overdue_hc.mydate', '>', 10 )
        ->where('overdue_hc.statusid', '!=', 10 )
        ->paginate(5);
      return view('inc_hc.overdue', compact('overdue_hc'))->render();
     }
    }
    function fetch_data_ForIncompleteAppl(Request $request)
    {
    
     if($request->ajax())
     {
        $incompleteApplication_ForHC = DB::table('pendingforcc_prison')
        ->select('id', 'prison_id', 'prison_name','prisoner_name','case_no','act_name', 'court_name')
        //->where('pendingforcc_prison.prison_id', $prison_id )
        ->paginate(5);
      return view('inc_hc.incompleteAppl', compact('incompleteApplication_ForHC'))->render();
     }
    }
    function fetch_data_ForResolvedAppl(Request $request)
    {
    
     if($request->ajax())
     {
        $appDetails_appealResolved_ForHC = DB::table('appealresolved_prison')
        ->select('id', 'prison_id', 'prison_name','prisoner_name','case_no','act_name', 'court_name')
        //->where('appealresolved_prison.prison_id', $prison_id )
        ->paginate(5);
      return view('inc_hc.resolvedAppl', compact('appDetails_appealResolved_ForHC'))->render();
     }
    }

    function fetch_data_allRecords(request $request)
    {
     if($request->ajax())
     {
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');
           $query = $request->get('query');
           $query = str_replace(" ", "%", $query);
           $filter = $request->get('filter');
          
        if ($filter != '') {
            $appDetails_allRecords = DB::table('filterbystatus')
                ->Where('maxStatus', '=', $filter)
                ->orderBy($sort_by, $sort_type)
                //->orderBy('id', 'desc')
                ->paginate(10);
        }elseif($filter == ''){
            $appDetails_allRecords = DB::table('all_appeals')
                //->Where('id', 'like', '%'.$query.'%')
                ->Where('case_no','like', '%'.$query.'%')
                ->orWhere('prison_name','like', '%'.$query.'%')
                //->Where('maxStatus', '=', $filter)
                ->orderBy($sort_by, $sort_type)
                //->orderBy('id', 'desc')
                ->paginate(10);
        }

      return view('inc_hc.allRecords', compact('appDetails_allRecords'))->render();
     }
    }
    public function appealForm(){
        if(!Gate::allows('isUser')){
            abort(401,'You are not authorized here!');
        }
        return view('appealForm');
    }
    public function readnotify(){
        $user = User::find(1);
        foreach ($user->unreadNotifications as $notification) {
            $notification->markAsRead();
        }
       // $send['user'] = $user;
        return redirect('/dashboard');
    }

    public function masterpage(){

        return view('/master');
    }
    public function prisonDashboard(){

        return view ('prisonDashboard');
    }
    public function testindex(){
        $test = DB::table('appdetails')->orderBy('id', 'asc')->paginate(5);
        $send['test'] = $test;
        return view('testindex',$send);

    }

 public function testtable(request $request){

    if($request->ajax()){
        $sort_by = $request->get('sortby');
         $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);

            $test = DB::table('appdetails')
            ->orderBy($sort_by, $sort_type)->paginate(5);
            $send['test'] = $test;

            return view('testtable',$send);
    }

 }
 public function countryData(){
    $query = DB::select('SELECT newappeals.*, prisons.disid, districts.divid 
                         FROM newappeals , prisons, districts
                         Left JOIN prisons ON prisons.disid = districts.id
                         WHERE newappeals.prisonid = prisons.id AND prisons.disid = districts.id');
   $queryAll = DB::select('SELECT prisons.name, count(newappeals.id) TotalAppeals, districts.id as districtID, divisions.id as divisionID FROM `prisons` 
   Left JOIN newappeals ON newappeals.prisonid = prisons.id
   INNER JOIN districts ON districts.id = prisons.disid
   INNER JOIN divisions ON divisions.id = districts.divid
   GROUP BY prisons.name');

    $send['queryAll'] = $queryAll;

    //return view('inc_hc.stats',$send);
 }
    
}
