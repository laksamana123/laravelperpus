<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman_model extends Model
{
    protected $fillable = ['judul', 'penerbit', 'pengarang', 'foto'];
    protected $table="table_peminjaman";
    protected $primaryKey="id";
    public $timestamps=false;
}
