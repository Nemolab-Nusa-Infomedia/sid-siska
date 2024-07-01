<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendidikanDalamKKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendidikan_dalam_k_k_s')->insert([
            [
                'name' => 'TIDAK/BELUM SEKOLAH'
            ],
            [
                'name' => 'BELUM TAMAT SD/SEDERAJAT'
            ],
        ]);
    }
}
