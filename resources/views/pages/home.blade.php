@extends('layouts.main-layout')
@section('title')
    <title>Home</title>
@endsection

@section('contents')
    @foreach ($players as $player)
        @include('components.player')
    @endforeach
@endsection