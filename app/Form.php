<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'time',
        'paket',
        'photo'

    ];
    protected $hidden = [

    ];
}
