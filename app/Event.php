<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table='event';
    protected $fillable = [
        'title',
        'max_volunteer',
        'status',
        'type',
        'description',
        'address',
        'organiser',
        'user_id'
    ];
}
