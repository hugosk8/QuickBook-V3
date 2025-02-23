@extends('layouts.admin')

@section('title', 'Liste des rendez-vous')

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
        <h1>Liste des rendez-vous</h1>
    
        <a class="btn" href="{{ route('admin.appointments.create') }}">Ajouter</a>
    
        @if ($appointments->isEmpty())
            <p>Aucun rendez-vous n'a été trouvé.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Client</td>
                        <td>Prestation</td>
                        <td>Date</td>
                        <td>Statut</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                    <tr>
                        <td>
                            <a href="{{ route('admin.appointments.show', $appointment->id) }}">
                                {{ $appointment->id }}</td>
                            </a>
                        <td>
                            <a href="{{ route('admin.users.show', $appointment->user->id) }}">
                                {{ $appointment->user->name }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('admin.services.show', $appointment->service->id) }}">
                                {{ $appointment->service->name }}
                            </a>
                        </td>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->status }}</td>
                        <td class="action-buttons">
                            <button type="button" class="btn-delete" onclick="confirmDelete({{$appointment->id}})">Supprimer</button>
                            <a href="{{ route('admin.appointments.edit', $appointment->id) }}" class="btn-modify">Modifier</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    
            {{-- Modale de confirmation --}}
            <div id="deleteModal">
                <div class="modal-content">
                    <p>Voulez vous supprimer ce rendez-vous?</p>
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-confirm" >Confirmer</button>
                        <button type="button" class="btn-cancel" onclick="closeModal()">Annuler</button>
                    </form>
                </div>
            </div>
        @endif
    </section>
</div>
@endsection

<script>
    function confirmDelete($appointmentId) {
        const deleteForm = document.getElementById('deleteForm');
        deleteForm.action = `${$appointmentId}`;

        document.getElementById('deleteModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('deleteModal').style.display = 'none';
    }
</script>