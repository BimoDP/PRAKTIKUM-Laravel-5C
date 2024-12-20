<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');
        Karyawan::insert([
        [
                'nama_karyawan' => 'King',
                'nomor_hp' => '0831932',
                'alamat' => 'Beje em',
                'created_at' => $now, 'updated_at' => $now
        ],
        [
                'nama_karyawan' => 'Michelle',
                'nomor_hp' => '0831323232',
                'alamat' => 'Bejebe',
                'created_at' => $now, 'updated_at' => $now
        ],
        ]);
    }
}
