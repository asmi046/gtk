<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MetalStructuresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("mc/road_1.webp", file_get_contents(public_path('tmp_data/mc/road_1.webp')), 'public');
        Storage::disk('public')->put("mc/road_2.webp", file_get_contents(public_path('tmp_data/mc/road_2.webp')), 'public');
        Storage::disk('public')->put("mc/road_3.webp", file_get_contents(public_path('tmp_data/mc/road_3.webp')), 'public');
        Storage::disk('public')->put("mc/road_4.webp", file_get_contents(public_path('tmp_data/mc/road_4.webp')), 'public');

        Storage::disk('public')->put("mc/galka.svg", file_get_contents(public_path('tmp_data/mc/galka.svg')), 'public');
        Storage::disk('public')->put("mc/hammer.svg", file_get_contents(public_path('tmp_data/mc/hammer.svg')), 'public');
        Storage::disk('public')->put("mc/shit.svg", file_get_contents(public_path('tmp_data/mc/shit.svg')), 'public');

        $data = [
            [
                'title' => "Металлоконструкции для дорожной инфраструктуры и АСУДД",
                'sub_title' => "Проектируем и производим рамные опоры, колонны и фермы с антикоррозийной защитой для любых климатических условий.",
                'slug' => Str::slug("для дорожной инфраструктуры"),
                'img' => 'mc/road_1.webp',
                'description' => file_get_contents(public_path('tmp_data/mc/road.html')),
                'template' => 'template.road_mc',
                'images' => json_encode([
                    [
                        'title' => "Оснащенная дорожная арка",
                        'img' => "mc/road_1.webp",
                    ],
                    [
                        'title' => "Сборка дорожных арок",
                        'img' => "mc/road_2.webp",
                    ],
                    [
                        'title' => "Элементы дорожной арки",
                        'img' => "mc/road_3.webp",
                    ],
                    [
                        'title' => "Производство дорожных арок",
                        'img' => "mc/road_4.webp",
                    ],
                ]),

                'sections' => json_encode([


                    [
                        'part' => 'Почему выбирают нас',
                        'picture' => 'mc/galka.svg',
                        'title' => 'Полный цикл работ',
                        'sub_title' => '',
                        'content' => 'Мы производим все работы от проектирования до производства',
                    ],
                    [
                        'part' => 'Почему выбирают нас',
                        'picture' => 'mc/hammer.svg',
                        'title' => 'Устойчивость к нагрузкам',
                        'sub_title' => '',
                        'content' => 'Наши конструкции рассчитаны на любые климатические зоны.',
                    ],

                    [
                        'part' => 'Почему выбирают нас',
                        'picture' => 'mc/shit.svg',
                        'title' => 'Защита от коррозии',
                        'sub_title' => '',
                        'content' => 'Все изделия мы обрабатываем с помощью горячего цинкования по ГОСТ',
                    ],
                ])
            ],

        ];


        foreach ($data as $item) {
            // Storage::disk('public')->put("main_bnr.webp", file_get_contents(public_path('img/main_bnr.webp')), 'public');
            DB::table("metal_structures")->insert($item);

            DB::table("seo_data")->insert(
                [
                    'url' => 'metal-structures/'.$item['slug'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );
        }
    }
}
