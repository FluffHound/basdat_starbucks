<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class starbucks_order_model extends Model
{
    use HasFactory;
	
	protected $fillable = ['id_member_fk','id_karyawan_fk','tipe_pembayaran','nama_pelanggan'];
	protected $table = 'pemesanan';
	public $timestamps = false;
}
