<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GolModel extends Model
{
	protected $fillable = [
		'kelompok_id', 
		'gol_nama',
	];

	protected $table = 'gols';
	protected $primaryKey = 'gol_id';

	public function kelompok()
	{
		return $this->belongsTo(KelompokModel::class, 'kelompok_id', 'kelompok_id');
	}


	public function subgol()
	{
		return $this->hasMany(SubgolModel::class, 'gol_id', 'gol_id');
	}
}
