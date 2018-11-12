<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appeal;
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
        
        
        $gen="";
        foreach($barlist1 as $bar){
            $gen.="'".$bar->gender."',";
        }
        $gen= substr($gen,0, -1);

        $tot="";
        foreach($barlist1 as $bar){
            $tot.="'".$bar->total."',";
        }
        $tot= substr($tot,0, -1);

     

       return view ('dashboard', ['count' => $wordCount,'count1' => $wordCount1,'gender' => $gen, 'total' =>$tot])->with('appeals',$appeals);
       //return view ('dashboard', ['label' => $barlist1])->with('appeals',$appeals);
      //return view ('dashboard', [$barlist,$barlist1 ])->with('appeals',json_encode($appeals));
        
        
    }
    public function appealForm(){
        return view('appealForm');
    }
}
