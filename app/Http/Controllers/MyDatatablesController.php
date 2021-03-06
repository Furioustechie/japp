<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use App\Appeal;
use App\Doctype;
use App\Document;
use App\Prison;
use App\Sentence;
use App\Court;
use App\Offence;
use App\Status;
use DB;
use Alert;

class MyDatatablesController extends Controller

{

	/**

     * Displays front end view

     *

     * @return \Illuminate\View\View

     */

    public function index()

    {

    	return view('datatables');

    }
    public function testedit($id)
    {
       $edit = DB::table('courts')->where('id', $id)->first();
        //echo $user->name_en;
        return view('/datatables')->with('edit',$edit);
    }
    /**

     * Process ajax request.

     *

     * @return \Illuminate\Http\JsonResponse

     */

    public function getData()

    {

        //return Datatables::of(Court::query())->make(true);
        $uses = Court::select(['id', 'name_en', 'name_bn']);
        return Datatables::of($uses)
            ->addColumn('action', function ($uses) {
                return '<a href="#edit-'.$uses->id.'"  <i class="material-icons">add</i></a>'
                .'<a href="testedit/'.$uses->id.'" <i class="material-icons">edit</i></a>'
                .'<button data-toggle="modal" data-target="#edit_court"  data-id="'.$uses->id.'" class="btn btn-primary edit_court">Edit</button> '
                .'<a href="#" class="CourtDelete delete" data-id="'.$uses->id.'"><i class="material-icons">delete</i></a>';
              

            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['delete' => 'delete','action' => 'action'])
            ->make(true);
            
           
    }
    public function getPrisonData()

    {

        //return Datatables::of(Court::query())->make(true);
        //$prisonName = DB::select(['id', 'name']);
        $prisonName = DB::table('prisons')->select('id', 'name')->get();
       
        return Datatables::of($prisonName)
            ->addColumn('action', function ($prisonName) {
                return '<a href="#edit-'.$prisonName->id.'"  <i class="material-icons">add</i></a>'
                
                .'<button data-toggle="modal" data-target="#edit_prisonName"  data-id="'.$prisonName->id.'" class="btn btn-primary edit_prisonName">Edit</button> '
                .'<a href="#" class="PrisonDelete delete" data-id="'.$prisonName->id.'"><i class="material-icons">delete</i></a>';
              

            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['delete' => 'delete','action' => 'action'])
            ->make(true);
          
            
    }

}


?>

