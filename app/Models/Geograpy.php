<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Geograpy extends Model
{
    public $fillable = [
        'name',
        'geo',
        'description'
    ];
}
