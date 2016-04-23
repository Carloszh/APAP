<!DOCTYPE html>
<html>
<?php $this->load->view('Shared/head');?>
<head>
    <title>Registro de horario</title>

    <script type="text/javascript">
            function nuevoHorarioPtc(){

              var urli = 'RegistroHorarioPtc/nuevoHorario';
              var horas= $("#inp_horas_asignadas").val();
              console.log("horas"+horas);

              var dias= $("#inp_dias_asignados").val();
              console.log("dias"+dias);
              var disponible= $("#sel_disponible_profesor").val();
              console.log("disponible"+disponible);
              $.ajax({
                        url: urli,
                        type: 'POST',
                        data: {horas: horas,
                              dias: dias,
                              disponible: disponible},// Adjuntar los campos del formulario enviado.
                        success: function(data)
                        {
                          swal("Correcto!", "El horario se ha guardado satisfactoriamente", "success");
                          $("#inp_horas_asignadas").val('');
                          $("#inp_dias_asignados").val('');
                        }
                      });
            }
    </script>
</head>
<body>
  <br>
  <div class="container">
  <div class="row">

        <div class="panel panel-info">
            <div class="panel-heading"><center>Registro de horario PTC</center></div>
            <div class="panel-body">

              <div class="row col-md-offset-4">

                <div class="col-md-3">
                  <label>Horas asignadas</label>
                </div>
                <div class="col-md-3">
                  <input type="text" class="form-control col-md-7" id="inp_horas_asignadas">
                </div>
              </div>
              <br>
              <div class="row col-md-offset-4">
                <div class="col-md-3">
                  <label>Dias asignados</label>
                </div>
                <div class="col-md-3">
                  <input type="number" id="inp_dias_asignados" class="form-control" name="quantity" min="1" max="20">
                </div>
              </div>
              <br>
              <div class="row col-md-offset-4">
                <div class="col-md-3">
                  <label>Disponibilidad profesor</label>
                </div>
                <div class="col-md-3">
                  <select id="sel_disponible_profesor" class="form-control">
                    <option value="0">NO</option>
                    <option value="1">SI</option>
                  </select>
                </div>
              </div>
              <br>
              <button class="btn btn-success col-md-offset-6" onclick="nuevoHorarioPtc();">Guardar</button>
            </div>
        </div>
      </div>
  </div>
</body>
</html>
