<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories'; // Specify the table name

    protected $fillable = ['name', 'description']; // Define the fillable properties

    // Define the relationships
    public function posts()
    {
        return $this->hasMany(Post::class); //suppose  u have a Post model
    }


    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }

}
