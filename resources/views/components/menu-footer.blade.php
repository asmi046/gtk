@props(['items'])

<nav class="footer__menu">
    <ul class="footer__menu-list">
        @foreach ($items as $item)
            <li class="footer__menu-item">
                <a href="{{ route($item['route']) }}" class="footer__menu-link">
                    {{ $item['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
