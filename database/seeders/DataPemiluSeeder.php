<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataPemiluSeeder extends Seeder
{
    public function run()
    {
        $partai =  [
            [
                'id' => 1,
                'nama_partai' => 'Partai Demokrasi Indonesia Perjuangan (PDI-P)',
            ],
            [
                'id' => 2,
                'nama_partai' => 'Partai Keadilan Sejahtera (PKS)',
            ],
            [
                'id' => 3,
                'nama_partai' => 'NasDem',
            ],
            [
                'id' => 4,
                'nama_partai' => 'Partai Demokrat',
            ],
            [
                'id' => 5,
                'nama_partai' => 'Partai Gerakan Indonesia Raya (Gerindra)',
            ],
            [
                'id' => 6,
                'nama_partai' => 'Partai Kebangkitan Bangsa (PKB)',
            ],
            [
                'id' => 7,
                'nama_partai' => 'Partai Persatuan Pembangunan (PPP)',
            ],
            [
                'id' => 8,
                'nama_partai' => 'Partai Golongan Karya (Golkar)',
            ],
            [
                'id' => 9,
                'nama_partai' => 'Partai Amanat Nasional (PAN)',
            ],
            [
                'id' => 10,
                'nama_partai' => 'Partai Persatuan Indonesia (Perindo)',
            ],
            [
                'id' => 11,
                'nama_partai' => 'Partai Bulan Bintang (PBB)',
            ],
            [
                'id' => 12,
                'nama_partai' => 'Partai Kebangkitan Nusantara (PKN)',
            ],
            [
                'id' => 13,
                'nama_partai' => 'Partai Garda Perubahan Indonesia (Garuda)',
            ],
            [
                'id' => 14,
                'nama_partai' => 'Partai Gelombang Rakyat Indonesia (Gelora)',
            ],
            [
                'id' => 15,
                'nama_partai' => 'Partai Hati Nurani Rakyat (Hanura)',
            ],
            [
                'id' => 16,
                'nama_partai' => 'Partai Solidaritas Indonesia (PSI)',
            ],
            [
                'id' => 17,
                'nama_partai' => 'Partai Buruh',
            ],
            [
                'id' => 18,
                'nama_partai' => 'Partai Ummat',
            ],
            [
                'id' => 19,
                'nama_partai' => 'Partai Keadilan dan Persatuan (PKP)',
            ],
            [
                'id' => 20,
                'nama_partai' => 'Partai Republik',
            ],
            [
                'id' => 21,
                'nama_partai' => 'Partai Republik Satu',
            ],
            [
                'id' => 22,
                'nama_partai' => 'Partai Rakyat Adil Makmur (Prima)',
            ],
            [
                'id' => 23,
                'nama_partai' => 'Partai Republiku Indonesia',
            ],
            [
                'id' => 24,
                'nama_partai' => 'Partai Swara Rakyat Indonesia (Parsindo)',
            ],
            [
                'id' => 25,
                'nama_partai' => 'Partai Reformasi',
            ],
            [
                'id' => 26,
                'nama_partai' => 'Partai Negeri Daulat Indonesia (Pandai)',
            ],
            [
                'id' => 27,
                'nama_partai' => 'Partai Demokrasi Rakyat Indonesia',
            ],
            [
                'id' => 28,
                'nama_partai' => 'Partai Kedaulatan Rakyat (PKR)',
            ],
            [
                'id' => 29,
                'nama_partai' => 'Partai Berkarya',
            ],
            [
                'id' => 30,
                'nama_partai' => 'Partai Indonesia Bangkit Bersatu',
            ],
            [
                'id' => 31,
                'nama_partai' => 'Partai Pelita',
            ],
            [
                'id' => 32,
                'nama_partai' => 'Partai Kongres',
            ],
            [
                'id' => 33,
                'nama_partai' => 'Partai Pemersatu Bangsa',
            ],
            [
                'id' => 34,
                'nama_partai' => 'Partai Karya Republik',
            ],
            [
                'id' => 35,
                'nama_partai' => 'Partai Pandu Bangsa (PPB)',
            ],
            [
                'id' => 36,
                'nama_partai' => 'Partai Bhinneka Indonesia (PBI)',
            ],
            [
                'id' => 37,
                'nama_partai' => 'Partai Pergerakan Kebangkitan Desa (Perkasa)',
            ],
            [
                'id' => 38,
                'nama_partai' => 'Partai Masyumi',
            ],
            [
                'id' => 39,
                'nama_partai' => 'Partai Damai Kasih Bangsa (PDKB)',
            ],
            [
                'id' => 40,
                'nama_partai' => 'Partai Kedaulatan',
            ],
        ];

        foreach ($partai as $data)
        {
            \App\Models\DataPartai::create($data);
        }
        
        $kategoriPemilu = [
            [
                'id' => 1,
                'nama_kategori_pemilu' => 'Pemilihan umum Presiden Indonesia 2024',
            ],
            [
                'id' => 2,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Aceh 2024',
            ],
            [
                'id' => 3,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Bengkulu 2024',
            ],
            [
                'id' => 4,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Jambi 2024',
            ],
            [
                'id' => 5,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Kepulauan Bangka Belitung 2024',
            ],
            [
                'id' => 6,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Kepulauan Riau 2024',
            ],
            [
                'id' => 7,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Lampung 2024',
            ],
            [
                'id' => 8,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Riau 2024',
            ],
            [
                'id' => 9,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Sumatra Barat 2024',
            ],
            [
                'id' => 10,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Sumatra Utara 2024',
            ],
            [
                'id' => 11,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Sumatra Selatan 2024',
            ],
            [
                'id' => 12,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Banten 2024',
            ],
            [
                'id' => 13,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur DKI Jakarta 2024',
            ],
            [
                'id' => 14,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Jawa Barat 2024',
            ],
            [
                'id' => 15,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Jawa Tengah 2024',
            ],
            [
                'id' => 16,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Jawa Timur 2024',
            ],
            [
                'id' => 17,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Bali 2024',
            ],
            [
                'id' => 18,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Nusa Tenggara Barat 2024',
            ],
            [
                'id' => 19,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Nusa Tenggara Timur 2024',
            ],
            [
                'id' => 20,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Kalimantan Barat 2024',
            ],
            [
                'id' => 21,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Kalimantan Selatan 2024',
            ],
            [
                'id' => 22,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Kalimantan Timur 2024',
            ],
            [
                'id' => 23,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Kalimantan Tengah 2024',
            ],
            [
                'id' => 24,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Kalimantan Utara 2024',
            ],
            [
                'id' => 25,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Gorontalo 2024',
            ],
            [
                'id' => 26,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Sulawesi Barat 2024',
            ],
            [
                'id' => 27,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Sulawesi Selatan 2024',
            ],
            [
                'id' => 28,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Sulawesi Tengah 2024',
            ],
            [
                'id' => 29,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Sulawesi Tenggara 2024',
            ],
            [
                'id' => 30,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Sulawesi Utara 2024',
            ],
            [
                'id' => 31,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Maluku 2024',
            ],
            [
                'id' => 32,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Maluku Utara 2024',
            ],
            [
                'id' => 33,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Papua 2024',
            ],
            [
                'id' => 34,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Papua Barat 2024',
            ],
            [
                'id' => 35,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Papua Barat Daya 2024',
            ],
            [
                'id' => 36,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Papua Pegunungan 2024',
            ],
            [
                'id' => 37,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Papua Selatan 2024',
            ],
            [
                'id' => 38,
                'nama_kategori_pemilu' => 'Pemilihan umum Gubernur Papua Tengah 2024',
            ],
            [
                'id' => 39,
                'nama_kategori_pemilu' => 'Pemilihan umum Bupati Bengkayang 2024',
            ],
            [
                'id' => 40,
                'nama_kategori_pemilu' => 'Pemilihan umum Bupati Kapuas Hulu 2024',
            ],
            [
                'id' => 41,
                'nama_kategori_pemilu' => 'Pemilihan umum Bupati Kayong Utara 2024',
            ],
            [
                'id' => 42,
                'nama_kategori_pemilu' => 'Pemilihan umum Bupati Ketapang 2024',
            ],
            [
                'id' => 43,
                'nama_kategori_pemilu' => 'Pemilihan umum Bupati Kubu Raya 2024',
            ],
            [
                'id' => 44,
                'nama_kategori_pemilu' => 'Pemilihan umum Bupati Landak 2024',
            ],
            [
                'id' => 45,
                'nama_kategori_pemilu' => 'Pemilihan umum Bupati Melawi 2024',
            ],
            [
                'id' => 46,
                'nama_kategori_pemilu' => 'Pemilihan umum Bupati Mempawah 2024',
            ],
            [
                'id' => 47,
                'nama_kategori_pemilu' => 'Pemilihan umum Bupati Sambas 2024',
            ],
            [
                'id' => 48,
                'nama_kategori_pemilu' => 'Pemilihan umum Bupati Sanggau 2024',
            ],
            [
                'id' => 49,
                'nama_kategori_pemilu' => 'Pemilihan umum Bupati Sekadau 2024',
            ],
            [
                'id' => 50,
                'nama_kategori_pemilu' => 'Pemilihan umum Bupati Sintang 2024',
            ],
            [
                'id' => 51,
                'nama_kategori_pemilu' => 'Pemilihan umum Wali Kota Pontianak 2024',
            ],
            [
                'id' => 52,
                'nama_kategori_pemilu' => 'Pemilihan umum Wali Kota Singkawang 2024',
            ],
        ];
        
        foreach ($kategoriPemilu as $kaPem)
        {
            \App\Models\KategoriPemilu::create($kaPem);
        }
    }
}
