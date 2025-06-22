@props(['items', 'prefix' => 'menu'])

<nav class="{{ $prefix }}__navigation">
    <ul class="{{ $prefix }}__navigation-list">
        <x-menues.puncts name="Боковое меню" />
    </ul>
</nav>
