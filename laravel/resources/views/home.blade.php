@extends('layouts/main')

@section('title', 'HOME')
    
@section('content')
    @forelse ($trains as $train)
        @include('includes.train.card', $train)
    @empty
        <h3>Non ci sono treni!</h3>
    @endforelse
@endsection