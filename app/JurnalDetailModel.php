<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurnalDetailModel extends Model
{
	protected $fillable = [
		'jurnals_kode',
		'akun_kode',
		'jd_jenis',
		'jd_total',
		'jd_ket',
	];

	protected $table = 'jurnal_details';
	protected $primaryKey = 'jd_id';

	public function jurnal()
	{
		return $this->belongsTo(JurnalModel::class, 'jurnals_kode', 'jurnals_kode');
	}
	public function akun()
	{
		return $this->belongsTo(AkunModel::class, 'akun_kode', 'akun_id');
	}


}
