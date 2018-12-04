<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenjualanModel extends Model
{
	protected $fillable = [
		'penjualan_kode', 
		'customer_id',
		'penjualan_total',
	];

	public $incrementing = false;
	protected $table = 'penjualans';
	protected $primaryKey = 'penjualan_kode';

	public function customer()
	{
		return $this->belongsTo(CustomerModel::class, 'customer_id', 'customer_id');
	}
	public function barang()
	{
		return $this->belongsTo(BarangModel::class, 'barang_kode', 'barang_kode');
	}

	public function penjualandetail()
	{
		return $this->hasOne(PenjualanDetailModel::class, 'penjualan_kode', 'penjualan_kode');
	}
	
}
