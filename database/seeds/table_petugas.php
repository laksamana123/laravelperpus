<?php

use Illuminate\Database\Seeder;

class table_petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\petugas_model::insert([
            [
                'nama_petugas'=>'upin',
                'alamat'=>'jl wuni',
                'telp'=>'081235755580',
                'username'=>'upin',
                'password'=>'123456'
            ],
            [
                'nama_petugas'=>'ipin',
                'alamat'=>'jl wuni',
                'telp'=>'081235755580',
                'username'=>'ipin',
                'password'=>'123456'
            ],
            [
                'nama_petugas'=>'mail',
                'alamat'=>'jl wuni',
                'telp'=>'081235755580',
                'username'=>'mail',
                'password'=>'123456'
            ],
            [
                'nama_petugas'=>'meme',
                'alamat'=>'jl wuni',
                'telp'=>'081235755580',
                'username'=>'meme',
                'password'=>'123456'
            ],
            [
                'nama_petugas'=>'iksun',
                'alamat'=>'jl wuni',
                'telp'=>'081235755580',
                'username'=>'iksun',
                'password'=>'123456'
            ],]);
    }
}
