<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // details
            'nik' => '3212090103040002',
            'tempat_lahir' => 'Indramayu',
            'tgl_lahir' => '01-03-1992',
            'jk' => 1,
            'agama' => 'Islam',
            'pendidikan' => 'Sarjana',
            'alamat' => 'Jalan Siliwangi, No 20, Cirebon',
            'pengurus_tingkat' => 'PAW',
            'provinsi' => '20',
            'kabko' => '12',
            'kecamatan' => '12',
            'kelurahan' => '1',
            'jabatan' => 'Sekretaris Bidang Organisasi',
            'no_hp' => '08912345',
            'photo' => 'photo.jpg',
            'status' => 3,
            'is_active' => true,
        ])->assignRole('writer', 'admin');
    }
}
