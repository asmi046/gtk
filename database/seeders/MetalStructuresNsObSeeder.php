<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MetalStructuresNsObSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("mc/1_tup_pech.webp", file_get_contents(public_path('tmp_data/ns_to/1_tup_pech.webp')), 'public');
        Storage::disk('public')->put("mc/2_pody.webp", file_get_contents(public_path('tmp_data/ns_to/2_pody.webp')), 'public');
        Storage::disk('public')->put("mc/3_telega.webp", file_get_contents(public_path('tmp_data/ns_to/3_telega.webp')), 'public');
        Storage::disk('public')->put("mc/4_tehblok.webp", file_get_contents(public_path('tmp_data/ns_to/4_tehblok.webp')), 'public');
        Storage::disk('public')->put("mc/5_meh_oc.webp", file_get_contents(public_path('tmp_data/ns_to/5_meh_oc.webp')), 'public');

        $data = [
            [
                'title' => "Нестандартное технологическое оборудование",
                'order' => 4,
                'sub_title' => "Производство нестандартного технологического оборудования по чертежам заказчика",
                'slug' => Str::slug("Нестандартное технологическое оборудование"),
                'img' => 'mc/1_tup_pech.webp',
                'description' => file_get_contents(public_path('tmp_data/ns_to/nsto.html')),
                'template' => 'template.ns_to',
                'images' => json_encode([
                    [
                        'title' => "Тупиковые печи для термообработки металла разных размеров с запирающим устройством",
                        'img' => "mc/1_tup_pech.webp",
                    ],
                    [
                        'title' => "Поды для загрузки печей",
                        'img' => "mc/2_pody.webp",
                    ],
                    [
                        'title' => "Транспортные тележки для термических печей и печей обжига.",
                        'img' => "mc/3_telega.webp",
                    ],
                    [
                        'title' => "Технологический блок",
                        'img' => "mc/4_tehblok.webp",
                    ],
                    [
                        'title' => "Блок механической очистки",
                        'img' => "mc/5_meh_oc.webp",
                    ],
                    [
                        'title' => "Блок биологической очистки",
                        'img' => "mc/5_meh_oc.webp",
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
