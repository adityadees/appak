<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
	protected $fillable = [
		'barang_kode', 
		'cart_qty',
		'created_at',
		'updated_at',
	];

	public $incrementing = false;
	protected $table = 'carts';
	protected $primaryKey = 'cart_id';

	public function barang()
	{
		return $this->belongsTo(BarangModel::class, 'barang_kode', 'barang_kode');
	}


}
