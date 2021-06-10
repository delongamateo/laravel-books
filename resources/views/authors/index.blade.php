@extends('layouts.main', [
    'title' => 'List of authors',
    'current_menu_item' => 'authors'
])

@section('content')

<ul>

    @foreach ($authors as $author)

        <li>{{ $author->name }}</li>

    @endforeach

</ul>

@endsection
