@extends('layouts.main', ['title' => 'List of publishers'])

@section('content')
    <h2>List of publishers</h2>
    @forelse($publishers as $publisher)
        <div>
            <h3>{{ $publisher->title }}</h3>
            <p>
                <a href="{{ action('PublisherController@show', [$publisher->id]) }}">Detail</a>
            </p>
        </div>
    @empty
         <p>No publishers created :(</p>
    @endforelse


@endsection
