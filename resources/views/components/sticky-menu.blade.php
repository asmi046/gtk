@props(['items', 'prefix' => 'menu'])

<nav class="{{ $prefix }}__navigation">
    <ul class="{{ $prefix }}__navigation-list">
        @foreach ($items as $item)
            <li class="{{ $prefix }}__navigation-item">
                <a href="{{ route($item['route']) }}"
                    class="{{ $prefix }}__navigation-link {{ request()->routeIs($item['route']) ? 'active' : '' }}">
                    {{ $item['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
