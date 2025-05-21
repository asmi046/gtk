<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       $partners = [
            [
                'title'=>'Газпром',
                'image'=>'swiper_icon/gazprom_icon.svg',
                'order'=> 1
            ],

            [
                'title'=>'Северсталь',
                'image'=>'swiper_icon/serverstal_icon.svg',
                'order'=> 2
            ],

            [
                'title'=>'Металлоинвест',
                'image'=>'swiper_icon/metallinvest_icon.svg',
                'order'=> 3
            ],

            [
                'title'=>'Егорьевский тепличный комбинат',
                'image'=>'swiper_icon/egoryevsk_icon.svg',
                'order'=> 4
            ],

            [
                'title'=>'Гринн корпорация',
                'image'=>'swiper_icon/grinn_icon.svg',
                'order'=> 5
            ]
       ];

       DB::table("partners")->insert($partners);

    }
}
