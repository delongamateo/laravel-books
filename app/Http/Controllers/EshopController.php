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
        // SELECT * FROM `books` ORDER BY `title`
        $books = Book::orderBy('title')->get();

        // SELECT * FROM `categories` ORDER BY `name`
        $categories = Category::orderBy('name')->get();

        // create a view object
        // /resources/views/  eshop/index  .blade.php
        $view = view('eshop.index', compact('books', 'categories'));

        // return value of the compact:
        [
            'books' => $books,
            'categories' => $categories
        ];

        // produces the above array:
        compact('books', 'categories');

        // return view object
        // -> it is rendered and the rendered text (HTML) is the response
        return $view;
    }

    public function category($category_id)
    {
        $category = Category::findOrFail($category_id);

        // $subcategories = Subcategory::where('category_id', $category_id)->orderBy('name')->get();
        // $subcategories = $category->subcategories;

        // $books = $category->books; // Book::where('category_id', $category_id)->orderBy('title')->get();

        return view('eshop.category', compact('category'));
    }

    public function subcategory($subcategory_id)
    {
        // SELECT * FROM `subcategories` WHERE `id` = $subcategory_id LIMIT 1
        $subcategory = Subcategory::findOrFail($subcategory_id);

        // SELECT * FROM `categories` WHERE `id` = $subcategory->category_id LIMIT 1
        $category = Category::find($subcategory->category_id);

        $books = Book::where('subcategory_id', $subcategory_id)->orderBy('title')->get();

        return view('eshop.subcategory', compact('subcategory', 'category', 'books'));
    }
}
