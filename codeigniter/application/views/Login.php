<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
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
        <h3>Acceso a Profesores</h3>
    </div>
    <div id="login-ptc">
        
        <?php echo validation_errors();?>
        <form class="form-inline" role="form" method="POST" action="<?php echo base_url();?>validaPtc">
             <div class="form-group">
               <label class="sr-only" >Clave</label>
               <input type="text" class="form-control" name="clave"
                      placeholder="Introduce Clave">
             </div>
             <div class="form-group">
               <label class="sr-only" >Contraseña</label>
               <input type="password" class="form-control" name="password"
                      placeholder="Contraseña">
             </div>
             <button type="submit" class="btn btn-primary">Entrar</button>
         </form>
    </div>
</div>

</body>
</html>