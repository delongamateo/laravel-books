@extends('layouts.main', ['title' => $book->title])

@section('content')
    <h2>{{ $book->title }}</h2>
    <a href="{{ action('BookController@index') }}">Back to index of books</a>
    <img src="{{ $book->image }}" alt="{{ $book->title }}">
    <h3>{{ $book->title }}</h3>
    <p>{{ $book->authors }}</p>

    @if($book->publisher)
        <p>Published by: {{ $book->publisher->title }}</p>
    @endif

    <p>
        <a href="{{ action('BookController@edit', [$book->id]) }}">Edit</a>
        <form method="post" action="{{ action('BookController@destroy', [$book->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>

    <h3>Order</h3>
    <form method="post" action="{{ action('OrderController@store', $book->id) }}">
        @csrf

        {{-- <input type="hidden" name="book_id" value="{{ $book->id }}"> --}}

        <input type="number" min="0" step="1" name="quantity">
        <input type="submit" value="Submit">
    </form>

    <h3>Reviews</h3>
    <form method="post" action="{{ action('BookController@storeReview', $book->id) }}">
        @csrf
        <textarea name="text" cols="30" rows="10"></textarea>

        {{-- <input type="hidden" name="book_id" value="{{ $book->id }}"> --}}

        <input type="number" min="0" max="10" step="1" name="rating">
        <input type="submit" value="Submit">
    </form>

    @foreach($book->reviews as $review)
        <p>
            {{ $review->text }}
        </p>
    @endforeach

@endsection
