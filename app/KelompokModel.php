<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelompokModel extends Model
{
	protected $fillable = [
		'kelompok_nama', 
	];

	protected $table = 'kelompoks';
	protected $primaryKey = 'kelompok_id';


	public function golongan()
	{
		return $this->hasMany(GolModel::class, 'kelompok_id', 'kelompok_id');
	}

}
