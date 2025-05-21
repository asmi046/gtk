<ol class="stages__list">
    @foreach ($stages as $stage)
        <li class="stages__list-item">
            <h3 class="stages__list-title">{{ $stage['title'] }}</h3>
            <div class="stages__list-text">
                <p>{{ $stage['description'] }}</p>
            </div>
        </li>
    @endforeach
</ol>
