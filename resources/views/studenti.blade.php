@extends('layouts.app')
@section('title', 'Chi siamo')
@section('content')
<div>
    <div class="card-group">
        @foreach ($data as $student)
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ $student['img'] }}" class="card-img foto-studenti" alt="{{ $student['nome'] }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student['nome'] . " (" . $student['anni'] .")" }} </h5>
                        <p class="card-text">{{ $student['azienda'] }}</p>
                        <p class="card-text"><small class="text-muted">{{ $student['descrizione'] }}</small></p>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection
