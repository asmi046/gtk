<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MetalStructuresLepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("mc/lep_1.webp", file_get_contents(public_path('tmp_data/mc/lep_1.webp')), 'public');
        Storage::disk('public')->put("mc/lep_2.webp", file_get_contents(public_path('tmp_data/mc/lep_2.webp')), 'public');
        Storage::disk('public')->put("mc/lep_3.webp", file_get_contents(public_path('tmp_data/mc/lep_3.webp')), 'public');

        $data = [
            [
                'title' => "Конструкции линий электропередач",
                'order' => 2,
                'sub_title' => "Производим стальные конструкции и комплектующие для ЛЭП с учетом всех технических требований",
                'slug' => Str::slug("линий электропередач"),
                'img' => 'mc/lep_1.webp',
                'description' => file_get_contents(public_path('tmp_data/mc/lep.html')),
                'template' => 'template.lep_mc',
                'images' => json_encode([
                    [
                        'title' => "Готовая высоковольтналя линия",
                        'img' => "mc/lep_1.webp",
                    ],
                    [
                        'title' => "Собранная опора ЛЭП",
                        'img' => "mc/lep_2.webp",
                    ],
                    [
                        'title' => "Опора ЛЭП",
                        'img' => "mc/lep_3.webp",
                    ],
                ]),

                'sections' => json_encode([


                    [
                        'part' => 'Наши ключевые преимущества',
                        'picture' => '',
                        'title' => 'Производство',
                        'sub_title' => '01',
                        'content' => 'Собственные мощности и контроль качества на всех этапах.',
                    ],
                    [
                        'part' => 'Наши ключевые преимущества',
                        'picture' => '',
                        'title' => 'ЛЭП для любых условий',
                        'sub_title' => '02',
                        'content' => 'Наши опоры устойчивы к ветровым и климатическим нагрузкам, могут устанавливаться по всей РФ',
                    ],

                    [
                        'part' => 'Наши ключевые преимущества',
                        'picture' => '',
                        'title' => 'Прочность и надёжность',
                        'sub_title' => '03',
                        'content' => 'Наши опоры обладают конструктивной жёсткостью, проверенной расчётами.',
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
