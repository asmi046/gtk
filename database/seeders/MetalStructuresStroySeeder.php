<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MetalStructuresStroySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("mc/os_1.webp", file_get_contents(public_path('tmp_data/mc/os_1.webp')), 'public');
        Storage::disk('public')->put("mc/os_2.webp", file_get_contents(public_path('tmp_data/mc/os_2.webp')), 'public');
        Storage::disk('public')->put("mc/os_3.webp", file_get_contents(public_path('tmp_data/mc/os_3.webp')), 'public');
        Storage::disk('public')->put("mc/os_4.webp", file_get_contents(public_path('tmp_data/mc/os_4.webp')), 'public');
        Storage::disk('public')->put("mc/os_5.webp", file_get_contents(public_path('tmp_data/mc/os_5.webp')), 'public');
        Storage::disk('public')->put("mc/os_6.webp", file_get_contents(public_path('tmp_data/mc/os_6.webp')), 'public');

        $data = [
            [
                'title' => "Строительные металлические конструкции",
                'order' => 1,
                'sub_title' => "Мы реализуем проекты по изготовлению металлических конструкций для зданий и сооружений любой сложности",
                'slug' => Str::slug("для строительных работ"),
                'img' => 'mc/os_1.webp',
                'description' => file_get_contents(public_path('tmp_data/mc/os.html')),
                'template' => 'template.os_mc',
                'images' => json_encode([
                    [
                        'title' => "Перекрытия готовые к отгрузке",
                        'img' => "mc/os_1.webp",
                    ],
                    [
                        'title' => "Металоконструкции для строительства МегаГринн",
                        'img' => "mc/os_2.webp",
                    ],
                    [
                        'title' => "Каркасные конструкции",
                        'img' => "mc/os_3.webp",
                    ],
                    [
                        'title' => "Перекрытия и опоры",
                        'img' => "mc/os_4.webp",
                    ],
                    [
                        'title' => "Смонтированные фермы для крыши",
                        'img' => "mc/os_5.webp",
                    ],
                    [
                        'title' => "Фермы для ангара",
                        'img' => "mc/os_6.webp",
                    ],

                ]),

                'sections' => json_encode([


                    [
                        'part' => 'Почему строительные компании выбирают нас',
                        'picture' => '',
                        'title' => 'Комплексный подход',
                        'sub_title' => '01',
                        'content' => 'От проектирования до изготовления и логистики — вся цепочка под нашим контролем.',
                    ],
                    [
                        'part' => 'Почему строительные компании выбирают нас',
                        'picture' => '',
                        'title' => 'Качество и контроль',
                        'sub_title' => '02',
                        'content' => 'Конструкции изготавливаются в соответствии с ГОСТ, выдерживают все необходимые эксплуатационные нагрузки и подходят для многоэтажного и промышленного строительства',
                    ],

                    [
                        'part' => 'Почему строительные компании выбирают нас',
                        'picture' => '',
                        'title' => 'Ответственность',
                        'sub_title' => '03',
                        'content' => 'Собственное проектное бюро, позволяет проводить необходимые расчеты конструкций, а используемые технологии и сертифицированные материалы - гарантируют длительные сроки службы',
                    ]
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
