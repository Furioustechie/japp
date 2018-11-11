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
        //echo  $wordCount;
        //exit;
        return view ('dashboard', ['count' => $wordCount,'count1' => $wordCount1 ])->with('appeals',$appeals);
        
    }
    public function appealForm(){
        return view('appealForm');
    }
}
