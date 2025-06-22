<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetalStructures extends Model
{
    protected $fillable = [
        'title',
        'sub_title',
        'slug',
        'template',
        'img',
        'description',
        'images',
        'files',
        'sections',
    ];

    protected $casts = [
        'images' => 'array',
        'files' => 'array',
        'sections' => 'array',
    ];


    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }
}
