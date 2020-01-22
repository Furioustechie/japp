<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newappeal extends Model
{
    //
    protected $table = 'newappeals';

    public function document(){
        return $this->hasMany('App\Document');
    }
    public function prison(){
        return $this->hasMany('App\Prison');
    }
    public function prisoner(){
        return $this->hasMany('App\Prisoner');
    }
    public function court(){
        return $this->hasMany('App\Court');
    }
    public function case(){
        return $this->hasMany('App\Cases');
    }
    public function offence(){
        return $this->hasMany('App\Offence');
    }
    public function sentence(){
        return $this->hasMany('App\Sentence');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
