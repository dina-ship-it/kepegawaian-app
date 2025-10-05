<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins'; // pastikan nama tabelnya sesuai di database
    protected $fillable = ['username', 'password'];
    public $timestamps = false;
}
