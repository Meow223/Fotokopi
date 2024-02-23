<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table ='barangs';
    //protected $primaryKey = 'id_barang';
    protected $fillable = ['id','nama_barang','gambar_barang','ket_barang','harga_satuan','stok'];
    //public $timestamps = false;
    //public $incrementing = false;
    
    public function keranjang(){
        return $this->hasMany('App\Models\Keranjang', 'id_barang', 'id');
    }
    
}