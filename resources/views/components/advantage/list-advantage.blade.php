@props([
    'advantages' => [
        [
            'number' => 1,
            'title' => 'Преимущество',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Reiciendis,
            repellat? Sunt, ullam sed. Provident, perferendis aliquid. Consequuntur iure quas itaque, harum
            quae
            numquam quia nobis hic ratione modi quasi rem?',
        ],

        [
            'number' => 2,
            'title' => 'Преимущество',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Reiciendis,
            repellat? Sunt, ullam sed. Provident, perferendis aliquid. Consequuntur iure quas itaque, harum
            quae
            numquam quia nobis hic ratione modi quasi rem?',
        ],

        [
            'number' => 3,
            'title' => 'Преимущество',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Reiciendis,
            repellat? Sunt, ullam sed. Provident, perferendis aliquid. Consequuntur iure quas itaque, harum
            quae
            numquam quia nobis hic ratione modi quasi rem?',
        ],

        [
            'number' => 4,
            'title' => 'Преимущество',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Reiciendis,
            repellat? Sunt, ullam sed. Provident, perferendis aliquid. Consequuntur iure quas itaque, harum
            quae
            numquam quia nobis hic ratione modi quasi rem?',
        ],

        [
            'number' => 5,
            'title' => 'Преимущество',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Reiciendis,
            repellat? Sunt, ullam sed. Provident, perferendis aliquid. Consequuntur iure quas itaque, harum
            quae
            numquam quia nobis hic ratione modi quasi rem?',
        ],

        [
            'number' => 6,
            'title' => 'Преимущество',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Reiciendis,
            repellat? Sunt, ullam sed. Provident, perferendis aliquid. Consequuntur iure quas itaque, harum
            quae
            numquam quia nobis hic ratione modi quasi rem?',
        ],
    ],
])

<ol class="advantages__list">
    @foreach ($advantages as $advantage)
        <li class="advantages__list-item">
            <div class="advantages__list-head">
                <span class="advantages__list-number">{{ sprintf('%02d', $advantage['number']) }}</span>
                <h3 class="advantages__list-title">{{ $advantage['title'] }}</h3>
            </div>
            <p class="advantages__list-text">{{ $advantage['text'] }}</p>
        </li>
    @endforeach
</ol>
