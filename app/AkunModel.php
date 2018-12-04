<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AkunModel extends Model
{
	protected $fillable = [
		'subgol_id', 
		'akun_nama',
		'akun_js',
		'akun_ap',
	];

	protected $table = 'akuns';
	protected $primaryKey = 'akun_id';


	public function subgol()
	{
		return $this->belongsTo(SubgolModel::class, 'subgol_id', 'subgol_id');
	}

	public function jtemp(){
		return $this->hasMany(JurnalTempModel::class, 'akun_id','akun_id');
	}
	public function jurnaldetail(){
		return $this->hasMany(JurnalTempModel::class, 'akun_id','akun_id');
	}
}
