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
                . '<a href="testedit/'.$uses->id.'" <i class="material-icons">edit</i></a>' . 
                '<a href="#" class="CourtDelete delete" data-id="'.$uses->id.'"> <i class="material-icons">delete</i></a>';
              

            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['delete' => 'delete','action' => 'action'])
            ->make(true);

           
    }

}


?>