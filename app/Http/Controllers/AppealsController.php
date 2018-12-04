<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appeal;
use App\Doctype;
use App\Document;
use App\Application;
use DB;


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
        //$document = Document::all();
        //$doctype = Doctype::all();
        return view ('appeals.index')->with('appeals',$appeals);
        
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
                                'filename' => $r[1],
                                'created_at' => date('Y-m-d h:s:i'),
                                'updated_at' => date('Y-m-d h:s:i')]
                            ]);
                            
                            }
                        //     
                        
                        //$appeal->save();  Eloquant Insert
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
        

        $appeals = DB::select('SELECT na.id, p.name, prn.prisoner_name, co.name as court_name, of.name as offence_name
        FROM 
            newappeals na, prisons p, prisoner prn, courts co, offences of, sentences se 
        WHERE 
        na.id = p.id AND
        na.id = prn.id AND
        na.id = co.id');
        // echo "<pre>";
        // print_r($appeals);
    
        // exit;
        //return view ('/dashboard')->with('newappeals',$appeals);
        //return view ('dashboard', ['appealDetails' => $appeals])->with('newappeals',$appeals);
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
    public function update(Request $request, $id)
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
        $appeals = Appeal::find($id);

       // $appeals->caseno = $request->input('caseno');
        // $appeals->caseno = $request->input('caseno');
        // $appeals->caseno = $request->input('caseno');
        // $appeals->caseno = $request->input('caseno');
        // $appeals->caseno = $request->input('caseno');
        //$appeals->isgrant = $request->has('options1');
        $appeals->remarks = $request->input('rejectgrant');
        $appeals->isgrant = $request->has('options1');
        
        


        $appeals->save();
        return redirect('appeals')->with('success','Application Updated');
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
