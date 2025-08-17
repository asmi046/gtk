<form method="post" class="advantages__form">
    <h3 class="h2 advantages__form-title">Заявка на раcчёт</h3>
    @csrf
    <label class="advantages__form-label">
        <input type="text" name="adv_name" placeholder="Ваше ФИО" class="advantages__form-input">
    </label>
    <label class="advantages__form-label">
        <input type="tel" name="adv_phone" placeholder="Телефон" class="advantages__form-input">
    </label>
    <label class="advantages__form-label">
        <input type="email" name="adv_email" placeholder="E-mail" class="advantages__form-input">
    </label>
    <label class="advantages__form-label">
        <textarea name="adv_details" cols="10" rows="5" class="advantages__form-input"
            placeholder="Информация о заказе"></textarea>
    </label>
    <button type="submit" class="advantages__form-button btn">Скачать каталог</button>
</form>
