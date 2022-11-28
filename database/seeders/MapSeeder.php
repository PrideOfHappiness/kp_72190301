<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Map;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataMap = [
            [
                'latitude' => '-8.27185',
                'longitude' => '112.07449',
                'namaTempat' => 'Bakung',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.2083',
                'longitude' => '112.33447',
                'namaTempat' => 'Binangun',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.03978',
                'longitude' => '112.4055',
                'namaTempat' => 'Doko',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-7.99425',
                'longitude' => '112.33358',
                'namaTempat' => 'Gandusari',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.03497',
                'longitude' => '112.24678',
                'namaTempat' => 'Garum',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.18776',
                'longitude' => '112.10553',
                'namaTempat' => 'Kademangan',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.12434',
                'longitude' => '112.20798',
                'namaTempat' => 'Kanigoro',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.12599',
                'longitude' => '112.38054',
                'namaTempat' => 'Kesamben',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-7.999',
                'longitude' => '112.21916',
                'namaTempat' => 'Nglegok',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.26655',
                'longitude' => '112.26308',
                'namaTempat' => 'Panggungrejo',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.02121',
                'longitude' => '112.1203',
                'namaTempat' => 'Ponggok',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.09835',
                'longitude' => '112.12595',
                'namaTempat' => 'Sanankulon',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.115',
                'longitude' => '112.43209',
                'namaTempat' => 'Selorejo',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.13773',
                'longitude' => '112.31134',
                'namaTempat' => 'Selopuro',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.08588',
                'longitude' => '112.07255',
                'namaTempat' => 'Srengat',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.17779',
                'longitude' => '112.22669',
                'namaTempat' => 'Sutojayan',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.09961',
                'longitude' => '112.2736',
                'namaTempat' => 'Talun',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.01394',
                'longitude' => '112.03234',
                'namaTempat' => 'Udanawu',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.29303',
                'longitude' => '112.33923',
                'namaTempat' => 'Wates',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.01577',
                'longitude' => '112.38354',
                'namaTempat' => 'Wlingi',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.05276',
                'longitude' => '112.00551',
                'namaTempat' => 'Wonodadi',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.26474',
                'longitude' => '112.17481',
                'namaTempat' => 'Wonotirto',
                'kab/kota' => 'Kab. Blitar',
            ],
            [
                'latitude' => '-8.07129',
                'longitude' => '112.17681',
                'namaTempat' => 'Kepanjenkidul',
                'kab/kota' => 'Kota Blitar',
            ],
            [
                'latitude' => '-8.0917',
                'longitude' => '112.18735',
                'namaTempat' => 'Sananwetan',
                'kab/kota' => 'Kota Blitar',
            ],
            [
                'latitude' => '-8.09869',
                'longitude' => '112.14839',
                'namaTempat' => 'Sukorejo',
                'kab/kota' => 'Kota Blitar',
            ],
            [
                'latitude' => '-8.24825',
                'longitude' => '112.89008',
                'namaTempat' => 'Ampelgading',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.31414',
                'longitude' => '112.55233',
                'namaTempat' => 'Bantur',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.10168',
                'longitude' => '112.65126',
                'namaTempat' => 'Bululawang',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.20298',
                'longitude' => '112.73254',
                'namaTempat' => 'Dampit',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-7.9498',
                'longitude' => '112.53548',
                'namaTempat' => 'Dau',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.32509',
                'longitude' => '112.43016',
                'namaTempat' => 'Donomulyo',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.34334',
                'longitude' => '112.62199',
                'namaTempat' => 'Gedangan',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.15784',
                'longitude' => '112.63398',
                'namaTempat' => 'Gondanglegi',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-7.9556',
                'longitude' => '112.79339',
                'namaTempat' => 'Jabung',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.2125',
                'longitude' => '112.43819',
                'namaTempat' => 'Kalipare',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-7.85986',
                'longitude' => '112.5928',
                'namaTempat' => 'Karangploso',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-7.80639',
                'longitude' => '112.33757',
                'namaTempat' => 'Kasembon',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.13257',
                'longitude' => '112.57177',
                'namaTempat' => 'Kepanjen',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.11969',
                'longitude' => '112.47637',
                'namaTempat' => 'Kromengan',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-7.84449',
                'longitude' => '112.70118',
                'namaTempat' => 'Lawang',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.0818',
                'longitude' => '112.55331',
                'namaTempat' => 'Ngajum',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-7.88956',
                'longitude' => '112.37137',
                'namaTempat' => 'Ngantang',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.24575',
                'longitude' => '112.51802',
                'namaTempat' => 'Pagak',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.19895',
                'longitude' => '112.60425',
                'namaTempat' => 'Pagelaran',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-7.96026',
                'longitude' => '112.70535',
                'namaTempat' => 'Pakis',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.05671',
                'longitude' => '112.61174',
                'namaTempat' => 'Pakisaji',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.0616',
                'longitude' => '112.82293',
                'namaTempat' => 'Poncokusumo',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-7.84065',
                'longitude' => '112.44583',
                'namaTempat' => 'Pujon',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-7.8883',
                'longitude' => '112.67003',
                'namaTempat' => 'Singosari',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.337',
                'longitude' => '112.71479',
                'namaTempat' => 'Sumbermanjing Wetan',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.16577',
                'longitude' => '112.49373',
                'namaTempat' => 'Sumberpucung',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.05976',
                'longitude' => '112.68094',
                'namaTempat' => 'Tajinan',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.27957',
                'longitude' => '112.83679',
                'namaTempat' => 'Titroyudo',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.00462',
                'longitude' => '112.75869',
                'namaTempat' => 'Tumpang',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.17771',
                'longitude' => '112.69214',
                'namaTempat' => 'Turen',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.0008',
                'longitude' => '112.55862',
                'namaTempat' => 'Wagir',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.1126',
                'longitude' => '112.73127',
                'namaTempat' => 'Wajak',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-8.06391',
                'longitude' => '112.49299',
                'namaTempat' => 'Wonosari',
                'kab/kota' => 'Kab. Malang',
            ],
            [
                'latitude' => '-7.95125',
                'longitude' => '112.64926',
                'namaTempat' => 'Blimbing',
                'kab/kota' => 'Kota Malang',
            ],
            [
                'latitude' => '-8.0079',
                'longitude' => '112.65773',
                'namaTempat' => 'Kedungkandang',
                'kab/kota' => 'Kota Malang',
            ],
            [
                'latitude' => '-7.97449',
                'longitude' => '112.62601',
                'namaTempat' => 'Klojen',
                'kab/kota' => 'Kota Malang',
            ],
            [
                'latitude' => '-7.93553',
                'longitude' => '112.62428',
                'namaTempat' => 'Lowokwaru',
                'kab/kota' => 'Kota Malang',
            ],
            [
                'latitude' => '-7.99311',
                'longitude' => '112.61099',
                'namaTempat' => 'Sukun',
                'kab/kota' => 'Kota Malang',
            ],
        ];
        foreach($dataMap as $map){
            Map::create($map);
        }
    }
}
