<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas_model extends Model
{
    protected $filable=['nama_petugas', 'alamat', 'telp', 'username', 'password', 'level'];
    protected $table="table_petugas";
    protected $primaryKey="id";
    public $timestamps=false;
}
