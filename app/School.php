<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $table = 'sekolah';
    protected $fillable = ['sekolah_id','sekolah_nama','sekolah_sesi_pagi','sekolah_sesi_petang','sekolah_alamat','sekolah_tel'];
    protected $primaryKey = 'sekolah_id';

    public function Driver(){
      return $this->hasMany('App\Driver');
    }

  /*public function Treatment(){
    return $this->hasMany('App\Treatment');
  }*/
}