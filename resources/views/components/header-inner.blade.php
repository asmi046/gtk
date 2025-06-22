<div class="header__inner">
    <div class="container">
        <div class="header__title">
            <h1>{!! $cerecter['banner_h1']->value !!}</h1>
            <a href="#consult" class="btn header__title-btn">Задать вопрос</a>
        </div>
    </div>
    <div class="container">
        <div class="header__content">
            @for ($i=1; $i<=3; $i++)
                <div class="header__content-item">
                    <div class="header__content-item--number">
                        {!! $cerecter['banner_value_'.$i]->value !!}
                    </div>
                    <div class="header__content-item--text">
                        {!! $cerecter['banner_value_'.$i]->title  !!}
                    </div>
                </div>
            @endfor

            <div class="header__content-item">
                <div class="header__content-item--contacts">
                    <a class="call_phone" href="tel:+7{{ phone_format($contacts['phone']->value) }}">{{$contacts['phone']->value}}</a>
                    <a class="sand_email" href="mailto:{{$contacts['email']->value}}">{{$contacts['email']->value}}</a></a>
                </div>
            </div>
        </div>
    </div>
</div>
