@extends('layouts.main', ['title' => 'List of Orders'])

@section('content')
    <h2>List of Orders</h2>

    <table class="table table-striped">
        <tr>
            <th>Book</th>
            <th>User</th>
            <th>Quantity</th>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->book->title }}</td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->quantity }}</td>
            </tr>
        @endforeach
    </table>
@endsection
