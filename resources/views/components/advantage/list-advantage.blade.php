<ol class="advantages__list">
    @foreach ($advantages as $advantage)
        <li class="advantages__list-item">
            <div class="advantages__list-head">
                <span class="advantages__list-number">{!! sprintf('%02d', $advantage['order']) !!}</span>
                <h3 class="advantages__list-title">{!! $advantage['title'] !!}</h3>
            </div>
            <p class="advantages__list-text">{{ $advantage['description'] }}</p>
        </li>
    @endforeach
</ol>
