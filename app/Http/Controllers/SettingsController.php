<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Appeal;
use App\Doctype;
use App\Document;
use App\Prison;
use App\Sentence;
use App\Court;
use App\Offence;
use App\Status;
use App\User;
//use Datatables;
use Alert;
use Gate;
use DB;
use Toastr;

// ------------------------End of Block ------------------>

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
    public function rotate()
    {
        return view('/rotate');
    }
    public function testpage()
    {
        return view('/testpage');
    }
    public function update_test(Request $request, $id) //modifed update function
     {
         
       
     }
     public function update_prison_test(Request $request, $id) //modifed update function
     {
         
         
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

        $appealStats = Appeal::all();
        return view ('appeals.index')->with('appeals',$appealStats);
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
    public function getPrisonData()

    {
        $prisonName = DB::table('prisons')->select('id', 'name')->get();
        return Datatables::of($prisonName)
            ->addColumn('action', function ($prisonName) {
                return '<a href="#" data-toggle="modal" data-target="#edit_prisonName"  data-id="'.$prisonName->id.'" class="edit_prisonName"><i class="material-icons">edit</i></a> '
                .'<a href="#" class="PrisonDelete delete" data-id="'.$prisonName->id.'"><i class="material-icons">delete</i></a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['delete' => 'delete','action' => 'action'])
            ->make(true);
    }

    public function getCourtsData()
    {
        $uses = DB::table('courts')->select('id', 'name_en', 'name_bn')->get();
        return Datatables::of($uses)
            ->addColumn('action', function ($uses) {
                return '<a href="#" data-toggle="modal" data-target="#edit_court"  data-id="'.$uses->id.'" class="edit_court"><i class="material-icons">edit</i></a> '
                .'<a href="#" class="CourtDelete delete" data-id="'.$uses->id.'"><i class="material-icons">delete</i></a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['delete' => 'delete','action' => 'action'])
            ->make(true);
    }

    public function getSentenceData()
    {
        $sentenceName = DB::table('sentences')->select('id', 'sentence_name')->get();
        return Datatables::of($sentenceName)
            ->addColumn('action', function ($sentenceName) {
                return '<a href="#" data-toggle="modal" data-target="#edit_sentenceName"  data-id="'.$sentenceName->id.'" class="edit_sentenceName"><i class="material-icons">edit</i></a> '
                .'<a href="#" class="SentenceDelete delete" data-id="'.$sentenceName->id.'"><i class="material-icons">delete</i></a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['delete' => 'delete','action' => 'action'])
            ->make(true);
    }

    public function getOffenceData()
    {
        $offenceName = DB::table('offences')->select('id', 'name')->get();
        return Datatables::of($offenceName)
            ->addColumn('action', function ($offenceName) {
                return '<a href="#" data-toggle="modal" data-target="#edit_offenceName"  data-id="'.$offenceName->id.'" class="edit_offenceName"><i class="material-icons">edit</i></a> '
                .'<a href="#" class="OffenceDelete delete" data-id="'.$offenceName->id.'"><i class="material-icons">delete</i></a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['delete' => 'delete','action' => 'action'])
            ->make(true);
    }

    public function getStatusData()
    {
        $statusName = DB::table('status')->select('id', 'status_name')->get();
        return Datatables::of($statusName)
            ->addColumn('action', function ($statusName) {
                return '<a href="#" data-toggle="modal" data-target="#edit_statusName"  data-id="'.$statusName->id.'" class="edit_statusName"><i class="material-icons">edit</i></a> '
                .'<a href="#" class="StatusDelete delete" data-id="'.$statusName->id.'"><i class="material-icons">delete</i></a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['delete' => 'delete','action' => 'action'])
            ->make(true);
    }

    public function getuaccount()
    {
        $accountName = DB::table('users')->select('id', 'name', 'email', 'phone','status')->get();
        return Datatables::of($accountName)
            ->addColumn('action', function ($accountName) {
                return '<a href="#" data-toggle="modal" data-target="#edit_accountName"  data-id="'.$accountName->id.'" class="edit_accountName"><i class="material-icons">edit</i></a> '
                .'<a href="#" class="accountNameDelete delete" data-id="'.$accountName->id.'"><i class="material-icons">delete</i></a>';
            })
           
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['delete' => 'delete','action' => 'action'])
            ->make(true);
    }

    // public function getAppealHistory()
    // {
    //     $accountName = DB::table('users')->select('id', 'name', 'email', 'phone')->get();
    //     return Datatables::of($accountName)
    //         ->addColumn('action', function ($accountName) {
    //             return '<a href="#" data-toggle="modal" data-target="#edit_accountName"  data-id="'.$accountName->id.'" class="edit_accountName"><i class="material-icons">edit</i></a> '
    //             .'<a href="#" class="accountNameDelete delete" data-id="'.$accountName->id.'"><i class="material-icons">delete</i></a>';
    //         })
    //         ->editColumn('id', 'ID: {{$id}}')
    //         ->rawColumns(['delete' => 'delete','action' => 'action'])
    //         ->make(true);
    // }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // ------------------------Prison Name Update ------------------>
    public function update_prison(Request $request, $id) //modifed update function
    {
        //
        $update_prison_name = Prison::find($id);
         $update_prison_name->name = $request->input('rename_prison');
         $update_prison_name->created_at = date('Y-m-d h:i:s');
         $update_prison_name->updated_at = date('Y-m-d h:i:s');

         $update_prison_name->save();   
        
    }
    // ------------------------Sentence Name Update ------------------>
    public function update_sentence(Request $request, $id) //modifed update function
    {
        //
        $update_sentence_name = Sentence::find($id);
        $update_sentence_name->sentence_name = $request->input('rename_sentence');
        $update_sentence_name->created_at = date('Y-m-d h:i:s');
        $update_sentence_name->updated_at = date('Y-m-d h:i:s');
            
        $update_sentence_name->save();
    }


     // ------------------------Courts Name Update ------------------>
     public function update_court(Request $request, $id) //modifed update function
     {
         //
         $update_court_name = Court::find($id);
         $update_court_name->name_en = $request->input('name_en');
         $update_court_name->created_at = date('Y-m-d h:i:s');
         $update_court_name->updated_at = date('Y-m-d h:i:s');
         
         $update_court_name->save();   
     }

     // ------------------------Offence Name Update ------------------>
     public function update_offence(Request $request, $id) //modifed update function
     {
         //
         $update_offence_name = Offence::find($id);
         $update_offence_name->name = $request->input('rename_offence');
         $update_offence_name->created_at = date('Y-m-d h:i:s');
         $update_offence_name->updated_at = date('Y-m-d h:i:s');

         $update_offence_name->save();
     }

      // ------------------------Status  Update ------------------>
      public function update_status(Request $request, $id) //modifed update function
      {
          //
          $update_status_name = Status::find($id);
          $update_status_name->status_name = $request->input('rename_status');
          $update_status_name->created_at = date('Y-m-d h:i:s');
          $update_status_name->updated_at = date('Y-m-d h:i:s');

          $update_status_name->save();
      }

      // ------------------------User Information  Update ------------------>
      public function update_accountName(Request $request, $id) //modifed update function
      {
          //
          $update_user_info = User::find($id);
          $update_user_info->name = $request->input('rename_name');
          $update_user_info->phone = $request->input('rename_phone');
          $update_user_info->email = $request->input('rename_emailid');
          $update_user_info->status = $request->input('rename_status');
          $update_user_info->created_at = date('Y-m-d h:i:s');
          $update_user_info->updated_at = date('Y-m-d h:i:s');

          $update_user_info->save();
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
    // ------------------------Prison Name  Delete ------------------>
    public function prison_name_destroy($id)
    {
        DB::table('prisons')->where('id',$id)->delete();
    }
    // ------------------------Sentence Name  Delete ------------------>
    public function sentence_name_destroy($id)
    {
        // echo $id;
        // exit; 
        try {
            //Alert::confirm('success','Prison Renamed Successdully');
         DB::table('sentences')->where('id',$id)->delete();
        
            // $delete_sentenceName = Sentence::find($id);
            // $delete_sentenceName->delete();
            
            
            return redirect('/editsettings');
            // ->with('success','Sentence Name Deleted Successdully');
        } catch (\Exception $e) { 
            // if an exception happened in the try block above 
            return redirect('/editsettings')->with('error','Selected Sentence Name is Being Used and Can Not Be Deleted Now!!');
        }
    }
    // ------------------------Courts Name  Delete ------------------>
    public function court_name_destroy($id)
    {
        // echo $id;  
       
         DB::table('courts')->where('id',$id)->delete();
      
          
        
    }
    // ------------------------Offence Name  Delete ------------------>
    public function offence_name_destroy($id)
    {
        // echo $id;  
        try {
         DB::table('offences')->where('id',$id)->delete();
        
            return redirect('/editsettings')->with('success','Offence Name Deleted Successdully');
        } catch (\Exception $e) { 
            // if an exception happened in the try block above 
            return redirect('/editsettings')->with('error','Offence Courts Name is Being Used and Can Not Be Deleted Now!!');
        }
    }
    // ------------------------Status Name  Delete ------------------>
    public function status_name_destroy($id)
    {
        
        
        // echo $id;  
        try {
         DB::table('status')->where('id',$id)->delete();
            return redirect('/editsettings')->with('success','Status Deleted Successdully');
        } catch (\Exception $e) { 
            // if an exception happened in the try block above 
            return redirect('/editsettings')->with('error','Status Courts Name is Being Used and Can Not Be Deleted Now!!');
        }
    }

    // ------------------------User Information  Delete ------------------>
    public function uaccount_destroy($id)
    {
        
        
        // echo $id;  
        try {
         DB::table('users')->where('id',$id)->delete();
            return redirect('/editsettings')->with('success','User information Deleted Successdully');
        } catch (\Exception $e) { 
            // if an exception happened in the try block above 
            return redirect('/editsettings')->with('error','User Information is Being Used and Can Not Be Deleted Now!!');
        }
    }
    // ------------------------Sentence Name  Added ------------------>
    public function add_sentence(Request $request)
    {
        if ($request->has('sen_submit')) {
            $has_sentence_name = DB::table('sentences')->where('sentence_name', $request->input('sentence_name'))->first();
            if(empty($has_sentence_name)){
                    DB::table('sentences')->insert([
                        [
                        'sentence_name'  => $request->input('sentence_name'),
                        'created_at' => date('Y-m-d h:i:s'),
                        'updated_at' => date('Y-m-d h:i:s')]
                    ]);
                    Alert::success('success','Sentence Added Successfully');
                    return redirect('editsettings');
                        }else{
                            Alert::error('Error','Sentence Name Already Exists');
                            return redirect('editsettings');
                        }
            }
            
            
    }
    // ------------------------Offence Name  Added ------------------>
    public function add_offence(Request $request)
    {
       
        if ($request->has('offence_submit')) {
            $has_sentence_name = DB::table('offences')->where('name', $request->input('offence_name'))->first();
            if(empty($has_sentence_name)){
            
                    DB::table('offences')->insert([
                        [
                        'name'  => $request->input('offence_name'),
                        'created_at' => date('Y-m-d h:i:s'),
                        'updated_at' => date('Y-m-d h:i:s')]
                    ]);
                    Alert::success('success','Offence Title Added Successfully');
                    return redirect('editsettings');
            }
           
        else{
            Alert::error('Error','Offence Title Already Exists');
            return redirect('editsettings');
        }
        }

            
    }

    // ------------------------Prison Name  Added ------------------>
    public function add_prisonname(Request $request)  
    {
       
        if ($request->has('prison_submit')) {
            $has_prison_name = DB::table('prisons')->where(array('name'=>$request->input('prison_name'),'disid'=>$request->input('district_name')))->first();
            if(empty($has_prison_name)){
            
                    DB::table('prisons')->insert([
                        [
                        'name'  => $request->input('prison_name'),
                        'disid'  => $request->input('district_name'),
                        'created_at' => date('Y-m-d h:i:s'),
                        'updated_at' => date('Y-m-d h:i:s')]
                    ]);
                    Alert::success('success','Prison Name Added Successfully');
                    return redirect('editsettings')->with('success','Prison Name Added');
            }
           
        else{
            Alert::success('error','Prison Name Already Exists');
            return redirect('editsettings');
        }
        }

            
    }
    // ------------------------Courts Name  Added ------------------>
    public function add_courtname(Request $request)  
    {
       
        if ($request->has('court_submit')) {
            $has_prison_name = DB::table('courts')->where(array('name_en'=>$request->input('court_name'),'disid'=>$request->input('district_name')))->first();
            if(empty($has_prison_name)){
            
                    DB::table('courts')->insert([
                        [
                        'name_en'  => $request->input('court_name'),
                        'disid'  => $request->input('district_name'),
                        'created_at' => date('Y-m-d h:i:s'),
                        'updated_at' => date('Y-m-d h:i:s')]
                    ]);
                    Alert::success('success','Court Name Added Successfully');
                    return redirect('editsettings');
            }
           
        else{
            Alert::success('error','Court Name Already Exists');
            return redirect('editsettings');
        }
        }

            
    }

    // ------------------------Status Name  Added ------------------>
    public function add_status(Request $request)
    {
       
        if ($request->has('status_submit')) {
            $has_sentence_name = DB::table('status')->where('status_name', $request->input('status_name'))->first();
            if(empty($has_sentence_name)){
            
                    DB::table('status')->insert([
                        [
                        'status_name'  => $request->input('status_name'),
                        'created_at' => date('Y-m-d h:i:s'),
                        'updated_at' => date('Y-m-d h:i:s')]
                    ]);
                    return redirect('editsettings')->with('success','Status Added');
            }
           
        else{
            return redirect('editsettings')->with('error','Already Exists');
        }
        }

            
    }

   
    public function add_userAccount(Request $request)
    {
        $this->validate($request, [
        
            'name' => 'required|string|max:255',
            //'prison_id' => 'required|string|max:255',
            //'phone' => 'required|integer|min:0',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            ]);
           
        // if (Hash::check(Input::get('password'), $request->password)) {
        //     // The passwords match...
        //     Alert::success('error', 'Password already exists');
        // } else {
            DB::table('users')->insert([
            'name' => $request['name'],
            'prison_id' => $request['prison_Name'],
            'email' => $request['email'],
            'user_type' => $request['user_type'],
            'password' => Hash::make($request['password']),
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);
            Alert::success('success', 'User Added Successdully');
            // Toastr::success('Success!', 'New User Added Successdully');
        //}
        return redirect('/editsettings');
    }

    // ------------------------Edit Settings View Load ------------------>
    public function edit_settings(){
        if(!Gate::allows('isAdmin')){
            abort(401,'You are not authorized here!');
        }
        return view('editsettings');
    }
}
