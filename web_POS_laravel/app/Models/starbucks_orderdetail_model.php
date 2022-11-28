<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class starbucks_orderdetail_model extends Model
{
    use HasFactory;
	
	protected $fillable = ['id_pemesanan_fk', 'kode_produk_fk','jumlah_pembelian','harga_per_produk'];
	protected $table = 'detail_pemesanan';
	public $timestamps = false;
}
