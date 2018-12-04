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
    
    public function all_appeals(){
       $all_appeals = DB::select('SELECT na.id, p.name, prn.prisoner_name, co.name as court_name, of.name as offence_name
        FROM 
            newappeals na, prisons p, prisoner prn, courts co, offences of, sentences se 
        WHERE 
        na.id = p.id AND
        na.id = prn.id AND
        na.id = co.id');

        return $all_appeals;

    }
}
