<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $fillable = ['tanggal', 'alamat', 'jenis_vaksin', 'kapasitas'];
}
