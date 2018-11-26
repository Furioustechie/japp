<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appeal;
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
        return view ('appeals.index')->with('appeals',$appeals);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                                    //
                                //dd($request->all());
                                $validatedData = $request->validate([
                                    //'prisonerno' => 'required',
                                    //'caseno' => 'required',
                                    'file_app' => 'mimes:jpeg,png,jpg,pdf|nullable|max:1999'
                            ]);
                            // handle file upload

                            /*if($request->hasFile('file_app')){
                                //get filename with the extention
                                $filenameWithExt = $request->file('file_app')->getClientOriginalName();
                                $filenameWithExt1 = $request->file('file_bj')->getClientOriginalName();
                                //Get Just ext
                                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
                                //Get just extension
                                $extension = $request->file('file_app')->getClientOriginalExtension();
                                $extension1 = $request->file('file_bj')->getClientOriginalExtension();
                                //File To Store
                                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                                $fileNameToStore1 = $filename1.'_'.time().'.'.$extension1;
                                //upload Image
                                $path = $request->file('file_app')->storeAs('public/jail_app', $fileNameToStore);
                                $path1 = $request->file('file_bj')->storeAs('public/bj_app', $fileNameToStore1);
                            }
                            
                            else {
                                $fileNameToStore = 'noimage.jpg';
                            }
                            //Create Insert
                            $appeal = new Appeal;
                            //$appeal->prisonerno = $request->input('prisonerno');
                            $appeal->caseno = $request->input('caseno');
                            $appeal->gender = $request->get('gender');

                            $appeal->options = $request->has('options');
                            //$appeal->checkbox = $checkbox;
                            $appeal->file_app = $fileNameToStore;
                            $appeal->file_bj = $fileNameToStore1;*/
                            if($request->hasfile('filename'))
                                        {

                                            foreach($request->file('filename') as $file)
                                            {
                                                $name=$file->getClientOriginalName();
                                                $file->move(public_path().'/files/', $name);  
                                                $data[] = $name;  
                                            }
                                        }
                                        
                                        $appeal= new Appeal();
                                        $appeal->caseno = $request->input('caseno');
                                        $appeal->file_bj=json_encode($data);

                                        $appeal->save();


                            return redirect('/appeals/create')->with('success', 'Application Submitted');
                     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appeal = Appeal::find($id);
        
        return view ('appeals.show')->with('appeal',$appeal);

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
