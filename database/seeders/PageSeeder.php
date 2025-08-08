<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'title' => "Политика в области обработки персональных данных",
                'sub_title' => null,
                'template' => null,
                'slug' => Str::slug("Политика в области обработки персональных данных"),
                'description' => file_get_contents(public_path('page_text/policy.html')),
            ],

            [
                'title' => "Согласие на обработку персональных данных",
                'sub_title' => null,
                'template' => null,
                'slug' => Str::slug("Согласие на обработку персональных данных"),
                'description' => file_get_contents(public_path('page_text/accept.html')),
            ],

            [
                'title' => "О файлах Cookie",
                'sub_title' => null,
                'template' => null,
                'slug' => Str::slug("О файлах Cookie"),
                'description' => file_get_contents(public_path('page_text/accept.html')),
            ],

            [
                'title' => 'О нас',
                'sub_title' => null,
                'template' => null,
                'slug' => Str::slug("О нас"),
                'description' => file_get_contents(public_path('page_text/cookie.html')),
            ],

            [
                'title' => 'Лаборатория неразрушающего контроля',
                'sub_title' => 'Надёжная транспортировка жидкостей и газов — от проекта до запуска.Мы создаём стальные трубопроводные системы, рассчитанные на десятилетия безотказной работы в самых разных условиях.',
                'template' => null,
                'slug' => Str::slug("Лаборатория неразрушающего контроля"),
                'description' => file_get_contents(public_path('page_text/lab.html')),
            ],

            [
                'title' => 'Невостребованная продукция',
                'sub_title' => 'Реализация невостребованной продукции и оборудования',
                'template' => 'template.nv_prod',
                'slug' => Str::slug("Невостребованная продукция"),
                'description' => file_get_contents(public_path('page_text/nev_prod.html')),
            ],
        ];


        foreach ($data as $item) {
            // Storage::disk('public')->put("main_bnr.webp", file_get_contents(public_path('img/main_bnr.webp')), 'public');
            DB::table("pages")->insert($item);

            DB::table("seo_data")->insert(
                [
                    'url' => 'page/'.$item['slug'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );
        }



    }
}
