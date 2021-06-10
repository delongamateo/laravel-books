@extends('layouts.main', [
    'title' => 'Edit an author'
])

@section('content')

<h2>Edit an author: {{ $author->name }}</h2>

<form action="{{ action('AuthorController@update', [$author->id]) }}" method="post">
    @csrf
    @method('put')

    @component('components.form-group', [
        'label' => 'Name',
        'name' => 'name'
    ])
        <input type="text" name="name" value="{{ $author->name }}">

    @endcomponent

    @component('components.form-group', [
        'label' => 'Biography',
        'name' => 'bio'
    ])
        <textarea name="bio" cols="30" rows="10">{{ $author->bio }}</textarea>

    @endcomponent

    <div class="form-group form-group--submit">

        <input type="submit" value="Save">

    </div>

</form>

@endsection