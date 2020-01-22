<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acts extends Model
{
    //Table name
    protected $table = 'law_acts';
    //protected $table = 'newappeals';
    
    public function sections(){
        return $this->hasMany('App\Sections');
    }
    
}
