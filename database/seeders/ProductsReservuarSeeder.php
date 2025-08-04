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
                'title' => "Резервуары стальные (Емкости)",
                'sub_title' => "Осуществляем изготовление резервуаров широкого спектра применения",
                'slug' => Str::slug("Резервуары стальные"),
                'img' => 'products/emkost.webp',
                'description' => file_get_contents(public_path('tmp_data/product/reservuar/main.html')),
                'template' => 'template.reservuar',
                'images' => null,

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
