<div id="modal_definir_politicas" class="modal fade" role="dialog">
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
                            <select class="form-control" id="sel_asignatura" onchange='seleccionarCuatrimestre(this.value)'>
                              <option value="">ASIGNATURA</option>
                              <?php
                               foreach ($asignaturas as $key)
                               {
                                echo "<option value=".$key['id']." class='form-control'>";
                                  echo $key['nombre'];
                                echo "</option>";
                              }
                               ?>
                            </select>
                          </div>
                          <div class='col-md-6'>
                            <select class="form-control"  id="sel_cuatrimestre" readonly required>
                              <option value="">CUATRIMESTRE</option>
                              <?php
                               foreach ($cuatrimestres as $key)
                               {
                                echo "<option value=".$key['id'].">";
                                  echo $key['grado'];
                                echo "</option>";
                              }
                               ?>
                            </select>

                          </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" class="form-control col-md-offset-6" id="inp_nombrepolitica" placeholder="Nombre de la politica" >
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-12">
                          <textarea id="text_descripcion" class="form-control" style="margin: 0px -2.22222px 0px 0px; width: 508px; height: 143px;" >

                          </textarea>
                        </div>
                      </div>
                      <br>
                      <button class="btn btn-success col-md-offset-5" onclick="guardarPolitica();">GUARDAR</button>

              </div>

            </div>

        </div>

    </div>
</div>
