@extends('layouts.main', ['title' => 'List of books'])

@section('content')
    <h2>List of reservations</h2>
    <a href="{{ action('ReservationController@create') }}">Create new reservation</a>

    <table class="table table-striped">
        <tr>
            <th>Book</th>
            <th>User</th>
            <th>From</th>
            <th>To</th>
        </tr>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->book->title }}</td>
                <td></td>
                <td>{{ $reservation->from }}</td>
                <td>{{ $reservation->to }}</td>
            </tr>
        @endforeach
    </table>
@endsection
