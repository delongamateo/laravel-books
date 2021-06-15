<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Bookshop;

class Book extends Model
{

    protected $fillable = [
        'title',
        'authors',
        'image'
    ];

    public function publisher(){
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }

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

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}
