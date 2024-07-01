<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusRekamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_rekams')->insert([
            [
                'name' => 'BELUM'
            ],
            [
                'name' => 'SUDAH'
            ],
            [
                'name' => 'CARD PRINTED'
            ],
            [
                'name' => 'PRINT READY RECORD'
            ],
            [
                'name' => 'CARD SHIPPED'
            ],
            [
                'name' => 'SENT FOR CARD PRINTING'
            ],
            [
                'name' => 'CARD ISSUE'
            ],
            [
                'name' => 'BELUM WAJIB'
            ]
        ]);
    }
}
