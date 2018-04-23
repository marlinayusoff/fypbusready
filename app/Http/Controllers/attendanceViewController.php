<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Input;


class attendanceViewController extends Controller
{
    public function process() {

	$id = Input::get('jadual_id');

	$attendance_ = DB::table('jadual')

					->join('pemandu_bas', 'jadual.pemandu_id', '=', 'pemandu_bas.pemandu_id')

					->join('pelajar', 'jadual.pelajar_id', '=', 'pelajar.pelajar_id')

            		->select('jadual.*', 'pemandu_bas.*', 'pelajar.*')

            		->where('jadual.jadual_id', $id)

            		->get();

	foreach ($attendance_ as $key) {

		$date = $key->jadual_tarikh;

	}

	$detail = 	'<form action="" method="post" id="jadual">

						<div class="panel panel-default" style="padding: 10px 10px 40px;">

						<table class="table">

							<tbody>

								<tr>

									<td><font size="5">Jadual</font></td>

									<td align="right" >

										<h5>'.$date.'</h5></td>

								</tr>

								
							</tbody>

						</table>

						<table class="table table-hover table-bordered text-center">

							<thead class="thead-inverse">';


			$detail .='<tr>
						<td>Student</td>
						<td>Stop Pickup</td>
						<td>School Drop</td>
						<td>Stop Pickup</td>
						<td>School Drop</td>
					</tr>';

$attendance_details = DB::table('jadual')

					->join('pelajar', 'jadual.pelajar_id', '=', 'pelajar.pelajar_id')

					->select('pelajar.*','jadual.*')

		            ->where('jadual.jadual_tarikh', $date)

		            ->get();



foreach ($attendance_details as $d) {	

										$detail .='<tr>
													<td style="background-color: #fff;">'.$d->pelajar_nama.'</td>
													<td style="background-color: #fff;">'.$d->jadual_stop_pickup.'</td>
													<td style="background-color: #fff;">'.$d->jadual_sekolah_turun.'</td>
													<td style="background-color: #fff;">'.$d->jadual_sekolah_pickup.'</td>
													<td style="background-color: #fff;">'.$d->jadual_stop_turun.'</td>
												</tr>';


}


return $detail;

}

}
