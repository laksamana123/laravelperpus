<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota_model extends Model
{
    protected $fillable = ['nama_anggota', 'alamat', 'telp'];
    protected $table="table_anggota";
    protected $primaryKey="id";
    public $timestamps=false;
}
