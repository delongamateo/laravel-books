@extends('layouts.main', ['title' => $book->title])

@section('content')
    <h2>{{ $book->title }}</h2>
    <a href="{{ action('BookController@index') }}">Back to index of books</a>
    <img src="{{ $book->image }}" alt="{{ $book->title }}">
    <h3>{{ $book->title }}</h3>
    <p>{{ $book->authors }}</p>
    <p>
        <a href="{{ action('BookController@edit', [$book->id]) }}">Edit</a>
        <form method="post" action="{{ action('BookController@destroy', [$book->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>
@endsection
