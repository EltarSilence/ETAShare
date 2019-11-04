<?php

require('fx.php');
function getSearchRes($input, $sens){
	$API_KEY = '5b3ce3597851110001cf62486a18d7896ef9414da8f20162048fddc7';
	$input = urlencode($input);
	$url = "https://api.openrouteservice.org/geocode/search?api_key=".$API_KEY."&text=".$input;
	$r = file_get_contents($url);
	$obj = json_decode($r);
	echo '<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Punto</th>
	      <th scope="col">Lat Lon</th>
	      <th scope="col">Scegli</th>
	    </tr>
	  </thead>
	  <tbody>';
	  $prog = 1;
	  $id=$sens.$prog;
	foreach($obj->features as $feature){
		$id=$sens.$prog;
		echo '<tr sens="'.$sens.'" id="'.$id.'">
	      <th scope="row">'.$feature->properties->label.'</th>
	      <td id="latlon">'.$feature->geometry->coordinates[0].', '.$feature->geometry->coordinates[1].'</td>
	      <td><button type="button" id="choose'.$sens.'" class="btn btn-purple">Scegli</button></td>
	    </tr>';
	    $prog++;
	}
	echo '
	  </tbody>
	</table>';
}

if (isset($_POST['qDep'])){
  $qDep = $_POST['qDep'];
  //elaborazione ricerca dep
  getSearchRes($qDep, 'Dep');

}
if (isset($_POST['qDest'])){
  $qDest = $_POST['qDest'];
  //elaborazione ricerca dest
  getSearchRes($qDest, 'Dest');
}
?>

