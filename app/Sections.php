<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    //Table name
    protected $table = 'law_section';
    //protected $table = 'newappeals';
    
    public function acts(){
        return $this->belongsTo('App\Acts');
    }
    
    
}
