<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

	echo "<h1 style='color:blue'>Titulo de pagina</h1>";
	print ("<h3>Este parrafo es escrito por una IA</h3>");

	$nombre = 'Brad Delp';
	$carrera = 'Programacion';
	$grupo = "5O";



	?>


	<ul>
		<li> <?=$nombre; ?> </li>
		<li> <?=$carrera; ?> </li>
		<li> <?=$grupo; ?> </li>




	</ul>


	<select name="" id="">
		
		<option value=""> <?= $nombre; ?> </option>
		<option value=""> <?= $carrera; ?> </option>
		<option value=""> <?= $grupo; ?> </option>

	</select>

	<input type="" name="" id="" value="<?= $nombre ?>">
	<input type="" name="" id="" value="<?= $carrera ?>">
	<input type="" name="" id="" value="<?= $grupo ?>">

</body>
</html>