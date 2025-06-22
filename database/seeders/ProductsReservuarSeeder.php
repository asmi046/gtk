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

        Storage::disk('public')->put("products/emkost.webp", file_get_contents(public_path('tmp_data/product/emkost.webp')), 'public');

        Storage::disk('public')->put("products/calendar.svg", file_get_contents(public_path('tmp_data/product/calendar.svg')), 'public');
        Storage::disk('public')->put("products/termometr.svg", file_get_contents(public_path('tmp_data/product/termometr.svg')), 'public');
        Storage::disk('public')->put("products/val.svg", file_get_contents(public_path('tmp_data/product/val.svg')), 'public');

        $data = [
            [
                'title' => "Ёмкости (Резервуары стальные)",
                'sub_title' => "Стальные резервуары от производителя: надёжность, которую можно доверить любому проекту",
                'slug' => Str::slug("Резервуары стальные"),
                'img' => 'products/emkost.webp',
                'description' => file_get_contents(public_path('tmp_data/product/reservuar/main.html')),
                'template' => 'template.reservuar',
                'images' => null,

                'sections' => json_encode([
                    [
                        'part' => 'Преимущества наших резервуаров',
                        'picture' => '',
                        'title' => 'Прочность и долговечность',
                        'sub_title' => '01',
                        'content' => 'Устойчивы к перепадам давления и температур. Резервуары изготавливаются из высококачественных сталей с усилением кольцами жёсткости и диафрагмами, обеспечивая устойчивость к подземному монтажу и высоким нагрузкам без риска деформации.',
                    ],
                    [
                        'part' => 'Преимущества наших резервуаров',
                        'picture' => '',
                        'title' => 'Контроль качества на 100%',
                        'sub_title' => '02',
                        'content' => 'Адаптированы под сложный рельеф и погодные условия. Качество сварных швов подтверждается ультразвуковой проверкой — это наш приоритет и гарантия надежности для вас.',
                    ],
                    [
                        'part' => 'Преимущества наших резервуаров',
                        'picture' => '',
                        'title' => 'Универсальность в деталях',
                        'sub_title' => '03',
                        'content' => 'Монтируются как на улице, так и в помещениях. Резервуары диаметром от 700 мм до 3,6 м и длиной до 12 м адаптируются под любые задачи — от компактных АЗС до промышленных проектов в нефтехимии.',
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
