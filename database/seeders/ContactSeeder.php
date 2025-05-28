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
                    'title' => 'ГлавТехКонструкция - изготовление металоконструкций',
                    'value' => 'СвайМастер',
                ],

                [
                    'name' => 'phone',
                    'title' => 'Телефон',
                    'value' => '+7 (4712) 73 54 00',
                ],

                [
                    'name' => 'tg_lnk',
                    'title' => 'Ссылка  на Телеграм',
                    'value' => '#',
                ],

                [
                    'name' => 'ws_lnk',
                    'title' => 'Ссылка  на WhatsApp',
                    'value' => '#',
                ],

                [
                    'name' => 'adress',
                    'title' => 'Адрес компании',
                    'value' => '305527, Курская область, Курский район, д. Ворошнево, ул. Сосновая, д. 1/1',
                ],

                [
                    'name' => 'email',
                    'title' => 'E-mail',
                    'value' => 'kursk@glavtk.ru',
                ],

                [
                    'name' => 'email_2',
                    'title' => 'E-mail 2',
                    'value' => 'sale@glavtk.ru',
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
                    'name' => 'kpp',
                    'title' => 'КПП',
                    'value' => '461101001',
                ],

                [
                    'name' => 'ogrn',
                    'title' => 'ОГРН',
                    'value' => '1174632000190',
                ],

                [
                    'name' => 'rs',
                    'title' => 'Р/С',
                    'value' => '40702810500490011952',
                ],

                [
                    'name' => 'ks',
                    'title' => 'К/С',
                    'value' => '30101810220070000800',
                ],

                [
                    'name' => 'bik',
                    'title' => 'БИК',
                    'value' => '042007800',
                ],

                [
                    'name' => 'geo',
                    'title' => 'Кординаты',
                    'value' => '51.65143411037333,36.04607707406614',
                ],

            ]
        );
    }
}
