<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->orders;


        return view('orders.index', compact('orders'));
    }

    public function store($book_id, Request $request)
    {
        $book = Book::findOrFail($book_id);

        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['book_id'] = $book_id;

        Order::create($data);

        return redirect(action('OrderController@index'));
    }
}
