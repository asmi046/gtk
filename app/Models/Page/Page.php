<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'sub_title',
        'slug',
        'parent',
        'template',
        'img',
        'description',
        'images',
        'files'
    ];


    protected $casts = [
        'images' => 'array',
        'files' => 'array',
    ];


    public function parent_page()
    {
        return $this->BelongsTo(Page::class, 'parent');
    }

}
