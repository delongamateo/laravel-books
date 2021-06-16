@extends('layouts.main', ['title' => 'New book'])

@section('content')
    <h2>New Reservation</h2>
    <a href="{{ action('ReservationController@index') }}">Back to index of reservations</a>

    <form method="post" action="{{ action('ReservationController@store') }}">
        @csrf

        <div class="form-group">
            <label for="">Book</label>
            <select name="book_id">
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">From</label>
            <input type="date" name="from">
        </div>

        <div class="form-group">
            <label for="">To</label>
            <input type="date" name="to">
        </div>

        <div class="form-group form-group--submit">
            <input type="submit" value="Create">
        </div>


    </form>
@endsection
