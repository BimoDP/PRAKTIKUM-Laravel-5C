<?php

namespace Database\Seeders;

use App\Models\Pemasok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemasokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');
        Pemasok::insert([
        [
                'nama_pemasok' => 'CV Markuriang',
                'nama_kontak' => 'Lopek',
                'nomor_hp' => '08932832',
                'alamat' => 'Bejebe',
                'created_at' => $now, 'updated_at' => $now
        ],
        [
                'nama_pemasok' => 'CV Citataa',
                'nama_kontak' => 'Lapindo',
                'nomor_hp' => '0813291731',
                'alamat' => 'Beje em',
                'created_at' => $now, 'updated_at' => $now
        ],
        ]);
    }
}
