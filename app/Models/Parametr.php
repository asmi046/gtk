<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parametr extends Model
{
    public $fillable = [
        'str_id',
        'section',
        'title',
        'value',
        'img',
    ];
}
