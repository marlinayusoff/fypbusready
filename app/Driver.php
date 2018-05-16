<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Driver extends Model
{

    protected $table = 'pemandu_bas';
    protected $fillable = ['pemandu_nama','pemandu_tel','username','password','pemandu_noPlat','sekolah_id'];
    protected $primaryKey = 'pemandu_id';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'api_token',
        'created_at',
        'updated_at'
    ];

    public function School(){
      return $this->hasMany('App\School');
    }


}