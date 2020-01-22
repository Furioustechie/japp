<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offence extends Model
{
    //
    use SoftDeletes;
    protected $table = 'offences';
    protected $dates = ['deleted_at'];
}
    
