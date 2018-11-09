<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
	protected $fillable = [
		'customer_nama', 
		'customer_tel',
		'customer_email',
		'customer_alamat',
	];

	protected $table = 'customers';
	protected $primaryKey = 'customer_id';
}
