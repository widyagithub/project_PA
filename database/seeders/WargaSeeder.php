<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wargas')->insert([
            'nik' => '3510134448880001',
            'nama' => 'Widya Wijayaningsih',
            'alamat' => 'Krajan',
        ]);
    }
}
