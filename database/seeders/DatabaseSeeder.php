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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            BatikSeeder::class,
            KesenianSeeder::class,
            CocokTanamSeeder::class,
            PermainanSeeder::class,
            KulinerSeeder::class,
            GuideSeeder::class,
            HomestaySeeder::class,
            StudyBandingSeeder::class,
        ]);
    }
}
