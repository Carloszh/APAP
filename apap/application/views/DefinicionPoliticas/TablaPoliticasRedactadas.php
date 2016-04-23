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
