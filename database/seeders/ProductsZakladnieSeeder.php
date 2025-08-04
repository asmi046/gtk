<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsZakladnieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("products/zakladnie_1.webp", file_get_contents(public_path('tmp_data/product/zakladnie_1.webp')), 'public');
        Storage::disk('public')->put("products/zakladnie_2.webp", file_get_contents(public_path('tmp_data/product/zakladnie_2.webp')), 'public');
        Storage::disk('public')->put("products/zakladnie_3.webp", file_get_contents(public_path('tmp_data/product/zakladnie_3.webp')), 'public');
        Storage::disk('public')->put("products/zakladnie_4.webp", file_get_contents(public_path('tmp_data/product/zakladnie_4.webp')), 'public');
        Storage::disk('public')->put("products/zakladnie_5.webp", file_get_contents(public_path('tmp_data/product/zakladnie_5.webp')), 'public');
        Storage::disk('public')->put("products/zakladnie_6.webp", file_get_contents(public_path('tmp_data/product/zakladnie_6.webp')), 'public');
        Storage::disk('public')->put("products/zakladnie_7.webp", file_get_contents(public_path('tmp_data/product/zakladnie_7.webp')), 'public');


        Storage::disk('public')->put("products/calendar.svg", file_get_contents(public_path('tmp_data/product/calendar.svg')), 'public');
        Storage::disk('public')->put("products/termometr.svg", file_get_contents(public_path('tmp_data/product/termometr.svg')), 'public');
        Storage::disk('public')->put("products/val.svg", file_get_contents(public_path('tmp_data/product/val.svg')), 'public');

        $data = [
            [
                'title' => "Арматурные каркасы",
                'sub_title' => "Изготовление арматурных каркасов и закладных изделий для монолитного строительства",
                'slug' => Str::slug("Армокаркасы и закладные изделия"),
                'img' => 'products/zakladnie_1.webp',
                'description' => file_get_contents(public_path('tmp_data/product/zakladnie/main.html')),
                'template' => 'template.zakladnie',
                'images' => json_encode([
                    [
                        'title' => "Универсальные закладные элементы",
                        'img' => "products/zakladnie_1.webp",
                    ],
                    [
                        'title' => "Стальной фундамент: закладные для бетонирования высокой прочности",
                        'img' => "products/zakladnie_2.webp",
                    ],
                    [
                        'title' => "Стандарт качества: арматура Ø25 A500СЕУ",
                        'img' => "products/zakladnie_3.webp",
                    ],
                    [
                        'title' => "Прочный узел: металлический элемент для монолитных сооружений",
                        'img' => "products/zakladnie_4.webp",
                    ],
                    [
                        'title' => "Арматура под ключ: всё для монолитных сооружений",
                        'img' => "products/zakladnie_5.webp",
                    ],
                    [
                        'title' => "Масштабный производственный комплекс: готовые арматурные изделия",
                        'img' => "products/zakladnie_6.webp",
                    ],
                    [
                        'title' => "Готовые опоры",
                        'img' => "products/zakladnie_7.webp",
                    ],
                ]),

                'sections' => null
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
