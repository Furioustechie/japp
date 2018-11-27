<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctype extends Model
{
    //
    protected $table = 'doctype';

    public function appeals(){
        return $this->belongsTo('App\Appeal');
    }
    
    public function documents(){
        return $this->belongsTo('App\Document');
    }
}
