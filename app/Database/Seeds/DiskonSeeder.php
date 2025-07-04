<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        // Daftar nominal diskon sesuai permintaan
        $nominalDiskon = [
            100000,
            120000,
            105000,
            200000,
            150000,
            145000,
            50000,
            75000,
            110000,
            300000
        ];

        $startDate = strtotime('2025-07-04');

        for ($i = 0; $i < 10; $i++) {
            $tanggal = date('Y-m-d', strtotime("+$i day", $startDate));

            $data = [
                'tanggal'    => $tanggal,
                'nominal'    => $nominalDiskon[$i],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            $this->db->table('diskon')->insert($data);
        }
    }
}
