<header class="header-main">
    <div class="container">

        <nav class="nav-main">
            <a class="nav-logo" href="{{ route('home') }}"><img src="{{ asset("images/nerds-logo.svg") }}"
                                                                alt="Nerds Logo"></a>
            <ul class="nav-menu">
                <li class="nav-item{{ url()->current() == route('home') ? ' nav-item-active' : '' }}"><a href="{{ route('home') }}">Студия</a></li>
                <li class="nav-item"><a href="#">Клиенты</a></li>
                <li class="nav-item{{ url()->current() == route('catalog') ? ' nav-item-active' : '' }}"><a href="{{ route('catalog') }}">Магазин</a></li>
                <li class="nav-item"><a href="#">Контакты</a></li>
                <li class="nav-item nav-item-bucket"><a href="#">Корзина</a></li>
            </ul>
        </nav>



        @yield('header-additional')
    </div>
</header>
