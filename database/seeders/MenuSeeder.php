<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'menu_name' => 'Главное меню',
                'title' => 'Металоконструкции',
                'order' => 1,
                'lnk' => "#",
            ],

            [
                'menu_name' => 'Главное меню',
                'title' => 'Продукция',
                'order' => 1,
                'lnk' => "/products",
            ],

            [
                'menu_name' => 'Главное меню',
                'title' => 'Теплицы',
                'order' => 1,
                'lnk' => "#",
            ],

            [
                'menu_name' => 'Главное меню',
                'title' => 'Фасады',
                'order' => 1,
                'lnk' => "#",
            ],

            [
                'menu_name' => 'Главное меню',
                'title' => 'Услуги',
                'order' => 1,
                'lnk' => "#",
            ],

            [
                'menu_name' => 'Главное меню',
                'title' => 'Вакансии',
                'order' => 1,
                'lnk' => "/vacancies",
            ],

            [
                'menu_name' => 'Главное меню',
                'title' => 'Контакты',
                'order' => 1,
                'lnk' => "/contacts",
            ],

        ];

        DB::table("menus")->insert($data);

        $footer_menu = [
            [
                'menu_name' => 'Меню в металоконструкции',
                'title' => 'Общестроительные металлоконструкции',
                'order' => 1,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Меню в металоконструкции',
                'title' => 'Дорожные металлоконструкции',
                'order' => 1,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Меню в металоконструкции',
                'title' => 'Металлические опопры ЛЭП',
                'order' => 1,
                'lnk' => "#",
            ],

            [
                'menu_name' => 'Меню в металоконструкции',
                'title' => 'Нестандартное оборудование',
                'order' => 1,
                'lnk' => "#",
            ],

        ];

        DB::table("menus")->insert($footer_menu);


        $footer_menu_2 = [

            [
                'menu_name' => 'Другая продукция',
                'title' => 'Закладные изделия и изделия из арматуры',
                'order' => 1,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Другая продукция',
                'title' => 'Изготовление нестандартных трубопроводов',
                'order' => 1,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Другая продукция',
                'title' => 'Изготовление емкостей',
                'order' => 1,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Другая продукция',
                'title' => 'Блочно-модульные здания',
                'order' => 1,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Другая продукция',
                'title' => 'Теплицы',
                'order' => 1,
                'lnk' => "#",
            ],
            [
                'menu_name' => 'Другая продукция',
                'title' => 'Фасады',
                'order' => 1,
                'lnk' => "#",
            ],

        ];

        DB::table("menus")->insert($footer_menu_2);
    }
}
