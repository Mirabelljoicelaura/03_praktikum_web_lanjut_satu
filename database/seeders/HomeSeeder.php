<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home')->insert([
            'title' => 'Mobil Keren',
            'content'=> 'Mobil adalah kendaraan yang menggunakan bahan bakar untuk menghidupkan mesinnya. Mobil kependekan dari otomobil yang berasal dari Bahasa Yunani autos (sendiri) dan Latin movére (bergerak). ',
            'image'=>'https://th.bing.com/th/id/OIP.KIq4R0paVpdhMBYWa5I9vAHaFj?pid=ImgDet&rs=1',
        ]);
        DB::table('home')->insert([
            'title' => 'Mobil HRV',
            'content'=> 'Honda HRV Jenis Mobil Apa? Honda HRV adalah sebuah mobil SUV mini yang diproduksi oleh Honda pada tahun 1998 hingga 2006 dan mengalami pembaruan pada tahun 2014 hingga sekarang.',
            'image'=>'https://th.bing.com/th/id/OIP.pcpa8zyjCX9z3pfMHXUYzQHaET?pid=ImgDet&rs=1',
        ]);
    }
}
