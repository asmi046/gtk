<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsReservuarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("products/truba_1.webp", file_get_contents(public_path('tmp_data/product/truba_1.webp')), 'public');

        Storage::disk('public')->put("products/calendar.svg", file_get_contents(public_path('tmp_data/product/calendar.svg')), 'public');
        Storage::disk('public')->put("products/termometr.svg", file_get_contents(public_path('tmp_data/product/termometr.svg')), 'public');
        Storage::disk('public')->put("products/val.svg", file_get_contents(public_path('tmp_data/product/val.svg')), 'public');

        $data = [
            [
                'title' => "Ёмкости(Резервуары стальные)",
                'sub_title' => "Стальные резервуары от производителя: надёжность, которую можно доверить любому проекту",
                'slug' => Str::slug("Резервуары стальные"),
                'img' => 'products/reservuar_1.webp',
                'description' => file_get_contents(public_path('tmp_data/product/reservuar/main.html')),
                'template' => 'template.reservuar',
                'images' => json_encode([
                    [
                        'title' => "Изображение 1",
                        'img' => "products/truba_1.webp",
                    ],
                ]),

                'sections' => json_encode([
                    [
                        'part' => 'Прочность и долговечность',
                        'picture' => '',
                        'title' => 'Устойчивы к перепадам давления и температур',
                        'sub_title' => '01',
                        'content' => 'Резервуары изготавливаются из высококачественных сталей с усилением кольцами жёсткости и диафрагмами, обеспечивая устойчивость к подземному монтажу и высоким нагрузкам без риска деформации.',
                    ],
                    [
                        'part' => 'Контроль качества на 100%',
                        'picture' => '',
                        'title' => 'Адаптированы под сложный рельеф и погодные условия',
                        'sub_title' => '02',
                        'content' => 'Качество сварных швов подтверждается ультразвуковой проверкой — это наш приоритет и гарантия надежности для вас.',
                    ],
                    [
                        'part' => 'Универсальность в деталях',
                        'picture' => '',
                        'title' => 'Монтируются как на улице, так и в помещениях',
                        'sub_title' => '03',
                        'content' => 'Резервуары диаметром от 700 мм до 3,6 м и длиной до 12 м адаптируются под любые задачи — от компактных АЗС до промышленных проектов в нефтехимии.',
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
