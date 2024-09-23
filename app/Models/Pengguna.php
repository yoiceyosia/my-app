<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = ['nama', 'alamat_pengguna', 'username', 'password', 'email', 'jenis_kelamin'];
}
