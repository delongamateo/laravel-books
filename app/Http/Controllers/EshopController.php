<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Category;
use App\Models\Subcategory;

class EshopController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('title')->get();

        $categories = Category::orderBy('name')->get();

        return view('eshop.index', compact('books', 'categories'));
    }

    public function category($category_id)
    {
        $category = Category::findOrFail($category_id);

        $subcategories = Subcategory::where('category_id', $category_id)->orderBy('name')->get();

        $books = Book::where('category_id', $category_id)->orderBy('title')->get();

        return view('eshop.category', compact('category', 'subcategories', 'books'));
    }

    public function subcategory($subcategory_id)
    {
        $subcategory = Subcategory::findOrFail($subcategory_id);

        $category = Category::find($subcategory->category_id);

        $books = Book::where('subcategory_id', $subcategory_id)->orderBy('title')->get();

        return view('eshop.subcategory', compact('subcategory', 'category', 'books'));
    }
}
