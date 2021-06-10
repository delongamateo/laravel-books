@extends('layouts.main', [
    'title' => 'Category: ' . $category->name
])

@section('content')

        <h1>Category: {{ $category->name }}</h1>

        {{-- list of categories --}}
        <h2>Subcategories</h2>

        <div class="categories">

            @foreach ($subcategories as $subcategory)

                <li>
                    <a href="{{ action('EshopController@subcategory', [$subcategory->id]) }}">{{ $subcategory->name }}</a>
                </li>

            @endforeach

        </div>

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