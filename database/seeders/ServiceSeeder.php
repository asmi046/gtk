<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

use DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("services/0.jpg", file_get_contents(public_path('tmp_data/services/0.jpg')), 'public');
        Storage::disk('public')->put("services/1.jpg", file_get_contents(public_path('tmp_data/services/1.jpg')), 'public');
        Storage::disk('public')->put("services/2.jpg", file_get_contents(public_path('tmp_data/services/2.jpg')), 'public');
        Storage::disk('public')->put("services/3.jpg", file_get_contents(public_path('tmp_data/services/3.jpg')), 'public');
        Storage::disk('public')->put("services/4.jpg", file_get_contents(public_path('tmp_data/services/4.jpg')), 'public');
        Storage::disk('public')->put("services/5.jpg", file_get_contents(public_path('tmp_data/services/5.jpg')), 'public');
        Storage::disk('public')->put("services/6.jpg", file_get_contents(public_path('tmp_data/services/6.jpg')), 'public');
        Storage::disk('public')->put("services/7.jpg", file_get_contents(public_path('tmp_data/services/7.jpg')), 'public');
        Storage::disk('public')->put("services/8.jpg", file_get_contents(public_path('tmp_data/services/8.jpg')), 'public');
        Storage::disk('public')->put("services/9.jpg", file_get_contents(public_path('tmp_data/services/9.jpg')), 'public');
        Storage::disk('public')->put("services/10.jpg", file_get_contents(public_path('tmp_data/services/10.jpg')), 'public');
        Storage::disk('public')->put("services/11.jpg", file_get_contents(public_path('tmp_data/services/11.jpg')), 'public');
        Storage::disk('public')->put("services/12.jpg", file_get_contents(public_path('tmp_data/services/12.jpg')), 'public');
        Storage::disk('public')->put("services/13.jpg", file_get_contents(public_path('tmp_data/services/13.jpg')), 'public');
        Storage::disk('public')->put("services/14.jpg", file_get_contents(public_path('tmp_data/services/14.jpg')), 'public');
        Storage::disk('public')->put("services/15.jpg", file_get_contents(public_path('tmp_data/services/15.jpg')), 'public');

        $data = [
            [
                'title' => 'Резка листового металла',
                'slug' => 'metal-cutting',
                'img' => 'services/0.jpg',
                'description' => '<p>Резка листового металла по чертежам заказчика на современном оборудовании:</p>
                <ul>
                    <li><strong>Лазерная резка</strong> - габариты заготовки 2 000×6 000×8 мм</li>
                    <li><strong>Плазменная резка</strong> - габариты заготовки 2 000×6 000×35 мм</li>
                </ul>'
            ],
            [
                'title' => 'Резка проката',
                'slug' => 'profile-cutting',
                'img' => 'services/1.jpg',
                'description' => '<p>Резка проката на ленточно-пильном оборудовании.</p>
                <p><strong>Габариты:</strong> 12 000×400×500 мм</p>'
            ],
            [
                'title' => 'Гибка листового металла',
                'slug' => 'sheet-bending',
                'img' => 'services/2.jpg',
                'description' => '<p>Гибка листового металла по чертежам заказчика на листогибочном оборудовании:</p>
                <ul>
                    <li>Толщина до 5 мм</li>
                    <li>Длина гиба 3 000 мм</li>
                    <li>Черный/нержавеющий металл толщиной 6мм/3мм</li>
                </ul>'
            ],
            [
                'title' => 'Гибка труб',
                'slug' => 'pipe-bending',
                'img' => 'services/3.jpg',
                'description' => '<p>Гибка труб по чертежам заказчика на дорновом трубогибе.</p>
                <p><strong>Диаметр:</strong> 60×3 мм</p>'
            ],
            [
                'title' => 'Вальцовка листового материала ',
                'slug' => 'sheet-rolling',
                'img' => 'services/4.jpg',
                'description' => '<p>Вальцовка листового материала :</p>
                <ul>
                    <li><strong>Листовой материал:</strong> толщина 1,5-4,5 мм, ширина 1300 мм</li>
                    <li><strong>Металл:</strong> толщина 6-28 мм, ширина до 2500 мм</li>
                </ul>'
            ],
            [
                'title' => 'Вальцовка труб',
                'slug' => 'pipe-rolling',
                'img' => 'services/5.jpg',
                'description' => '<p>Вальцовка труб:</p>
                <ul>
                    <li><strong>Профильная труба:</strong> 90×90 </li>
                    <li><strong>Водопроводная:</strong> до диаметра 102 мм</li>
                </ul>'
            ],
            [
                'title' => 'Обжимка труб',
                'slug' => 'pipe-crimping',
                'img' => 'services/6.jpg',
                'description' => '<p>Обжимка труб на меньший диаметр.</p>
                <p><strong>Диапазон диаметров:</strong> 25-60 мм</p>'
            ],
            [
                'title' => 'Резка резьбы',
                'slug' => 'threading',
                'img' => 'services/8.jpg',
                'description' => '<p>Резка наружной резьбы на трубах.</p>
                <p><strong>Диаметр:</strong> до 40 мм</p>'
            ],
            [
                'title' => 'Сварочные работы',
                'slug' => 'welding',
                'img' => 'services/9.jpg',
                'description' => '<p>Все виды сварочных работ:</p>
                <p><strong>Методы:</strong> МП, РД, РАД, КТС, АФДС, МАДП, АФ, КСО</p>'
            ],
            [
                'title' => 'Гибка арматуры',
                'slug' => 'rebar-bending',
                'img' => 'services/10.jpg',
                'description' => '<p>Гибка арматуры на станке по чертежам заказчика.</p>
                <p><strong>Диаметр:</strong> до 35 мм</p>'
            ],
            [
                'title' => 'Дробеструйная очистка',
                'slug' => 'blasting',
                'img' => 'services/11.jpg',
                'description' => '<p>Дробеструйная очистка листового металла и проката для подготовки поверхности.</p>'
            ],
            [
                'title' => 'Лакокрасочное покрытие',
                'slug' => 'painting',
                'img' => 'services/12.jpg',
                'description' => '<p>Нанесение лакокрасочного покрытия на металл воздушным и безвоздушным способом.</p>'
            ],
            [
                'title' => 'Полимерное окрашивание',
                'slug' => 'polymer-coating',
                'img' => 'services/13.jpg',
                'description' => '<p>Полимерное окрашивание металла:</p>
                <ul>
                    <li><strong>Габариты:</strong> 6000×750×2000 мм</li>
                    <li><strong>Максимальная масса:</strong> 200 кг</li>
                </ul>'
            ],
            [
                'title' => 'Штамповочное производство',
                'slug' => 'stamping',
                'img' => 'services/14.jpg',
                'description' => '<p>Штамповочное производство на оснастке заказчика.</p>
                <p><strong>Усилие прессов:</strong> от 25 до 100 тонн</p>'
            ],
            [
                'title' => 'Рубка листового металла',
                'slug' => 'shearing',
                'img' => 'services/15.jpg',
                'description' => '<p>Рубка листового металла на гильотинных ножницах:</p>
                <ul>
                    <li><strong>Толщина металла:</strong> до 6/3 мм</li>
                    <li><strong>Длина реза:</strong> 3000 мм</li>
                </ul>'
            ],
        ];

        DB::table('services')->insert($data);
    }
}
