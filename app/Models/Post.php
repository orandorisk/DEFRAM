<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // menghubungkan model post dengan model category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
