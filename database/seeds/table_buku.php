<?php

use Illuminate\Database\Seeder;

class table_buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\buku_model::insert([
            [
                'judul'=>'5cm',
                'penerbit'=>'nala',
                'pengarang'=>'nala'
            ],
            [
                'judul'=>'5cm',
                'penerbit'=>'alan',
                'pengarang'=>'alan'
            ],
            [
                'judul'=>'5cm',
                'penerbit'=>'aby',
                'pengarang'=>'aby'
            ],
            [
                'judul'=>'5cm',
                'penerbit'=>'abi',
                'pengarang'=>'abi'
            ],
            [
                'judul'=>'5cm',
                'penerbit'=>'isun',
                'pengarang'=>'isun'
            ],]);
    }
}
