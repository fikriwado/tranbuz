<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bus = [
            (object) ['nama' => 'Budiman', 'kelas' => 'Eksekutif'],
            (object) ['nama' => 'Budiman', 'kelas' => 'Super Eksekutif'],
            (object) ['nama' => 'Budiman', 'kelas' => 'Best In Class'],
            (object) ['nama' => 'Budiman', 'kelas' => 'Bisnis AC'],
            (object) ['nama' => 'Budiman', 'kelas' => 'Bisnis AC First Class'],
            (object) ['nama' => 'Budiman', 'kelas' => 'Ekonomi Bisnis AC'],
            (object) ['nama' => 'Primajasa', 'kelas' => 'Eksekutif'],
            (object) ['nama' => 'Primajasa', 'kelas' => 'Super Eksekutif'],
            (object) ['nama' => 'Primajasa', 'kelas' => 'AC Bisnis'],
            (object) ['nama' => 'Primajasa', 'kelas' => 'AC Ekonomi']
        ];

        foreach ($bus as $item) {
            DB::table('bus')->insert([
                'nama' => $item->nama,
                'kelas' => $item->kelas
            ]);
        }
    }
}
