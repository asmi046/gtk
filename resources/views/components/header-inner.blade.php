<div class="header__inner">

            <div class="col left">

                <div class="header-cards">
                    <a href="{{ route('metal_structures') }}" class="header-card">
                        <div class="header-card__top">
                            <h2>Металоконструкции</h2>
                        </div>
                        <div class="header-card__bottom">
                            <p>Проектирование и изготовление металлоконструкций любой сложности.</p>
                            <div class="header-card__icon">
                                <svg class="sprite_icon">
                                    <use xlink:href="#header_lnk_icon"></use>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="header-card">
                        <div class="header-card__top">
                            <h2>Емкости</h2>
                        </div>
                        <div class="header-card__bottom">
                            <p>Изготовление резервуаров и емкостей различного назначения с соблюдением всех технических требований.</p>
                            <div class="header-card__icon">
                                <svg class="sprite_icon">
                                    <use xlink:href="#header_lnk_icon"></use>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="header-card">
                        <div class="header-card__top">
                            <h2>Трубопроводы</h2>
                        </div>
                        <div class="header-card__bottom">
                            <p>Монтаж и проектирование трубопроводных систем для различных отраслей промышленности.</p>
                            <div class="header-card__icon">
                                <svg class="sprite_icon">
                                    <use xlink:href="#header_lnk_icon"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="header__content">
                    <a class="call_phone" href="tel:+7{{ phone_format($contacts['phone']->value) }}">{{$contacts['phone']->value}}</a>
                    <a class="sand_email" href="mailto:{{$contacts['email']->value}}">{{$contacts['email']->value}}</a></a>
                </div>
            </div>

            <div class="col center">
                <div class="header__title">
                    <h1>{!! $cerecter['banner_h1']->value !!}</h1>
                    <a href="#metal_in_main" class="btn header__title-btn">Подробнее</a>
                </div>

                <div class="header__digits">
                    @for ($i=1; $i<=3; $i++)
                        <div class="header__digits-item">
                            <div class="header__digits-item--number">
                                {!! $cerecter['banner_value_'.$i]->value !!}
                            </div>
                            <div class="header__digits-item--text">
                                {!! $cerecter['banner_value_'.$i]->title  !!}
                            </div>
                        </div>
                    @endfor
                </div>

            </div>

            <div class="col right">
                <div class="header-cards">
                    <a href="#" class="header-card __brand">
                        <div class="header-card__bottom">
                            <img src="{{ asset('img/brands/ibex.svg') }}" alt="Вентилируемые фасады ИБЕКС">
                            <h2>Вентилируемые фасады <br>ИБЕКС</h2>
                            <p>Проектирование и изготовление металлических конструкций любой сложности для промышленных объектов.</p>
                            <div class="header-card__icon">
                                <svg class="sprite_icon">
                                    <use xlink:href="#header_lnk_icon"></use>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="header-card __brand">

                        <div class="header-card__bottom">
                            <img src="{{ asset('img/brands/ibex_green.svg') }}" alt="Вентилируемые фасады ИБЕКС GREEN">
                            <h2>Теплицы и оборудование <br>ИБЕКС GREEN</h2>
                            <p>Проектирование и изготовление металлических конструкций любой сложности для промышленных объектов.</p>
                            <div class="header-card__icon">
                                <svg class="sprite_icon">
                                    <use xlink:href="#header_lnk_icon"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
</div>
