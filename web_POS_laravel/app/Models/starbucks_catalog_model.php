<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class starbucks_catalog_model extends Model
{
    use HasFactory;
	
	protected $fillable = ['kode_produk','nama_produk', 'tipe_produk_fk','harga'];
	protected $table = 'produk';
	public $timestamps = false;
}
