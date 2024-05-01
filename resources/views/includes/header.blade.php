<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">РЕЕСТР КВАРТИР</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Реестр квартир</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <x-nav-link href="{{ route('index') }}" :active="request()->is('/')">Главная</a></x-nav-link>
                        <x-nav-link href="{{ route('houses.index') }}" :active="request()->is('houses*')">Дома</a></x-nav-link>
                        <x-nav-link href="{{ route('persons.index') }}" :active="request()->is('persons*')">Люди</a></x-nav-link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>