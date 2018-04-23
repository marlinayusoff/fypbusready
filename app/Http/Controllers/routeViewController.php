<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Input;

class routeViewController extends Controller
{
    public function process(){

    	$id = Input::get('laluan_id');

    	$laluan_details = DB::table('laluan_bas')
    					->join('pemandu_bas','laluan_bas.pemandu_id','=','pemandu_bas.pemandu_id')
    					->join('checkpoint','laluan_bas.checkpoint_id','=','checkpoint.checkpoint_id')
    					->select('laluan_bas.*','pemandu_bas.*','checkpoint.*')
    					->where('laluan_bas.laluan_id',$id)
    					->get();

    	foreach ($laluan_details as $key) {

			$driver = $key->pemandu_nama;

		}


    	$detail = '<form action="" method="post" id="details">
						<div class="panel panel-default" style="padding: 10px 10px 40px;">
						<table class="table">
							<tbody>
								<tr>
									<td><font size="5">Bus Route</font></td>
								</tr>
								</tbody>
						</table>
						<table class="table table-hover table-bordered text-center">
							<thead class="thead-inverse">
							  	<tr><td colspan="2"><font color="" size="4">'.$driver.'</td>
							  	</tr>
							  	<tr>
							  		<th>#</th>
									<th style="background-color: yellow ;color: #000;">Route</th>
								</tr>
							';

						$laluan_details_2 = DB::table('laluan_bas')
						->join('pemandu_bas','laluan_bas.pemandu_id','=','pemandu_bas.pemandu_id')
    					->join('checkpoint','laluan_bas.checkpoint_id','=','checkpoint.checkpoint_id')
						->select('checkpoint.*','pemandu_bas.*')
						->where('pemandu_bas.pemandu_nama', $driver)
						            ->get();

$i = 1;
			foreach ($laluan_details_2 as $d) {	

				

					$detail .='
						
							<tr>
								<td>'.$i++.'</td>
								<td style="background-color: #fff;">'.$d->checkpoint_nama.'</td>
							</tr>
						';
				}

				

				$detail .='</thead>
					</table>
				</form>
				<br>
				<body>
				<div class="subway-map" data-columns="12" data-rows="10" data-cellSize="40" data-legendId="legend" data-textClass="text" data-gridNumbers="true" data-grid="false" data-lineWidth="8">
			        <ul data-color="#ff4db2" data-label="Laluan bus">';
$a = 2;
			    foreach ($laluan_details_2 as $d) {	

					$detail .='
			            <li data-coords="2,'.$a.'" data-marker="interchange" data-labelPos="E">'.$d->checkpoint_nama.'</li>';

			            $a += 2;

			           }

			           $detail .='</ul>
					    </div>

					    <div id="legend"></div>
					    <script type="text/javascript">
					        $(".subway-map").subwayMap({ debug: true });
					    </script></body>';

			return $detail;


    }
}
