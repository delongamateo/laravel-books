<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Bookshop;

class Book extends Model
{
    use HasFactory;

    /**
     * relationship to 1 category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bookshops()
    {
        return $this->belongsToMany(Bookshop::class);
    }
}
