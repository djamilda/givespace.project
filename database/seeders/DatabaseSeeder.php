<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

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

        Campaign::create([
            'title' => 'Bantuan Pendidikan',
            'description' => 'Dukung beasiswa dan fasilitas belajar anak-anak yang membutuhkan.',
            'target_amount' => 25000000,
            'is_active' => true,
        ]);

        Campaign::create([
            'title' => 'Kesehatan Komunitas',
            'description' => 'Dukungan pelayanan kesehatan untuk warga kurang mampu.',
            'target_amount' => 40000000,
            'is_active' => true,
        ]);

        Campaign::create([
            'title' => 'Pemberdayaan UMKM',
            'description' => 'Bantuan modal dan pelatihan untuk usaha mikro lokal.',
            'target_amount' => 30000000,
            'is_active' => true,
        ]);
    }
}
