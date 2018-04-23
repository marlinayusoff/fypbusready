<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
	//checkpoint model
class CheckPoint extends Model
{
	protected $table = 'checkpoint';
	protected $fillable = ['checkpoint_id','checkpoint_nama','checkpoint_lat','checkpoint_lng','created_at','updated_at'];
	protected $primaryKey = 'checkpoint_id';
}

?>