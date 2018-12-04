<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurnalTempModel extends Model
{
	protected $fillable = [
		'akun_kode', 
		'jt_jenis',
		'jt_total',
		'jt_ket',
		'created_at',
		'updated_at',
	];

	protected $table = 'jurnals_temp';
	protected $primaryKey = 'jt_id';

	public function akun()
	{
		return $this->belongsTo(AkunModel::class, 'akun_kode', 'akun_id');
	}


}
