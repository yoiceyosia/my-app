<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = ['pengguna_id', 'lokasi_id', 'tanggal', 'jam', 'no_kartu'];

    public function pengguna ()
    {
        return $this->belongsTo('App\Models\Pengguna');
    }

    public function lokasi ()
    {
        return $this->belongsTo('App\Models\Lokasi');
    }
}
