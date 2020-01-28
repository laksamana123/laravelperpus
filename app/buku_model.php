<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku_model extends Model
{
    protected $fillable = ['judul', 'penerbit', 'pengarang', 'foto'];
    protected $table="table_buku";
    protected $primaryKey="id";
    public $timestamps=false;
}
