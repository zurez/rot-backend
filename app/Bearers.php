<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bearers extends Model
{
    //
    protected $table='bearers';
    
    protected $fillable = [
        'title',
        'max_volunteer',
        'image_url',
        'quote',
        'description',
        'responsibility',
        'organisation',
        'user_id',
        'url',
        'phone'
    ];
}