<?php

namespace App;

use \App\Pelajar;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Penjaga as Authenticatable;


class Penjaga extends Authenticatable
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'penjaga_nama', 'penjaga_tel', 'penjaga_alamat', 'username','password',
    ];

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

     public function student()
    {
        return $this->hasMany(Pelajar::class);
    }

}
