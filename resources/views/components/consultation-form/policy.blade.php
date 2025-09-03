@props(['prefix' => 'one_'])

<label class="checbox_label" for="{{ $prefix }}policy_ch">
    <input required name="policy_ch" type="checkbox" id="{{ $prefix }}policy_ch">
    <span>Я соглашаюсь с <a href="/page/politika-v-oblasti-obrabotki-personalnyx-dannyx"> политикой в области обработки персональных данных</a></span>
</label>

<label class="checbox_label" for="{{ $prefix }}accept_ch">
    <input required name="accept_ch" type="checkbox" id="{{ $prefix }}accept_ch">
    <span>Я даю <a href="/page/soglasie-na-obrabotku-personalnyx-dannyx">согласие на обработку моих персональных данных</a></span>
</label>
