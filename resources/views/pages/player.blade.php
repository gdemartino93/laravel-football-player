@extends('layouts.main-layout')

@section('title')
    <title>Giocatore: {{$player["name"]}} {{$player["surname"]}}</title>
@endsection

@section('contents')
    <div class="wrapper container">
        <div class="col-12 prova">
            @include('components.player')
        </div>
    </div>
@endsection