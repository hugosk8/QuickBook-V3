@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')
<div class="container">
    <section class="status-message">
        @if (session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
        @elseif (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif
    </section>

    <section class="main">
        <h1>Tableau de bord Administrateur</h1>
        <p>Vous êtes connecté en tant qu'admin !</p>
        <ul>
            <li>Nom : {{ $user->name}}</li>
            <li>Role : {{ $user->role}}</li>
            <li>Email : {{ $user->email }}</li>
        </ul>
    </section>
</div>
@endsection
