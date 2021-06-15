@extends('layouts.main', ['title' => $publisher->title])

@section('content')
    <h2>{{ $publisher->title }}</h2>
    <a href="{{ action('PublisherController@index') }}">Back to index of publishers</a>

    <h3>Books</h3>

    @foreach($books as $book)
        <div>
            <h4>{{ $book->title }}</h4>
        </div>
    @endforeach


@endsection
