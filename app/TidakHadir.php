<?php

namespace App;

use \App\Penjaga;
use Illuminate\Database\Eloquent\Model;

class TidakHadir extends Model
{
   protected $table = 'tidakhadir';
    protected $fillable = ['tidakhadir_id','pelajar_id'];
    protected $primaryKey = 'tidakhadir_id';

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
