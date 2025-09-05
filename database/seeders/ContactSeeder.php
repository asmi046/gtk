<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contacts")->insert(
            [
                [
                    'name' => 'site_name',
                    'title' => 'Имя сайта',
                    'value' => 'Главтехконструкция',
                ],

                [
                    'name' => 'phone',
                    'title' => 'Телефон',
                    'value' => '+7 (4712) 735-400',
                ],

                [
                    'name' => 'tg_lnk',
                    'title' => 'Ссылка  на Телеграм',
                    'value' => 'tg://resolve?domain=glavtk',
                ],

                [
                    'name' => 'ws_lnk',
                    'title' => 'Ссылка  на WhatsApp',
                    'value' => 'https://wa.me/79081234838',
                ],

                [
                    'name' => 'adress',
                    'title' => 'Адрес компании',
                    'value' => '305527, Курская область, Курский район, д. Ворошнево, ул. Сосновая, д. 1/1',
                ],

                [
                    'name' => 'work_time',
                    'title' => 'Время работы',
                    'value' => 'Пн-Пт 08:30 - 17:00, Сб-Вс - Выходные',
                ],

                [
                    'name' => 'email',
                    'title' => 'E-mail',
                    'value' => 'info@glavtk.ru',
                ],

                [
                    'name' => 'company_name',
                    'title' => 'Имя компании',
                    'value' => 'АО "Главтехконструкция"',
                ],

                [
                    'name' => 'inn',
                    'title' => 'ИНН',
                    'value' => '4611014597',
                ],

                [
                    'name' => 'ogrn',
                    'title' => 'ОГРН',
                    'value' => '1174632000190',
                ],

                [
                    'name' => 'kpp',
                    'title' => 'КПП',
                    'value' => '461101001',
                ],

                [
                    'name' => 'rs',
                    'title' => 'Р/С',
                    'value' => '40702810500490011952',
                ],

                [
                    'name' => 'ks',
                    'title' => 'К/С',
                    'value' => '30101810220070000800 ',
                ],

                [
                    'name' => 'bik',
                    'title' => 'БИК',
                    'value' => '042007800 ',
                ],

                [
                    'name' => 'bank',
                    'title' => 'Банк',
                    'value' => 'Филиал «Газпромбанк» (АО) «Центрально-Черноземный» ',
                ],

                [
                    'name' => 'geo',
                    'title' => 'Кординаты',
                    'value' => '51.65145413210463,36.04618436242675',
                ],

            ]
        );
    }
}
