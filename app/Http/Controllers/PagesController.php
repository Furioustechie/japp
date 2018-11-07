<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appeal;

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
        return view ('dashboard')->with('appeals',$appeals);
        
    }
    public function appealForm(){
        return view('appealForm');
    }
}
