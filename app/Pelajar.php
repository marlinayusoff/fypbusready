<?php

namespace App;

use \App\Penjaga;
use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
   protected $table = 'pelajar';
    protected $fillable = ['pelajar_id','pelajar_nama','sekolah_id','pelajar_umur','pelajar_sesi'];
    protected $primaryKey = 'pelajar_id';

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    public function user()
	{
		return $this->belongsTo(Penjaga::class);
	}

	protected $appends = ['is_admin'];


	public function getIsAdminAttribute()
	{
		return 'admin';
	}



}
