<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Testing\Fluent\Concerns\Has;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

//    Task 6
    public function countPostsByCategory($categoryId)
    {
        return $this->where('category_id', $categoryId)->count();
    }


//    Task 7
    public static function getSoftDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }


}
