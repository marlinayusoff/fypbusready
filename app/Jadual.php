<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Jadual extends Model
{
   protected $table = 'jadual';
    protected $fillable = ['jadual_id','pelajar_id','pemandu_id','jadual_scan'];
    protected $primaryKey = 'jadual_id';

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

}
