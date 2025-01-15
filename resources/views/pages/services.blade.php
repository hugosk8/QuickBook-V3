@extends(auth()->check() && auth()->user()->role === 'admin' ? 'layouts.admin' : (auth()->check() ? 'layouts.app' : 'layouts.guest'))

@section('title', 'Nos prestations')

@section('content')
<div class="container">
    <h1>Nos Prestations</h1>

    <div class="search-section">
        <label for="search">Rechercher une prestation :</label><br>
        <input type="text" id="search" placeholder="Recherchez une prestation...">
        <ul id="search-results" style="list-style: none; padding: 0; margin: 0;"></ul>
    </div>

    <div id="services-container">
        @include('partials.services', ['services' => $services])
    </div>
</div>
@endsection