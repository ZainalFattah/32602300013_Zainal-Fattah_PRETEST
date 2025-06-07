<?php

namespace App\Controllers;
use CodeIgniter\Database\ConnectionInterface;
class Praktikum extends BaseController
{
    public function pretest()
    {
        return "Pretest Web Programming";
    }
    public function profil()
    {
        return view('profile_mahasiswa');
    }

    public function tambahMahasiswa()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');

        $data = [
            'nim' => '32602300013',
            'nama' => 'Zainal Fattah',
            'prodi' => 'Teknik Informatika'
        ];

        $builder->insert($data);
        return "Data berhasil ditambahkan!";
    }

    public function tampilMahasiswa()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');
        $query = $builder->get()->getResult();

        return view('view_data_mahasiswa', ['data' => $query]);
    }

}
