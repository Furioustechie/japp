<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    protected $table = 'documents';

    public function doctype(){
        return $this->belongsTo('App\Doctype');
    }
    public function appeal(){
        return $this->beongsTo('App\Appeal');
    }
}
