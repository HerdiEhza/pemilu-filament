<?php

namespace Database\Seeders;

use App\Models\DataKabupatenKota;
use App\Models\DataKecamatan;
use App\Models\DataKelurahanDesa;
use App\Models\DataProvinsi;
use App\Models\User;
use Illuminate\Database\Seeder;

class WilayahSeeder extends Seeder
{
    public function run()
    {
        $provinsis =  [
            [
                'id'             => 1,
                'name'  => 'Kalimantan Barat',
            ],
            // [
            //     'id'             => 2,
            //     'name'  => 'Kalimantan Selatan',
            // ],
            // [
            //     'id'             => 3,
            //     'name'  => 'Kalimantan Timur',
            // ],
        ];

        foreach ($provinsis as $provinsi)
        {
            \App\Models\IndonesiaProvinces::create($provinsi);
        }

        $kabupaten_kotas = [
            [
                'name' => 'Kabupaten Bengkayang',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kabupaten Kapuas Hulu',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kabupaten Kayong Utara',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kabupaten Ketapang',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kabupaten Kubu Raya',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kabupaten Landak',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kabupaten Melawi',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kabupaten Mempawah',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kabupaten Sambas',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kabupaten Sanggau',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kabupaten Sekadau',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kabupaten Sintang',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kota Pontianak',
                'indonesia_provinces_id' => 1,
            ],
            [
                'name' => 'Kota Singkawang',
                'indonesia_provinces_id' => 1,
            ],
        ];

        foreach ($kabupaten_kotas as $kabupaten_kota)
        {
            \App\Models\IndonesiaCities::create($kabupaten_kota);
        }

        $kecamatans = [
            [
                'name' => 'Bengkayang',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Capkala',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Jagoi Babang',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Ledo',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Lembah Bawang',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Lumar',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Monterado',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Samalantan',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Sanggau Ledo',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Seluas',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Siding',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Sungai Betung',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Sungai Raya',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Sungai Raya Kepulauan',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Suti Semarang',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Teriak',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Tujuh Belas',
                'indonesia_cities_id' => 1,
            ],
            [
                'name' => 'Badau',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Batang Lupar',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Bika',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Boyan Tanjung',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Bunut Hilir',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Bunut Hulu',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Embaloh Hilir',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Embaloh Hulu',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Empanang',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Hulu Gurung',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Jongkong',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Kalis',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Mentebah',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Pengkadan',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Puring Kencana',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Putussibau Selatan',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Putussibau Utara',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Seberuang',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Selimbau',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Semitau',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Silat Hilir',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Silat Hulu',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Suhaid',
                'indonesia_cities_id' => 2,
            ],
            [
                'name' => 'Kepulauan Karimata',
                'indonesia_cities_id' => 3,
            ],
            [
                'name' => 'Pulau Maya',
                'indonesia_cities_id' => 3,
            ],
            [
                'name' => 'Seponti',
                'indonesia_cities_id' => 3,
            ],
            [
                'name' => 'Simpang Hilir',
                'indonesia_cities_id' => 3,
            ],
            [
                'name' => 'Sukadana',
                'indonesia_cities_id' => 3,
            ],
            [
                'name' => 'Teluk Batang',
                'indonesia_cities_id' => 3,
            ],
            [
                'name' => 'Air Upas',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Benua Kayong',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Delta Pawan',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Hulu Sungai',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Jelai Hulu',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Kendawangan',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Manis Mata',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Marau',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Matan Hilir Selatan',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Matan Hilir Utara',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Muara Pawan',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Nanga Tayap',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Pemahan',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Sandai',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Simpang Dua',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Singkup',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Sungai Laur',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Sungai Melayu Rayak',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Simpang Hulu',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Tumbang Titi',
                'indonesia_cities_id' => 4,
            ],
            [
                'name' => 'Batu Ampar',
                'indonesia_cities_id' => 5,
            ],
            [
                'name' => 'Kuala Mandor B',
                'indonesia_cities_id' => 5,
            ],
            [
                'name' => 'Kubu',
                'indonesia_cities_id' => 5,
            ],
            [
                'name' => 'Rasau Jaya',
                'indonesia_cities_id' => 5,
            ],
            [
                'name' => 'Sungai Ambawang',
                'indonesia_cities_id' => 5,
            ],
            [
                'name' => 'Sungai Kakap',
                'indonesia_cities_id' => 5,
            ],
            [
                'name' => 'Sungai Raya',
                'indonesia_cities_id' => 5,
            ],
            [
                'name' => 'Teluk Pakedai',
                'indonesia_cities_id' => 5,
            ],
            [
                'name' => 'Terentang',
                'indonesia_cities_id' => 5,
            ],
            [
                'name' => 'Air Besar',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Banyuke Hulu',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Jelimpo',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Kuala Behe',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Mandor',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Mempawah Hulu',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Menjalin',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Menyuke',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Meranti',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Ngabang',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Sebangki',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Sengah Temila',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Sompak',
                'indonesia_cities_id' => 6,
            ],
            [
                'name' => 'Belimbing',
                'indonesia_cities_id' => 7,
            ],
            [
                'name' => 'Belimbing Hulu',
                'indonesia_cities_id' => 7,
            ],
            [
                'name' => 'Ella Hilir',
                'indonesia_cities_id' => 7,
            ],
            [
                'name' => 'Menukung',
                'indonesia_cities_id' => 7,
            ],
            [
                'name' => 'Nanga Pinoh',
                'indonesia_cities_id' => 7,
            ],
            [
                'name' => 'Pinoh Selatan',
                'indonesia_cities_id' => 7,
            ],
            [
                'name' => 'Pinoh Utara',
                'indonesia_cities_id' => 7,
            ],
            [
                'name' => 'Sayan',
                'indonesia_cities_id' => 7,
            ],
            [
                'name' => 'Sokan',
                'indonesia_cities_id' => 7,
            ],
            [
                'name' => 'Tanah Pinoh',
                'indonesia_cities_id' => 7,
            ],
            [
                'name' => 'Tanah Pinoh Barat',
                'indonesia_cities_id' => 7,
            ],
            [
                'name' => 'Anjongan',
                'indonesia_cities_id' => 8,
            ],
            [
                'name' => 'Mempawah Hilir',
                'indonesia_cities_id' => 8,
            ],
            [
                'name' => 'Mempawah Timur',
                'indonesia_cities_id' => 8,
            ],
            [
                'name' => 'Sadaniang',
                'indonesia_cities_id' => 8,
            ],
            [
                'name' => 'Segedong',
                'indonesia_cities_id' => 8,
            ],
            [
                'name' => 'Siantan',
                'indonesia_cities_id' => 8,
            ],
            [
                'name' => 'Sungai Kunyit',
                'indonesia_cities_id' => 8,
            ],
            [
                'name' => 'Sungai Pinyuh',
                'indonesia_cities_id' => 8,
            ],
            [
                'name' => 'Toho',
                'indonesia_cities_id' => 8,
            ],
            [
                'name' => 'Galing',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Jawai',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Jawai Selatan',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Paloh',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Pemangkat',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Sajad',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Sajingan Besar',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Salatiga',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Sambas',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Sebawi',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Sejangkung',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Selakau',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Selakau Timur',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Semparuk',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Subah',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Tangaran',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Tebas',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Tekarang',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Teluk Keramat',
                'indonesia_cities_id' => 9,
            ],
            [
                'name' => 'Balai',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Beduai',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Bonti',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Entikong',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Jangkang',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Kapuas',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Kembayan',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Meliau',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Mukok',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Noyan',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Parindu',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Sekayam',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Tayan Hilir',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Tayan Hulu',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Toba',
                'indonesia_cities_id' => 10,
            ],
            [
                'name' => 'Belitang',
                'indonesia_cities_id' => 11,
            ],
            [
                'name' => 'Belitang Hilir',
                'indonesia_cities_id' => 11,
            ],
            [
                'name' => 'Belitang Hulu',
                'indonesia_cities_id' => 11,
            ],
            [
                'name' => 'Nanga Mahap',
                'indonesia_cities_id' => 11,
            ],
            [
                'name' => 'Nanga Taman',
                'indonesia_cities_id' => 11,
            ],
            [
                'name' => 'Sekadau Hilir',
                'indonesia_cities_id' => 11,
            ],
            [
                'name' => 'Sekadau Hulu',
                'indonesia_cities_id' => 11,
            ],
            [
                'name' => 'Ambalau',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Binjai Hulu',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Dedai',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Kayan Hilir',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Kayan Hulu',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Kelam Permai',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Ketungau Hilir',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Ketungau Hulu',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Ketungau Tengah',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Serawai',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Sepauk',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Sintang',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Sungai Tebelian',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Tempunak',
                'indonesia_cities_id' => 12,
            ],
            [
                'name' => 'Pontianak Barat',
                'indonesia_cities_id' => 13,
            ],
            [
                'name' => 'Pontianak Kota',
                'indonesia_cities_id' => 13,
            ],
            [
                'name' => 'Pontianak Selatan',
                'indonesia_cities_id' => 13,
            ],
            [
                'name' => 'Pontianak Tenggara',
                'indonesia_cities_id' => 13,
            ],
            [
                'name' => 'Pontianak Timur',
                'indonesia_cities_id' => 13,
            ],
            [
                'name' => 'Pontianak Utara',
                'indonesia_cities_id' => 13,
            ],
            [
                'name' => 'Singkawang Barat',
                'indonesia_cities_id' => 14,
            ],
            [
                'name' => 'Singkawang Selatan',
                'indonesia_cities_id' => 14,
            ],
            [
                'name' => 'Singkawang Tengah',
                'indonesia_cities_id' => 14,
            ],
            [
                'name' => 'Singkawang Timur',
                'indonesia_cities_id' => 14,
            ],
            [
                'name' => 'Singkawang Utara',
                'indonesia_cities_id' => 14,
            ],
        ];

        foreach ($kecamatans as $kecamatan)
        {
            \App\Models\IndonesiaDistricts::create($kecamatan);
        }

        $kelurahan_desas = [
            [
                'name' => 'Bani Amas',
                'indonesia_districts_id' => 1,
            ],
            [
                'name' => 'Bhakti Mulya',
                'indonesia_districts_id' => 1,
            ],
            [
                'name' => 'Setia Budi',
                'indonesia_districts_id' => 1,
            ],
            [
                'name' => 'Tirta Kencana',
                'indonesia_districts_id' => 1,
            ],
            [
                'name' => 'Bumi Emas',
                'indonesia_districts_id' => 1,
            ],
            [
                'name' => 'Sabalo',
                'indonesia_districts_id' => 1,
            ],
            [
                'name' => 'Aris',
                'indonesia_districts_id' => 2,
            ],
            [
                'name' => 'Capkala',
                'indonesia_districts_id' => 2,
            ],
            [
                'name' => 'Mandor',
                'indonesia_districts_id' => 2,
            ],
            [
                'name' => 'Pawangi',
                'indonesia_districts_id' => 2,
            ],
            [
                'name' => 'Sebandut',
                'indonesia_districts_id' => 2,
            ],
            [
                'name' => 'Setanduk',
                'indonesia_districts_id' => 2,
            ],
            [
                'name' => 'Gersik',
                'indonesia_districts_id' => 3,
            ],
            [
                'name' => 'Jagoi',
                'indonesia_districts_id' => 3,
            ],
            [
                'name' => 'Kumba',
                'indonesia_districts_id' => 3,
            ],
            [
                'name' => 'Sekida',
                'indonesia_districts_id' => 3,
            ],
            [
                'name' => 'Semunying Jaya',
                'indonesia_districts_id' => 3,
            ],
            [
                'name' => 'Sinar Baru',
                'indonesia_districts_id' => 3,
            ],
            [
                'name' => 'Dayung',
                'indonesia_districts_id' => 4,
            ],
            [
                'name' => 'Jesape',
                'indonesia_districts_id' => 4,
            ],
            [
                'name' => 'Lesabela',
                'indonesia_districts_id' => 4,
            ],
            [
                'name' => 'Lomba Karya',
                'indonesia_districts_id' => 4,
            ],
            [
                'name' => 'Rodaya',
                'indonesia_districts_id' => 4,
            ],
            [
                'name' => 'Seles',
                'indonesia_districts_id' => 4,
            ],
            [
                'name' => 'Semangat',
                'indonesia_districts_id' => 4,
            ],
            [
                'name' => 'Serangkat',
                'indonesia_districts_id' => 4,
            ],
            [
                'name' => 'Sidai',
                'indonesia_districts_id' => 4,
            ],
            [
                'name' => 'Suka Damai',
                'indonesia_districts_id' => 4,
            ],
            [
                'name' => 'Suka Jaya',
                'indonesia_districts_id' => 4,
            ],
            [
                'name' => 'Tebuah Marong',
                'indonesia_districts_id' => 4,
            ],
            [
                'name' => 'Godang Damar',
                'indonesia_districts_id' => 5,
            ],
            [
                'name' => 'Janyat',
                'indonesia_districts_id' => 5,
            ],
            [
                'name' => 'Kinande',
                'indonesia_districts_id' => 5,
            ],
            [
                'name' => 'Lembah Bawang',
                'indonesia_districts_id' => 5,
            ],
            [
                'name' => 'Papan Tembawang',
                'indonesia_districts_id' => 5,
            ],
            [
                'name' => 'Papan Uduk',
                'indonesia_districts_id' => 5,
            ],
            [
                'name' => 'Saka Taru',
                'indonesia_districts_id' => 5,
            ],
            [
                'name' => 'Tempapan',
                'indonesia_districts_id' => 5,
            ],
            [
                'name' => 'Belimbing',
                'indonesia_districts_id' => 6,
            ],
            [
                'name' => 'Lamolda',
                'indonesia_districts_id' => 6,
            ],
            [
                'name' => 'Magmagan Karya',
                'indonesia_districts_id' => 6,
            ],
            [
                'name' => 'Seren Selimbau',
                'indonesia_districts_id' => 6,
            ],
            [
                'name' => 'Tiga Berkat',
                'indonesia_districts_id' => 6,
            ],
            [
                'name' => 'Beringin Baru',
                'indonesia_districts_id' => 7,
            ],
            [
                'name' => 'Gerantung',
                'indonesia_districts_id' => 7,
            ],
            [
                'name' => 'Goa Boma',
                'indonesia_districts_id' => 7,
            ],
            [
                'name' => 'Jahandung',
                'indonesia_districts_id' => 7,
            ],
            [
                'name' => 'Mekar Baru',
                'indonesia_districts_id' => 7,
            ],
            [
                'name' => 'Monterado',
                'indonesia_districts_id' => 7,
            ],
            [
                'name' => 'Nek Ginap',
                'indonesia_districts_id' => 7,
            ],
            [
                'name' => 'Rantau',
                'indonesia_districts_id' => 7,
            ],
            [
                'name' => 'Sendoreng',
                'indonesia_districts_id' => 7,
            ],
            [
                'name' => 'Serindu',
                'indonesia_districts_id' => 7,
            ],
            [
                'name' => 'Siaga',
                'indonesia_districts_id' => 7,
            ],
            [
                'name' => 'Babane',
                'indonesia_districts_id' => 8,
            ],
            [
                'name' => 'Bukit Serayan',
                'indonesia_districts_id' => 8,
            ],
            [
                'name' => 'Marunsu',
                'indonesia_districts_id' => 8,
            ],
            [
                'name' => 'Pasti Jaya',
                'indonesia_districts_id' => 8,
            ],
            [
                'name' => 'Saba"u',
                'indonesia_districts_id' => 8,
            ],
            [
                'name' => 'Samalantan',
                'indonesia_districts_id' => 8,
            ],
            [
                'name' => 'Tumiang',
                'indonesia_districts_id' => 8,
            ],
            [
                'name' => 'Bange',
                'indonesia_districts_id' => 9,
            ],
            [
                'name' => 'Danti',
                'indonesia_districts_id' => 9,
            ],
            [
                'name' => 'Gua',
                'indonesia_districts_id' => 9,
            ],
            [
                'name' => 'Lembang',
                'indonesia_districts_id' => 9,
            ],
            [
                'name' => 'Sango',
                'indonesia_districts_id' => 9,
            ],
            [
                'name' => 'Bengkawan',
                'indonesia_districts_id' => 10,
            ],
            [
                'name' => 'Kalon',
                'indonesia_districts_id' => 10,
            ],
            [
                'name' => 'Mayak',
                'indonesia_districts_id' => 10,
            ],
            [
                'name' => 'Sahan',
                'indonesia_districts_id' => 10,
            ],
            [
                'name' => 'Seluas',
                'indonesia_districts_id' => 10,
            ],
            [
                'name' => 'Sentangau Jaya',
                'indonesia_districts_id' => 10,
            ],
            [
                'name' => 'Hli Buie',
                'indonesia_districts_id' => 11,
            ],
            [
                'name' => 'Siding',
                'indonesia_districts_id' => 11,
            ],
            [
                'name' => 'Sungkung I',
                'indonesia_districts_id' => 11,
            ],
            [
                'name' => 'Sungkung II',
                'indonesia_districts_id' => 11,
            ],
            [
                'name' => 'Sungkung III',
                'indonesia_districts_id' => 11,
            ],
            [
                'name' => 'Tangguh',
                'indonesia_districts_id' => 11,
            ],
            [
                'name' => 'Tamong',
                'indonesia_districts_id' => 11,
            ],
            [
                'name' => 'Tawang',
                'indonesia_districts_id' => 11,
            ],
            [
                'name' => 'Cipta Karya',
                'indonesia_districts_id' => 12,
            ],
            [
                'name' => 'Karya Bhakti',
                'indonesia_districts_id' => 12,
            ],
            [
                'name' => 'Suka Bangun',
                'indonesia_districts_id' => 12,
            ],
            [
                'name' => 'Suka Maju',
                'indonesia_districts_id' => 12,
            ],
            [
                'name' => 'Sungai Duri',
                'indonesia_districts_id' => 13,
            ],
            [
                'name' => 'Sungai Jaga A',
                'indonesia_districts_id' => 13,
            ],
            [
                'name' => 'Sungai Jaga B',
                'indonesia_districts_id' => 13,
            ],
            [
                'name' => 'Sungai Pangkalan I',
                'indonesia_districts_id' => 13,
            ],
            [
                'name' => 'Sungai Pangkalan II',
                'indonesia_districts_id' => 13,
            ],
            [
                'name' => 'Karimunting',
                'indonesia_districts_id' => 14,
            ],
            [
                'name' => 'Pulau Lemukutan',
                'indonesia_districts_id' => 14,
            ],
            [
                'name' => 'Rukma Jaya',
                'indonesia_districts_id' => 14,
            ],
            [
                'name' => 'Sungai Keran',
                'indonesia_districts_id' => 14,
            ],
            [
                'name' => 'Sungai Raya',
                'indonesia_districts_id' => 14,
            ],
            [
                'name' => 'Cempaka Putih',
                'indonesia_districts_id' => 15,
            ],
            [
                'name' => 'Kelayuk',
                'indonesia_districts_id' => 15,
            ],
            [
                'name' => 'Kiung',
                'indonesia_districts_id' => 15,
            ],
            [
                'name' => 'Muhi Bersatu',
                'indonesia_districts_id' => 15,
            ],
            [
                'name' => 'Nangka',
                'indonesia_districts_id' => 15,
            ],
            [
                'name' => 'Suka Maju',
                'indonesia_districts_id' => 15,
            ],
            [
                'name' => 'Suti Semarang',
                'indonesia_districts_id' => 15,
            ],
            [
                'name' => 'Tapen',
                'indonesia_districts_id' => 15,
            ],
            [
                'name' => 'Ampar Benteng',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Bana',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Bangun Sari',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Benteng',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Dharma Bhakti',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Malo Jelayan',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Lulang',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Puteng',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Sebente',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Sebetung Menyala',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Sekaruh',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Setia Jaya',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Sumber Karya',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Tanjung',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Telidik',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Temia Sio',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Teriak',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Tubajur',
                'indonesia_districts_id' => 16,
            ],
            [
                'name' => 'Bengkilu',
                'indonesia_districts_id' => 17,
            ],
            [
                'name' => 'Kamuh',
                'indonesia_districts_id' => 17,
            ],
            [
                'name' => 'Pisak',
                'indonesia_districts_id' => 17,
            ],
            [
                'name' => 'Sinar Tebudak',
                'indonesia_districts_id' => 17,
            ],
            [
                'name' => 'Badau',
                'indonesia_districts_id' => 18,
            ],
            [
                'name' => 'Janting',
                'indonesia_districts_id' => 18,
            ],
            [
                'name' => 'Kekurak',
                'indonesia_districts_id' => 18,
            ],
            [
                'name' => 'Pulau Majang',
                'indonesia_districts_id' => 18,
            ],
            [
                'name' => 'Sebindang',
                'indonesia_districts_id' => 18,
            ],
            [
                'name' => 'Semuntik',
                'indonesia_districts_id' => 18,
            ],
            [
                'name' => 'Seriang',
                'indonesia_districts_id' => 18,
            ],
            [
                'name' => 'Tajum',
                'indonesia_districts_id' => 18,
            ],
            [
                'name' => 'Tinting Seligi',
                'indonesia_districts_id' => 18,
            ],
            [
                'name' => 'Labian',
                'indonesia_districts_id' => 19,
            ],
            [
                'name' => 'Labian Ira"ang',
                'indonesia_districts_id' => 19,
            ],
            [
                'name' => 'Lanjak Deras',
                'indonesia_districts_id' => 19,
            ],
            [
                'name' => 'Melemba',
                'indonesia_districts_id' => 19,
            ],
            [
                'name' => 'Mensiau',
                'indonesia_districts_id' => 19,
            ],
            [
                'name' => 'Sepandan',
                'indonesia_districts_id' => 19,
            ],
            [
                'name' => 'Setulang',
                'indonesia_districts_id' => 19,
            ],
            [
                'name' => 'Sungai Abau',
                'indonesia_districts_id' => 19,
            ],
            [
                'name' => 'Sungai Ajung',
                'indonesia_districts_id' => 19,
            ],
            [
                'name' => 'Sungai Senunuk',
                'indonesia_districts_id' => 19,
            ],
            [
                'name' => 'Bika',
                'indonesia_districts_id' => 20,
            ],
            [
                'name' => 'Bika Hulu',
                'indonesia_districts_id' => 20,
            ],
            [
                'name' => 'Jelemuk',
                'indonesia_districts_id' => 20,
            ],
            [
                'name' => 'Jongkong Manday',
                'indonesia_districts_id' => 20,
            ],
            [
                'name' => 'Melapi Manday',
                'indonesia_districts_id' => 20,
            ],
            [
                'name' => 'Nanga Manday',
                'indonesia_districts_id' => 20,
            ],
            [
                'name' => 'Penyeluang',
                'indonesia_districts_id' => 20,
            ],
            [
                'name' => 'Teluk Sindur',
                'indonesia_districts_id' => 20,
            ],
            [
                'name' => 'Boyan Tanjung',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Delintas Karya',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Karya Maju',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Landau Mentail',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Mujan',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Nanga Betung',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Nanga Boyan',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Nanga Danau',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Nanga Jemah',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Nanga Ret',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Nanga Sangan',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Pemawan',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Riam Mengelai',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Sri Wangi',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Teluk Geruguk',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Tubang Jaya',
                'indonesia_districts_id' => 21,
            ],
            [
                'name' => 'Bunut Hilir',
                'indonesia_districts_id' => 22,
            ],
            [
                'name' => 'Bunut Hulu',
                'indonesia_districts_id' => 22,
            ],
            [
                'name' => 'Bunut Tengah',
                'indonesia_districts_id' => 22,
            ],
            [
                'name' => 'Empangau',
                'indonesia_districts_id' => 22,
            ],
            [
                'name' => 'Empangau Hilir',
                'indonesia_districts_id' => 22,
            ],
            [
                'name' => 'Entibab',
                'indonesia_districts_id' => 22,
            ],
            [
                'name' => 'Kapuas Raya',
                'indonesia_districts_id' => 22,
            ],
            [
                'name' => 'Nanga Tuan',
                'indonesia_districts_id' => 22,
            ],
            [
                'name' => 'Teluk Aur',
                'indonesia_districts_id' => 22,
            ],
            [
                'name' => 'Tembang',
                'indonesia_districts_id' => 22,
            ],
            [
                'name' => 'Ujung Pandang',
                'indonesia_districts_id' => 22,
            ],
            [
                'name' => 'Bakong Permai',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Batu Tiga',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Beringin',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Nanga Dua',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Nanga Kelibang',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Nanga Payang',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Nanga Semangut',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Nanga Suruk',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Pantas Bersatu',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Riam Piyang',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Segitak',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Selaup',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Semangut Utara',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Sungai Besar',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Temuyuk',
                'indonesia_districts_id' => 23,
            ],
            [
                'name' => 'Belatung',
                'indonesia_districts_id' => 24,
            ],
            [
                'name' => 'Keliling Semulung',
                'indonesia_districts_id' => 24,
            ],
            [
                'name' => 'Kirin Nangka',
                'indonesia_districts_id' => 24,
            ],
            [
                'name' => 'Lawik',
                'indonesia_districts_id' => 24,
            ],
            [
                'name' => 'Nanga Embaloh',
                'indonesia_districts_id' => 24,
            ],
            [
                'name' => 'Nanga Lauk',
                'indonesia_districts_id' => 24,
            ],
            [
                'name' => 'Nanga Palin',
                'indonesia_districts_id' => 24,
            ],
            [
                'name' => 'Pala Pintas',
                'indonesia_districts_id' => 24,
            ],
            [
                'name' => 'Ujung Bayur',
                'indonesia_districts_id' => 24,
            ],
            [
                'name' => 'Banua Martinus',
                'indonesia_districts_id' => 25,
            ],
            [
                'name' => 'Banua Ujung',
                'indonesia_districts_id' => 25,
            ],
            [
                'name' => 'Batu Lintang',
                'indonesia_districts_id' => 25,
            ],
            [
                'name' => 'Langan Baru',
                'indonesia_districts_id' => 25,
            ],
            [
                'name' => 'Menua Sadap',
                'indonesia_districts_id' => 25,
            ],
            [
                'name' => 'Pulau Manak',
                'indonesia_districts_id' => 25,
            ],
            [
                'name' => 'Rantau Prapat',
                'indonesia_districts_id' => 25,
            ],
            [
                'name' => 'Saujung Giling Manik',
                'indonesia_districts_id' => 25,
            ],
            [
                'name' => 'Tamao',
                'indonesia_districts_id' => 25,
            ],
            [
                'name' => 'Ulak Pauk',
                'indonesia_districts_id' => 25,
            ],
            [
                'name' => 'Bajau Andai',
                'indonesia_districts_id' => 26,
            ],
            [
                'name' => 'Keling Panggau',
                'indonesia_districts_id' => 26,
            ],
            [
                'name' => 'Kumang Jaya',
                'indonesia_districts_id' => 26,
            ],
            [
                'name' => 'Laja Sandang',
                'indonesia_districts_id' => 26,
            ],
            [
                'name' => 'Nanga Kantuk',
                'indonesia_districts_id' => 26,
            ],
            [
                'name' => 'Tintin Peninjau',
                'indonesia_districts_id' => 26,
            ],
            [
                'name' => 'Beringin',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Bugang',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Karya Mandiri',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Kelakar',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Landau Kumpang',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Lubuk Antuk',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Mentawit',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Mubung',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Nanga Tepuai',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Nanga Yen',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Parang',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Sejahtera Mandiri',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Simpang Senara',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Tani Makmur',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Tunas Muda',
                'indonesia_districts_id' => 27,
            ],
            [
                'name' => 'Bontai',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Jongkong Kanan',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Jongkong Kiri Hilir',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Jongkong Kiri Hulu',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Jongkong Kiri Tengah',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Jongkong Pasar',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Jongkong Tanjung',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Kandung Suli',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Karya Baru',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Nanga Serian',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Penepian Raya',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Temenang',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Ujung Jambu',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Ujung Said',
                'indonesia_districts_id' => 28,
            ],
            [
                'name' => 'Bahenap',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Kalis Raya',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Kensuray',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Nanga Danau',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Nanga Kalis',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Nanga Lebangan',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Nanga Raun',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Nanga Sebintang',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Nanga Tubuk',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Peniung',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Rantau Bumbun',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Rantau Kalis',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Ribang Kadeng',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Segiam',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Semerantau',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Tapang Da"an',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Tekudak',
                'indonesia_districts_id' => 29,
            ],
            [
                'name' => 'Kepala Gurung',
                'indonesia_districts_id' => 30,
            ],
            [
                'name' => 'Menaren',
                'indonesia_districts_id' => 30,
            ],
            [
                'name' => 'Nanga Mentebah',
                'indonesia_districts_id' => 30,
            ],
            [
                'name' => 'Suka Maju',
                'indonesia_districts_id' => 30,
            ],
            [
                'name' => 'Tangai Jaya',
                'indonesia_districts_id' => 30,
            ],
            [
                'name' => 'Tanjung',
                'indonesia_districts_id' => 30,
            ],
            [
                'name' => 'Tanjung Intan',
                'indonesia_districts_id' => 30,
            ],
            [
                'name' => 'Tekalong',
                'indonesia_districts_id' => 30,
            ],
            [
                'name' => 'Buak Limbang',
                'indonesia_districts_id' => 31,
            ],
            [
                'name' => 'Hulu Pengkadan',
                'indonesia_districts_id' => 31,
            ],
            [
                'name' => 'Kerangan Panjang',
                'indonesia_districts_id' => 31,
            ],
            [
                'name' => 'Marta Dana',
                'indonesia_districts_id' => 31,
            ],
            [
                'name' => 'Mawan',
                'indonesia_districts_id' => 31,
            ],
            [
                'name' => 'Pengkadan Hilir',
                'indonesia_districts_id' => 31,
            ],
            [
                'name' => 'Permata',
                'indonesia_districts_id' => 31,
            ],
            [
                'name' => 'Pinang Laka',
                'indonesia_districts_id' => 31,
            ],
            [
                'name' => 'Riam Panjang',
                'indonesia_districts_id' => 31,
            ],
            [
                'name' => 'Sasan',
                'indonesia_districts_id' => 31,
            ],
            [
                'name' => 'Sira Jaya',
                'indonesia_districts_id' => 31,
            ],
            [
                'name' => 'Kantuk Asam',
                'indonesia_districts_id' => 32,
            ],
            [
                'name' => 'Kantuk Bunut',
                'indonesia_districts_id' => 32,
            ],
            [
                'name' => 'Langau',
                'indonesia_districts_id' => 32,
            ],
            [
                'name' => 'Merakai Panjang',
                'indonesia_districts_id' => 32,
            ],
            [
                'name' => 'Sungai Antu',
                'indonesia_districts_id' => 32,
            ],
            [
                'name' => 'Sungai Mawang',
                'indonesia_districts_id' => 32,
            ],
            [
                'name' => 'Beringin Jaya',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Bungan Jaya',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Cempaka Baru',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Ingko" Tambe',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Jaras',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Kedamin Darat',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Kereho',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Melapi',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Sayut',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Sungai Uluk',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Suka Maju',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Tanjung Jati',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Tanjung Lokang',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Urang Unsa',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Kedamin Hilir',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Kedamin Hulu',
                'indonesia_districts_id' => 33,
            ],
            [
                'name' => 'Ariung Mendalam',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Banua Tanga',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Datah Dian',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Jangkang',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Lauk',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Nanga Awin',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Nanga Nyabau',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Nanga Sambus',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Padua Mendalam',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Pala Pulau',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Seluan',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Sibau Hilir',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Sibau Hulu',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Sungai Uluk Palin',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Tanjung Beruang',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Tanjung Karang',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Tanjung Lasa',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Hilir Kantor',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Putussibau Kota',
                'indonesia_districts_id' => 34,
            ],
            [
                'name' => 'Bati',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Bekuan',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Belikai',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Beluis Harum',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Emperiang',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Gurung',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Jerenjang',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Nanga Lot',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Nanga Pala',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Pala Kota',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Ranyai',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Sejiram',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Seneban',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Tajau Mada',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Tanjung Keliling',
                'indonesia_districts_id' => 35,
            ],
            [
                'name' => 'Benuis',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Dalam',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Engkerengas',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Gerayau',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Gudang Hilir',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Gudang Hulu',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Mawan',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Nanga Leboyan',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Nibung',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Piasak Hilir',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Piasak Hulu',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Sekubah',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Sekulat',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Semalah',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Tempurau',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Titian Kuala',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Vega',
                'indonesia_districts_id' => 36,
            ],
            [
                'name' => 'Entipan',
                'indonesia_districts_id' => 37,
            ],
            [
                'name' => 'Kenepai Komplek',
                'indonesia_districts_id' => 37,
            ],
            [
                'name' => 'Kenerak',
                'indonesia_districts_id' => 37,
            ],
            [
                'name' => 'Marsedan Raya',
                'indonesia_districts_id' => 37,
            ],
            [
                'name' => 'Nanga Kenepai',
                'indonesia_districts_id' => 37,
            ],
            [
                'name' => 'Nanga Lemedak',
                'indonesia_districts_id' => 37,
            ],
            [
                'name' => 'Nanga Seberuang',
                'indonesia_districts_id' => 37,
            ],
            [
                'name' => 'Padung Kumang',
                'indonesia_districts_id' => 37,
            ],
            [
                'name' => 'Sekedau',
                'indonesia_districts_id' => 37,
            ],
            [
                'name' => 'Semitau Hilir',
                'indonesia_districts_id' => 37,
            ],
            [
                'name' => 'Semitau Hulu',
                'indonesia_districts_id' => 37,
            ],
            [
                'name' => 'Tua" Abang',
                'indonesia_districts_id' => 37,
            ],
            [
                'name' => 'Baru',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Bongkong',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Bukit Penai',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Miau Merah',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Nanga Nuar',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Pangeran',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Penai',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Perigi',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Rumbih',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Seberu',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Sungai Sena',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Sentabai',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Setunggul',
                'indonesia_districts_id' => 38,
            ],
            [
                'name' => 'Belimbing',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Dangkan Kota',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Entebi',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Landau Badai',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Landau Rantau',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Lebak Nanjah',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Nanga Dangkan',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Nanga Luan',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Nanga Lungu',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Nanga Ngeri',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Perjuk',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Riam Tapang',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Selangkai',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Selimu',
                'indonesia_districts_id' => 39,
            ],
            [
                'name' => 'Jongkong Hulu',
                'indonesia_districts_id' => 40,
            ],
            [
                'name' => 'Kerengas',
                'indonesia_districts_id' => 40,
            ],
            [
                'name' => 'Laut Tawang',
                'indonesia_districts_id' => 40,
            ],
            [
                'name' => 'Lubuk Pengail',
                'indonesia_districts_id' => 40,
            ],
            [
                'name' => 'Madang Permai',
                'indonesia_districts_id' => 40,
            ],
            [
                'name' => 'Mantan',
                'indonesia_districts_id' => 40,
            ],
            [
                'name' => 'Menapar',
                'indonesia_districts_id' => 40,
            ],
            [
                'name' => 'Mensusai',
                'indonesia_districts_id' => 40,
            ],
            [
                'name' => 'Nanga Suhaid',
                'indonesia_districts_id' => 40,
            ],
            [
                'name' => 'Tanjung',
                'indonesia_districts_id' => 40,
            ],
            [
                'name' => 'Tanjung Harapan',
                'indonesia_districts_id' => 40,
            ],
            [
                'name' => 'Betok Jaya',
                'indonesia_districts_id' => 41,
            ],
            [
                'name' => 'Padang',
                'indonesia_districts_id' => 41,
            ],
            [
                'name' => 'Pelapis',
                'indonesia_districts_id' => 41,
            ],
            [
                'name' => 'Dusun Besar',
                'indonesia_districts_id' => 42,
            ],
            [
                'name' => 'Dusun Kecil',
                'indonesia_districts_id' => 42,
            ],
            [
                'name' => 'Kemboja',
                'indonesia_districts_id' => 42,
            ],
            [
                'name' => 'Satai Lestari',
                'indonesia_districts_id' => 42,
            ],
            [
                'name' => 'Tanjungsatai',
                'indonesia_districts_id' => 42,
            ],
            [
                'name' => 'Durian Sebatang',
                'indonesia_districts_id' => 43,
            ],
            [
                'name' => 'Podorukun',
                'indonesia_districts_id' => 43,
            ],
            [
                'name' => 'Seponti Jaya',
                'indonesia_districts_id' => 43,
            ],
            [
                'name' => 'Sungai Sepeti',
                'indonesia_districts_id' => 43,
            ],
            [
                'name' => 'Telaga Arum',
                'indonesia_districts_id' => 43,
            ],
            [
                'name' => 'Wonorejo',
                'indonesia_districts_id' => 43,
            ],
            [
                'name' => 'Batu Barat',
                'indonesia_districts_id' => 44,
            ],
            [
                'name' => 'Lubuk Batu',
                'indonesia_districts_id' => 44,
            ],
            [
                'name' => 'Matan Jaya',
                'indonesia_districts_id' => 44,
            ],
            [
                'name' => 'Medan Jaya',
                'indonesia_districts_id' => 44,
            ],
            [
                'name' => 'Nipah Kuning',
                'indonesia_districts_id' => 44,
            ],
            [
                'name' => 'Padu Banjar',
                'indonesia_districts_id' => 44,
            ],
            [
                'name' => 'Pemangkat',
                'indonesia_districts_id' => 44,
            ],
            [
                'name' => 'Penjalaan',
                'indonesia_districts_id' => 44,
            ],
            [
                'name' => 'Pulau Kumbang',
                'indonesia_districts_id' => 44,
            ],
            [
                'name' => 'Rantau Panjang',
                'indonesia_districts_id' => 44,
            ],
            [
                'name' => 'Sungai Mata-mata',
                'indonesia_districts_id' => 44,
            ],
            [
                'name' => 'Teluk Melano',
                'indonesia_districts_id' => 44,
            ],
            [
                'name' => 'Sutera',
                'indonesia_districts_id' => 45,
            ],
            [
                'name' => 'Pangkalan Buton',
                'indonesia_districts_id' => 45,
            ],
            [
                'name' => 'Pampang Harapan',
                'indonesia_districts_id' => 45,
            ],
            [
                'name' => 'Sejahtera',
                'indonesia_districts_id' => 45,
            ],
            [
                'name' => 'Simpang Tiga',
                'indonesia_districts_id' => 45,
            ],
            [
                'name' => 'Riam Berasap Jaya',
                'indonesia_districts_id' => 45,
            ],
            [
                'name' => 'Gunung Sembilan',
                'indonesia_districts_id' => 45,
            ],
            [
                'name' => 'Harapan Mulia',
                'indonesia_districts_id' => 45,
            ],
            [
                'name' => 'Benawai Agung',
                'indonesia_districts_id' => 45,
            ],
            [
                'name' => 'Sedahan Jaya',
                'indonesia_districts_id' => 45,
            ],
            [
                'name' => 'Alur Bandung',
                'indonesia_districts_id' => 46,
            ],
            [
                'name' => 'Banyu Abang',
                'indonesia_districts_id' => 46,
            ],
            [
                'name' => 'Mas Bangun',
                'indonesia_districts_id' => 46,
            ],
            [
                'name' => 'Sungaipaduan',
                'indonesia_districts_id' => 46,
            ],
            [
                'name' => 'Telukbatang',
                'indonesia_districts_id' => 46,
            ],
            [
                'name' => 'Telukbatang Selatan',
                'indonesia_districts_id' => 46,
            ],
            [
                'name' => 'Telukbatang Utara',
                'indonesia_districts_id' => 46,
            ],
            [
                'name' => 'Air Durian Jaya',
                'indonesia_districts_id' => 47,
            ],
            [
                'name' => 'Air Upas',
                'indonesia_districts_id' => 47,
            ],
            [
                'name' => 'Banda Sari',
                'indonesia_districts_id' => 47,
            ],
            [
                'name' => 'Gahang',
                'indonesia_districts_id' => 47,
            ],
            [
                'name' => 'Harapan Baru',
                'indonesia_districts_id' => 47,
            ],
            [
                'name' => 'Mekar Jaya',
                'indonesia_districts_id' => 47,
            ],
            [
                'name' => 'Membuluh Baru',
                'indonesia_districts_id' => 47,
            ],
            [
                'name' => 'Sari Bekayas',
                'indonesia_districts_id' => 47,
            ],
            [
                'name' => 'Sukaria',
                'indonesia_districts_id' => 47,
            ],
            [
                'name' => 'Baru',
                'indonesia_districts_id' => 48,
            ],
            [
                'name' => 'Negeri Baru',
                'indonesia_districts_id' => 48,
            ],
            [
                'name' => 'Padang',
                'indonesia_districts_id' => 48,
            ],
            [
                'name' => 'Suka Baru',
                'indonesia_districts_id' => 48,
            ],
            [
                'name' => 'Sungai Kinjil',
                'indonesia_districts_id' => 48,
            ],
            [
                'name' => 'Tuan-Tuan',
                'indonesia_districts_id' => 48,
            ],
            [
                'name' => 'Kauman',
                'indonesia_districts_id' => 48,
            ],
            [
                'name' => 'Mulia Kerta',
                'indonesia_districts_id' => 48,
            ],
            [
                'name' => 'Kali Nilam',
                'indonesia_districts_id' => 49,
            ],
            [
                'name' => 'Payah Kumang',
                'indonesia_districts_id' => 49,
            ],
            [
                'name' => 'Suka Bangun',
                'indonesia_districts_id' => 49,
            ],
            [
                'name' => 'Suka Bangun Dalam',
                'indonesia_districts_id' => 49,
            ],
            [
                'name' => 'Kantor',
                'indonesia_districts_id' => 49,
            ],
            [
                'name' => 'Mulia Baru',
                'indonesia_districts_id' => 49,
            ],
            [
                'name' => 'Sampit',
                'indonesia_districts_id' => 49,
            ],
            [
                'name' => 'Suka Harja',
                'indonesia_districts_id' => 49,
            ],
            [
                'name' => 'Tengah',
                'indonesia_districts_id' => 49,
            ],
            [
                'name' => 'Batu Lapis',
                'indonesia_districts_id' => 50,
            ],
            [
                'name' => 'Beginci Darat',
                'indonesia_districts_id' => 50,
            ],
            [
                'name' => 'Benua Krio',
                'indonesia_districts_id' => 50,
            ],
            [
                'name' => 'Cinta Manis',
                'indonesia_districts_id' => 50,
            ],
            [
                'name' => 'Kenyabur',
                'indonesia_districts_id' => 50,
            ],
            [
                'name' => 'Krio Hulu',
                'indonesia_districts_id' => 50,
            ],
            [
                'name' => 'Lubuk Kakap',
                'indonesia_districts_id' => 50,
            ],
            [
                'name' => 'Menyumbung',
                'indonesia_districts_id' => 50,
            ],
            [
                'name' => 'Riam Dadap',
                'indonesia_districts_id' => 50,
            ],
            [
                'name' => 'Sekukun',
                'indonesia_districts_id' => 50,
            ],
            [
                'name' => 'Senduruhan',
                'indonesia_districts_id' => 50,
            ],
            [
                'name' => 'Sunge Bengaras',
                'indonesia_districts_id' => 50,
            ],
            [
                'name' => 'Air Dua',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Asam Jelai',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Bayam Raya',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Biku Sarana',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Deranuk',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Karang Dangin',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Kesuma Jaya',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Kusik Batu Lapu',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Limpang',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Pangkalan Paket',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Pangkalan Suka',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Pasir Mayang',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Penyarang',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Periangan',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Perigi',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Rangga Intan',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Riam Danau Kanan',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Semantun',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Sidahari',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Tanggerang',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Tebing Berseri',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Teluk Runjai',
                'indonesia_districts_id' => 51,
            ],
            [
                'name' => 'Air Hitam Besar',
                'indonesia_districts_id' => 52,
            ],
            [
                'name' => 'Air Tarap',
                'indonesia_districts_id' => 52,
            ],
            [
                'name' => 'Bangkal Serai',
                'indonesia_districts_id' => 52,
            ],
            [
                'name' => 'Banjar Sari',
                'indonesia_districts_id' => 52,
            ],
            [
                'name' => 'Danau Buntar',
                'indonesia_districts_id' => 52,
            ],
            [
                'name' => 'Kendawangan Kanan',
                'indonesia_districts_id' => 52,
            ],
            [
                'name' => 'Kendawangan Kiri',
                'indonesia_districts_id' => 52,
            ],
            [
                'name' => 'Pangkalan Batu',
                'indonesia_districts_id' => 52,
            ],
            [
                'name' => 'Selimantan Jaya',
                'indonesia_districts_id' => 52,
            ],
            [
                'name' => 'Suka Damai',
                'indonesia_districts_id' => 52,
            ],
            [
                'name' => 'Suka Harapan',
                'indonesia_districts_id' => 52,
            ],
            [
                'name' => 'Sungai Jelayan',
                'indonesia_districts_id' => 52,
            ],
            [
                'name' => 'Air Dekakah',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Asam Besar',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Batu Sedau',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Bukit Gajah',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Jambi',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Kelampai',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Kelimantan',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Kemuning',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Lembah Mukti',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Manis Mata',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Mekar Jaya',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Pakit Selaba',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Pelempangan',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Ratu Elok',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Seguling',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Sengkuang Merabong',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Silat',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Suak Burung',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Suka Ramai',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Sungai Buluh',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Terusan',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Tribun Jaya',
                'indonesia_districts_id' => 53,
            ],
            [
                'name' => 'Bantan Sari',
                'indonesia_districts_id' => 54,
            ],
            [
                'name' => 'Batu Payung Dua',
                'indonesia_districts_id' => 54,
            ],
            [
                'name' => 'Belaban',
                'indonesia_districts_id' => 54,
            ],
            [
                'name' => 'Karya Baru',
                'indonesia_districts_id' => 54,
            ],
            [
                'name' => 'Pelanjau Jaya',
                'indonesia_districts_id' => 54,
            ],
            [
                'name' => 'Randai',
                'indonesia_districts_id' => 54,
            ],
            [
                'name' => 'Rangkung',
                'indonesia_districts_id' => 54,
            ],
            [
                'name' => 'Riam Batu Gading',
                'indonesia_districts_id' => 54,
            ],
            [
                'name' => 'Runjai Jaya',
                'indonesia_districts_id' => 54,
            ],
            [
                'name' => 'Suka Karya',
                'indonesia_districts_id' => 54,
            ],
            [
                'name' => 'Harapan Baru',
                'indonesia_districts_id' => 55,
            ],
            [
                'name' => 'Kemuning Biutak',
                'indonesia_districts_id' => 55,
            ],
            [
                'name' => 'Pagar Mentimun',
                'indonesia_districts_id' => 55,
            ],
            [
                'name' => 'Pematang Gadung',
                'indonesia_districts_id' => 55,
            ],
            [
                'name' => 'Pesaguan Kanan',
                'indonesia_districts_id' => 55,
            ],
            [
                'name' => 'Pesaguan Kiri',
                'indonesia_districts_id' => 55,
            ],
            [
                'name' => 'Sungai Bakau',
                'indonesia_districts_id' => 55,
            ],
            [
                'name' => 'Sungai Besar',
                'indonesia_districts_id' => 55,
            ],
            [
                'name' => 'Sungai Jawi',
                'indonesia_districts_id' => 55,
            ],
            [
                'name' => 'Sungai Nanjung',
                'indonesia_districts_id' => 55,
            ],
            [
                'name' => 'Sungai Pelang',
                'indonesia_districts_id' => 55,
            ],
            [
                'name' => 'Kuala Satong',
                'indonesia_districts_id' => 56,
            ],
            [
                'name' => 'Kuala Tolak',
                'indonesia_districts_id' => 56,
            ],
            [
                'name' => 'Lamon Satong',
                'indonesia_districts_id' => 56,
            ],
            [
                'name' => 'Sungai Putri',
                'indonesia_districts_id' => 56,
            ],
            [
                'name' => 'Tanjung Baik Budi',
                'indonesia_districts_id' => 56,
            ],
            [
                'name' => 'Mayak',
                'indonesia_districts_id' => 57,
            ],
            [
                'name' => 'Sungai Awan Kanan',
                'indonesia_districts_id' => 57,
            ],
            [
                'name' => 'Sungai Awan Kiri',
                'indonesia_districts_id' => 57,
            ],
            [
                'name' => 'Suka Maju',
                'indonesia_districts_id' => 57,
            ],
            [
                'name' => 'Tanjung Pasar',
                'indonesia_districts_id' => 57,
            ],
            [
                'name' => 'Tanjung Pura',
                'indonesia_districts_id' => 57,
            ],
            [
                'name' => 'Tempurukan',
                'indonesia_districts_id' => 57,
            ],
            [
                'name' => 'Ulak Medang',
                'indonesia_districts_id' => 57,
            ],
            [
                'name' => 'Batu Mas',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Betenung',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Cegolak',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Kayong Hulu',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Kayong Utara',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Kayong Tuhe',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Lembah Hijau Dua',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Lembah Hijau Satu',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Mensubang',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Nanga Tayap',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Pangkalan Suka',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Pangkalan Teluk',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Pateh Benteng',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Sebadak Raya',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Sungai Kelik',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Sepakat Jaya',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Siantau Raya',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Simpang Tiga Sembelangan',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Tajok Kayong',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Tanjung Medan',
                'indonesia_districts_id' => 58,
            ],
            [
                'name' => 'Lalang Panjang',
                'indonesia_districts_id' => 59,
            ],
            [
                'name' => 'Muara Gerunggang',
                'indonesia_districts_id' => 59,
            ],
            [
                'name' => 'Pebihingan',
                'indonesia_districts_id' => 59,
            ],
            [
                'name' => 'Semayok Baru',
                'indonesia_districts_id' => 59,
            ],
            [
                'name' => 'Usaha Baru',
                'indonesia_districts_id' => 59,
            ],
            [
                'name' => 'Muara Semayok',
                'indonesia_districts_id' => 59,
            ],
            [
                'name' => 'Kerta Baru',
                'indonesia_districts_id' => 59,
            ],
            [
                'name' => 'Alam Pakuan',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Demit',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Istana',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Jago Bersatu',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Muara Jekak',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Merimbang Jaya',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Pendamaran Indah',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Penjawaan',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Petai Patah',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Randau',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Randau Jungkal',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Sandai Kanan',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Sandai Kiri',
                'indonesia_districts_id' => 60,
            ],
            [
                'name' => 'Batu Daya',
                'indonesia_districts_id' => 61,
            ],
            [
                'name' => 'Gema',
                'indonesia_districts_id' => 61,
            ],
            [
                'name' => 'Kamora',
                'indonesia_districts_id' => 61,
            ],
            [
                'name' => 'Kampar Sebomban',
                'indonesia_districts_id' => 61,
            ],
            [
                'name' => 'Mekar Raya',
                'indonesia_districts_id' => 61,
            ],
            [
                'name' => 'Semandang Kanan',
                'indonesia_districts_id' => 61,
            ],
            [
                'name' => 'Bukit Kelambing',
                'indonesia_districts_id' => 62,
            ],
            [
                'name' => 'Muntai',
                'indonesia_districts_id' => 62,
            ],
            [
                'name' => 'Pantai Ketikal',
                'indonesia_districts_id' => 62,
            ],
            [
                'name' => 'Suka Mulya',
                'indonesia_districts_id' => 62,
            ],
            [
                'name' => 'Suka Sari',
                'indonesia_districts_id' => 62,
            ],
            [
                'name' => 'Sukaharja',
                'indonesia_districts_id' => 62,
            ],
            [
                'name' => 'Sukaraja',
                'indonesia_districts_id' => 62,
            ],
            [
                'name' => 'Tanah Hitam',
                'indonesia_districts_id' => 62,
            ],
            [
                'name' => 'Bayun Sari',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Bengaras',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Harapan Baru',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Kepari',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Lanjut Mekar Sari',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Mekar Harapan',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Merabu Jaya',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Randau Limat',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Riam Bunut',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Selangkut Raya',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Sempurna',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Sepotong',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Sinar Kuri',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Sukaramai',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Sungai Daka',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Tanjung Beringin',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Tanjung Maju',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Teluk Bayur',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Teluk Mutiara',
                'indonesia_districts_id' => 63,
            ],
            [
                'name' => 'Beringin Jaya',
                'indonesia_districts_id' => 64,
            ],
            [
                'name' => 'Jairan Jaya',
                'indonesia_districts_id' => 64,
            ],
            [
                'name' => 'Karya Mukti',
                'indonesia_districts_id' => 64,
            ],
            [
                'name' => 'Kepuluk',
                'indonesia_districts_id' => 64,
            ],
            [
                'name' => 'Makmur Abadi',
                'indonesia_districts_id' => 64,
            ],
            [
                'name' => 'Mekar Jaya',
                'indonesia_districts_id' => 64,
            ],
            [
                'name' => 'Piansak',
                'indonesia_districts_id' => 64,
            ],
            [
                'name' => 'Suka Mulya',
                'indonesia_districts_id' => 64,
            ],
            [
                'name' => 'Sungai Melayu',
                'indonesia_districts_id' => 64,
            ],
            [
                'name' => 'Sungai Melayu Baru',
                'indonesia_districts_id' => 64,
            ],
            [
                'name' => 'Sungai Melayu Jaya',
                'indonesia_districts_id' => 64,
            ],
            [
                'name' => 'Balai Pinang',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Balai Pinang Hulu',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Botuh Bosi',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Kenanga',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Kualan Hilir',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Kualan Hulu',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Kualan Tengah',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Labai Hilir',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Legong',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Merawa',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Paoh Concong',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Sekucing Kualan',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Sekucing Labai',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Semandang Hulu',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Semandang Kiri',
                'indonesia_districts_id' => 65,
            ],
            [
                'name' => 'Aur Gading',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Batu Beransah',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Batu Tajam',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Belaban Tujuh',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Beringin Rayo',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Jelayan',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Jungkal',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Kalimas Baru',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Mahawa',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Nanga Kelampai',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Natai Panjang',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Pemuatan Jaya',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Pengatapan Raya',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Petebang Jaya',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Segar Wangi',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Sengkaharak',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Sepauhan Raya',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Sepuring Indah',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Serengkah Kanan',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Serengkah Kiri',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Suka Damai',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Tanjung Beulang',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Tanjung Maloy',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Titi Baru',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Tumbang Titi',
                'indonesia_districts_id' => 66,
            ],
            [
                'name' => 'Ambarawa',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Batu Ampar',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Muara Tiga',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Nipah Panjang',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Padang Tikar I',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Padang Tikar II',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Sumber Agung',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Sungai Besar',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Sungai Jawi',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Sungai Kerawang',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Tanjung Beringin',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Tanjung Harapan',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Tasik Malaya',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Teluk Nibung',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Medan Mas',
                'indonesia_districts_id' => 67,
            ],
            [
                'name' => 'Kuala Mandor A',
                'indonesia_districts_id' => 68,
            ],
            [
                'name' => 'Kuala Mandor B',
                'indonesia_districts_id' => 68,
            ],
            [
                'name' => 'Kubu Padi',
                'indonesia_districts_id' => 68,
            ],
            [
                'name' => 'Retok',
                'indonesia_districts_id' => 68,
            ],
            [
                'name' => 'Sungai Enau',
                'indonesia_districts_id' => 68,
            ],
            [
                'name' => 'Air Putih',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Ambarawa',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Dabong',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Jangkang Dua',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Jangkang Satu',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Kampung Baru',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Kubu',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Mengkalang',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Mengkalang Jambu',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Olak-Olak',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Pelita Jaya',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Pinang Dalam',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Pinang Luar',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Sungai Bemban',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Sungai Selamat',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Sungai Terus',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Sepakat Baru',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Seruat Dua',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Seruat Tiga',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Teluk Nangka',
                'indonesia_districts_id' => 69,
            ],
            [
                'name' => 'Bintang Mas',
                'indonesia_districts_id' => 70,
            ],
            [
                'name' => 'Pematang Tujuh',
                'indonesia_districts_id' => 70,
            ],
            [
                'name' => 'Rasau Jaya Dua',
                'indonesia_districts_id' => 70,
            ],
            [
                'name' => 'Rasau Jaya Satu',
                'indonesia_districts_id' => 70,
            ],
            [
                'name' => 'Rasau Jaya Tiga',
                'indonesia_districts_id' => 70,
            ],
            [
                'name' => 'Rasau Jaya Umum',
                'indonesia_districts_id' => 70,
            ],
            [
                'name' => 'Ampera Raya',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Bengkarek',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Durian',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Jawa Tengah',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Korek',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Lingga',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Mega Timur',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Pancaroba',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Pasak',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Pasak Piang',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Puguk',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Simpang Kanan',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Simpang Raya',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Sungai Ambawang Kuala',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Sungai Malaya',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Teluk Bakung',
                'indonesia_districts_id' => 71,
            ],
            [
                'name' => 'Jeruju Besar',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Kalimas',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Pal Sembilan',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Punggur Besar',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Punggur Kapuas',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Punggur Kecil',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Sungai Belidak',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Sungai Itik',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Sungai Kakap',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Sungai Kupah',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Sungai Rengas',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Sepuk Laut',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Tanjung Saleh',
                'indonesia_districts_id' => 72,
            ],
            [
                'name' => 'Arang Limbung',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Gunungtamang',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Kalibandung',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Kapur',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Kuala Dua',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Limbung',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Madu Sari',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Mekar Baru',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Mekar Sari',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Muara Baru',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Parit Dalam',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Pulau Jambu',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Pulaulimbung',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Sungaiambangah',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Sungaiasam',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Sungaibulan',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Sungairaya',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Sungairaya Dalam',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Tebang Kacang',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Telukkapuas',
                'indonesia_districts_id' => 73,
            ],
            [
                'name' => 'Arus Deras',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Kuala Karang',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Madura',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Pasir Putih',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Selat Remis',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Seruat I',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Sungai Deras',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Sungai Nibung',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Sungai Nipah',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Tanjung Bunga',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Teluk Gelam',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Teluk Pakedai Dua',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Teluk Pakedai Hulu',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Teluk Pakedai Satu',
                'indonesia_districts_id' => 74,
            ],
            [
                'name' => 'Betuah',
                'indonesia_districts_id' => 75,
            ],
            [
                'name' => 'Pertama',
                'indonesia_districts_id' => 75,
            ],
            [
                'name' => 'Radar Baru',
                'indonesia_districts_id' => 75,
            ],
            [
                'name' => 'Sungai Dungun',
                'indonesia_districts_id' => 75,
            ],
            [
                'name' => 'Sungai Radak Dua',
                'indonesia_districts_id' => 75,
            ],
            [
                'name' => 'Sungai Radak Satu',
                'indonesia_districts_id' => 75,
            ],
            [
                'name' => 'Teluk Bayur',
                'indonesia_districts_id' => 75,
            ],
            [
                'name' => 'Teluk Empening',
                'indonesia_districts_id' => 75,
            ],
            [
                'name' => 'Terentang Hilir',
                'indonesia_districts_id' => 75,
            ],
            [
                'name' => 'Terentang Hulu',
                'indonesia_districts_id' => 75,
            ],
            [
                'name' => 'Bentiang',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Dango Aji',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Engkadik',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Engkangin',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Jambu Tembawang',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Merayuh',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Nyari',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Parek',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Sekendal',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Sempatung Lawek',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Semuntik',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Sepangah',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Serimbu',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Tenguwe',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Temoyok',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Tengon Pelaik',
                'indonesia_districts_id' => 76,
            ],
            [
                'name' => 'Gamang',
                'indonesia_districts_id' => 77,
            ],
            [
                'name' => 'Kampet',
                'indonesia_districts_id' => 77,
            ],
            [
                'name' => 'Padang Pio',
                'indonesia_districts_id' => 77,
            ],
            [
                'name' => 'Ringo Lojok',
                'indonesia_districts_id' => 77,
            ],
            [
                'name' => 'Semade',
                'indonesia_districts_id' => 77,
            ],
            [
                'name' => 'Tembawang Bale',
                'indonesia_districts_id' => 77,
            ],
            [
                'name' => 'Untang',
                'indonesia_districts_id' => 77,
            ],
            [
                'name' => 'Angan Tembawang',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Balai Peluntan',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Dara Itam I',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Jelimpo',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Kayu Ara',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Kersik Belantian',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Mandor Kiru',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Nyiin',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Papung',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Pawis Hilir',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Sekais',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Temahar',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Tubang Raeng',
                'indonesia_districts_id' => 78,
            ],
            [
                'name' => 'Angkanyar',
                'indonesia_districts_id' => 79,
            ],
            [
                'name' => 'Bengawan Ampar',
                'indonesia_districts_id' => 79,
            ],
            [
                'name' => 'Kedama',
                'indonesia_districts_id' => 79,
            ],
            [
                'name' => 'Kuala Behe',
                'indonesia_districts_id' => 79,
            ],
            [
                'name' => 'Nyayum',
                'indonesia_districts_id' => 79,
            ],
            [
                'name' => 'Paku Raya',
                'indonesia_districts_id' => 79,
            ],
            [
                'name' => 'Permiit',
                'indonesia_districts_id' => 79,
            ],
            [
                'name' => 'Sehe Lusur',
                'indonesia_districts_id' => 79,
            ],
            [
                'name' => 'Sejowet',
                'indonesia_districts_id' => 79,
            ],
            [
                'name' => 'Semedang',
                'indonesia_districts_id' => 79,
            ],
            [
                'name' => 'Tanjung Balai',
                'indonesia_districts_id' => 79,
            ],
            [
                'name' => 'Bebatung',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Kayu Ara',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Kayu Tanam',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Keramas',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Kerohok',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Mandor',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Manggang',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Mengkunyit',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Ngarak',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Pongok',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Salatiga',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Sebadu',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Sekilap',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Selutung',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Semenok',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Simpang Kasturi',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Sumsum',
                'indonesia_districts_id' => 80,
            ],
            [
                'name' => 'Ansolok',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Babatn',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Bilayuk',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Caokng',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Garu',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Karangan',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Mentonyek',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Pahokng',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Parigi',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Sabaka',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Sailo',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Sala"as',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Salumang',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Sampuro',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Sungai Laki',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Tiang Tanjung',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Tunang',
                'indonesia_districts_id' => 81,
            ],
            [
                'name' => 'Bengkawe',
                'indonesia_districts_id' => 82,
            ],
            [
                'name' => 'Lamoanak',
                'indonesia_districts_id' => 82,
            ],
            [
                'name' => 'Menjalin',
                'indonesia_districts_id' => 82,
            ],
            [
                'name' => 'Nangka',
                'indonesia_districts_id' => 82,
            ],
            [
                'name' => 'Raba',
                'indonesia_districts_id' => 82,
            ],
            [
                'name' => 'Re"es',
                'indonesia_districts_id' => 82,
            ],
            [
                'name' => 'Sepahat',
                'indonesia_districts_id' => 82,
            ],
            [
                'name' => 'Tempoak',
                'indonesia_districts_id' => 82,
            ],
            [
                'name' => 'Angkaras',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Anik Dingir',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Ansang',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Bagak',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Berinang Mayun',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Darit',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Kayu Ara',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Ladangan',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Lintah Betung',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Mamek',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Ongkol Padang',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Sidan',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Songga',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Sungai Lubang',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Ta"as',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Tolok',
                'indonesia_districts_id' => 83,
            ],
            [
                'name' => 'Ampadi',
                'indonesia_districts_id' => 84,
            ],
            [
                'name' => 'Kelampai Setolo',
                'indonesia_districts_id' => 84,
            ],
            [
                'name' => 'Meranti',
                'indonesia_districts_id' => 84,
            ],
            [
                'name' => 'Moro Betung',
                'indonesia_districts_id' => 84,
            ],
            [
                'name' => 'Selange',
                'indonesia_districts_id' => 84,
            ],
            [
                'name' => 'Tahu',
                'indonesia_districts_id' => 84,
            ],
            [
                'name' => 'Amang',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Ambarang',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Amboyo',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Amboyo Inti',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Amboyo Selatan',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Antan Raya',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Engkadu',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Hilir Kantor',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Hilir Tengah',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Munggu',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Muun',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Pak Mayam',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Penyaho Dangku',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Raja',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Rasan',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Sebirang',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Sungai Keli',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Tebedak',
                'indonesia_districts_id' => 85,
            ],
            [
                'name' => 'Agak',
                'indonesia_districts_id' => 86,
            ],
            [
                'name' => 'Kumpang Tengah',
                'indonesia_districts_id' => 86,
            ],
            [
                'name' => 'Rantau Panjang',
                'indonesia_districts_id' => 86,
            ],
            [
                'name' => 'Sebangki',
                'indonesia_districts_id' => 86,
            ],
            [
                'name' => 'Sungai Segak',
                'indonesia_districts_id' => 86,
            ],
            [
                'name' => 'Andeng',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Aur Sampuk',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Banying',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Gombang',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Keranji Mancang',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Keranji Paidang',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Pahauman',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Paloan',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Rabak',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Saham',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Sebatih',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Senakin',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Sidas',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Tonang',
                'indonesia_districts_id' => 87,
            ],
            [
                'name' => 'Amawakng',
                'indonesia_districts_id' => 88,
            ],
            [
                'name' => 'Galar',
                'indonesia_districts_id' => 88,
            ],
            [
                'name' => 'Lingkonong',
                'indonesia_districts_id' => 88,
            ],
            [
                'name' => 'Pakumbang',
                'indonesia_districts_id' => 88,
            ],
            [
                'name' => 'Pauh',
                'indonesia_districts_id' => 88,
            ],
            [
                'name' => 'Sompak',
                'indonesia_districts_id' => 88,
            ],
            [
                'name' => 'Tapakng',
                'indonesia_districts_id' => 88,
            ],
            [
                'name' => 'Balai Lagas',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Batu Ampar',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Batu Buil',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Batu Nanta',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Belonsat',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Guhung',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Labang',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Laman Bukit',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Langan',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Nanga Entebah',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Nanga Menunuk',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Nanga Pau',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Nusa Kenyikap',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Pemuar',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Sepan Tonak',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Tekaban',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Upit',
                'indonesia_districts_id' => 89,
            ],
            [
                'name' => 'Beloyang',
                'indonesia_districts_id' => 90,
            ],
            [
                'name' => 'Junjung Permai',
                'indonesia_districts_id' => 90,
            ],
            [
                'name' => 'Kayu Bunga',
                'indonesia_districts_id' => 90,
            ],
            [
                'name' => 'Nanga Keberak',
                'indonesia_districts_id' => 90,
            ],
            [
                'name' => 'Nanga Raya',
                'indonesia_districts_id' => 90,
            ],
            [
                'name' => 'Nangan Tikan',
                'indonesia_districts_id' => 90,
            ],
            [
                'name' => 'Piawas',
                'indonesia_districts_id' => 90,
            ],
            [
                'name' => 'Tiong Keranji',
                'indonesia_districts_id' => 90,
            ],
            [
                'name' => 'Bemban Permai',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Domet Permai',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Jabai',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Kahai',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Kerangan Koya',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Lengkong Nyadom',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Nanga Ella Hilir',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Nanga Kalan',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Nanga Kempangai',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Nanga Nuak',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Nanga Nyuruh',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Natai Compa',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Nyanggau',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Pelempai Jaya',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Penyuguk',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Perembang Nyuruh',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Popai',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Sungai Labuk',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Sungai Mentoba',
                'indonesia_districts_id' => 91,
            ],
            [
                'name' => 'Batas Nangka',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Batu Badak',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Batu Onap',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Belaban Ella',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Laman Mumbung',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Langau Leban Satu',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Lihai',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Menukung Kota',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Nanga Ella Hulu',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Nanga Keruap',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Nanga Mawang Mentatai',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Nanga Melona Satu',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Nanga Siyai',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Nusa Poring',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Oyah',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Pelaik Keruap',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Sampak',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Sungai Sampuk',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Tanjung Beringin',
                'indonesia_districts_id' => 92,
            ],
            [
                'name' => 'Baru',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Kelakik',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Kenual',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Labai Mandiri',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Nanga Kayan',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Nanga Kebebu',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Nusa Pandau',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Paal',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Poring',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Semadin Lengkong',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Sidomulyo',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Tanjung Lay',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Tanjung Niaga',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Tanjung Sari',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Tanjung Tengang',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Tebing Karangan',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Tembawang Panjang',
                'indonesia_districts_id' => 93,
            ],
            [
                'name' => 'Bayur Raya',
                'indonesia_districts_id' => 94,
            ],
            [
                'name' => 'Bina Jaya',
                'indonesia_districts_id' => 94,
            ],
            [
                'name' => 'Landau Garong',
                'indonesia_districts_id' => 94,
            ],
            [
                'name' => 'Landau Tabun',
                'indonesia_districts_id' => 94,
            ],
            [
                'name' => 'Mandau Baru',
                'indonesia_districts_id' => 94,
            ],
            [
                'name' => 'Manggala',
                'indonesia_districts_id' => 94,
            ],
            [
                'name' => 'Nanga Kelawai',
                'indonesia_districts_id' => 94,
            ],
            [
                'name' => 'Nanga Pintas',
                'indonesia_districts_id' => 94,
            ],
            [
                'name' => 'Nyanggai',
                'indonesia_districts_id' => 94,
            ],
            [
                'name' => 'Pelinggang',
                'indonesia_districts_id' => 94,
            ],
            [
                'name' => 'Sungai Bakah',
                'indonesia_districts_id' => 94,
            ],
            [
                'name' => 'Senempak',
                'indonesia_districts_id' => 94,
            ],
            [
                'name' => 'Engkurai',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Kayan Semapau',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Kompas Raya',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Manding',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Melamut Bersatu',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Melawi Kiri Hilir',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Merah Arai',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Merpak',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Nanga Belimbing',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Nanga Man',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Natai Panjang',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Sungai Pinang',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Sungai Raya',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Senibung',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Suka Damai',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Tanjung Arak',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Tanjung Paoh',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Tekelak',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Tengkajau',
                'indonesia_districts_id' => 95,
            ],
            [
                'name' => 'Berobai Permai',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Bora',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Karangan Purun',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Landau Sandak',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Lingkar Indah',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Madya Raya',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Mekar Pelita',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Meta Bersatu',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Nanga Kasai',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Nanga Kompi',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Nanga Mancur',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Nanga Pak',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Nanga Raku',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Nanga Sayan',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Pekawai',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Sayan Jaya',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Siling Permai',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Tumbak Raya',
                'indonesia_districts_id' => 96,
            ],
            [
                'name' => 'Gelata',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Keluing Taja',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Landau Kabu',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Melana',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Muara Tanjung',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Nanga Betangai',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Nanga Libas',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Nanga Ora',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Nanga Potai',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Nanga Sokan',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Nanga Tangkit',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Penyengkuang',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Sepakat',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Sijau',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Tanjung Mahung',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Tanjung Sokan',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Telaga Raya',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Teluk Pongkal',
                'indonesia_districts_id' => 97,
            ],
            [
                'name' => 'Batu Luar',
                'indonesia_districts_id' => 98,
            ],
            [
                'name' => 'Batu Begigi',
                'indonesia_districts_id' => 98,
            ],
            [
                'name' => 'Bina Jaya',
                'indonesia_districts_id' => 98,
            ],
            [
                'name' => 'Bina Karya',
                'indonesia_districts_id' => 98,
            ],
            [
                'name' => 'Keranjik',
                'indonesia_districts_id' => 98,
            ],
            [
                'name' => 'Loka Jaya',
                'indonesia_districts_id' => 98,
            ],
            [
                'name' => 'Madong Jaya',
                'indonesia_districts_id' => 98,
            ],
            [
                'name' => 'Maris Permai',
                'indonesia_districts_id' => 98,
            ],
            [
                'name' => 'Pelita Kenaya',
                'indonesia_districts_id' => 98,
            ],
            [
                'name' => 'Suka Maju',
                'indonesia_districts_id' => 98,
            ],
            [
                'name' => 'Tanjung Gunung',
                'indonesia_districts_id' => 98,
            ],
            [
                'name' => 'Tanjung Gunung',
                'indonesia_districts_id' => 98,
            ],
            [
                'name' => 'Bukit Raya',
                'indonesia_districts_id' => 99,
            ],
            [
                'name' => 'Durian Jaya',
                'indonesia_districts_id' => 99,
            ],
            [
                'name' => 'Ganjang',
                'indonesia_districts_id' => 99,
            ],
            [
                'name' => 'Harapan Jaya',
                'indonesia_districts_id' => 99,
            ],
            [
                'name' => 'Keluas Hulu',
                'indonesia_districts_id' => 99,
            ],
            [
                'name' => 'Laja',
                'indonesia_districts_id' => 99,
            ],
            [
                'name' => 'Lintah Taum',
                'indonesia_districts_id' => 99,
            ],
            [
                'name' => 'Pelita Jaya',
                'indonesia_districts_id' => 99,
            ],
            [
                'name' => 'Togan Baru',
                'indonesia_districts_id' => 99,
            ],
            [
                'name' => 'Ulak Muid',
                'indonesia_districts_id' => 99,
            ],
            [
                'name' => 'Anjungan Dalam',
                'indonesia_districts_id' => 100,
            ],
            [
                'name' => 'Dema',
                'indonesia_districts_id' => 100,
            ],
            [
                'name' => 'Kepayang',
                'indonesia_districts_id' => 100,
            ],
            [
                'name' => 'Pak Bulu',
                'indonesia_districts_id' => 100,
            ],
            [
                'name' => 'Anjungan Melancar',
                'indonesia_districts_id' => 100,
            ],
            [
                'name' => 'Kuala Secapah',
                'indonesia_districts_id' => 101,
            ],
            [
                'name' => 'Malikian',
                'indonesia_districts_id' => 101,
            ],
            [
                'name' => 'Pasir',
                'indonesia_districts_id' => 101,
            ],
            [
                'name' => 'Penibung',
                'indonesia_districts_id' => 101,
            ],
            [
                'name' => 'Sengkubang',
                'indonesia_districts_id' => 101,
            ],
            [
                'name' => 'Tanjung',
                'indonesia_districts_id' => 101,
            ],
            [
                'name' => 'Tengah',
                'indonesia_districts_id' => 101,
            ],
            [
                'name' => 'Terusan',
                'indonesia_districts_id' => 101,
            ],
            [
                'name' => 'Antibar',
                'indonesia_districts_id' => 102,
            ],
            [
                'name' => 'Parit Banjar',
                'indonesia_districts_id' => 102,
            ],
            [
                'name' => 'Pasir Palembang',
                'indonesia_districts_id' => 102,
            ],
            [
                'name' => 'Pasir Panjang',
                'indonesia_districts_id' => 102,
            ],
            [
                'name' => 'Sejegi',
                'indonesia_districts_id' => 102,
            ],
            [
                'name' => 'Sungai Bakau Kecil',
                'indonesia_districts_id' => 102,
            ],
            [
                'name' => 'Pasir Wan Salim',
                'indonesia_districts_id' => 102,
            ],
            [
                'name' => 'Pulau Pedalaman',
                'indonesia_districts_id' => 102,
            ],
            [
                'name' => 'Amawang',
                'indonesia_districts_id' => 103,
            ],
            [
                'name' => 'Ansiap',
                'indonesia_districts_id' => 103,
            ],
            [
                'name' => 'Bum-bun',
                'indonesia_districts_id' => 103,
            ],
            [
                'name' => 'Pentek',
                'indonesia_districts_id' => 103,
            ],
            [
                'name' => 'Sekabuk',
                'indonesia_districts_id' => 103,
            ],
            [
                'name' => 'Suak Barangan',
                'indonesia_districts_id' => 103,
            ],
            [
                'name' => 'Parit Bugis',
                'indonesia_districts_id' => 104,
            ],
            [
                'name' => 'Peniti Besar',
                'indonesia_districts_id' => 104,
            ],
            [
                'name' => 'Peniti Dalam I',
                'indonesia_districts_id' => 104,
            ],
            [
                'name' => 'Peniti Dalam II',
                'indonesia_districts_id' => 104,
            ],
            [
                'name' => 'Sungai Burung',
                'indonesia_districts_id' => 104,
            ],
            [
                'name' => 'Sungai Purun Besar',
                'indonesia_districts_id' => 104,
            ],
            [
                'name' => 'Jungkat',
                'indonesia_districts_id' => 105,
            ],
            [
                'name' => 'Peniti Luar',
                'indonesia_districts_id' => 105,
            ],
            [
                'name' => 'Sungai Nipah',
                'indonesia_districts_id' => 105,
            ],
            [
                'name' => 'Wajok Hilir',
                'indonesia_districts_id' => 105,
            ],
            [
                'name' => 'Wajok Hulu',
                'indonesia_districts_id' => 105,
            ],
            [
                'name' => 'Bukit Batu',
                'indonesia_districts_id' => 106,
            ],
            [
                'name' => 'Mendalok',
                'indonesia_districts_id' => 106,
            ],
            [
                'name' => 'Semparong Parit Raden',
                'indonesia_districts_id' => 106,
            ],
            [
                'name' => 'Semudun',
                'indonesia_districts_id' => 106,
            ],
            [
                'name' => 'Sungai Bundung Laut',
                'indonesia_districts_id' => 106,
            ],
            [
                'name' => 'Sungai Dungun',
                'indonesia_districts_id' => 106,
            ],
            [
                'name' => 'Sungai Duri I',
                'indonesia_districts_id' => 106,
            ],
            [
                'name' => 'Sungai Duri II',
                'indonesia_districts_id' => 106,
            ],
            [
                'name' => 'Sungai Kunyit Dalam',
                'indonesia_districts_id' => 106,
            ],
            [
                'name' => 'Sungai Kunyit Hulu',
                'indonesia_districts_id' => 106,
            ],
            [
                'name' => 'Sungai Kunyit Laut',
                'indonesia_districts_id' => 106,
            ],
            [
                'name' => 'Sungai Limau',
                'indonesia_districts_id' => 106,
            ],
            [
                'name' => 'Galang',
                'indonesia_districts_id' => 107,
            ],
            [
                'name' => 'Nusapati',
                'indonesia_districts_id' => 107,
            ],
            [
                'name' => 'Peniraman',
                'indonesia_districts_id' => 107,
            ],
            [
                'name' => 'Sungai Bakau Besar Laut',
                'indonesia_districts_id' => 107,
            ],
            [
                'name' => 'Sungai Batang',
                'indonesia_districts_id' => 107,
            ],
            [
                'name' => 'Sungai Purun Kecil',
                'indonesia_districts_id' => 107,
            ],
            [
                'name' => 'Sungai Rasau',
                'indonesia_districts_id' => 107,
            ],
            [
                'name' => 'Sungai Rasau Besar Darat',
                'indonesia_districts_id' => 107,
            ],
            [
                'name' => 'Sungai Pinyuh',
                'indonesia_districts_id' => 107,
            ],
            [
                'name' => 'Benuang',
                'indonesia_districts_id' => 108,
            ],
            [
                'name' => 'Kecurit',
                'indonesia_districts_id' => 108,
            ],
            [
                'name' => 'Pak Laheng',
                'indonesia_districts_id' => 108,
            ],
            [
                'name' => 'Pak Utan',
                'indonesia_districts_id' => 108,
            ],
            [
                'name' => 'Samboro',
                'indonesia_districts_id' => 108,
            ],
            [
                'name' => 'Sepangv',
                'indonesia_districts_id' => 108,
            ],
            [
                'name' => 'Terap',
                'indonesia_districts_id' => 108,
            ],
            [
                'name' => 'Toho Hilir',
                'indonesia_districts_id' => 108,
            ],
            [
                'name' => 'Galing',
                'indonesia_districts_id' => 109,
            ],
            [
                'name' => 'Ratu Sepudak',
                'indonesia_districts_id' => 109,
            ],
            [
                'name' => 'Sagu',
                'indonesia_districts_id' => 109,
            ],
            [
                'name' => 'Sijang',
                'indonesia_districts_id' => 109,
            ],
            [
                'name' => 'Sungai Palah',
                'indonesia_districts_id' => 109,
            ],
            [
                'name' => 'Teluk Pandan',
                'indonesia_districts_id' => 109,
            ],
            [
                'name' => 'Tempapan Kuala',
                'indonesia_districts_id' => 109,
            ],
            [
                'name' => 'Tempapan Hulu',
                'indonesia_districts_id' => 109,
            ],
            [
                'name' => 'Tri Gadu',
                'indonesia_districts_id' => 109,
            ],
            [
                'name' => 'Tri Kembang',
                'indonesia_districts_id' => 109,
            ],
            [
                'name' => 'Bakau',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Dungun Laut',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Lambau',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Mutus Darussalam',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Parit Setia',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Pelimpaan',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Sarang Burung Kuala',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Sarang Burung Kolam',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Sarang Burung Danau',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Sarang Burung Usrat',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Sentebang',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Sungai Nilam',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Sungai Nyirih',
                'indonesia_districts_id' => 110,
            ],
            [
                'name' => 'Jawai Laut',
                'indonesia_districts_id' => 111,
            ],
            [
                'name' => 'Jelu Air',
                'indonesia_districts_id' => 111,
            ],
            [
                'name' => 'Matang Terap',
                'indonesia_districts_id' => 111,
            ],
            [
                'name' => 'Sabaran',
                'indonesia_districts_id' => 111,
            ],
            [
                'name' => 'Sarilaba A',
                'indonesia_districts_id' => 111,
            ],
            [
                'name' => 'Sarilaba B',
                'indonesia_districts_id' => 111,
            ],
            [
                'name' => 'Semperiuk A',
                'indonesia_districts_id' => 111,
            ],
            [
                'name' => 'Semperiuk B',
                'indonesia_districts_id' => 111,
            ],
            [
                'name' => 'Suah Api',
                'indonesia_districts_id' => 111,
            ],
            [
                'name' => 'Kalimantan',
                'indonesia_districts_id' => 112,
            ],
            [
                'name' => 'Malek',
                'indonesia_districts_id' => 112,
            ],
            [
                'name' => 'Matang Danau',
                'indonesia_districts_id' => 112,
            ],
            [
                'name' => 'Mentibar',
                'indonesia_districts_id' => 112,
            ],
            [
                'name' => 'Nibung',
                'indonesia_districts_id' => 112,
            ],
            [
                'name' => 'Sebubus',
                'indonesia_districts_id' => 112,
            ],
            [
                'name' => 'Tanah Hitam',
                'indonesia_districts_id' => 112,
            ],
            [
                'name' => 'Temajuk',
                'indonesia_districts_id' => 112,
            ],
            [
                'name' => 'Gugah Sejahtera',
                'indonesia_districts_id' => 113,
            ],
            [
                'name' => 'Harapan',
                'indonesia_districts_id' => 113,
            ],
            [
                'name' => 'Jelutung',
                'indonesia_districts_id' => 113,
            ],
            [
                'name' => 'Lonam',
                'indonesia_districts_id' => 113,
            ],
            [
                'name' => 'Pemangkat Kota',
                'indonesia_districts_id' => 113,
            ],
            [
                'name' => 'Penjajab',
                'indonesia_districts_id' => 113,
            ],
            [
                'name' => 'Perapakan',
                'indonesia_districts_id' => 113,
            ],
            [
                'name' => 'Sebatuan',
                'indonesia_districts_id' => 113,
            ],
            [
                'name' => 'Jirak',
                'indonesia_districts_id' => 114,
            ],
            [
                'name' => 'Tengguli',
                'indonesia_districts_id' => 114,
            ],
            [
                'name' => 'Mekar Jaya',
                'indonesia_districts_id' => 114,
            ],
            [
                'name' => 'Beringin',
                'indonesia_districts_id' => 114,
            ],
            [
                'name' => 'Kaliau',
                'indonesia_districts_id' => 115,
            ],
            [
                'name' => 'Sebunga',
                'indonesia_districts_id' => 115,
            ],
            [
                'name' => 'Santaban',
                'indonesia_districts_id' => 115,
            ],
            [
                'name' => 'Senatab',
                'indonesia_districts_id' => 115,
            ],
            [
                'name' => 'Sungai Bening',
                'indonesia_districts_id' => 115,
            ],
            [
                'name' => 'Parit Baru',
                'indonesia_districts_id' => 116,
            ],
            [
                'name' => 'Sungai Toman',
                'indonesia_districts_id' => 116,
            ],
            [
                'name' => 'Serunai',
                'indonesia_districts_id' => 116,
            ],
            [
                'name' => 'Serumpun',
                'indonesia_districts_id' => 116,
            ],
            [
                'name' => 'Salatiga',
                'indonesia_districts_id' => 116,
            ],
            [
                'name' => 'Dalam Kaum',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Durian',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Gapura',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Jagur',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Kartiasa',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Lorong',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Lubuk Dagang',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Lumbang',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Pasar Melayu',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Pendawan',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Saing Rambi',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Sebayan',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Semangau',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Sumber Harapan',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Sungai Rambah',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Tanjung Bugis',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Tanjung Mekar',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Tumuk Manggis',
                'indonesia_districts_id' => 117,
            ],
            [
                'name' => 'Sebangun',
                'indonesia_districts_id' => 118,
            ],
            [
                'name' => 'Sebawi',
                'indonesia_districts_id' => 118,
            ],
            [
                'name' => 'Semanjang',
                'indonesia_districts_id' => 118,
            ],
            [
                'name' => 'Sempalai Sebedang',
                'indonesia_districts_id' => 118,
            ],
            [
                'name' => 'Sepuk Tanjung',
                'indonesia_districts_id' => 118,
            ],
            [
                'name' => 'Tebing Batu',
                'indonesia_districts_id' => 118,
            ],
            [
                'name' => 'Tempatan',
                'indonesia_districts_id' => 118,
            ],
            [
                'name' => 'Parit Raja',
                'indonesia_districts_id' => 119,
            ],
            [
                'name' => 'Penakalan',
                'indonesia_districts_id' => 119,
            ],
            [
                'name' => 'Perigi Landu',
                'indonesia_districts_id' => 119,
            ],
            [
                'name' => 'Perigi Limus',
                'indonesia_districts_id' => 119,
            ],
            [
                'name' => 'Piantus',
                'indonesia_districts_id' => 119,
            ],
            [
                'name' => 'Sekuduk',
                'indonesia_districts_id' => 119,
            ],
            [
                'name' => 'Semanga',
                'indonesia_districts_id' => 119,
            ],
            [
                'name' => 'Sendoyan',
                'indonesia_districts_id' => 119,
            ],
            [
                'name' => 'Senujuh',
                'indonesia_districts_id' => 119,
            ],
            [
                'name' => 'Sepantai',
                'indonesia_districts_id' => 119,
            ],
            [
                'name' => 'Setalik',
                'indonesia_districts_id' => 119,
            ],
            [
                'name' => 'Sulung',
                'indonesia_districts_id' => 119,
            ],
            [
                'name' => 'Bentunai',
                'indonesia_districts_id' => 120,
            ],
            [
                'name' => 'Gayung Bersambut',
                'indonesia_districts_id' => 120,
            ],
            [
                'name' => 'Kuala',
                'indonesia_districts_id' => 120,
            ],
            [
                'name' => 'Pangkalan Bemban',
                'indonesia_districts_id' => 120,
            ],
            [
                'name' => 'Parit Baru',
                'indonesia_districts_id' => 120,
            ],
            [
                'name' => 'Parit Kongsi',
                'indonesia_districts_id' => 120,
            ],
            [
                'name' => 'Semelagi Besar',
                'indonesia_districts_id' => 120,
            ],
            [
                'name' => 'Sungai Daun',
                'indonesia_districts_id' => 120,
            ],
            [
                'name' => 'Sungai Nyirih',
                'indonesia_districts_id' => 120,
            ],
            [
                'name' => 'Sungai Rusa',
                'indonesia_districts_id' => 120,
            ],
            [
                'name' => 'Twi Mentibar',
                'indonesia_districts_id' => 120,
            ],
            [
                'name' => 'Buduk Sempadang',
                'indonesia_districts_id' => 121,
            ],
            [
                'name' => 'Gelik',
                'indonesia_districts_id' => 121,
            ],
            [
                'name' => 'Selakau Tua',
                'indonesia_districts_id' => 121,
            ],
            [
                'name' => 'Seranggam',
                'indonesia_districts_id' => 121,
            ],
            [
                'name' => 'Seburing',
                'indonesia_districts_id' => 122,
            ],
            [
                'name' => 'Semparuk',
                'indonesia_districts_id' => 122,
            ],
            [
                'name' => 'Singaraya',
                'indonesia_districts_id' => 122,
            ],
            [
                'name' => 'Sepinggan',
                'indonesia_districts_id' => 122,
            ],
            [
                'name' => 'Sepadu',
                'indonesia_districts_id' => 122,
            ],
            [
                'name' => 'Arga Pura',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Balai Gemuruh',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Bukit Mulya',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Karaban Jaya',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Madak',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Mensade',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Mukti Raharja',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Sabung',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Sapak Hulu Trans',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Sempurna',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Sungai Deden',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Sungai Sapak',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Tebuah Elok',
                'indonesia_districts_id' => 123,
            ],
            [
                'name' => 'Arung Medang',
                'indonesia_districts_id' => 124,
            ],
            [
                'name' => 'Arung Parak',
                'indonesia_districts_id' => 124,
            ],
            [
                'name' => 'Merabuan',
                'indonesia_districts_id' => 124,
            ],
            [
                'name' => 'Merpati',
                'indonesia_districts_id' => 124,
            ],
            [
                'name' => 'Pancur',
                'indonesia_districts_id' => 124,
            ],
            [
                'name' => 'Semata',
                'indonesia_districts_id' => 124,
            ],
            [
                'name' => 'Simpang Empat',
                'indonesia_districts_id' => 124,
            ],
            [
                'name' => 'Tangaran',
                'indonesia_districts_id' => 124,
            ],
            [
                'name' => 'Batu Mak Jage',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Bekut',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Bukit Segoler',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Dungun Perapakan',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Mak Tangguk',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Makrampai',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Maribas',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Matang Labong',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Mekar Sekuntum',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Mensere',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Pangkalan Kongsi',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Pusaka',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Serumpun Buluh',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Sejiram',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Sempalai',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Seberkat',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Segarau Parit',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Segedong',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Seret Ayon',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Serindang',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Sungai Kelambu',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Tebas Kuala',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Tebas Sungai',
                'indonesia_districts_id' => 125,
            ],
            [
                'name' => 'Cepala',
                'indonesia_districts_id' => 126,
            ],
            [
                'name' => 'Matang Segarau',
                'indonesia_districts_id' => 126,
            ],
            [
                'name' => 'Merubung',
                'indonesia_districts_id' => 126,
            ],
            [
                'name' => 'Rambayan',
                'indonesia_districts_id' => 126,
            ],
            [
                'name' => 'Tekarang',
                'indonesia_districts_id' => 126,
            ],
            [
                'name' => 'Sempadian',
                'indonesia_districts_id' => 126,
            ],
            [
                'name' => 'Sari Makmur',
                'indonesia_districts_id' => 126,
            ],
            [
                'name' => 'Berlimang',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Kuala Pangkalan Keramat',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Kubangga',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Lela',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Matang Segantar',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Mekar Sekuntum',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Mulia',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Pedada',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Pipit Teja',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Puringan',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Sabing',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Samustida',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Sayang Sedayu',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Sebagu',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Sekura',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Sengawang',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Sepadu',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Sungai Baru',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Sungai Kumpai',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Sungai Serabek',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Tambatan',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Tanjung Kerucut',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Teluk Kaseh',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Teluk Kumbang',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Tri Mandayan',
                'indonesia_districts_id' => 127,
            ],
            [
                'name' => 'Bulu Bala',
                'indonesia_districts_id' => 128,
            ],
            [
                'name' => 'Cowet',
                'indonesia_districts_id' => 128,
            ],
            [
                'name' => 'Empirang Ujung',
                'indonesia_districts_id' => 128,
            ],
            [
                'name' => 'Hilir',
                'indonesia_districts_id' => 128,
            ],
            [
                'name' => 'Kebadu',
                'indonesia_districts_id' => 128,
            ],
            [
                'name' => 'Mak Kawing',
                'indonesia_districts_id' => 128,
            ],
            [
                'name' => 'Padi Kaye',
                'indonesia_districts_id' => 128,
            ],
            [
                'name' => 'Semoncol',
                'indonesia_districts_id' => 128,
            ],
            [
                'name' => 'Senyabang',
                'indonesia_districts_id' => 128,
            ],
            [
                'name' => 'Tae',
                'indonesia_districts_id' => 128,
            ],
            [
                'name' => 'Temiang Mali',
                'indonesia_districts_id' => 128,
            ],
            [
                'name' => 'Temiang Taba',
                'indonesia_districts_id' => 128,
            ],
            [
                'name' => 'Bereng Berkawat',
                'indonesia_districts_id' => 129,
            ],
            [
                'name' => 'Kasro Mego',
                'indonesia_districts_id' => 129,
            ],
            [
                'name' => 'Mawang Muda',
                'indonesia_districts_id' => 129,
            ],
            [
                'name' => 'Sungai Ilai',
                'indonesia_districts_id' => 129,
            ],
            [
                'name' => 'Thang Raya',
                'indonesia_districts_id' => 129,
            ],
            [
                'name' => 'Bahta',
                'indonesia_districts_id' => 130,
            ],
            [
                'name' => 'Bantai',
                'indonesia_districts_id' => 130,
            ],
            [
                'name' => 'Bonti',
                'indonesia_districts_id' => 130,
            ],
            [
                'name' => 'Empodis',
                'indonesia_districts_id' => 130,
            ],
            [
                'name' => 'Kampuh',
                'indonesia_districts_id' => 130,
            ],
            [
                'name' => 'Majel',
                'indonesia_districts_id' => 130,
            ],
            [
                'name' => 'Sami',
                'indonesia_districts_id' => 130,
            ],
            [
                'name' => 'Tunggul Boyok',
                'indonesia_districts_id' => 130,
            ],
            [
                'name' => 'Upe',
                'indonesia_districts_id' => 130,
            ],
            [
                'name' => 'Entikong',
                'indonesia_districts_id' => 131,
            ],
            [
                'name' => 'Nekan',
                'indonesia_districts_id' => 131,
            ],
            [
                'name' => 'Pala Pasang',
                'indonesia_districts_id' => 131,
            ],
            [
                'name' => 'Semanget',
                'indonesia_districts_id' => 131,
            ],
            [
                'name' => 'Suruh Tembawang',
                'indonesia_districts_id' => 131,
            ],
            [
                'name' => 'Balai Sebut',
                'indonesia_districts_id' => 132,
            ],
            [
                'name' => 'Empiyang',
                'indonesia_districts_id' => 132,
            ],
            [
                'name' => 'Jangkang Benua',
                'indonesia_districts_id' => 132,
            ],
            [
                'name' => 'Ketori',
                'indonesia_districts_id' => 132,
            ],
            [
                'name' => 'Pisang',
                'indonesia_districts_id' => 132,
            ],
            [
                'name' => 'Sape',
                'indonesia_districts_id' => 132,
            ],
            [
                'name' => 'Selampung',
                'indonesia_districts_id' => 132,
            ],
            [
                'name' => 'Semirau',
                'indonesia_districts_id' => 132,
            ],
            [
                'name' => 'Semombat',
                'indonesia_districts_id' => 132,
            ],
            [
                'name' => 'Tanggung',
                'indonesia_districts_id' => 132,
            ],
            [
                'name' => 'Terati',
                'indonesia_districts_id' => 132,
            ],
            [
                'name' => 'Belangin',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Botuh Lintang',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Entakai',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Kambong',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Lape',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Lintang Kapuas',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Lintang Pelaman',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Mengkiang',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Nanga Biang',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Pana',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Penyeladi',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Penyelimau',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Penyelimau Jaya',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Rambin',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Semerangkai',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Sungai Alai',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Sungai Batu',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Sungai Mawang',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Sungai Muntik',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Tapang Dulang',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Beringin',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Bunut',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Ilir Kota',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Sungai Sengkuang',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Tanjung Kapuas',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Tanjung Sekayam',
                'indonesia_districts_id' => 133,
            ],
            [
                'name' => 'Kelompu',
                'indonesia_districts_id' => 134,
            ],
            [
                'name' => 'Kuala Dua',
                'indonesia_districts_id' => 134,
            ],
            [
                'name' => 'Mobui',
                'indonesia_districts_id' => 134,
            ],
            [
                'name' => 'Sebongkuh',
                'indonesia_districts_id' => 134,
            ],
            [
                'name' => 'Sebuduh',
                'indonesia_districts_id' => 134,
            ],
            [
                'name' => 'Sejuah',
                'indonesia_districts_id' => 134,
            ],
            [
                'name' => 'Semayang',
                'indonesia_districts_id' => 134,
            ],
            [
                'name' => 'Tanjung Bunga',
                'indonesia_districts_id' => 134,
            ],
            [
                'name' => 'Tanjung Merpati',
                'indonesia_districts_id' => 134,
            ],
            [
                'name' => 'Tanap',
                'indonesia_districts_id' => 134,
            ],
            [
                'name' => 'Tunggal Bhakti',
                'indonesia_districts_id' => 134,
            ],
            [
                'name' => 'Balai Tinggi',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Baru Lombak',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Bhakti Jaya',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Cupang',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Enggadai',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Harapan Makmur',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Kuala Buayan',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Kuala Rosan',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Kunyil',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Lalang',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Melawi Makmur',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Meliau Hulu',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Meliau Hilir',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Melobok',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Meranggau',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Mukti Jaya',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Pampang Dua',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Sungai Kembayau',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Sungai Mayam',
                'indonesia_districts_id' => 135,
            ],
            [
                'name' => 'Inggis',
                'indonesia_districts_id' => 136,
            ],
            [
                'name' => 'Engkode',
                'indonesia_districts_id' => 136,
            ],
            [
                'name' => 'Kedukul',
                'indonesia_districts_id' => 136,
            ],
            [
                'name' => 'Layak Omang',
                'indonesia_districts_id' => 136,
            ],
            [
                'name' => 'Semanggis Raya',
                'indonesia_districts_id' => 136,
            ],
            [
                'name' => 'Semuntai',
                'indonesia_districts_id' => 136,
            ],
            [
                'name' => 'Serambai Jaya',
                'indonesia_districts_id' => 136,
            ],
            [
                'name' => 'Sungai Mawang',
                'indonesia_districts_id' => 136,
            ],
            [
                'name' => 'Tri Mulya',
                'indonesia_districts_id' => 136,
            ],
            [
                'name' => 'Empoto',
                'indonesia_districts_id' => 137,
            ],
            [
                'name' => 'Idas',
                'indonesia_districts_id' => 137,
            ],
            [
                'name' => 'Noyan',
                'indonesia_districts_id' => 137,
            ],
            [
                'name' => 'Semongan',
                'indonesia_districts_id' => 137,
            ],
            [
                'name' => 'Sungai Dangin',
                'indonesia_districts_id' => 137,
            ],
            [
                'name' => 'Dosan',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Embala',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Gunam',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Hibun',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Maju Karya',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Marita',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Maringin Jaya',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Palem Jaya',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Pandu Raya',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Pusat Damai',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Rahayu',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Sebara',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Suka Gerundi',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Suka Mulya',
                'indonesia_districts_id' => 138,
            ],
            [
                'name' => 'Balai Karangan',
                'indonesia_districts_id' => 139,
            ],
            [
                'name' => 'Bungkang',
                'indonesia_districts_id' => 139,
            ],
            [
                'name' => 'Engkahan',
                'indonesia_districts_id' => 139,
            ],
            [
                'name' => 'Kenaman',
                'indonesia_districts_id' => 139,
            ],
            [
                'name' => 'Lubuk Sabuk',
                'indonesia_districts_id' => 139,
            ],
            [
                'name' => 'Melenggang',
                'indonesia_districts_id' => 139,
            ],
            [
                'name' => 'Pengadang',
                'indonesia_districts_id' => 139,
            ],
            [
                'name' => 'Raut Muara',
                'indonesia_districts_id' => 139,
            ],
            [
                'name' => 'Sangai Tekam',
                'indonesia_districts_id' => 139,
            ],
            [
                'name' => 'Sotok',
                'indonesia_districts_id' => 139,
            ],
            [
                'name' => 'Balai Ingin',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Beginjan',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Cempedak',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Emberas',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Kawat',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Lalang',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Melugai',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Pedalaman',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Pulau Tayan Utara',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Sebemban',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Sejotang',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Subah',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Sungai Jaman',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Tanjung Bunut',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Tebang Benua',
                'indonesia_districts_id' => 140,
            ],
            [
                'name' => 'Berakak',
                'indonesia_districts_id' => 141,
            ],
            [
                'name' => 'Binjai',
                'indonesia_districts_id' => 141,
            ],
            [
                'name' => 'Engkasan',
                'indonesia_districts_id' => 141,
            ],
            [
                'name' => 'Janjang',
                'indonesia_districts_id' => 141,
            ],
            [
                'name' => 'Mandong',
                'indonesia_districts_id' => 141,
            ],
            [
                'name' => 'Menyabo',
                'indonesia_districts_id' => 141,
            ],
            [
                'name' => 'Kedakas',
                'indonesia_districts_id' => 141,
            ],
            [
                'name' => 'Pandan Sembuat',
                'indonesia_districts_id' => 141,
            ],
            [
                'name' => 'Peruan Dalam',
                'indonesia_districts_id' => 141,
            ],
            [
                'name' => 'Riyai',
                'indonesia_districts_id' => 141,
            ],
            [
                'name' => 'Sosok',
                'indonesia_districts_id' => 141,
            ],
            [
                'name' => 'Bagan Asam',
                'indonesia_districts_id' => 142,
            ],
            [
                'name' => 'Balai Belungai',
                'indonesia_districts_id' => 142,
            ],
            [
                'name' => 'Belungai Dalam',
                'indonesia_districts_id' => 142,
            ],
            [
                'name' => 'Kampung Baru',
                'indonesia_districts_id' => 142,
            ],
            [
                'name' => 'Lumut',
                'indonesia_districts_id' => 142,
            ],
            [
                'name' => 'Sansat',
                'indonesia_districts_id' => 142,
            ],
            [
                'name' => 'Teraju',
                'indonesia_districts_id' => 142,
            ],
            [
                'name' => 'Belitang Satu',
                'indonesia_districts_id' => 143,
            ],
            [
                'name' => 'Belitang Dua',
                'indonesia_districts_id' => 143,
            ],
            [
                'name' => 'Maboh Permai',
                'indonesia_districts_id' => 143,
            ],
            [
                'name' => 'Menua Prama',
                'indonesia_districts_id' => 143,
            ],
            [
                'name' => 'Nanga Ansar',
                'indonesia_districts_id' => 143,
            ],
            [
                'name' => 'Padak',
                'indonesia_districts_id' => 143,
            ],
            [
                'name' => 'Setuntung',
                'indonesia_districts_id' => 143,
            ],
            [
                'name' => 'Empajak',
                'indonesia_districts_id' => 144,
            ],
            [
                'name' => 'Entabuk',
                'indonesia_districts_id' => 144,
            ],
            [
                'name' => 'Kumpang Bis',
                'indonesia_districts_id' => 144,
            ],
            [
                'name' => 'Menawai Tekam',
                'indonesia_districts_id' => 144,
            ],
            [
                'name' => 'Merbang',
                'indonesia_districts_id' => 144,
            ],
            [
                'name' => 'Sei Ayak Satu',
                'indonesia_districts_id' => 144,
            ],
            [
                'name' => 'Sei Ayak Dua',
                'indonesia_districts_id' => 144,
            ],
            [
                'name' => 'Semadu',
                'indonesia_districts_id' => 144,
            ],
            [
                'name' => 'Tapang Pulau',
                'indonesia_districts_id' => 144,
            ],
            [
                'name' => 'Balai Sepuak',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Batuk Mulau',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Bukit Rambat',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Ijuk',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Kumpang Ilong',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Mengaret',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Pakit Mulau',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Sebetung',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Seburuk Satu',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Sungai Antu Hulu',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Sungai Tapah',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Tabuk Hulu',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Terduk Dampak',
                'indonesia_districts_id' => 145,
            ],
            [
                'name' => 'Batu Pahat',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Cenayan',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Karang Betung',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Landau Apin',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Landau Kumpai',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Lembah Beringin',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Nanga Mahap',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Nanga Suri',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Sebabas',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Tamang',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Teluk Kebau',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Tembaga',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Tembesuk',
                'indonesia_districts_id' => 146,
            ],
            [
                'name' => 'Lubuk Tajau',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Meragun',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Nanga Engkulun',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Nanga Kiungkang',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Nanga Koman',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Nanga Mentukak',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Nanga Mongko',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Nanga Taman',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Pantok',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Rirang Jati',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Senangak',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Sungai Lawak',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Tapang Tingang',
                'indonesia_districts_id' => 147,
            ],
            [
                'name' => 'Bokak Sebumbun',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Engkersik',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Ensalang',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Gonis Tekam',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Landau Kodah',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Merapi',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Mungguk',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Paniti',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Seberang Kapuas',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Selalong',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Semabi',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Seraras',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Sungai Kunyit',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Sungai Ringin',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Tanjung',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Tapang Semadak',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Timpuk',
                'indonesia_districts_id' => 148,
            ],
            [
                'name' => 'Boti',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Cupang Gading',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Mondi',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Nanga Biaban',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Nanga Menterap',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Nanga Pemubuh',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Perongkan',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Rawak Hilir',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Rawak Hulu',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Sekonau',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Setawar',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Sungai Sambang',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Sunsong',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Tapang Perodah',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Tinting Boyok',
                'indonesia_districts_id' => 149,
            ],
            [
                'name' => 'Bukai Tukun',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Bukai Tinggi',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Buntut Pimpin',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Buntut Purun',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Buntut Sabon',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Dahtah Bungai',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Deme',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Jengkarang',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Kepala Jungai',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Kolangan Juoi',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Korong Daso',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Lunjan Tingang',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Luting Mingan',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Mensuang',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nanga Ambalau',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nanga Kemangai',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nanga Keremoi',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nanga Kesange',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nanga Menakon',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nanga Menantak',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nanga Mentomoi',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nanga Pahangan',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nanga Rade',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nanga Sakai',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nanga Sake',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nanga Ukai',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Nusa Poring',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Patih Jepara',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Pulou Sabhang',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Purut Beribit',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Riam Sabon',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Sungai Tambun',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Tanjung Andan',
                'indonesia_districts_id' => 150,
            ],
            [
                'name' => 'Ampar Bedang',
                'indonesia_districts_id' => 151,
            ],
            [
                'name' => 'Binjai Hilir',
                'indonesia_districts_id' => 151,
            ],
            [
                'name' => 'Binjai Hulu',
                'indonesia_districts_id' => 151,
            ],
            [
                'name' => 'Dak Jaya',
                'indonesia_districts_id' => 151,
            ],
            [
                'name' => 'Empaka Kabiau Raya',
                'indonesia_districts_id' => 151,
            ],
            [
                'name' => 'Mensiku',
                'indonesia_districts_id' => 151,
            ],
            [
                'name' => 'Sungai Risap',
                'indonesia_districts_id' => 151,
            ],
            [
                'name' => 'Simba Raya',
                'indonesia_districts_id' => 151,
            ],
            [
                'name' => 'Sungai Risap Mensiku Bersatu',
                'indonesia_districts_id' => 151,
            ],
            [
                'name' => 'Telaga Dua',
                'indonesia_districts_id' => 151,
            ],
            [
                'name' => 'Telaga Satu',
                'indonesia_districts_id' => 151,
            ],
            [
                'name' => 'Apin Baru',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Baras',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Batu Landung',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Belinyuk Sibau',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Dedai Kanan',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Empaci',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Emparu Baru',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Gandis',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Gandis Hulu',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Hulu Dedai',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Jangkang',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Kumpang',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Lundang Baru',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Menaong Baru',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Mangat Baru',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Manyam',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Mengkirai Jaya',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Merempit Baru',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Nanga Dedai',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Nanga Jetak',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Pengkadan Baru',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Pengkadan Sungai Rupa',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Penyak Lalang',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Riguk',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Samak',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Sungai Mali',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Sungai Tapang',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Tanjung',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Tauk',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Terusan',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Umin Jaya',
                'indonesia_districts_id' => 152,
            ],
            [
                'name' => 'Batu Netak',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Begendang Mal',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Bukit Segaloh',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Buluk Jegara',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Buluk Panjang',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Engkerangan',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Ipoh Emang',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Jambu',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Jaya Sakti',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Karya Baru',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Kempas Raya',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Kerapa Sepan',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Lalang Inggar',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Landau Beringin',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Lengkong Bindu',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Linggam Permai',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Mekar Mandiri',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Melingkat',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Mengkirai',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Mentunai',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Monbai Begununk',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Nanga Lidau',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Nanga Mau',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Nanga Tikan',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Natai Lesung',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Natai Tebedak',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Neran Baya',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Nyangkom',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Pakak',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Paoh Desa',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Pelaik',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Sungai Buaya',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Sungai Emang',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Sungai Garong',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Sungai Menuang',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Sungai Meraya',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Sungai Pengga',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Sungai Ranap',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Sungai Sintang',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Tanjung Keliling',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Tanjung Putar',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Tertung Mau',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Tuguk',
                'indonesia_districts_id' => 153,
            ],
            [
                'name' => 'Buluh Merindu',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Empakan',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Empoyang',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Entogong',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Kebarau',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Kerapuk Jaya',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Landau Bara',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Lintak Tambuk',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Mapan Jaya',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Merah Arai',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Merahau Permai',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Nanga Abai',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Nanga Laar',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Nanga Masau',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Nanga Oran',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Nanga Payak',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Nanga Tampang',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Nanga Tebidah',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Nanga Tonggoi',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Nanga Toran',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Nanga Ungai',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Nangkak Lestari',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Riam Muntik',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Riam Panjang',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Tanah Merah',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Tanjung Bunga',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Tanjung Lalau',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Tanjung Miru',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Tapang Manua',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Tonak Goneh',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Topan Nanga',
                'indonesia_districts_id' => 154,
            ],
            [
                'name' => 'Baning Panjang',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Bengkuang',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Ensaid Panjang',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Gemba Raya',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Karya Jaya Bhakti',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Kebong',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Kelam Sejahtera',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Landau Kodam',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Mandiri Jaya',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Merpak',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Nanga Lebang',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Pelimping',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Sepan Lebang',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Sungai Labi',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Sungai Lais',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Sungai Maram',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Sungai Pukat',
                'indonesia_districts_id' => 155,
            ],
            [
                'name' => 'Air Nyuruk',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Batu Ampar',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Batu Nyadi',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Baung Sengatap',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Beluh Mulyo',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Betung Permai',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Bukit Sidin Permai',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Jentawang Hilir',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Kenuak',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Lepung Pantak',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Maung',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Mungguk Kelapa',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Nanga Ketungau',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Nanga Merkak',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Nanga Sejirak',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Pampang Dua',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Ratu Damai',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Sungai Deras',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Sungai Mali',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Semajau Mekar',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Semuntai',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Senibung',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Setungkup',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Tanjung Baung',
                'indonesia_districts_id' => 156,
            ],
            [
                'name' => 'Bekuan Luyang',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Embaleh',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Empunak Tapang Keladan',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Empura',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Engkeruh',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Idai',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Jasa',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Muakan Petinggi',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Mungguk Entawak',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Nanga Bayan',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Nanga Bugau',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Nanga Sebawang',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Neraci Jaya',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Rasau',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Riam Sejawak',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Sebadak',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Sebetung Paluk',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Sebuluh',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Sejawak',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Sekaih',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Senaning',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Sepiluk',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Suak Medang',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Sungai Bugau',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Sungai Kelik',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Sungai Mawang',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Sungai Pisau',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Sungai Seria',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Ujung Kempas',
                'indonesia_districts_id' => 157,
            ],
            [
                'name' => 'Argo Mulyo',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Bagelang Jaya',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Bakti Senabung',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Engkitan',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Gut Jaya Bhakti',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Kaya Dujung',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Kerta Sari',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Kubu Berangan',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Landau Buaya',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Landau Temiang',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Margahayu',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Mungguk Gelombang',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Mungguk Lawang',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Nanga Kelapan',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Padung Kumang',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Panding Jaya',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Panggi Agung',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Panggi Ruguk',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Radin Jaya',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Semareh',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Senangan Jaya',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Senangan Kecil',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Sumber Sari',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Sungai Areh',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Swadaya',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Tanjung Sari',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Tirta Karya',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Wana Bhakti',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Wirayuda',
                'indonesia_districts_id' => 158,
            ],
            [
                'name' => 'Baras Nabun',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Batu Ketebung',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Bedaha',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Begori',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Buntut Ponte',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Gurung Senghiang',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Karya Jaya',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Limbur Bernaung Lestari',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Mekar Sari',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Mensulung Bio',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Mentajoi',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Merako Jaya',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Meroboi',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Muara Kota',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Nanga Bihe',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Nanga Jelundung',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Nanga Mentatai',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Nanga Riyoi',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Nanga Ruhan',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Nanga Segulang',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Nanga Serawai',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Nanga Tangoi',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Nanga Tekungai',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Nusa Tujuh',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Pagar Lebata',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Panekasan',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Rantau Malam',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Sabhang Landan',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Sawang Senghiang',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Tahai Permai',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Talian Sahabung',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Tamakung',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Tanjung Baru',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Tanjung Harapan',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Tanjung Raya',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Teluk Harapan',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Tontang',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Tunas Harapan',
                'indonesia_districts_id' => 159,
            ],
            [
                'name' => 'Bangun',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Bedayan',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Bernayau',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Buluh Kuning',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Ensabang',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Gernis Jaya',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Kemantan',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Kenyauk',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Landau Panjang',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Lengkenat',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Limau Bakti',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Mait Hilir',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Manis Raya',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Nanga Layung',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Nanga Libau',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Nanga Pari',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Nanga Sepauk',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Paoh Benua',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Peninsung',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Riam Kempadik',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Sekubang',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Sekujam Timbai',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Semuntai',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Sepulut',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Sinar Harapan',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Sinar Pekayau',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Sirang Setambang',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Sukan Bersatu',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Sungai Jaung',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Sungai Raya',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Sungai Segak',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Tanjung Balai',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Tanjung Hulu',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Tanjung Mawang',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Tanjung Ria',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Tawang Sari',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Temawang Bulai',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Temawang Muntai',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Temiang Kapuas',
                'indonesia_districts_id' => 160,
            ],
            [
                'name' => 'Anggah Jaya',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Baning Kota',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Jerora Satu',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Kebiau Baru',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Lalang Baru',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Mail Jampong',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Marti Guna',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Mungguk Bantok',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Sungai Ana',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Tertung',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Teluk Kelansam',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Tanjung Kelansam',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Tebing Raya',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Akcaya',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Alai',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Batu Lalau',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Kapuas Kanan Hilir',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Kapuas Kanan Hulu',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Kapuas Kiri Hilir',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Kapuas Kiri Hulu',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Kedabang',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Ladang',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Mekar Jaya',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Mengkurai',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Menyumbung Tengah',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Rawa Mambok',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Sengkuang',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Tanjung Puri',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Ulak Jaya',
                'indonesia_districts_id' => 161,
            ],
            [
                'name' => 'Balai Agung',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Bancoh',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Baya Betung',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Baya Mulya',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Bonet Engkabang',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Bonet Lama',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Gurung Kempadik',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Kajang Baru',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Kunyai',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Laman Raya',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Lebak Ubah',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Manter',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Melayang Sari',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Merarai Dua',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Merarai Satu',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Nobal',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Penjernang',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Penjernang Hulu',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Perembang',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Ransi Dakan',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Rarai',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Riam Kijang',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Sabang Surai',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Sarai',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Solam Raya',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Sungai Ukoi',
                'indonesia_districts_id' => 162,
            ],
            [
                'name' => 'Balai Harapan',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Benua Baru',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Benua Kencana',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Gurung Mali',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Jaya Mentari',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Kenyabur Baru',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Kuala Tiga',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Kupan Jaya',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Mengkurat Baru',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Mensiap Baru',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Mensiap Jaya',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Merti Jaya',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Nanga Tempunak',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Pagal Baru',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Pangkal Baru',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Paribang Baru',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Pekulai Bersatu',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Pudau Bersatu',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Pulau Jaya',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Repak Sari',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Riam Batu',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Suka Jaya',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Sungai Buluh',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Tanjung Perada',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Tempunak Kapuas',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Tinum Baru',
                'indonesia_districts_id' => 163,
            ],
            [
                'name' => 'Pal Lima',
                'indonesia_districts_id' => 164,
            ],
            [
                'name' => 'Sungai Beliung',
                'indonesia_districts_id' => 164,
            ],
            [
                'name' => 'Sungaijawi Dalam',
                'indonesia_districts_id' => 164,
            ],
            [
                'name' => 'Sungaijawi Luar',
                'indonesia_districts_id' => 164,
            ],
            [
                'name' => 'Daratsekip',
                'indonesia_districts_id' => 165,
            ],
            [
                'name' => 'Mariana',
                'indonesia_districts_id' => 165,
            ],
            [
                'name' => 'Sungaibangkong',
                'indonesia_districts_id' => 165,
            ],
            [
                'name' => 'Sungaijawi',
                'indonesia_districts_id' => 165,
            ],
            [
                'name' => 'Tengah',
                'indonesia_districts_id' => 165,
            ],
            [
                'name' => 'Akcaya',
                'indonesia_districts_id' => 166,
            ],
            [
                'name' => 'Benuamelayu Darat',
                'indonesia_districts_id' => 166,
            ],
            [
                'name' => 'Benuamelayu Laut',
                'indonesia_districts_id' => 166,
            ],
            [
                'name' => 'Kotabaru',
                'indonesia_districts_id' => 166,
            ],
            [
                'name' => 'Parittokaya',
                'indonesia_districts_id' => 166,
            ],
            [
                'name' => 'Bangka Belitung Darat',
                'indonesia_districts_id' => 167,
            ],
            [
                'name' => 'Bangka Belitung Laut',
                'indonesia_districts_id' => 167,
            ],
            [
                'name' => 'Bansir Darat',
                'indonesia_districts_id' => 167,
            ],
            [
                'name' => 'Bansir Laut',
                'indonesia_districts_id' => 167,
            ],
            [
                'name' => 'Banjar Serasan',
                'indonesia_districts_id' => 168,
            ],
            [
                'name' => 'Dalambugis',
                'indonesia_districts_id' => 168,
            ],
            [
                'name' => 'Paritmayor',
                'indonesia_districts_id' => 168,
            ],
            [
                'name' => 'Saigon',
                'indonesia_districts_id' => 168,
            ],
            [
                'name' => 'Tambelansampit',
                'indonesia_districts_id' => 168,
            ],
            [
                'name' => 'Tanjunghulu',
                'indonesia_districts_id' => 168,
            ],
            [
                'name' => 'Tanjunghilir',
                'indonesia_districts_id' => 168,
            ],
            [
                'name' => 'Batulayang',
                'indonesia_districts_id' => 169,
            ],
            [
                'name' => 'Siantan Hilir',
                'indonesia_districts_id' => 169,
            ],
            [
                'name' => 'Siantan Hulu',
                'indonesia_districts_id' => 169,
            ],
            [
                'name' => 'Siantan Tengah',
                'indonesia_districts_id' => 169,
            ],
            [
                'name' => 'Kuala',
                'indonesia_districts_id' => 170,
            ],
            [
                'name' => 'Pasiran',
                'indonesia_districts_id' => 170,
            ],
            [
                'name' => 'Melayu',
                'indonesia_districts_id' => 170,
            ],
            [
                'name' => 'Tengah',
                'indonesia_districts_id' => 170,
            ],
            [
                'name' => 'Pangmilang',
                'indonesia_districts_id' => 171,
            ],
            [
                'name' => 'Sagatani',
                'indonesia_districts_id' => 171,
            ],
            [
                'name' => 'Sedau',
                'indonesia_districts_id' => 171,
            ],
            [
                'name' => 'Sijangkung',
                'indonesia_districts_id' => 171,
            ],
            [
                'name' => 'Bukit Batu',
                'indonesia_districts_id' => 172,
            ],
            [
                'name' => 'Condong',
                'indonesia_districts_id' => 172,
            ],
            [
                'name' => 'Jawa',
                'indonesia_districts_id' => 172,
            ],
            [
                'name' => 'Roban',
                'indonesia_districts_id' => 172,
            ],
            [
                'name' => 'Sekip Lama',
                'indonesia_districts_id' => 172,
            ],
            [
                'name' => 'Sungai Wie',
                'indonesia_districts_id' => 172,
            ],
            [
                'name' => 'Bagak Sahwa',
                'indonesia_districts_id' => 173,
            ],
            [
                'name' => 'Maya Sopa',
                'indonesia_districts_id' => 173,
            ],
            [
                'name' => 'Nyarumkop',
                'indonesia_districts_id' => 173,
            ],
            [
                'name' => 'Pajintan',
                'indonesia_districts_id' => 173,
            ],
            [
                'name' => 'Sanggau Kulor',
                'indonesia_districts_id' => 173,
            ],
            [
                'name' => 'Naram',
                'indonesia_districts_id' => 174,
            ],
            [
                'name' => 'Semelagi Kecil',
                'indonesia_districts_id' => 174,
            ],
            [
                'name' => 'Setapuk Besar',
                'indonesia_districts_id' => 174,
            ],
            [
                'name' => 'Setapuk Kecil',
                'indonesia_districts_id' => 174,
            ],
            [
                'name' => 'Sungai Bulan',
                'indonesia_districts_id' => 174,
            ],
            [
                'name' => 'Sungai Garam Hilir',
                'indonesia_districts_id' => 174,
            ],
            [
                'name' => 'Sungai Rasau',
                'indonesia_districts_id' => 174,
            ],
        ];

        foreach ($kelurahan_desas as $kelurahan_desa)
        {
            \App\Models\IndonesiaVilages::create($kelurahan_desa);
        }

        // DataProvinsi::create($provinsi);
        // DataKabupatenKota::create($kabupaten_kota);
        // DataKecamatan::create($kecamatan);
        // DataKelurahanDesa::create($kelurahan_desa);
    }
}
