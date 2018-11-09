<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubgolModel extends Model
{
	protected $fillable = [
		'gol_id', 
		'subgol_nama',
		'subgol_js',
		'subgol_ap',
	];

	protected $table = 'subgols';
	protected $primaryKey = 'subgol_id';


	public function golongan()
	{
		return $this->belongsTo(GolModel::class, 'gol_id', 'gol_id');
	}

	public function akun()
	{
		return $this->hasMany(AkunModel::class, 'subgol_id', 'subgol_id');
	}
}
