<!DOCTYPE html>
<html>
<head>
	<title>Consultar Datos Alumno</title>
</head>
<body>
	<div align="center">
		<form class="form-inline" role="form" method="POST" action="<?php echo base_url();?>InfoAlumno">
      <div class="form-group">
        <label class="sr-only" >Matricula: </label>
        <input type="text" class="form-control" name="matricula"
          placeholder="Ingrese Matricula de Usuario">
        <button type="submit" name="submit" class="btn btn-primary">Buscar</button>       
      </div>     
    </form>
	</div>

</body>
</html>