@extends('layouts.app')
@section('title', 'Chi siamo')
@section('content')

<div class="card-deck">
@foreach ($students as $student)

    <div class="card">
        <img src="{{ $student->img }}" class="card-img-top" alt="{{ $student->nome }}">
        <div class="card-body">
            <a href="{{ route('Student.show', [$student->id] ) }}"><h5 class="card-title">{{ $student->nome . " (" . $student->anni .")"  }}</h5></a>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>

@endforeach
</div>

@endsection
