 <a href="{{ route('metal_structures_page', $item['slug']) }}" class="product-card">
    <div class="product-text">
            <h3 class="product-title">{{ $item['title'] }}</h3>
            <p class="product-subtitle">{{ $item['sub_title'] }}</p>
            <span class="product-link">Подробнее...</span>
    </div>
    <div class="product-image">
        <img src="{{ Storage::url($item['img']) }}" alt="">
    </div>
</a>
