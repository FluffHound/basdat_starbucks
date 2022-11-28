<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class starbucks_membership_model extends Model
{
    use HasFactory;
	
	protected $fillable = ['nama', 'jenis_kelamin','tanggal_lahir','alamat','provinsi',
							'nomor_telepon','username','email','password', 'saldo'];
	protected $table = 'membership';
	public $timestamps = false;
	
	/**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];
}
