<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Feedback;
use App\Models\Toko;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'toko_id' => '1',
            'name' => 'Erlangga Adidarma H',
            'school' => 'Fakultas Teknik Universitas Indonesia',
            'quotes' => 'Tetaplah hidup meski hidupmu membawa kesedihan',
            'phone' => '0895323858132'
        ]);

        Admin::create([
            'toko_id' => '2',
            'name' => 'Fikri Haikal',
            'school' => 'Fakultas Teknik Universitas Indonesia',
            'quotes' => 'Kerja terus, tipes kemudian...',
            'phone' => '0123456789212'
        ]);

        Toko::create([
            'provinsi' => 'DKI Jakarta',
            'alamat' => 'Jl. M.H. Thamrin No.1, Kb. Melati, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310'
        ]);

        Toko::create([
            'provinsi' => 'Jawa Barat',
            'alamat' => 'Pondok Cina, Beji, Depok City, West Java 16424'
        ]);

        Toko::create([
            'provinsi' => 'Jawa Timur',
            'alamat' => 'Surabaya, Jawa Timur'
        ]);

        Toko::create([
            'provinsi' => 'Banten',
            'alamat' => 'Tangerang Selatan, Banten'
        ]);

        Toko::create([
            'provinsi' => 'Jawa Tengah',
            'alamat' => 'Surabaya, Jawa Timur'
        ]);

        Feedback::factory(5)->create();
    }
}
