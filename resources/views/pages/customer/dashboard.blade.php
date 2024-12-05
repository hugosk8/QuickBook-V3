@extends('layouts.app')

@section('title', 'tableau de bord')

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
        <h1>Tableau de bord</h1>
        <p>Vous êtes connecté !</p>
        <ul>
            <li>Nom : {{ $user->name}}</li>
            <li>Email : {{ $user->email }}</li>
        </ul>

        <div class="appointments">
            <h2>Mes rendez-vous</h2>
            <div class="cards-container">

                @if ($appointments->isEmpty())
                    <p>Aucun rendez-vous programmé</p>
                @else
                    @foreach ($appointments as $appointment)
                        <div class="card">
                            <a href="{{ route('appointment_details', ['id' => $appointment->id]) }}">
                                <h3>{{ $appointment->service->name }}</h3>
                            </a>
                            <span>Date : {{ $appointment->date->format('d/m//Y') }}</span>
                            <button type="button" class="btn-delete" onclick="confirmDelete({{$appointment->id}})">Annuler</button>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        {{-- Modale de confirmation --}}
        <div id="deleteModal">
            <div class="modal-content">
                <p>Voulez vous annuler ce rendez-vous?</p>
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-confirm" >Confirmer</button>
                    <button type="button" class="btn-cancel" onclick="closeModal()">Annuler</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

<script>
    function confirmDelete($appointmentId) {
        const deleteForm = document.getElementById('deleteForm');
        deleteForm.action = `/appointments/${$appointmentId}`;

        document.getElementById('deleteModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('deleteModal').style.display = 'none';
    }
</script>
