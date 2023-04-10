<?php

namespace App\Models;

use CodeIgniter\Model;

class YamahaModel extends Model
{
    protected $table = 'daftar_harga_yamaha';

    public function get_yamaha_list()
    {
        $data = $this->select('produk, varian, harga')->findAll();

        // Kalkulasi harga kredit
        $dp = 1000000;
        $bunga = 0.14;
        $tenors = [6, 12, 24];

        foreach ($data as $key => $value) {
            $harga_cash = $value['harga'] - $dp;
            $harga_kredit = [];

            foreach ($tenors as $tenor) {
                $harga_kredit[$tenor] = round(($harga_cash / $tenor) * (1 + $bunga), 0);
            }

            $data[$key]['harga_kredit'] = $harga_kredit;
        }

        return $data;
    }
}
