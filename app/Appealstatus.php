<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appealstatus extends Model
{
    //
    protected $table = 'appealstatus';


    public function statuses(){
        return $this->hasMnay('App\Status');
    }
}
