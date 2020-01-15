<?php

use Illuminate\Database\Seeder;

class table_anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\anggota_model::insert([
        [
            'nama_anggota'=>'Miun',
            'alamat'=>'Jl. Wuni',
            'telp'=>'081235755580'
        ],
        [
            'nama_anggota'=>'Maun',
            'alamat'=>'Jl. Kawi',
            'telp'=>'081235755980'
        ],
        [
            'nama_anggota'=>'Muin',
            'alamat'=>'Jl. Wuni',
            'telp'=>'081235755580'
        ],
        [
            'nama_anggota'=>'Nium',
            'alamat'=>'Jl. Wuni',
            'telp'=>'081235755580'
        ],
        [
            'nama_anggota'=>'Nuim',
            'alamat'=>'Jl. Wuni',
            'telp'=>'081235755580'
        ],]);
    }
}
