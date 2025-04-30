@props(['items'])

<nav class="header__menu">
    <ul class="header__menu-list">
        @foreach ($items as $item)
            <li class="header__menu-item">
                <a href="{{ route($item['route']) }}"
                    class="header__menu-link {{ request()->routeIs($item['route']) ? 'active' : '' }}">
                    {{ $item['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
