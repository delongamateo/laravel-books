@extends('layouts.main', [
    'title' => 'Home',
    'current_menu_item' => 'home'
])

@section('content')

    <h1>Books eshop</h1>

    {{-- list of categories --}}
    <h2>Categories</h2>

    <div class="categories">

        @foreach ($categories as $category)

            <li>
                <a href="{{ action('EshopController@category', [$category->id]) }}">{{ $category->name }}</a>
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

                <div class="book_category">{{ optional($book->category)->name }}</div>

                <img src="{{ $book->image }}" alt="Cover of {{ $book->title }}">

                <ul>
                    @foreach ($book->bookshops as $bookshop)
                        <li>Available at {{ $bookshop->name }}</li>
                    @endforeach
                </ul>

                <a href="#">Detail of a book</a>

            </div>

        @endforeach

    </div>

    @endsection