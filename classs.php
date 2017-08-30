<?php
//constructores de objetos
include "class/presupuesto.inc";

$presupuBasico=new Presupuesto;
$presupuBasico->price_method("20");
$presupuBasico->pages_method("Página básica");
$presupuBasico->host_method("DonWeb");
$presupuBasico->support_method("13");

$presupuNormal=new Presupuesto;
$presupuNormal->price_method("40");
$presupuNormal->pages_method("Páginas normal");
$presupuNormal->host_method("DonWeb");
$presupuNormal->support_method("44");

$presupuPremium=new Presupuesto;
$presupuPremium->price_method("1.000");
$presupuPremium->pages_method("Páginas con administrador de contenido");
$presupuPremium->host_method("DonWeb");
$presupuPremium->support_method("89");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/estilo.css">
	<title>Tabla compu</title>
</head>
<body>
<div class="container-fluid  mx-0">
<div class="col-md-4-bg-info"></div>
<div class="col-12">
	<p class="text-white display-4 h1 mx-auto"><b>Presupuestos de nuestro servicio</b></p>
	</div>
	<div class="col-12"><hr style="border:1px solid white;"></div>
</div>
	
	
<div class="row">
	
	<div class="offset-1 col-6 mb-4">
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th>#</th>
      <th>ddadsadadada</th>
      <th>Normal</th>
      <th>Premium</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Precio</th>
      <td>$ <?php $presupuBasico -> impPrice()?></td>
      <td>$ <?php $presupuNormal -> impPrice()?></td>
      <td>$ <?php $presupuPremium -> impPrice()?></td>
    </tr>
    <tr>
      <th scope="row">Paginas</th>
      <td><?php $presupuBasico -> impPages()?></td>
      <td><?php $presupuNormal -> impPages()?></td>
      <td><?php $presupuPremium -> impPages()?></td>
    </tr>
    <tr>
      <th scope="row">Hosting</th>
      <td><?php $presupuBasico -> impHost()?></td>
      <td><?php $presupuNormal -> impHost()?></td>
      <td><?php $presupuPremium -> impHost()?></td>
    </tr>
    <tr>
      <th scope="row">Soporte</th>
      <td><?php $presupuBasico -> impSupport()?></td>
      <td><?php $presupuNormal -> impSupport()?></td>
      <td><?php $presupuPremium -> impSupport()?></td>
    </tr>
  </tbody>
</table>
</div>
<div class="col-4">
	<img src="images/homer.png">
	</div>
</div>
</div>
<div class="container-fluid mx-0">

<div class="row ">
<div class="offset-2 col-8 bg-black py-3" style="border-radius: 50px;">
	<p class="h5 text-white text-center">Copyright © Todos los Derechos Reservados</p>
</div>
</div>
</div>
</body>
</html>
