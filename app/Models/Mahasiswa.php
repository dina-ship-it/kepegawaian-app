<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
    protected $table = 'mahasiswa'; // nama tabel
    protected $fillable = ['nim', 'nama', 'password']; // kolom yang bisa diisi
    protected $hidden = ['password']; // sembunyikan password
}
