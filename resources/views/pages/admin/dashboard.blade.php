@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')
<div class="container">
    @if (session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
    @elseif (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <h1>Tableau de board Administrateur</h1>
    <p>Vous êtes connecté en tant qu'admin !</p>
    <ul>
        <li>Nom : {{ $user->name}}</li>
        <li>Role : {{ $user->role}}</li>
        <li>Email : {{ $user->email }}</li>
    </ul>
</div>
@endsection
