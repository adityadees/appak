<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenjualanDetailModel extends Model
{
	protected $fillable = [
		'penjualan_kode',
		'barang_kode',
		'pd_qty',
	];

	public $incrementing = false;
	protected $table = 'penjualan_details';
	protected $primaryKey = 'pd_id';

	public function penjualan()
	{
		return $this->belongsTo(PenjualanModel::class, 'penjualan_kode', 'penjualan_kode');
	}
	public function barang()
	{
		return $this->belongsTo(BarangModel::class, 'barang_kode', 'barang_kode');
	}


}
