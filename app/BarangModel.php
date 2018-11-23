<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
	protected $fillable = [
		'barang_kode',
		'barang_nama',
		'barang_jenis',
		'barang_hbeli',
		'barang_hjual',
		'barang_stok',
	];

	public $incrementing = false;
	protected $table = 'barangs';
	protected $primaryKey = 'barang_kode';

	public function pembelian(){
		return $this->hasMany(PembelianModel::class, 'barang_kode','barang_kode');
	}

}
