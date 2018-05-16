<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
class Laluan extends Model
{
	protected $table = 'laluan_bas';
	protected $fillable = ['laluan_id','pemandu_id','checkpoint_id','created_at','updated_at'];
	protected $primaryKey = 'laluan_id';
}

?>