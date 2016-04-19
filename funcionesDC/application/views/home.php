<!DOCTYPE html>
<html>
<head>
	<title> <?= $title ?></title>
</head>
<body>
	<div align="center">
		<h1><?= $mensaje . ' ' .$info ?></h1>
		<a href="<?= base_url()?>index.php/consultarInfoPTC">Consultar Informacion de PTC</a><br>
		<a href="<?= base_url()?>index.php/consultarInfoAlumno">Consultar Informacion de Alumno</a><br>
		<a href="<?= base_url()?>index.php/asignarMateriasDc">Asignar Materias  DC</a>}

	</div>

</body>
</html>