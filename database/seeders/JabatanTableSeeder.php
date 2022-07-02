<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jabatan::create(['id'=> 1, 'name' => 'Anggota']);
        Jabatan::create(['id'=> 2, 'name' => 'Ketua']);
        Jabatan::create(['id'=> 3, 'name' => 'Sekretaris',]);
        Jabatan::create(['id'=> 4, 'name' => 'Bendahara',]);
        Jabatan::create(['id'=> 5, 'name' => 'Ketua Harian',]);
        Jabatan::create(['id'=> 6, 'name' => 'Danpamsus',]);
        Jabatan::create(['id'=> 7, 'name' => 'Ketua Srikandi',]);
        Jabatan::create(['id'=> 8, 'name' => 'Kabid OKK',]);
        Jabatan::create(['id'=> 9, 'name' => 'Kabid Ekowir dan UMKM',]);
        Jabatan::create(['id'=> 10, 'name' => 'Kabid Kepemudaan dan Olah Raga',]);
        Jabatan::create(['id'=> 11, 'name' => 'Kabid Hukum, Investigasi dan Mediasi',]);
        Jabatan::create(['id'=> 12, 'name' => 'Kabid Pendidikan dan Agama',]);
        Jabatan::create(['id'=> 13, 'name' => 'Kabid Spiritual, Seni dan Budaya',]);
        Jabatan::create(['id'=> 14, 'name' => 'Kabid Ekonomi Kreatif dan Seniman',]);
        Jabatan::create(['id'=> 15, 'name' => 'Kabid Humas dan Media',]);
        Jabatan::create(['id'=> 16, 'name' => 'Kabid Perlengkapan dan Logistik',]);
        Jabatan::create(['id'=> 17, 'name' => 'Kabid Sosial dan Perencanaan',]);
        Jabatan::create(['id'=> 18, 'name' => 'Kabid BPBD dan Tanggana',]);
        Jabatan::create(['id'=> 19, 'name' => 'Kabid Petani dan Nelayan',]);
        Jabatan::create(['id'=> 20, 'name' => 'Kabid Antar Lembaga Pemerintahan dan Swasta',]);
        Jabatan::create(['id'=> 21, 'name' => 'Kabid Bisnis dan Investigasi',]);
        Jabatan::create(['id'=> 22, 'name' => 'Kabid Politik dan Keamanan',]);
        Jabatan::create(['id'=> 23, 'name' => 'Kabid Kesehatan dan Gizi']);
    }
}
