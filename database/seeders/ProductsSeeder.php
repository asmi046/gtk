<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("products/truba_1.webp", file_get_contents(public_path('tmp_data/product/truba_1.webp')), 'public');
        Storage::disk('public')->put("products/truba_2.webp", file_get_contents(public_path('tmp_data/product/truba_2.webp')), 'public');
        Storage::disk('public')->put("products/truba_3.webp", file_get_contents(public_path('tmp_data/product/truba_3.webp')), 'public');
        Storage::disk('public')->put("products/truba_4.webp", file_get_contents(public_path('tmp_data/product/truba_4.webp')), 'public');
        Storage::disk('public')->put("products/truba_5.webp", file_get_contents(public_path('tmp_data/product/truba_5.webp')), 'public');
        Storage::disk('public')->put("products/truba_6.webp", file_get_contents(public_path('tmp_data/product/truba_6.webp')), 'public');
        Storage::disk('public')->put("products/truba_7.webp", file_get_contents(public_path('tmp_data/product/truba_7.webp')), 'public');
        Storage::disk('public')->put("products/truba_8.webp", file_get_contents(public_path('tmp_data/product/truba_8.webp')), 'public');
        Storage::disk('public')->put("products/truba_9.webp", file_get_contents(public_path('tmp_data/product/truba_9.webp')), 'public');

        Storage::disk('public')->put("products/calendar.svg", file_get_contents(public_path('tmp_data/product/calendar.svg')), 'public');
        Storage::disk('public')->put("products/termometr.svg", file_get_contents(public_path('tmp_data/product/termometr.svg')), 'public');
        Storage::disk('public')->put("products/val.svg", file_get_contents(public_path('tmp_data/product/val.svg')), 'public');

        $data = [
            [
                'title' => "Инженерные трубопроводы",
                'sub_title' => "Изготавливаем нестандартные трубопроводы под нужды заказчика",
                'slug' => Str::slug("Инженерные трубопроводы"),
                'img' => 'products/truba_1.webp',
                'description' => file_get_contents(public_path('tmp_data/product/truba/main.html')),
                'template' => 'template.truboprovod',
                'images' => json_encode([
                    [
                        'title' => "Труба",
                        'img' => "products/truba_1.webp",
                    ],
                    [
                        'title' => "КуАЭС2 Сварка магистрального трубопровода",
                        'img' => "products/truba_2.webp",
                    ],
                    [
                        'title' => "КуАЭС2 Магистральный трубопровод",
                        'img' => "products/truba_3.webp",
                    ],
                    [
                        'title' => "КуАЭС2 Магистральный трубопровод",
                        'img' => "products/truba_4.webp",
                    ],
                    [
                        'title' => "КуАЭС2 Магистральный трубопровод",
                        'img' => "products/truba_5.webp",
                    ],
                    [
                        'title' => "КуАЭС2 Зимний трубопровод",
                        'img' => "products/truba_6.webp",
                    ],
                    [
                        'title' => "КуАЭС2 Зимний трубопровод",
                        'img' => "products/truba_7.webp",
                    ],
                    [
                        'title' => "КуАЭС2 Зимний трубопровод",
                        'img' => "products/truba_8.webp",
                    ],
                ]),

                'sections' => json_encode([

                    [
                        'part' => 'Индивидуальный подход к каждому проекту',
                        'picture' => 'products/termometr.svg',
                        'title' => 'Подбираем параметры с учётом:',
                        'sub_title' => '',
                        'content' => 'Климатических условий, особенностей местности, агрессивности среды.',
                    ],
                    [
                        'part' => 'Индивидуальный подход к каждому проекту',
                        'picture' => 'products/val.svg',
                        'title' => 'Выполняем проекты любой сложности',
                        'sub_title' => '',
                        'content' => 'От прямолинейных участков до многоуровневых распределительных систем.',
                    ],

                    [
                        'part' => 'Индивидуальный подход к каждому проекту',
                        'picture' => 'products/calendar.svg',
                        'title' => 'Соблюдаем сроки и стандарты',
                        'sub_title' => '',
                        'content' => 'Всё под контролем: от чертежа до ввода в эксплуатацию.',
                    ],
                ])
            ],

        ];


        foreach ($data as $item) {
            // Storage::disk('public')->put("main_bnr.webp", file_get_contents(public_path('img/main_bnr.webp')), 'public');
            DB::table("products")->insert($item);

            DB::table("seo_data")->insert(
                [
                    'url' => 'products/'.$item['slug'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );
        }
    }
}
