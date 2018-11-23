<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
	protected $fillable = [
		'supplier_nama', 
		'supplier_toko',
		'supplier_tel',
		'supplier_email',
		'supplier_alamat',
	];
	
	protected $table = 'suppliers';
	protected $primaryKey = 'supplier_id';

	public function pembelian()
	{
		return $this->hasMany(PembelianModel::class, 'supplier_id', 'supplier_id');
	}
}
