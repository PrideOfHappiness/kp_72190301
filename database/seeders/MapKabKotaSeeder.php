<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MapsKabKota;

class MapKabKotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maps = [
            [
                'latitude' => '-8.13333',
                'longitude' => '112.25',
                'namaTempat' => 'Kab. Blitar',
                'icon' => 'Marker Icon',
            ],
            [
                'latitude' => '-8.098611',
                'longitude' => '112.165278',
                'namaTempat' => 'Kota Blitar',
                'icon' => 'Marker Icon',
            ],
            [
                'latitude' => '-7.9797',
                'longitude' => '112.6304',
                'namaTempat' => 'Kab. Malang',
                'namaTempat' => 'Map Marker',
            ],
            [
                'latitude' => '-7.98',
                'longitude' => '112.62',
                'namaTempat' => 'Kota Malang',
                'namaTempat' => 'Map Marker',
            ],
        ];

        foreach($maps as $map){
            MapsKabKota::create($map);
        }
    }
}
