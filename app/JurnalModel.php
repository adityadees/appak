<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurnalModel extends Model
{
	protected $fillable = [
		'jurnals_kode', 
		'jurnals_ket',
	];

	public $incrementing = false;
	protected $table = 'jurnals';
	protected $primaryKey = 'jurnals_kode';


	public function akun()
	{
		return $this->belongsTo(AkunModel::class, 'akun_kode', 'akun_kode');
	}

	public function jurnaldetail()
	{
		return $this->hasOne(JurnalDetailModel::class, 'jurnals_kode', 'jurnals_kode');
	}
	
	 

}
