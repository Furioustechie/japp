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
use DB;
use Gate;
use App\Notifications\jappNotification;
use App\Notification;
use Carboon\Carbon;

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

    public function dashboard(){
        if(!Gate::allows('isAdmin')){
            abort(401,'You are not authorized here!');
        }
        //App::setLocale($lang);
       // Session::put('locale',$lang);
        $appeals = Appeal::all();

        $totalAppeals = Newappeal::where('id', '>', 0)->get();
        $countAppeals = $totalAppeals->count();
        $lastYearAppeals = DB::select('SELECT count(id) as totalAppeal FROM newappeals WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()');
        $appealResolved = DB::select('SELECT count(statusid) as totalAppealResolved FROM appealstatus WHERE statusid = (SELECT id FROM status ORDER BY id DESC limit 1)');
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

        $appStat = DB::select('SELECT na.id, prisons.name,prisoner.prisoner_name as prisoner_name, offences.name as offence_name, courts.name_en as court_name
        FROM newappeals na
        INNER JOIN prisons ON na.prisonid = prisons.id
          INNER JOIN offences ON na.offenceid  = offences.id
          INNER JOIN courts ON na.courtid  = courts.id
          INNER JOIN documents ON na.id = documents.appealid
          INNER JOIN prisoner ON na.prisonerid  = prisoner.id');
    $appealStates = DB::select('SELECT statusid, newappeals_id, state FROM appealstatus ');



        $send['count']=$countAppeals;
        $send['count1']=$lastYearAppeals;
        $send['totalappealResolved'] = $appealResolved;
        $send['gender']=$gen;
        $send['total']=$tot;
        $send['sentype']=$st;
        $send['stotal']=$sttotal;
        $send['appealStatus']=$appStat;
        $send['appeals'] = $appeals;
        $send['cc_missing']=$cc_missing;
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


        // echo "<pre>";
        // print_r($all_appeals);
        // exit;
        //return view('dashboard', $send);
        $send['user'] = User::find(1);
       // User::find(1)->notify(new jappNotification);
       
       return view ('dashboard', $send)->with('appeals',$appeals);
      // return view ('dashboard', ['count' => $wordCount,'count1' => $wordCount1,'gender' => $gen, 'total' =>$tot,'sentype' => $st, 'stotal' =>$sttotal, 'appealDetails' =>$all_appeals])->with('appeals',$appeals)->with('newappeals',$n_appeals);
       //return view ('dashboard', ['label' => $barlist1])->with('appeals',$appeals);
      //return view ('dashboard', [$barlist,$barlist1 ])->with('appeals',json_encode($appeals));
        
        
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
    
}
