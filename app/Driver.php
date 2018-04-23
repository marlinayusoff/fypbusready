<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //
    protected $table = 'pemandu_bas';
    protected $fillable = ['pemandu_id','pemandu_nama','pemandu_tel','pemandu_username','pemandu_password','pemandu_noPlat','sekolah_id'];
    protected $primaryKey = 'pemandu_id';

    public function School(){
      return $this->hasMany('App\School');
    }

  /*public function Treatment(){
    return $this->hasMany('App\Treatment');
  }*/
}