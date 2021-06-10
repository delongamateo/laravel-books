@extends('layouts.main', [
    'title' => 'Subcategory: ' . $subcategory->name
])

@section('content')

    <h1>Subcategory: {{ $subcategory->name }}</h1>

    {{-- link to parent category --}}
    @if ($category)

        <a href="{{ action('EshopController@category', [ $category->id ]) }}">Back to category {{ $category->name }}</a>

    @endif

    {{-- list of books --}}
    <h2>Books</h2>

    <div class="books">

        @foreach ($books as $book)

            <div class="book">

                <h3 class="book__title">{{ $book->title }}</h3>

                <div class="book__author">{{ $book->authors }}</div>

                <img src="{{ $book->image }}" alt="Cover of {{ $book->title }}">

                <a href="#">Detail of a book</a>

            </div>

        @endforeach

    </div>

@endsection