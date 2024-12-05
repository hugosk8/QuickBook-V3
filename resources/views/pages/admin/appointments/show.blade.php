@extends('layouts.admin')

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
            <p><strong>Nom : </strong>{{ $appointment->name }}</p>
            <p><strong>Client :</strong> {{ $appointment->user->name }}</p> 
            <p><strong>Prestation :</strong> {{ $appointment->service->name }}</p>
            <p><strong>Date :</strong> {{ $appointment->date }}</p>
            <p><strong>heure :</strong> 10h</p>
            <p><strong>Date de création :</strong> {{ $appointment->created_at->format('d/m/Y') }}</p>
            <p><strong>derniere modification :</strong> {{ $appointment->updated_at->format('d/m/Y') }}</p>
        </div>
    </section>
</div>
@endsection
