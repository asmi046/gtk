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
                'title' => 'Невостребованная продукция',
                'order' => 1,
                'lnk' => "/page/nevostrebovannaia-produkciia",
            ],

            [
                'menu_name' => 'Главное меню',
                'title' => 'Услуги',
                'order' => 1,
                'lnk' => "/services",
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

        $data = [
            [
                'menu_name' => 'Боковое меню',
                'title' => 'Металоконструкции',
                'order' => 1,
                'lnk' => "/metal-structures",
            ],

            [
                'menu_name' => 'Боковое меню',
                'title' => 'Продукция',
                'order' => 1,
                'lnk' => "/products",
            ],

            [
                'menu_name' => 'Боковое меню',
                'title' => 'Невостребованная продукция',
                'order' => 1,
                'lnk' => "/page/nevostrebovannaia-produkciia",
            ],

            [
                'menu_name' => 'Боковое меню',
                'title' => 'Лаборатория',
                'order' => 1,
                'lnk' => "/page/laboratoriia-nerazrusaiushhego-kontrolia",
            ],

            [
                'menu_name' => 'Боковое меню',
                'title' => 'Теплицы',
                'order' => 1,
                'lnk' => "#",
            ],

            [
                'menu_name' => 'Боковое меню',
                'title' => 'Фасады',
                'order' => 1,
                'lnk' => "https://ibex.ru",
            ],

            [
                'menu_name' => 'Боковое меню',
                'title' => 'Услуги',
                'order' => 1,
                'lnk' => "/services",
            ],

            [
                'menu_name' => 'Боковое меню',
                'title' => 'Вакансии',
                'order' => 1,
                'lnk' => "/vacancies",
            ],

            [
                'menu_name' => 'Боковое меню',
                'title' => 'Контакты',
                'order' => 1,
                'lnk' => "/contacts",
            ],

        ];

        DB::table("menus")->insert($data);

        $footer_menu = [
            [
                'menu_name' => 'Меню в металоконструкции',
                'title' => 'Строительные металлоконструкции',
                'order' => 1,
                'lnk' => "/metal-structures/dlia-stroitelnyx-rabot",
            ],
            [
                'menu_name' => 'Меню в металоконструкции',
                'title' => 'Дорожные металлоконструкции',
                'order' => 1,
                'lnk' => "/metal-structures/dlia-doroznoi-infrastruktury",
            ],
            [
                'menu_name' => 'Меню в металоконструкции',
                'title' => 'Металлические опопры ЛЭП',
                'order' => 1,
                'lnk' => "/metal-structures/dlia-lep",
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
                'lnk' => "/products/armokarkasy-i-zakladnye-izdeliia",
            ],
            [
                'menu_name' => 'Другая продукция',
                'title' => 'Изготовление нестандартных трубопроводов',
                'order' => 1,
                'lnk' => "/products/inzenernye-truboprovody",
            ],
            [
                'menu_name' => 'Другая продукция',
                'title' => 'Изготовление емкостей',
                'order' => 1,
                'lnk' => "/products/rezervuary-stalnye",
            ],
            [
                'menu_name' => 'Другая продукция',
                'title' => 'Блочно-модульные здания',
                'order' => 1,
                'lnk' => "/products/blocno-modulnye-zdaniia",
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
                'lnk' => "https://ibex.ru",
            ],

        ];

        DB::table("menus")->insert($footer_menu_2);
    }
}
