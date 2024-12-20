<nav x-data="{ open: false }" role="navigation">
    <ul class="nav-links">
        <li>
            <x-nav-link :href="route('home')" class="{{ request()->routeIs('home') ? 'active-link' : '' }}" aria-label="Accueil">
                {{ __('Accueil') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('admin.dashboard')" class="{{ request()->routeIs('admin.dashboard') ? 'active-link' : '' }}" aria-label="Tableau de bord">
                {{ __('Tableau de bord') }}
            </x-nav-link>
        </li>
        <li class="{{ request()->routeIs('admin.users.list', 'admin.users.create') ? 'nav-item dropdown active-link' : 'nav-item dropdown' }}" aria-label="Utilisateurs">
            <x-nav-link :href="route('admin.users.list')" class="{{ request()->routeIs('admin.users.list', 'admin.users.create') ? 'active-link' : '' }}">
                {{ __('Utilisateurs') }}
            </x-nav-link>
        </li>
        <li class="{{ request()->routeIs('admin.services.list', 'admin.services.create') ? 'nav-item dropdown active-link' : 'nav-item dropdown' }}" aria-label="Services">
            <x-nav-link :href="route('admin.services.list')" class="{{ request()->routeIs('admin.services.list', 'admin.services.create') ? 'active-link' : '' }}">
                {{ __('Services') }}
            </x-nav-link>
        </li>
        <li class="{{ request()->routeIs('admin.appointments.list', 'admin.appointments.create') ? 'nav-item dropdown active-link' : 'nav-item dropdown' }}" aria-label="Rendez-vous">
            <x-nav-link :href="route('admin.appointments.list')" class="{{ request()->routeIs('admin.appointments.list', 'admin.appointments.create') ? 'active-link' : '' }}">
                {{ __('Rendez-vous') }}
            </x-nav-link>
            {{-- <ul class="dropdown-menu">
                <li>
                    <x-nav-link :href="route('admin.payments.create')" class="{{ request()->routeIs('admin.payments.create') ? 'active-link' : '' }}">
                        {{ __('Ajouter') }}
                    </x-nav-link>
                </li>
            </ul> --}}
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" 
                    onclick="event.preventDefault(); 
                        this.closest('form').submit();">
                    {{ __('Déconnexion') }}
                </x-dropdown-link>
            </form>
        </li>
    </ul>
    <button class="burger">
        <span></span>
        <span></span>
        <span></span>
    </button>
</nav>