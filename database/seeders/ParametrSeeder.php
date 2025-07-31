<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ParametrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Storage::disk('public')->put("parametr/main_top.jpg", file_get_contents(public_path('tmp_data/main_banner.jpg')), 'public');

        $data = [
            [
                'str_id' => 'banner_h1',
                'section' => "Текст на баннере",
                'title' => null,
                'value' => "Производство <br>Металлоконструкций",
                'img' => null,
            ],
            [
                'str_id' => 'banner_value_1',
                'section' => "Цифры на баннере",
                'title' => "Производственная <br>площадь",
                'value' => "11 000<span> м2</span>",
                'img' => null,
            ],

            [
                'str_id' => 'banner_value_2',
                'section' => "Цифры на баннере",
                'title' => "Тонн изготовление <br>металлоконструкций в год",
                'value' => "<span>до </span>7000",
                'img' => null,
            ],

            [
                'str_id' => 'banner_value_3',
                'section' => "Цифры на баннере",
                'title' => "Высококлассных <br>специалистов",
                'value' => "120+",
                'img' => null,
            ],

        ];

        DB::table("parametrs")->insert($data);

    }
}
