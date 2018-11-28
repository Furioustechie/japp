<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    //Table name
    protected $table = 'appeals';
    //protected $table = 'newappeals';
    
    public function document(){
        return $this->hasMany('App\Document');
    }
    
}
