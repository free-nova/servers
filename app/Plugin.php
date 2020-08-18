<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    protected $fillable = [
        'name', 'url', 'expires', 'notes'
    ];

    protected $casts = ['expires' => 'date'];
}
