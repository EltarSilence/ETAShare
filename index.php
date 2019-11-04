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

<body>

  <?php include('menu/navbar.html'); ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
          <form class="border border-light p-5" action="prestart.php" method="get">
            <p class="h4 mb-4 text-center">Calcola percorso</p>
            <input id="dep" name="depCoord" class="form-control mb-4" placeholder="Partenza">
            <input id="dest" name="destCoord" class="form-control mb-4" placeholder="Destinazione">
            <button class="btn btn-info btn-block my-4" type="submit">Calcola</button>
        </form>
      </div>
      <div id="responseDep" class="col-md-4">
        <h1>Partenza</h1>
      </div>
      <div id="responseDest" class="col-md-4">
        <h1>Destinazione</h1>
      </div>
    </div>
  </div>

  
  <?php


  ?>

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
