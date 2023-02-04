@extends('layouts.main-layout')
@section('title')
    <title>Home</title>
@endsection

@section('contents')
    @foreach ($players as $player)
        <span>elemento</span>
    @endforeach
@endsection