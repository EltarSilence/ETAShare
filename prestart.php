<?php 
require('assets/fx.php');
require('assets/Activity.php');
require('assets/Step.php');
?>
<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ETAShare</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

  <?php include('menu/navbar.html'); ?>

<?php 

if (isset($_GET['depCoord']) && isset($_GET['destCoord'])){
	$depCoord = urlencode($_GET['depCoord']); $destCoord = urlencode($_GET['destCoord']);
	$API_KEY = '5b3ce3597851110001cf62486a18d7896ef9414da8f20162048fddc7';
	$url = 'https://api.openrouteservice.org/v2/directions/driving-car?api_key='.$API_KEY.'&start='.$depCoord.'&end='.$destCoord;
	$r = file_get_contents($url);
	$obj = json_decode($r);
	//var_dump($r);
	
	$travelObj = $obj->features[0]->properties;
	$time = $travelObj->segments[0]->duration;
	$m = $travelObj->segments[0]->distance;
	$steps = $travelObj->segments[0]->steps;
	$newsteps = array();
	for ($i=0; $i < count($steps); $i++) { 
		array_push($newsteps, $steps[$i]->name);
	}
	for ($k=0; $k < count($newsteps); $k++){
		if ($newsteps[$k] == "-"){
			unset($newsteps[$k]);
		}
	}
	d_var_dump(array_unique($newsteps));
}
?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Partenza</h3>
				<h5>Tappa 1</h5><h5>Tappa 2</h5><h5>Tappa 3</h5><h5>Tappa 4</h5>
				<h3>Arrivo</h3>
			</div>
		</div>
	</div>



</body>

<!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script src="assets/autocomp.js"></script>
  <script src="assets/process.js"></script>
</body>

</html>

