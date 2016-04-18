<!DOCTYPE html>
<html>
<head>
	<title>Consultar Datos del Alumno</title>
</head>
<body>
	<div align="center">
		<form class="form-inline" role="form" method="POST" action="<?php echo base_url();?>index.php/consultarInfoAlumno">
      <div class="form-group">
        <label class="sr-only" >Matricula: </label>
        <input type="text" class="form-control" name="matricula"
          placeholder="Ingrese Matricula de Usuario">
        <button type="submit" name="submit" class="btn btn-primary">Buscar</button>       
      </div>     
    </form>
    <?php 
      $nombre=NULL;
      $apellidos=NULL;
      $tipo=NULL;
      $matricula=NULL;
      $correo=NULL;
      $cuatrimestre=NULL;
      foreach ($consulta->result() as $fila) {
          $nombre = $fila->nombre;
          $apellidos = $fila->apellidos;
          $tipo = 'Alumno';
          $matricula = $fila->clave;
          $correo = $fila->correo;
          $cuatrimestre = $fila->cuatrimestre;
        } 
    ?>
    <form class="form-inline" role="form" method="POST" action="<?php echo base_url();?>index.php/editarDatosAlumno/">
        <table>
          <tr>
            <td>Nombre:</td>
            <td><?=$nombre ?></td>
            <input type="hidden" name="name" value="<?php echo $nombre; ?>">
          </tr>
          <tr>
            <td>Apellidos:</td>
            <td><?=$apellidos ?></td>
            <input type="hidden" name="apellidos" value="<?php echo $apellidos; ?>">
          </tr>
          <tr>
            <td>Tipo:</td>
            <td><?=$tipo ?></td>
          </tr>
          <tr>
            <td>Matricula:</td>
            <td><?=$matricula ?></td>
            <input type="hidden" name="matricula" value="<?php echo $matricula; ?>">
          </tr>
          <tr>
            <td>Correo:</td>
            <td><?=$correo ?></td>
            <input type="hidden" name="correo" value="<?php echo $correo; ?>">
          </tr>
          <tr>
            <td>Cuatrimestre:</td>
            <td><?=$cuatrimestre ?></td>
            <input type="text" name="cuatrimestre" value="<?php echo $cuatrimestre; ?>">
          </tr>
          <tr>
            <td><button type="submit" name="submit1" class="btn btn-primary">Eliminar</button></td>
            <td><button type="submit" name="submit2" class="btn btn-primary">Editar</button></td>
            <td><button type="submit" name="submit3" class="btn btn-primary">Atras</button></td>
          </tr>
           
        </table>
    </form>

	</div>

</body>
</html>