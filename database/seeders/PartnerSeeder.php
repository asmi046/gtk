<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Partner::truncate();

       $partners = [
            [
                'title'=>'Газпром',
                'image'=>'swiper_icon/gazprom_icon.svg',
                'sort_order'=> 1
            ],

            [
                'title'=>'Северсталь',
                'image'=>'swiper_icon/serverstal_icon.svg',
                'sort_order'=> 2
            ],

            [
                'title'=>'Металлоинвест',
                'image'=>'swiper_icon/metallinvest_icon.svg',
                'sort_order'=> 3
            ],

            [
                'title'=>'Егорьевский тепличный комбинат',
                'image'=>'swiper_icon/egoryevsk_icon.svg',
                'sort_order'=> 4
            ],

            [
                'title'=>'Гринн корпорация',
                'image'=>'swiper_icon/grinn_icon.svg',
                'sort_order'=> 5
            ]
       ];

       foreach($partners as $partner){
        Partner::create($partner);
       }
    }
}
