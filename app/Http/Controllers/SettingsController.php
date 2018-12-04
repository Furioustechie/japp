<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ------------------------Sentence Name  Added ------------------>
use App\Appeal;
use App\Doctype;
use App\Document;
use App\Prison;
use App\Sentence;
use App\Court;
use App\Offence;
use App\Status;
// ------------------------End of Block ------------------>
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

    // ------------------------Prison Name Update ------------------>
    public function update(Request $request, $id) //modifed update function
    {
        //
        $update_pname = Prison::find($id);
        $update_pname->name = $request->input('rename_prison');
        $update_pname->created_at = date('Y-m-d h:i:s');
        $update_pname->updated_at = date('Y-m-d h:i:s');
            if ($request->has('rename_prison_submit')) {
                $has_prison_name = DB::table('prisons')->where('name', $request->input('rename_prison'))->first();
                if(empty($has_prison_name)){
                        
                             $update_pname->save();
        

                             return redirect('/editsettings')->with('success','Prison Renamed Successdully');
    
                        }else{
                            return redirect('/editsettings')->with('error','Already Exists ');
                        }
                }
    }
    // ------------------------Sentence Name Update ------------------>
    public function update_sentence(Request $request, $id) //modifed update function
    {
        //
        $update_sentence_name = Sentence::find($id);
        $update_sentence_name->sentence_name = $request->input('rename_sentence');
        $update_sentence_name->created_at = date('Y-m-d h:i:s');
        $update_sentence_name->updated_at = date('Y-m-d h:i:s');
            if ($request->has('rename_sentence_submit')) {
                $has_sentence_name = DB::table('sentences')->where('sentence_name', $request->input('rename_sentence'))->first();
                if(empty($has_sentence_name)){
                        
                             $update_sentence_name->save();
        

                             return redirect('/editsettings')->with('success','Sentence Renamed Successdully');
    
                        }else{
                            return redirect('/editsettings')->with('error','Already Exists ');
                        }
                }
    }


     // ------------------------Courts Name Update ------------------>
     public function update_court(Request $request, $id) //modifed update function
     {
         //
         $update_court_name = Court::find($id);
         $update_court_name->name = $request->input('rename_Court');
         $update_court_name->created_at = date('Y-m-d h:i:s');
         $update_court_name->updated_at = date('Y-m-d h:i:s');
             if ($request->has('rename_court_submit')) {
                 $has_court_name = DB::table('courts')->where('name', $request->input('rename_Court'))->first();
                 if(empty($has_court_name)){
                         
                              $update_court_name->save();
         
 
                              return redirect('/editsettings')->with('success','Court Name Renamed Successdully');
     
                         }else{
                             return redirect('/editsettings')->with('error','Already Exists ');
                         }
                 }
     }

     // ------------------------Offence Name Update ------------------>
     public function update_offence(Request $request, $id) //modifed update function
     {
         //
         $update_offence_name = Offence::find($id);
         $update_offence_name->name = $request->input('rename_offence');
         $update_offence_name->created_at = date('Y-m-d h:i:s');
         $update_offence_name->updated_at = date('Y-m-d h:i:s');
             if ($request->has('rename_offence_submit')) {
                 $has_offence_name = DB::table('offences')->where('name', $request->input('rename_offence'))->first();
                 if(empty($has_offence_name)){
                         
                              $update_offence_name->save();
         
 
                              return redirect('/editsettings')->with('success','Offence Name Renamed Successdully');
     
                         }else{
                             return redirect('/editsettings')->with('error','Already Exists ');
                         }
                 }
     }

      // ------------------------Status  Update ------------------>
      public function update_status(Request $request, $id) //modifed update function
      {
          //
          $update_status_name = Status::find($id);
          $update_status_name->status_name = $request->input('rename_status');
          $update_status_name->created_at = date('Y-m-d h:i:s');
          $update_status_name->updated_at = date('Y-m-d h:i:s');
              if ($request->has('rename_status_submit')) {
                  $has_status_name = DB::table('status')->where('status_name', $request->input('rename_status'))->first();
                  if(empty($has_status_name)){
                          
                               $update_status_name->save();
          
  
                               return redirect('/editsettings')->with('success','Status Name Renamed Successdully');
      
                          }else{
                              return redirect('/editsettings')->with('error','Already Exists ');
                          }
                  }
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
        // echo $id;  
        // DB::table('prisons')->where('id',$id)->delete();
            $delete_pname = Prison::find($id);
            $delete_pname->delete();
            return redirect('/editsettings')->with('success','Prison Name Deleted Successdully');
    }
    // ------------------------Sentence Name  Delete ------------------>
    public function sentence_name_destroy($id)
    {
        // echo $id;  
         DB::table('sentences')->where('id',$id)->delete();
        
            // $delete_sentenceName = Sentence::find($id);
            // $delete_sentenceName->delete();
            return redirect('/editsettings')->with('success','Sentence Name Deleted Successdully');
        
    }
    // ------------------------Courts Name  Delete ------------------>
    public function court_name_destroy($id)
    {
        // echo $id;  
         DB::table('courts')->where('id',$id)->delete();
        
            // $delete_sentenceName = Sentence::find($id);
            // $delete_sentenceName->delete();
            return redirect('/editsettings')->with('success','Courts Name Deleted Successdully');
        
    }
    // ------------------------Offence Name  Delete ------------------>
    public function offence_name_destroy($id)
    {
        // echo $id;  
         DB::table('offences')->where('id',$id)->delete();
        
            // $delete_sentenceName = Sentence::find($id);
            // $delete_sentenceName->delete();
            return redirect('/editsettings')->with('success','Offence Name Deleted Successdully');
        
    }
    // ------------------------Status Name  Delete ------------------>
    public function status_name_destroy($id)
    {
        // echo $id;  
         DB::table('status')->where('id',$id)->delete();
        
            // $delete_sentenceName = Sentence::find($id);
            // $delete_sentenceName->delete();
            return redirect('/editsettings')->with('success','Status Deleted Successdully');
        
    }
    // ------------------------Sentence Name  Added ------------------>
    public function modals(Request $request)
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
                    return redirect('appealForm')->with('success','Sentence Added');
                        }else{
                            return redirect('appealForm')->with('error','Already Exists ');
                        }
            }
            
            
    }
    // ------------------------Offence Name  Added ------------------>
    public function offence(Request $request)
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
                    return redirect('appealForm')->with('success','Offence Added');
            }
           
        else{
            return redirect('appealForm')->with('error','Already Exists');
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
                    return redirect('appealForm')->with('success','Prison Name Added');
            }
           
        else{
            return redirect('appealForm')->with('error','Already Exists');
        }
        }

            
    }
    // ------------------------Courts Name  Added ------------------>
    public function add_courtname(Request $request)  
    {
       
        if ($request->has('court_submit')) {
            $has_prison_name = DB::table('courts')->where(array('name'=>$request->input('court_name'),'disid'=>$request->input('district_name')))->first();
            if(empty($has_prison_name)){
            
                    DB::table('courts')->insert([
                        [
                        'name'  => $request->input('court_name'),
                        'disid'  => $request->input('district_name'),
                        'created_at' => date('Y-m-d h:i:s'),
                        'updated_at' => date('Y-m-d h:i:s')]
                    ]);
                    return redirect('appealForm')->with('success','Court Name Added');
            }
           
        else{
            return redirect('appealForm')->with('error','Already Exists');
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
                    return redirect('appealForm')->with('success','Status Added');
            }
           
        else{
            return redirect('appealForm')->with('error','Already Exists');
        }
        }

            
    }

    // ------------------------Edit Settings View Load ------------------>
    public function edit_settings(){
        
        return view('editsettings');
    }
    //edit_settings
}