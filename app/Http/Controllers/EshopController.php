<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Category;

class EshopController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('title')->get();

        $categories = Category::orderBy('name')->get();

        return view('eshop.index', compact('books', 'categories'));
    }
}
