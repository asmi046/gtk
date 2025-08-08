<section id="metal_in_main" class="stages">
        <div class="container">
            <h2 class="section-title section-title">Производство металоконструкций</h2>
            <div class="product-cards">
                @foreach ($metalconstructs as $item)
                    <x-cards.metal :item="$item"></x-cards.metal>
                @endforeach
            </div>
    </div>
</section>
