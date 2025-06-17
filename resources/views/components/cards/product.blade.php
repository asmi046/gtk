 <div class="product-card">
    <div class="product-text">
            <h3 class="product-title">{{ $item['title'] }}</h3>
            <p class="product-subtitle">{{ $item['sub_title'] }}</p>
            <a href="{{ route('product_page', $item['slug']) }}" class="product-link">Подробнее...</a>
    </div>
    <div class="product-image">
        <img src="{{ Storage::url($item['img']) }}" alt="">
    </div>
</div>
