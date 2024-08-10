<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'title',
        'content',
        'image',
        'likes',
        'is_published',
        'created_at',
        'updated_at',
    ];
}
