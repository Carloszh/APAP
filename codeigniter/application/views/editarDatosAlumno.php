<!DOCTYPE html>
<html>
<head>
	<title>Editar Datos del Alumno</title>
</head>
<body>
	<div align="center">
		<form class="form-inline" role="form" method="POST" action="<?php echo base_url();?>EditInfoAlumno">
            <div class="form-group">
               <label class="sr-only" >Nombre(s)</label>
               <input type="text" class="form-control" name="name"
                      placeholder="Escribe Nombre" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
               <label class="sr-only" >Apellidos</label>
               <input type="text" class="form-control" name="apellidos"
                      placeholder="Escribe Apellidos" value="<?php echo $apellidos; ?>">
            </div>
            <div class="form-group">
               <label class="sr-only" >Matricula</label>
               <input type="text" class="form-control" name="matricula"
                      placeholder="Escribe la Matricula" value="<?php echo $matricula; ?>">
                <input type="hidden" name="id" value="<?php echo $matricula; ?>">
            </div>
            <div class="form-group">
               <label class="sr-only" >Correo</label>
               <input type="mail" class="form-control" name="correo"
                      placeholder="Escribe el Correo" value="<?php echo $correo; ?>">
            </div>
            <div class="form-group">
               <label class="sr-only" >Cuatrimestre</label>
               
               <select name"cuatrimestre">
                 <option selected value="<?php echo $cuatrimestre; ?>"><?=$cuatrimestre?></option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
                 <option value="7">7</option>
                 <option value="8">8</option>
                 <option value="9">9</option>
                 <option value="10">10</option>
               </select>

            </div>
            <!--<div class="form-group">
               <label class="sr-only" >Contraseña</label>
               <input type="password" class="form-control" name="password"
                      placeholder="Contraseña">
            </div>-->
            <button type="submit" name="submit" class="btn btn-primary">Guardar Cambios</button>
         </form>
	</div>

</body>
</html>