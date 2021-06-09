<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books eshop</title>
</head>
<body>

    <h1>Books eshop</h1>

    {{-- list of categories --}}
    <h2>Categories</h2>

    <div class="categories">

        @foreach ($categories as $category)

            <li>{{ $category->name }}</li>

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

</body>
</html>