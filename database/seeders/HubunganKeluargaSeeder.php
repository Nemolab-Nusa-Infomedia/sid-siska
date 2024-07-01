<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HubunganKeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hubungan_keluargas')->insert([
            [
                'name' => 'KEPALA KELUARGA'
            ],
            [
                'name' => 'SUAMI'
            ],
            [
                'name' => 'ISTRI'
            ],
            [
                'name' => 'ANAK'
            ],
            [
                'name' => 'MENANTU'
            ],
            [
                'name' => 'CUCU MERTUA'
            ],
            [
                'name' => 'FAMILI LAIN'
            ],
            [
                'name' => 'PEMBANTU'
            ],
            [
                'name' => 'LAINNYA'
            ]
        ]);
    }
}
