<section class="clients">
    <div class="container">
        <h2 class="section-title clients__title">Наши клиенты</h2>
        <div class="clients__inner">
            <swiper-container id="ptn_swiper" init="false">
                @foreach ($partners as $partner)
                    <swiper-slide>
                        <img src="{{ Storage::url($partner->image) }}" alt="{{ $partner->title }}">
                    </swiper-slide>
                @endforeach
            </swiper-container>

            <div class="swiper-nav">
                <button id="swiper-prev" class="swiper-prev swiper-btn" aria-label="Предыдущий слайд"></button>
                <button id="swiper-next" class="swiper-next swiper-btn" aria-label="Следующий слайд"></button>
            </div>
        </div>
    </div>
</section>
