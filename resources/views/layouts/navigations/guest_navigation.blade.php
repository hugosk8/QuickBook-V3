<nav x-data="{ open: false }" role="navigation">
    <ul class="nav-links">
        <li>
            <x-nav-link :href="route('home')" class="{{ request()->routeIs('home') ? 'active-link' : '' }}" aria-label="Accueil">
                {{ __('Accueil') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('login')" class="{{ request()->routeIs('login') ? 'active-link' : '' }}" aria-label="Connexion">
                {{ __('Connexion') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('register')" class="{{ request()->routeIs('register') ? 'active-link' : '' }}" aria-label="Déconnexion">
                {{ __('Creer un compte') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('contact')" class="{{ request()->routeIs('contact') ? 'active-link' : '' }}" aria-label="Contact">
                {{ __('Contact') }}
            </x-nav-link>
        </li>
    </ul>
    <button class="burger">
        <span></span>
        <span></span>
        <span></span>
    </button>
</nav>
