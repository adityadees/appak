<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembelianModel extends Model
{
	protected $fillable = [
		'pembelian_kode', 
		'supplier_id',
		'pembelian_total',
	];

	public $incrementing = false;
	protected $table = 'pembelians';
	protected $primaryKey = 'pembelian_kode';

	public function supplier()
	{
		return $this->belongsTo(SupplierModel::class, 'supplier_id', 'supplier_id');
	}
	public function barang()
	{
		return $this->belongsTo(BarangModel::class, 'barang_kode', 'barang_kode');
	}

	public function pembeliandetail()
	{
		return $this->hasOne(PembelianDetailModel::class, 'pembelian_kode', 'pembelian_kode');
	}
	
}
