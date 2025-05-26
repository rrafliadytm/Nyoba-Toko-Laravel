<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function detail_pesanan()
    {
        return $this->hasMany(detail_pesanan::class, 'kode_pesanan', 'kode_pesanan');
    }
}
