<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\LcDatabaseSeeder;
use Lwwcas\LaravelCountries\Models\Country;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call([
//            UserSeeder::class,
//            AdminSeeder::class,
            LcDatabaseSeeder::class
        ]);

        // \App\Models\Student::factory()->create([
        //     'name' => 'Test Student',
        //     'email' => 'test@example.com',
        // ]);
    }
}
