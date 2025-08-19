@php
    $showtitle = $showtitle ?? true;
@endphp
<a data-fslightbox="page-galery" href="{{ Storage::url($item['img']) }}" class="gallery-item">
    <img src="{{ Storage::url($item['img']) }}"  alt="{{ $item['title'] }}" class="gallery-image" />
    @if ($showtitle)
        <div class="gallery-caption">{{ $item['title'] }}</div>
    @endif
</a>
