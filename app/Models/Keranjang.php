<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    public function barang(){
        return $this->belongsTo('App\Models\Barang', 'id_barang', 'id');
    }
    public function pesanan(){
        return $this->belongsTo('App\Models\Pesanan', 'id_pesanan', 'id');
    }
}