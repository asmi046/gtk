<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("partners/egor.png", file_get_contents(public_path('tmp_data/partners/egor.png')), 'public');
        Storage::disk('public')->put("partners/gaz.png", file_get_contents(public_path('tmp_data/partners/gaz.png')), 'public');
        Storage::disk('public')->put("partners/green.png", file_get_contents(public_path('tmp_data/partners/green.png')), 'public');
        Storage::disk('public')->put("partners/minvest.png", file_get_contents(public_path('tmp_data/partners/minvest.png')), 'public');
        Storage::disk('public')->put("partners/stal.png", file_get_contents(public_path('tmp_data/partners/stal.png')), 'public');

        DB::table('partners')->truncate();

       $partners = [
            [
                'title'=>'Газпром',
                'image'=>"partners/gaz.png",
                'order'=> 1
            ],

            [
                'title'=>'Северсталь',
                'image'=>"partners/stal.png",
                'order'=> 2
            ],

            [
                'title'=>'Металлоинвест',
                'image'=>"partners/minvest.png",
                'order'=> 3
            ],

            [
                'title'=>'Егорьевский тепличный комбинат',
                'image'=>"partners/egor.png",
                'order'=> 4
            ],

            [
                'title'=>'Гринн корпорация',
                'image'=>"partners/green.png",
                'order'=> 5
            ]
       ];

       DB::table("partners")->insert($partners);

    }
}
