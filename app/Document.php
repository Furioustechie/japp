<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    protected $table = 'documents';

    public function doctype(){
        return $this->hasMany('App\Doctype');
    }
    public function appeals(){
        return $this->hasMany('App\Appeals');
    }
}
