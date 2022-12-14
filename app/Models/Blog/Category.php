<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'slug', 'image', 'content'];
}
