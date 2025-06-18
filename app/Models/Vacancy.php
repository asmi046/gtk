<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'title',
        'company_name',
        'city',
        'description',
        'employment_type',
        'work_schedule',
        'salary',
        'experience',
        'education',
    ];
}
