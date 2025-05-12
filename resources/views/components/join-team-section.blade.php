<section class="join__team">
    <div class="container join__team-inner">
        <div class="join__team-content">
            <div class="join__team-img">
                <img src="{{ asset('img/join_team.webp') }}" alt="">
            </div>
            <form action="" class="join__team-form join__team-form--bg">
                <h3 class="h2 join__team-title">Присоединяйтесь к нашей команде</h3>
                @csrf
                <p>Мы заинтересованы в сотрудничестве с людьми, готовыми достигать цели и развиваться</p>
                <label class="join__team-label">
                    <input type="text" name="join_name" placeholder="Ваше ФИО" class="join__team-input">
                </label>
                <label class="join__team-label">
                    <input type="tel" name="join_phone" placeholder="Телефон" class="join__team-input">
                </label>
                <label class="join__team-label--custom">
                    <input type="checkbox" class="visually-hidden" id="join-checkbox">
                    <span class="join__team-checkbox--custom"></span>
                    <span class="join__team-checkbox--conditions no-select">
                        Даю согласие на обработку персональных данных согласно политике конфиденциальности
                    </span>
                </label>
                <button type="submit" class="join__team-button btn">Отправить</button>
            </form>
        </div>
    </div>
</section>
