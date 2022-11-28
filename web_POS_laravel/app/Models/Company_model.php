<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_model extends Model
{
    use HasFactory;
	
	protected $fillable = ['name', 'email', 'address'];
	protected $table = 'companies';
}
