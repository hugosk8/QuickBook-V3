@extends(auth()->check() && auth()->user()->role === 'admin' ? 'layouts.admin' : (auth()->check() ? 'layouts.app' : 'layouts.guest'))

@section('title', 'Reservation')

@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Réserver une prestation</h1>
    <form action="{{ route('store-appointment') }}" id="appointment_data" method="POST">
        @csrf

        <!-- Sélection de la prestation -->
        <div class="service">
            <label for="service_id">Choisissez votre prestation</label>
            <select id="service_id" name="service_id" required>
                <option selected disabled value="">Choisissez votre prestation</option>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }} ({{ $service->duration }} heures)</option>
                @endforeach
            </select>

            <label for="">Nombre de participants :</label>
            <input type="number" min="1" max="5">
        </div>

        <!-- Sélection de la date -->
        <div class="date">
            <label for="appointment_date">Choisir une date et une heure :</label>
            <input type="text" style="display: none" id="appointment_date" name="appointment_date">
        </div>

        <button class="btn" type="submit">Réserver</button>
    </form>
</div>
@endsection

@vite(['resources/js/flat-picker.js'])