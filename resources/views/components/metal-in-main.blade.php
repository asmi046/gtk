<section class="stages">
    <div class="stages__bg">
        <div class="container">
            <h2 class="section-title section-title">Производство металоконструкций</h2>
            <div class="product-cards">
                @foreach ($metalconstructs as $item)
                    <x-cards.metal :item="$item"></x-cards.metal>
                @endforeach
            </div>
        </div>
    </div>
</section>
