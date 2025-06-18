<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsBmzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("products/bmz_1.webp", file_get_contents(public_path('tmp_data/product/bmz_1.webp')), 'public');
        Storage::disk('public')->put("products/bmz_2.webp", file_get_contents(public_path('tmp_data/product/bmz_2.webp')), 'public');
        Storage::disk('public')->put("products/bmz_3.webp", file_get_contents(public_path('tmp_data/product/bmz_3.webp')), 'public');
        Storage::disk('public')->put("products/bmz_4.webp", file_get_contents(public_path('tmp_data/product/bmz_4.webp')), 'public');

        Storage::disk('public')->put("products/oil.svg", file_get_contents(public_path('tmp_data/product/oil.svg')), 'public');
        Storage::disk('public')->put("products/indastry.svg", file_get_contents(public_path('tmp_data/product/indastry.svg')), 'public');
        Storage::disk('public')->put("products/building.svg", file_get_contents(public_path('tmp_data/product/building.svg')), 'public');

        $data = [
            [
                'title' => "Блочно-модульные здания от производителя",
                'sub_title' => "Производство и поставка БМЗ под ключ. Срок изготовления — от 15 дней",
                'slug' => Str::slug("Блочно-модульные здания"),
                'img' => 'products/bmz_1.webp',
                'description' => file_get_contents(public_path('tmp_data/product/bmz/main.html')),
                'template' => 'template.bmz',
                'images' => json_encode([
                    [
                        'title' => "Изображение 1",
                        'img' => "products/bmz_1.webp",
                    ],
                    [
                        'title' => "Изображение 2",
                        'img' => "products/bmz_2.webp",
                    ],
                    [
                        'title' => "Изображение 3",
                        'img' => "products/bmz_3.webp",
                    ],
                    [
                        'title' => "Изображение 4",
                        'img' => "products/bmz_4.webp",
                    ],

                ]),

                'sections' => json_encode([
                    [
                        'part' => 'Этапы работы над проектом',
                        'picture' => '',
                        'title' => 'Заявка и консультация',
                        'sub_title' => '01',
                        'content' => 'Вы оставляете заявку, и наш специалист связывается с вами для уточнения деталей: тип здания, площадь, назначение. Мы проводим бесплатную консультацию и делаем предварительный расчет.',
                    ],
                    [
                        'part' => 'Этапы работы над проектом',
                        'picture' => '',
                        'title' => 'Проектирование и расчет',
                        'sub_title' => '02',
                        'content' => 'Инженеры разрабатывают проект с учетом задач, условий эксплуатации и требований. Вы получаете чертеж, техническое задание и финальную смету.',
                    ],
                    [
                        'part' => 'Этапы работы над проектом',
                        'picture' => '',
                        'title' => 'Изготовление',
                        'sub_title' => '03',
                        'content' => 'После согласования проекта мы запускаем производство на собственном заводе. Используем сертифицированные материалы, срок изготовления — от 15 рабочих дней.',
                    ],
                    [
                        'part' => 'Этапы работы над проектом',
                        'picture' => '',
                        'title' => 'Доставка и монтаж',
                        'sub_title' => '04',
                        'content' => 'Готовые модули доставляются на объект и собираются на месте за 1–3 дня. Монтаж проходит быстро и не требует масштабных строительных работ.',
                    ],

                    [
                        'part' => 'Этапы работы над проектом',
                        'picture' => '',
                        'title' => 'Сдача объекта и гарантия',
                        'sub_title' => '05',
                        'content' => 'После монтажа объект сдается с документами и гарантией до 5 лет. При необходимости мы предоставим обслуживание или доукомплектацию.',
                    ],


                    [
                        'part' => 'Сферы применения БМЗ',
                        'picture' => 'products/building.svg',
                        'title' => 'Строительные площадки',
                        'sub_title' => '',
                        'content' => 'БМЗ идеально подходят для размещения офисов, бытовок, столовых и санузлов на стройплощадках. Они быстро монтируются, легко перемещаются и выдерживают интенсивную эксплуатацию.',
                    ],
                    [
                        'part' => 'Сферы применения БМЗ',
                        'picture' => 'products/indastry.svg',
                        'title' => 'Промышленные и технические объекты',
                        'sub_title' => '',
                        'content' => 'Используются как щитовые, насосные станции, КТП и другие инженерные блоки. Надёжны, функциональны и защищают оборудование от внешней среды.',
                    ],

                    [
                        'part' => 'Сферы применения БМЗ',
                        'picture' => 'products/oil.svg',
                        'title' => 'Вахтовые и временные поселки',
                        'sub_title' => '',
                        'content' => 'Модульные здания востребованы на удалённых объектах — для размещения персонала, организации столовых, душевых и медпунктов. Комфорт в любых условиях.',
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
