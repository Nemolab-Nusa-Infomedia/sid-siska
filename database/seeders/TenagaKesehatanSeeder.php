<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TenagaKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tenaga_kesehatans')->insert([
            [
                'name' => 'DOKTER'
            ],
            [
                'name' => 'BIDAN PERAWAT'
            ],
            [
                'name' => 'DUKUN'
            ],
            [
                'name' => 'LAINNYA'
            ]
        ]);
    }
}
