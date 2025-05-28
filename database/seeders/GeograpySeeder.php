<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class GeograpySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stages = [
            ['name' => "Курская область", 'geo' =>"" ],
            ['name' => "Ленинградская область", 'geo' =>"" ],
            ['name' => "Калининградская область", 'geo' =>"" ],
            ['name' => "Воронежская область", 'geo' =>"" ],
            ['name' => "Орел", 'geo' =>"" ],
            ['name' => "Тула", 'geo' =>"" ],
            ['name' => "Брянск", 'geo' =>"" ],
            ['name' => "Московская область", 'geo' =>"" ],
            ['name' => "Курская область", 'geo' =>"" ],
            ['name' => "Воронежская область", 'geo' =>"" ],
            ['name' => "Белгород", 'geo' =>"" ],
            ['name' => "Краснодар", 'geo' =>"" ],
            ['name' => "Калуга", 'geo' =>"" ],
            ['name' => "Липецк", 'geo' =>"" ],
            ['name' => "Лиски", 'geo' =>"" ],
            ['name' => "Ст. Оскол", 'geo' =>"" ],
            ['name' => "Ливны", 'geo' =>"" ],

        ];

        DB::table('geograpies')->insert($stages);
    }
}
