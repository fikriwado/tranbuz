<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RuteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bus = [
            (object) [
                'id_bus' => 1,
                'id_pemberangkatan' => 1,
                'id_pemberhentian' => 4,
                'jam_berangkat' => '08:00',
                'jam_sampai' => '12:30',
                'jam_transit' => '08:45'
            ],
            (object) [
                'id_bus' => 1,
                'id_pemberangkatan' => 1,
                'id_pemberhentian' => 4,
                'jam_berangkat' => '09:00',
                'jam_sampai' => '13:30',
                'jam_transit' => '09:45'
            ],
            (object) [
                'id_bus' => 1,
                'id_pemberangkatan' => 1,
                'id_pemberhentian' => 4,
                'jam_berangkat' => '10:00',
                'jam_sampai' => '14:30',
                'jam_transit' => '10:45'
            ],
            (object) [
                'id_bus' => 1,
                'id_pemberangkatan' => 1,
                'id_pemberhentian' => 4,
                'jam_berangkat' => '10:30',
                'jam_sampai' => '15:00',
                'jam_transit' => '11:15'
            ],
            (object) [
                'id_bus' => 1,
                'id_pemberangkatan' => 1,
                'id_pemberhentian' => 4,
                'jam_berangkat' => '11:00',
                'jam_sampai' => '15:30',
                'jam_transit' => '11:45'
            ],
            (object) [
                'id_bus' => 2,
                'id_pemberangkatan' => 3,
                'id_pemberhentian' => 9,
                'jam_berangkat' => '08:00',
                'jam_sampai' => '14:30',
                'jam_transit' => '08:20'
            ],
            (object) [
                'id_bus' => 2,
                'id_pemberangkatan' => 3,
                'id_pemberhentian' => 9,
                'jam_berangkat' => '08:30',
                'jam_sampai' => '15:00',
                'jam_transit' => '08:50'
            ],
            (object) [
                'id_bus' => 2,
                'id_pemberangkatan' => 3,
                'id_pemberhentian' => 9,
                'jam_berangkat' => '09:00',
                'jam_sampai' => '15:30',
                'jam_transit' => '09:20'
            ],
            (object) [
                'id_bus' => 2,
                'id_pemberangkatan' => 3,
                'id_pemberhentian' => 9,
                'jam_berangkat' => '09:30',
                'jam_sampai' => '16:00',
                'jam_transit' => '09:50'
            ],
            (object) [
                'id_bus' => 2,
                'id_pemberangkatan' => 3,
                'id_pemberhentian' => 9,
                'jam_berangkat' => '10:00',
                'jam_sampai' => '16:30',
                'jam_transit' => '10:20'
            ],
            (object) [
                'id_bus' => 9,
                'id_pemberangkatan' => 2,
                'id_pemberhentian' => 6,
                'jam_berangkat' => '08:00',
                'jam_sampai' => '13:30',
                'jam_transit' => '11:30'
            ],
            (object) [
                'id_bus' => 9,
                'id_pemberangkatan' => 2,
                'id_pemberhentian' => 6,
                'jam_berangkat' => '08:30',
                'jam_sampai' => '14:00',
                'jam_transit' => '12:00'
            ],
            (object) [
                'id_bus' => 9,
                'id_pemberangkatan' => 2,
                'id_pemberhentian' => 6,
                'jam_berangkat' => '09:00',
                'jam_sampai' => '14:30',
                'jam_transit' => '12:30'
            ],
            (object) [
                'id_bus' => 9,
                'id_pemberangkatan' => 2,
                'id_pemberhentian' => 6,
                'jam_berangkat' => '09:30',
                'jam_sampai' => '15:00',
                'jam_transit' => '13:00'
            ],
            (object) [
                'id_bus' => 9,
                'id_pemberangkatan' => 2,
                'id_pemberhentian' => 6,
                'jam_berangkat' => '10:00',
                'jam_sampai' => '15:30',
                'jam_transit' => '13:30'
            ]
        ];

        foreach ($bus as $item) {
            DB::table('rute')->insert([
                'id_bus' => $item->id_bus,
                'id_pemberangkatan' => $item->id_pemberangkatan,
                'id_pemberhentian' => $item->id_pemberhentian,
                'jam_berangkat' => $item->jam_berangkat,
                'jam_sampai' => $item->jam_sampai,
                'jam_transit' => $item->jam_transit
            ]);
        }
    }
}
