@extends('layouts.app')

@section('title', 'Informations du redez-vous')

@section('content')
<div class="container">
    <section class="status-message">
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </section>

    <section class="main">
        <div class="card">
            <h1>Informations du rendez-vous</h1>
            <p><strong>Client :</strong> {{ $appointment->user->name }}</p> 
            <p><strong>Prestation :</strong> {{ $appointment->service->name }}</p>
            <p><strong>Date :</strong> {{ $appointment->date->format('d/m/Y') }}</p>
            <p><strong>heure :</strong> 10h</p>
        </div>
    </section>
</div>
@endsection
