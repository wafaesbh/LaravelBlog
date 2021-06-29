<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'slug',
        'title',
        'content',
        'published',
        'image',
        'admin_id',
        'category_id'

    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
