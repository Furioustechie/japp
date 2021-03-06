<?php

namespace App\Http\Controllers;
use PDF;

use DB;
use URL;
use Carbon;
use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'Bangladesh Prison Authority XX'];
        $queryAll = DB::select('SELECT prisons.name, count(newappeals.id) TotalAppeals, districts.name as districtName, divisions.name as divisionName FROM `prisons` 
                            Left JOIN newappeals ON newappeals.prisonid = prisons.id
                            INNER JOIN districts ON districts.id = prisons.disid
                            INNER JOIN divisions ON divisions.id = districts.divid
                            GROUP BY prisons.name');
        $mytime = Carbon\Carbon::now();
        $send['queryAll']=$queryAll;
        $send['mytime']=$mytime;

       

        $pdf = PDF::loadView('myPDF', $send);
        $filename = public_path('files/all_records.pdf');
        $pdf->save($filename);

        //$filename = base_path('public\files\all_records.pdf');
        //return $pdf->stream('test');
        //$filename = public_path('all_records.pdf', ['disk' => 'my_files']);
       
        //$pdf->save($filename); 
        

       
        //echo $mytime->toDateTimeString();
        //return $pdf->stream('All_Records.pdf');
        //return PDF::loadFile(public_path().'test')->save(URL::asset('assets/img/all_Record.pdf'))->stream('all_Record.pdf');
        return view('test');
    }
    
    function test(){
        return view('test');
    }
}
