@extends('layouts.app')
@section('title', 'Chi siamo')
@section('content')
<div>
    <div class="card-deck mt-3">
        @foreach ($data as $key => $student)
        <div class="card mb-3 scheda" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4 porta-foto">
                    <img src="{{ $student['img'] }}" class="card-img foto-studenti" alt="{{ $student['nome'] }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="{{ route('Student.slug', ['slug' => $student['slug']]) }}"><h5 class="card-title">{{ $student['nome'] . " (" . $student['anni'] .")" }} </h5></a>
                        <p class="card-text">assunt{{($student['genere'] == 'm' ? 'o' : 'a')}} da {{$student['azienda'] }}</p>
                        <p class="card-text"><small class="text-muted">{{ $student['descrizione'] }}</small></p>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection
