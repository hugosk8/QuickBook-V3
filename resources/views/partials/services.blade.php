<section class="services-container">
    @foreach ($services as $service)
    <article class="card">
        <div class="content">
            <h2>{{ $service->name }}</h2>
            <span>{{ $service->duration }} heures</span>
            <p>{{ $service->description }}</p>
            <span>{{ $service->price }} €</span>
        </div>
        <a class="cta" href="{{ route('reservation') }}">Prendre rendez-vous</a>
    </article>
    @endforeach
</section>

@if ($services->hasPages())
<div class="pagination">
    {{ $services->links() }}
</div>
@endif
