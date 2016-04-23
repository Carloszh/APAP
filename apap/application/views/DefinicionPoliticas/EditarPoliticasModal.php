
<script>

$(function(){
  $("#inp_editar_nombrepolitica").prop('disabled', true);
  $("#text_editar_descripcion").prop('disabled', true);
  $("#bt_actualizar_guardar").prop('disabled', true);
  $("#bt_editar_guardar").prop('disabled', false);
});
</script>

<div id="modal_editar_politicas" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">DEFINICION DE POLITICAS</h4></center>
            </div>
            <div class="modal-body">

              <div class="container">

                      <div class="row">
                          <div class='col-md-6'>
                            <label>ASIGNATURA</label>
                            <select class="form-control" id="sel_asignatura" readonly>

                              <?php
                                echo "<option value='' class='form-control'>";
                                  echo $politicas->asignatura;
                                echo "</option>";

                               ?>
                            </select>
                          </div>
                          <div class='col-md-6'>
                            <label>CUATRIMESTRE</label>
                            <select class="form-control"  id="sel_cuatrimestre" readonly required>

                              <?php
                                echo "<option value=''>";
                                  echo $politicas->grado;
                                echo "</option>";

                               ?>
                            </select>

                          </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="col-md-offset-11">NOMBRE</label>
                          <br>
                          <input type="text" class="form-control col-md-offset-6" id="inp_editar_nombrepolitica"  placeholder="<?php echo $politicas->nombrepolitica;?>" >

                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-12">
                          <label>DESCRIPCION</label>
                          <textarea id="text_editar_descripcion" class="form-control"  style="margin: 0px -2.22222px 0px 0px; width: 508px; height: 143px;" >
                              <?php echo $politicas->descripcion; ?>
                          </textarea>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-3 col-md-offset-2">
                          <button id="bt_actualizar_guardar" class="btn btn-success col-md-offset-5"  onclick="actualizarPolitica(<?php echo $politicas->id;?>);">GUARDAR</button>

                        </div>
                        <div class="col-md-4">
                          <button id="bt_editar_guardar" class="btn btn-warning col-md-offset-5" onclick="activarCamposPolitica();">Editar</button>
                        </div>
                      </div>


              </div>

            </div>

        </div>

    </div>
</div>
