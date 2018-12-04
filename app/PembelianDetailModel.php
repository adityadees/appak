<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembelianDetailModel extends Model
{
	protected $fillable = [
		'pembelian_kode',
		'barang_kode',
		'pd_qty',
	];

	public $incrementing = false;
	protected $table = 'pembelian_details';
	protected $primaryKey = 'pd_id';

	public function pembelian()
	{
		return $this->belongsTo(PembelianModel::class, 'pembelian_kode', 'pembelian_kode');
	}
	public function barang()
	{
		return $this->belongsTo(BarangModel::class, 'barang_kode', 'barang_kode');
	}


}
