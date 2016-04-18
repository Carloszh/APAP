<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>APAP</title>
        <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>css/estilos.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="container" align="center">
    <div class="bienvenido">
        <h1>Bienvenido</h1>
    </div>
    <div class="btn-group type-access">
        <button type="button" class="btn btn-primary"><a href="<?php echo base_url();?>accesoPtc">Profesor</a></button>
      <button type="button" class="btn btn-primary"><a href="<?php echo base_url();?>accesoAlumno">Alumno</a></button>
    </div>
</div>

</body>
</html>