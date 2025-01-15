@extends(auth()->check() && auth()->user()->role === 'admin' ? 'layouts.admin' : (auth()->check() ? 'layouts.app' : 'layouts.guest'))

@section('title', 'Nos prestations')

@section('content')
<div class="container">
    <h1>Nos Prestations</h1>
    <div id="services-container">
        @include('partials.services', ['services' => $services])
    </div>
</div>
@endsection
