<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function keranjang()
    {
        return $this->hasMany('App\Models\Keranjang', 'id_pesanan', 'id');
    }
}