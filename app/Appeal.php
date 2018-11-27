<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    //Tabkle name
    protected $table = 'appeals';
   
    
    public function document(){
        return $this->hasMany('App\Document');
    }
}
