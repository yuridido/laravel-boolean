@extends('layouts.app')
@section('title', 'Chi siamo')
@section('content')

    <div class="container mt-3">
            <div class="card limite">
                <img src="{{ $student->img }}" class="card-img-top" alt="{{ $student->nome }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nome . " (" . $student->anni .")"  }}</h5>
                    <p class="card-text">Assunt{{ ($student->genere == 'm') ? 'o' : 'a' }} da {{ $student->azienda }}</p>
                    <p class="card-text"><small class="text-muted">Ruolo: {{ $student->ruolo }}</small></p>
                    <p class="card-text">{{$student->descrizione }}</p>
                </div>
            </div>
    </div>

@endsection
