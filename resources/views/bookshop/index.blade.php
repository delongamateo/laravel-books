@extends('layouts.main', [
    'title' => 'List of bookshops',
    'current_menu_item' => 'bookshops'
])

@section('content')

<h1>List of bookshops</h1>

<a class="create-button" href="{{ action('BookshopController@create') }}">Create a new bookshop</a>

<div class="bookshops">

    @foreach ($bookshops as $bookshop)

        <div class="bookshop">
            <h3 class="bookshop__name">{{ $bookshop->name }}</h3>

            <div class="bookshop__city">{{ $bookshop->city }}</div>
        </div>

    @endforeach

</div>

@endsection