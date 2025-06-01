<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';
    public function detail_pesanan()
    {
        return $this->hasMany(detail_pesanan::class, 'kode_barang', 'kode_barang');
    }
}
