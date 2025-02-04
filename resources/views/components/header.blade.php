<header>
    <nav class="navbar">
        <ul class="navbar-container">
            <!-- Logo y Enlace a la izquierda -->
            <li class="navbar-item left">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/icons/logoWeb.png') }}" alt="Web logo" />
                </a>
                <!-- Enlace "Vuelos" al lado del logo -->
                <a href="" class="menu-link">Vuelos</a>
            </li>
            
            <!-- Icono de Usuario a la derecha -->
            <li class="navbar-item right">
                <a href="#">
                    <img src="{{ asset('img/icons/user.png') }}" alt="BlueHorizon icon" />
                </a>
            </li>
        </ul>
    </nav>
</header>
