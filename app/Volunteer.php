<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    //
    protected $table='volunteer';
    protected $fillable = ['user_id','event_id'];
}
