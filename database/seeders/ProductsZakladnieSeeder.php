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
                'title' => "Армокаркасы",
                'sub_title' => "Армокаркасы и закладные изделия — основа вашего железобетонного успеха!",
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

                'sections' => json_encode([
                    [
                        'part' => 'Соответствие стандартам, размерный диапазон, технологии',
                        'picture' => '',
                        'title' => 'Профессиональные армокаркасы под любые задачи',
                        'sub_title' => '01',
                        'content' => 'Армокаркасы изготавливаются по ГОСТ 14098-2014 из арматуры классов А240–А600С, подходят для проектов шириной до 2000 мм и длиной до 6000 мм. Применяем контактно-точечную сварку, стыковую сварку оплавлением и гибку арматуры до 55 мм, гарантируя точность и прочность конструкций.',
                    ],
                    [
                        'part' => 'Материалы, типы и технологии закладных изделий',
                        'picture' => '',
                        'title' => 'Надежная основа для бетонных конструкций',
                        'sub_title' => '02',
                        'content' => 'Закладные изделия изготавливаются из различных марок стали и доступны в открытых и закрытых типах для гибкой реализации проектов. Применяем автоматическую дуговую сварку под флюсом, обеспечивая прочные соединения с диаметрами стержней 8–40 мм и толщиной пластин до 30 мм.',
                    ],
                    [
                        'part' => 'Сварочные и гибочные технологии',
                        'picture' => '',
                        'title' => 'Точность обработки арматуры под проект',
                        'sub_title' => '03',
                        'content' => 'Контактно-точечная сварка (К1-КТ) обрабатывает арматуру 6–25 мм (А240–А500С) и 10–25 мм (А600С). Стыковая сварка оплавлением (КСО) применяется для арматуры до 40 мм. Гибка доступна до 42 мм (А500), 50 мм (А400) и 55 мм (А240), обеспечивая точность под любые конструктивные требования.',
                    ],
                    [
                        'part' => 'Стандарты, размерный диапазон, оборудование',
                        'picture' => '',
                        'title' => 'Гарантия качества и точности',
                        'sub_title' => '04',
                        'content' => 'Соблюдаем ГОСТ 14098-2014, обеспечивая высокое качество продукции. Реализуем проекты любого масштаба — от компактных до нестандартных решений. Используем современное оборудование для сварки и гибки с точностью до миллиметра, гарантируя точность геометрии и прочность соединений.',
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
