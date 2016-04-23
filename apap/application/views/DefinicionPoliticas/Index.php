<!DOCTYPE html>
<html>
<?php $this->load->view('Shared/head');?>
<head>

  <title>Definición de politicas</title>

  <script type="text/javascript">

    $(function(){



    });

    function editarPolitica(idPolitica){

      var urli = 'DefinicionPoliticas/editarPolitica';
      $.ajax({
                url: urli,
                type: 'POST',
                data: {idPolitica:idPolitica},// Adjuntar los campos del formulario enviado.
                success: function(data)
                {
                  $("#container_modal_definicionPoliticas").html(data);
                  $("#modal_editar_politicas").modal();
                }
              });
    }

    function eliminarPoliticas(idPolitica){

      var urli = 'DefinicionPoliticas/eliminarPolitica';
      $.ajax({
                url: urli,
                type: 'POST',
                data: {idPolitica : idPolitica},// Adjuntar los campos del formulario enviado.
                success: function(data)
                {
                  $("#container_table").html(data);
                }
              });

    }

    function nuevaPolitica(){

      var urli = 'DefinicionPoliticas/cargar_modal_definirPoliticas';
      $.ajax({
                url: urli,
                type: 'POST',
                data: {},// Adjuntar los campos del formulario enviado.
                success: function(data)
                {
                  $("#container_modal_definicionPoliticas").html(data);
                  $("#modal_definir_politicas").modal();
                }
              });
    }

    function guardarPolitica(){

      var urli = 'DefinicionPoliticas/guardarPolitica';

      var idAsignatura = $("#sel_asignatura").val();
      var nombre = $("#inp_nombrepolitica").val();
      var descripcion = $("#text_descripcion").val();

      $.ajax({
                url: urli,
                type: 'POST',
                data: { idAsignatura : idAsignatura,
                        nombre : nombre,
                        descripcion : descripcion},// Adjuntar los campos del formulario enviado.
                success: function(data)
                {
                  swal("Correcto!", "La politica se guardo satisfactoriamente", "success");
                  $("#modal_definir_politicas").modal('hide');
                  $("#container_table").html(data);
                }
              });
    }

    function seleccionarCuatrimestre(id){

      $('#sel_cuatrimestre option[value='+id+']').attr('selected','selected');
    }

    function activarCamposPolitica(){

      $("#inp_editar_nombrepolitica").prop('disabled', false);
      $("#text_editar_descripcion").prop('disabled', false);
      $("#bt_actualizar_guardar").prop('disabled', false);
      $("#bt_editar_guardar").prop('disabled', true);

    }

    function actualizarPolitica(idPolitica){

      var urli = 'DefinicionPoliticas/actualizarPolitica';

      var nombre = $("#inp_editar_nombrepolitica").val();
      var descripcion = $("#text_editar_descripcion").val();

      $.ajax({
                url: urli,
                type: 'POST',
                data: { idPolitica:idPolitica,
                        nombre:nombre,
                        descripcion:descripcion},// Adjuntar los campos del formulario enviado.
                success: function(data)
                {
                  swal("Correcto!", "La politica se actualizó satisfactoriamente", "success");
                  $("#inp_editar_nombrepolitica").prop('disabled', true);
                  $("#text_editar_descripcion").prop('disabled', true);
                  $("#bt_actualizar_guardar").prop('disabled', true);
                  $("#bt_editar_guardar").prop('disabled', false);

                }
              });
    }


  </script>

</head>

<body>
    <br>
    <div class="row">
        <div class="container">
          <div class="panel panel-info">
              <div class="panel-heading"><center>Politicas Redactadas</center></div>
              <div class="panel-body">

                <div id="container_table" class="col-md-offset-2">

                  <table class="table-hover">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>ASIGNATURA</th>
                              <th>CUATRIMESTRE</th>
                              <th>OPCIONES</th>
                            </tr>
                          </thead>
                            <tbody>
                              <?php
                              foreach ($politicas as $key)
                               {
                                 echo "<tr>";
                                   echo "<td>";
                                    echo $key['nombre'];
                                   echo "</td>";

                                   echo "<td>";
                                    echo $key['grado'];
                                   echo "</td>";

                                   echo "<td>";
                                    echo "

                                      <button type='button' class='btn btn-success' onclick='editarPolitica(".$key['id'].");'><span class='glyphicon glyphicon-search' aria-hidden='true'>ver</span></button>
                                      <button type='button' class='btn btn-danger'  onclick='eliminarPoliticas(".$key['id'].");'><span class='glyphicon glyphicon-remove' aria-hidden='true'>Eliminar</span></button>

                                    ";
                                   echo "</td>";

                                 echo "</tr>";
                               }
                               ?>

                            </tbody>
                      </table>
                  </table>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-offset-8">
                      <button type="button" class="btn btn-success" onclick="nuevaPolitica();"><span class="glyphicon glyphicon-search" aria-hidden="true">Crear Nueva</span></button>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</body>
<div id="container_modal_definicionPoliticas"></div>

</html>
