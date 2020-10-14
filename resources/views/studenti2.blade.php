@extends('layouts.app')
@section('title', 'Chi siamo')
@section('content')

    <div class="container">
        <div class="card-deck mt-3">
        @foreach ($students as $student)

            <div class="card">
                <img src="{{ $student->img }}" class="card-img-top" alt="{{ $student->nome }}">
                <div class="card-body">
                    <a href="{{ route('Student.show', [$student->id] ) }}"><h5 class="card-title">{{ $student->nome . " (" . $student->anni .")"  }}</h5></a>
                    <p class="card-text">Assunt{{ ($student->genere == 'm') ? 'o' : 'a' }} da {{ $student->azienda }}</p>
                    <p class="card-text"><small class="text-muted">Ruolo: {{ $student->ruolo }}</small></p>
                </div>
            </div>

        @endforeach
        </div>
    </div>

@endsection
