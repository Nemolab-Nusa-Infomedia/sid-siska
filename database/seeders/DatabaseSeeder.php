<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\SukuSeeder;
use Database\Seeders\AgamaSeeder;
use Database\Seeders\PekerjaanSeeder;
use Database\Seeders\StatusRekamSeeder;
use Database\Seeders\JenisKelaminSeeder;
use Database\Seeders\JenisKelahiranSeeder;
use Database\Seeders\TenagaKesehatanSeeder;
use Database\Seeders\HubunganKeluargaSeeder;
use Database\Seeders\PendidikanDalamKKSeeder;
use Database\Seeders\StatusWargaNegaraSeeder;
use Database\Seeders\PendidikanSedangDitempuhSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       $this->call([AgamaSeeder::class, HubunganKeluargaSeeder::class, JenisKelahiranSeeder::class, JenisKelaminSeeder::class,
                PekerjaanSeeder::class, PendidikanDalamKKSeeder::class, PendidikanSedangDitempuhSeeder::class, StatusRekamSeeder::class,
                StatusWargaNegaraSeeder::class, SukuSeeder::class, TenagaKesehatanSeeder::class
        ]);
    }
}
