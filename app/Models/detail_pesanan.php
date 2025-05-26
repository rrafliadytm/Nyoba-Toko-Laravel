<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pesanan extends Model
{
    public function barang()
    {
        return $this->belongsTo(barang::class, 'kode_barang', 'kode_barang');
    }

    public function pesanan()
    {
        return $this->belongsTo(pesanan::class, 'kode_pesanan', 'kode_pesanan');
    }
}
