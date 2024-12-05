@extends(auth()->check() && auth()->user()->role === 'admin' ? 'layouts.admin' : (auth()->check() ? 'layouts.app' : 'layouts.guest'))

@section('title', 'Accueil')

@section('content')
<section class="head">
    <h1>Votre prochaine aventure commence ici</h1>
    {{-- <div class="input">
        <input type="text" placeholder="Recherchez une prestation..">
        <button>Rechercher</button>
    </div> --}}
</section>

<section class="presentation switch">
    <div class="title" aria-label="titre de la page">
        <h2 class="switch">Explorez plus, vivez mieux</h2>
        <p>Vivez des aventures exceptionnelles et redécouvrez l'Occitanie</p>
    </div>
    
    <div class="infos first" aria-label="informations sur l'agence">
        <div class="img-container">
            <img src="{{ asset('images/home/occitanie.webp') }}" alt="Côte de Banyuls-sur-Mer">
        </div>
        <div class="text-container">
            <h3 class="dark-mode-title">Découvrez l'Occitanie autrement</h3>
            <p>Notre agence vous propose des excursions uniques à travers les plus beaux sites naturels et culturels de la région. Que vous soyez amateurs de randonnées en montagne, de balades en bord de mer ou de découvertes culturelles, nous avons une expérience qui vous correspond. Chaque visite est conçue pour vous offrir une immersion totale, avec des guides passionnés et un cadre naturel exceptionnel.</p>
        </div>
    </div>

    <div class="infos" aria-label="informations sur l'agence">
        <div class="text-container">
            <h3 class="switch">Des excursions sur mesure</h3>
            <p>Nous proposons des prestations adaptées à vos envies : des circuits guidés en petits groupes, des visites privées ou encore des aventures en plein air. Laissez-vous séduire par la richesse de l'Occitanie, de ses vignobles à ses montagnes, en passant par ses plages et ses villages pittoresques. Nos services sont conçus pour vous garantir des moments inoubliables, que ce soit pour une journée de détente ou une aventure sportive.</p>
        </div>
        <div class="img-container">
            <img src="{{ asset('images/home/occitanie2.webp') }}" alt="Grottes de Gargas">
        </div>
    </div>
</section>

<section class="services">
    <a href="{{ route('prestations') }}">
        <h2 aria-label="Voir nos prestations">Découvrez nos visites guidées et excursions</h2>
    </a>
</section>

<section class="carousel switch" aria-label="Caroussel d'images des excursions">
    <div class="slick-carousel">
        <div><img src="{{ asset('images/home/carousel1.webp') }}" alt="Clocher au milieu des champs"></div>
        <div><img src="{{ asset('images/home/carousel2.webp') }}" alt="Mer turquoise vue des rochers"></div>
        <div><img src="{{ asset('images/home/carousel3.webp') }}" alt="Mer vue du haut d'une falaise"></div>
        <div><img src="{{ asset('images/home/carousel4.webp') }}" alt="Les Gorges vvu du haut d'une colline"></div>
        <div><img src="{{ asset('images/home/carousel5.webp') }}" alt="Falaise au milieu d'une foret"></div>
        <div><img src="{{ asset('images/home/carousel6.webp') }}" alt="Ville au sommet d'une montagne"></div>
        <div><img src="{{ asset('images/home/carousel7.webp') }}" alt="Sommet des Cévennes"></div>
    </div>
</section>
@endsection
