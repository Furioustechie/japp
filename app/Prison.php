<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prison extends Model
{
    //Tabkle name
    protected $table = 'prisons';
    public function user(){
        return $this->hasMany('App\User');
    }
    
    
}