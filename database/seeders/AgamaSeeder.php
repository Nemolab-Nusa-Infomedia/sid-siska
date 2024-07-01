<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agamas')->insert([
            [
                'name' => 'ISLAM'
            ],
            [
                'name' => 'KRISTEN'
            ],
            [
                'name' => 'KATOLIK'
            ],
            [
                'name' => 'HINDU'
            ],
            [
                'name' => 'BUDDHA'
            ],
            [
                'name' => 'KHONGHUCU'
            ],
            [
                'name' => 'KEPERCAYAAN LAINNYA'
            ],
        ]);
    }
}
