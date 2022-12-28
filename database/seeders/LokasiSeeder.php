<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lokasi = [
            (object) ['nama' => 'Manonjaya', 'kota' => 'Tasikmalaya', 'kode' => 'TSM'],
            (object) ['nama' => 'Salopa', 'kota' => 'Tasikmalaya', 'kode' => 'TSM'],
            (object) ['nama' => 'Pool', 'kota' => 'Tasikmalaya', 'kode' => 'TSM'],
            (object) ['nama' => 'Cibiru', 'kota' => 'Bandung', 'kode' => 'BDG'],
            (object) ['nama' => 'Lembang', 'kota' => 'Bandung', 'kode' => 'BDG'],
            (object) ['nama' => 'Pool', 'kota' => 'Bandung', 'kode' => 'BDG'],
            (object) ['nama' => 'Kp.Rambutan', 'kota' => 'Jakarta', 'kode' => 'JKT'],
            (object) ['nama' => 'Tanjung Priok', 'kota' => 'Jakarta', 'kode' => 'JKT'],
            (object) ['nama' => 'Lebak Bulus', 'kota' => 'Jakarta', 'kode' => 'JKT'],
            (object) [ 'nama' => 'Pool', 'kota' => 'Jakarta', 'kode' => 'JKT']
        ];

        foreach ($lokasi as $item) {
            DB::table('lokasi')->insert([
                'nama' => $item->nama,
                'kota' => $item->kota,
                'kode' => $item->kode
            ]);
        }
    }
}
