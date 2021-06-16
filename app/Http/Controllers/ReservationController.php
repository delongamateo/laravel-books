<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        $books = Book::all();
        return view('reservations.create', compact('books'));
    }

    public function store(Request $request)
    {
        $reservation = Reservation::create($request->all());

        return redirect(action('ReservationController@index'));
    }
}
