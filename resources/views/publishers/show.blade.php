@extends('layouts.main', ['title' => $publisher->title])

@section('content')
    <h2>{{ $publisher->title }}</h2>
    <a href="{{ action('PublisherController@index') }}">Back to index of publishers</a>

@endsection
