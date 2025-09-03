<form method="post" action="{{ route('send_adv_form') }}" class="advantages__form">
    <h3 class="h2 advantages__form-title">Заявка на раcчёт</h3>
    @csrf
    <label class="advantages__form-label">
        <input type="text" name="name" placeholder="Ваше ФИО" class="advantages__form-input">
    </label>
    <label class="advantages__form-label">
        <input type="tel" name="phone" placeholder="Телефон" class="advantages__form-input phone-mask" required>
    </label>
    <label class="advantages__form-label">
        <input type="email" name="email" placeholder="E-mail" class="advantages__form-input">
    </label>
    <label class="advantages__form-label">
        <textarea name="details" cols="10" rows="5" class="advantages__form-input"
            placeholder="Информация о заказе"></textarea>
    </label>
    <x-consultation-form.policy></x-consultation-form.policy>
    <button type="submit" class="advantages__form-button btn">Отправить</button>
</form>
