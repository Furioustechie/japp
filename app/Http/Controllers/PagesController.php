<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appeal;
use App\Application;
use DB;

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
        $n_appeals = Application::all();

        $wordlist = Appeal::where('id', '>', 0)->get();
        $wordCount = $wordlist->count();

        $wordlist1 = Appeal::where('options', '=', '1')->get();
        $wordCount1 = $wordlist1->count();


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


        $send['count']=$wordCount;
        $send['count1']=$wordCount1;
        $send['gender']=$gen;
        $send['total']=$tot;
        $send['sentype']=$st;
        $send['stotal']=$sttotal;
        $send['appealStatus']=$appStat;
        $send['appeals'] = $appeals;

        // echo "<pre>";
        // print_r($all_appeals);
        // exit;
        //return view('dashboard', $send);
       return view ('dashboard', $send)->with('appeals',$appeals);
      // return view ('dashboard', ['count' => $wordCount,'count1' => $wordCount1,'gender' => $gen, 'total' =>$tot,'sentype' => $st, 'stotal' =>$sttotal, 'appealDetails' =>$all_appeals])->with('appeals',$appeals)->with('newappeals',$n_appeals);
       //return view ('dashboard', ['label' => $barlist1])->with('appeals',$appeals);
      //return view ('dashboard', [$barlist,$barlist1 ])->with('appeals',json_encode($appeals));
        
        
    }
    public function appealForm(){
        
        return view('appealForm');
    }
}
