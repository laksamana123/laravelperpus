<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(table_anggota::class); 
        $this->call(table_petugas::class);
        $this->call(table_buku::class);
    }
}
