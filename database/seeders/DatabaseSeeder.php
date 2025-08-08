<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(
            [
                SeoDataSeeder::class,
                ProductsSeeder::class,
                ProductsBmzSeeder::class,
                ProductsReservuarSeeder::class,
                ProductsZakladnieSeeder::class,

                MetalStructuresSeeder::class,
                MetalStructuresLepSeeder::class,
                MetalStructuresStroySeeder::class,
                MetalStructuresNsObSeeder::class,

                VacancySeeder::class,

                PageSeeder::class,
                UserSeeder::class,
                MenuSeeder::class,
                GeograpySeeder::class,
                ContactSeeder::class,
                ParametrSeeder::class,
                PartnerSeeder::class,
                AdvantageSeeder::class,
                StageSeeder::class
            ]
        );

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
