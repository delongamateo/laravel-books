<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Models\Book;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){
        $publishers = Publisher::all();

        return view('publishers.index', compact('publishers'));
    }

    public function show($id){
//        $publisher = Publisher::findOrFail($id);
        $publisher = Publisher::with('books')->findOrFail($id);

//        $books = Book::where('publisher_id', $publisher->id)->get();
        $books = $publisher->books;

//        return view('publishers.show', compact('publisher', 'books'));
        return view('publishers.show', compact('publisher'));
    }
}
