<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctype extends Model
{
    //
    protected $table = 'doctype';

    
    public function document(){
        return $this->hasMnay('App\Document');
    }
    public function appeal(){
        return $this->hasMnay('App\Appeal');
    }

}
