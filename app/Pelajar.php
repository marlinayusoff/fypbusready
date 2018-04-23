<?php

namespace App;

use \App\Penjaga;
use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
   protected $table = 'pelajar';
    protected $fillable = ['pelajar_id','pelajar_nama','sekolah_id','pelajar_umur','pelajar_sesi'];
    protected $primaryKey = 'pelajar_id';

    public function user()
	{
		return $this->belongsTo(Penjaga::class);
	}


}
