<header id="header">
    <!-- minimal header placeholder -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">E-Bike Kits</a>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('configurator.index') }}">Конфигуратор</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('order.confirm') }}">Заказ</a></li>
        </ul>
    </nav>
</header>