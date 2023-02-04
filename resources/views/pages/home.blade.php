@extends('layouts.main-layout')
@section('title')
    <title>Home</title>
@endsection

@section('contents')
    <div class="wrapper container">
        @foreach ($players as $player)
            @include('components.player')
        @endforeach
    </div>
@endsection