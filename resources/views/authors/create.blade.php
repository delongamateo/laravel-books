@extends('layouts.main', [
    'title' => 'Create new author'
])

@section('content')

<h2>Create a new author</h2>

<form action="{{ action('AuthorController@store') }}" method="post">
    @csrf

    @component('components.form-group', [
        'label' => 'Name',
        'name' => 'name'
    ])
        <input type="text" name="name" value="">

    @endcomponent

    @component('components.form-group', [
        'label' => 'Biography',
        'name' => 'bio'
    ])
        <textarea name="bio" cols="30" rows="10"></textarea>

    @endcomponent

    <div class="form-group form-group--submit">

        <input type="submit" value="Save">

    </div>

</form>

@endsection