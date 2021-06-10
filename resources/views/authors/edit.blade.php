@extends('layouts.main', [
    'title' => $author->id ? 'Edit an author' : 'Create new author'
])

@section('content')

@if ($author->id) {{-- if the author is already saved == EDIT --}}

    <h2>Edit an author: {{ $author->name }}</h2>

    <form action="{{ route('authors.update', [$author->id]) }}" method="post">
    @method('put')

@else {{-- author is not saved yet == CREATE --}}

    <h2>Create a new author</h2>

    <form action="{{ route('authors.store') }}" method="post">

@endif

    @csrf

    @component('components.form-group', [
        'label' => 'Name',
        'name' => 'name'
    ])
        <input type="text" name="name" value="{{ old('name', $author->name) }}">

    @endcomponent

    @component('components.form-group', [
        'label' => 'Biography',
        'name' => 'bio'
    ])
        <textarea name="bio" cols="30" rows="10">{{ old('bio', $author->bio) }}</textarea>

    @endcomponent

    <div class="form-group form-group--submit">

        <input type="submit" value="Save">

    </div>

</form>

@endsection