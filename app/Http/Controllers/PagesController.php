<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function dashboard(){
        $appeals = Appeal::all();

        $totalAppeals = Newappeal::where('id', '>', 0)->get();
        $countAppeals = $totalAppeals->count();
        $lastYearAppeals = DB::select('SELECT count(id) as totalAppeal FROM newappeals WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()');
        $appealResolved = DB::select('SELECT count(statusid) as totalAppealResolved FROM appealstatus WHERE statusid = 10');
        $cc_missing = DB::select('select newappeals.date_of_sentence,cases.caseno,prisons.name
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
