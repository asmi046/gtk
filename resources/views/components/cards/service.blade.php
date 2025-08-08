<div class="service-card">
    <div class="image_wrap">
        <img src="{{ Storage::url($item['img']) }}" alt="{{ $item['title'] }}">
    </div>

    <div class="text_blk">
        <h3>{{ $item['title'] }}</h3>
        <p>{!! $item['description'] !!}</p>
    </div>
</div>
