<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataPemiluSeeder extends Seeder
{
    public function run()
    {
        $partai =  [
            [
                'id' => '1',
                'nama_partai' => 'PKB',
            ],
            [
                'id' => '2',
                'nama_partai' => 'Gerindra',
            ],
            [
                'id' => '3',
                'nama_partai' => 'PDIP',
            ],
            [
                'id' => '4',
                'nama_partai' => 'Golkar',
            ],
            [
                'id' => '5',
                'nama_partai' => 'NasDem',
            ],
            [
                'id' => '6',
                'nama_partai' => 'Garuda',
            ],
            [
                'id' => '7',
                'nama_partai' => 'Berkarya',
            ],
            [
                'id' => '8',
                'nama_partai' => 'PKS',
            ],
            [
                'id' => '9',
                'nama_partai' => 'Perindo',
            ],
            [
                'id' => '10',
                'nama_partai' => 'PPP',
            ],
            [
                'id' => '11',
                'nama_partai' => 'PSI',
            ],
            [
                'id' => '12',
                'nama_partai' => 'PAN',
            ],
            [
                'id' => '13',
                'nama_partai' => 'Hanura',
            ],
            [
                'id' => '14',
                'nama_partai' => 'Demokrat',
            ],
            [
                'id' => '19',
                'nama_partai' => 'PBB',
            ],
            [
                'id' => '20',
                'nama_partai' => 'PKPI',
            ],
        ];

        foreach ($partai as $data) {
            \App\Models\DataPartai::create($data);
        }

        // $dataTps = [
        //     [
        //         'id' => 1,
        //         'nama_tps' => 'TPS 01',
        //         'provinsi_id' => 1,
        //         'kabupaten_kota_id' => 5,
        //         'kecamatan_id' => 73,
        //         'kelurahan_desa_id' => 777,
        //         'data_dapil_id' => 7,
        //     ],
        //     [
        //         'id' => 2,
        //         'nama_tps' => 'TPS 02',
        //         'provinsi_id' => 1,
        //         'kabupaten_kota_id' => 5,
        //         'kecamatan_id' => 73,
        //         'kelurahan_desa_id' => 777,
        //         'data_dapil_id' => 7,
        //     ],
        //     [
        //         'id' => 3,
        //         'nama_tps' => 'TPS 03',
        //         'provinsi_id' => 1,
        //         'kabupaten_kota_id' => 5,
        //         'kecamatan_id' => 73,
        //         'kelurahan_desa_id' => 777,
        //         'data_dapil_id' => 7,
        //     ],
        // ];

        // foreach ($dataTps as $dt) {
        //     \App\Models\DataTps::create($dt);
        // }
    }
}
