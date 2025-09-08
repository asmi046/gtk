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

        Storage::disk('public')->put("partners/ase.jpg", file_get_contents(public_path('tmp_data/partners/new/ase.jpg')), 'public');
        Storage::disk('public')->put("partners/autodor.jpg", file_get_contents(public_path('tmp_data/partners/new/autodor.jpg')), 'public');
        Storage::disk('public')->put("partners/bazu-r.jpg", file_get_contents(public_path('tmp_data/partners/new/bazu-r.jpg')), 'public');
        Storage::disk('public')->put("partners/egorievskii.jpg", file_get_contents(public_path('tmp_data/partners/new/egorievskii.jpg')), 'public');
        Storage::disk('public')->put("partners/gazprom.jpg", file_get_contents(public_path('tmp_data/partners/new/gazprom.jpg')), 'public');
        Storage::disk('public')->put("partners/green.jpg", file_get_contents(public_path('tmp_data/partners/new/green.jpg')), 'public');
        Storage::disk('public')->put("partners/kamaz.jpg", file_get_contents(public_path('tmp_data/partners/new/kamaz.jpg')), 'public');
        Storage::disk('public')->put("partners/mansurovo.jpg", file_get_contents(public_path('tmp_data/partners/new/mansurovo.jpg')), 'public');
        Storage::disk('public')->put("partners/nikimt.jpg", file_get_contents(public_path('tmp_data/partners/new/nikimt.jpg')), 'public');
        Storage::disk('public')->put("partners/rgd.jpg", file_get_contents(public_path('tmp_data/partners/new/rgd.jpg')), 'public');
        Storage::disk('public')->put("partners/rosneft.jpg", file_get_contents(public_path('tmp_data/partners/new/rosneft.jpg')), 'public');
        Storage::disk('public')->put("partners/sem.jpg", file_get_contents(public_path('tmp_data/partners/new/sem.jpg')), 'public');
        Storage::disk('public')->put("partners/severstal.jpg", file_get_contents(public_path('tmp_data/partners/new/severstal.jpg')), 'public');
        Storage::disk('public')->put("partners/smu1.jpg", file_get_contents(public_path('tmp_data/partners/new/smu1.jpg')), 'public');
        Storage::disk('public')->put("partners/titan2.jpg", file_get_contents(public_path('tmp_data/partners/new/titan2.jpg')), 'public');


        DB::table('partners')->truncate();

       $partners = [
            [
                'title' => 'АСЭ (Атом Строй Экспорт)',
                'image' => "partners/ase.jpg",
                'order' => 1
            ],
            [
                'title' => 'ГРИНН',
                'image' => "partners/green.jpg",
                'order' => 2
            ],
            [
                'title' => 'ГАЗПРОМ',
                'image' => "partners/gazprom.jpg",
                'order' => 3
            ],
            [
                'title' => 'Егорьевский ТК',
                'image' => "partners/egorievskii.jpg",
                'order' => 4
            ],
            [
                'title' => 'Северсталь',
                'image' => "partners/severstal.jpg",
                'order' => 5
            ],
            [
                'title' => 'ржд',
                'image' => "partners/rgd.jpg",
                'order' => 6
            ],
            [
                'title' => 'РосНефть',
                'image' => "partners/rosneft.jpg",
                'order' => 7
            ],
            [
                'title' => 'Базу - Русь',
                'image' => "partners/bazu-r.jpg",
                'order' => 8
            ],
            [
                'title' => 'Камаз',
                'image' => "partners/kamaz.jpg",
                'order' => 9
            ],
            [
                'title' => 'АК Мансурово',
                'image' => "partners/mansurovo.jpg",
                'order' => 10
            ],
            [
                'title' => 'Концерн Титан-2',
                'image' => "partners/titan2.jpg",
                'order' => 11
            ],
            [
                'title' => 'Трест росСЭМ',
                'image' => "partners/sem.jpg",
                'order' => 12
            ],
            [
                'title' => 'Никимт Атомстрой',
                'image' => "partners/nikimt.jpg",
                'order' => 13
            ],
            [
                'title' => 'СМУ №1',
                'image' => "partners/smu1.jpg",
                'order' => 14
            ],
            [
                'title' => 'Автодор',
                'image' => "partners/autodor.jpg",
                'order' => 15
            ],
       ];

       DB::table("partners")->insert($partners);

    }
}
