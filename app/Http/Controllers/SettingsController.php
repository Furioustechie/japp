<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appeal;
use App\Doctype;
use App\Document;
use DB;
class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function modals(Request $request)
    {
        if ($request->has('sen_submit')) {
            $has_sentence_name = DB::table('sentences')->where('sentence_name', $request->input('sentence_name'))->first();
            if(empty($has_sentence_name)){
                    DB::table('sentences')->insert([
                        [
                        'sentence_name'  => $request->input('sentence_name'),
                        'created_at' => date('Y-m-d h:s:i'),
                        'updated_at' => date('Y-m-d h:s:i')]
                    ]);
                    return redirect('appealForm')->with('success','Sentence Added');
                        }else{
                            return redirect('appealForm')->with('error','Already Exists ');
                        }
            }
            
            
    }

    public function offence(Request $request)
    {
       
        if ($request->has('offence_submit')) {
            $has_sentence_name = DB::table('offences')->where('name', $request->input('offence_name'))->first();
            if(empty($has_sentence_name)){
            
                    DB::table('offences')->insert([
                        [
                        'name'  => $request->input('offence_name'),
                        'created_at' => date('Y-m-d h:s:i'),
                        'updated_at' => date('Y-m-d h:s:i')]
                    ]);
                    return redirect('appealForm')->with('success','Offence Added');
            }
           
        else{
            return redirect('appealForm')->with('error','Already Exists');
        }
        }

            
    }


    public function add_prisonname(Request $request)  
    {
       
        if ($request->has('prison_submit')) {
            $has_prison_name = DB::table('prisons')->where(array('name'=>$request->input('prison_name'),'disid'=>$request->input('district_name')))->first();
            if(empty($has_prison_name)){
            
                    DB::table('prisons')->insert([
                        [
                        'name'  => $request->input('prison_name'),
                        'disid'  => $request->input('district_name'),
                        'created_at' => date('Y-m-d h:s:i'),
                        'updated_at' => date('Y-m-d h:s:i')]
                    ]);
                    return redirect('appealForm')->with('success','Prison Name Added');
            }
           
        else{
            return redirect('appealForm')->with('error','Already Exists');
        }
        }

            
    }

    public function add_courtname(Request $request)  
    {
       
        if ($request->has('court_submit')) {
            $has_prison_name = DB::table('courts')->where(array('name'=>$request->input('court_name'),'disid'=>$request->input('district_name')))->first();
            if(empty($has_prison_name)){
            
                    DB::table('courts')->insert([
                        [
                        'name'  => $request->input('court_name'),
                        'disid'  => $request->input('district_name'),
                        'created_at' => date('Y-m-d h:s:i'),
                        'updated_at' => date('Y-m-d h:s:i')]
                    ]);
                    return redirect('appealForm')->with('success','Court Name Added');
            }
           
        else{
            return redirect('appealForm')->with('error','Already Exists');
        }
        }

            
    }


    public function add_status(Request $request)
    {
       
        if ($request->has('status_submit')) {
            $has_sentence_name = DB::table('status')->where('status_name', $request->input('status_name'))->first();
            if(empty($has_sentence_name)){
            
                    DB::table('status')->insert([
                        [
                        'status_name'  => $request->input('status_name'),
                        'created_at' => date('Y-m-d h:s:i'),
                        'updated_at' => date('Y-m-d h:s:i')]
                    ]);
                    return redirect('appealForm')->with('success','Status Added');
            }
           
        else{
            return redirect('appealForm')->with('error','Already Exists');
        }
        }

            
    }




}
