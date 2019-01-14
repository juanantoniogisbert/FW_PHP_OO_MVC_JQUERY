<div style="padding: 3%;" id="content">
    <div class="container">
     <div class="row">
       <h3>Lista de coche</h3>
     </div>
     </br></br>
     <div class="row">
      <p><a class="btn btn-info" href="index.php?page=controller_cars&op=create">Create</a></p>
      </br>
      <table id="list" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width=125><b>Matricula</b></th>
                        <th width=125><b>Marca</b></th>
                        <th width=125><b>Modelo</b></th>
                        <th width=350><b>Accion</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($rdo->num_rows === 0){
                            echo '<tr>';
                            echo '<td align="center"  colspan="3">NO OBJECT CREATED</td>';
                            echo '</tr>';
                        }else{
                            foreach ($rdo as $row) {
                             echo '<tr>';
                             echo '<td width=125>'. $row['matricula'] . '</td>';
                             echo '<td width=125>'. $row['marca'] . '</td>';
                             echo '<td width=125>'. $row['modelo'] . '</td>';
                             echo '<td width=350>';
                             print ("<div class='matricula btn btn-primary' id='".$row['matricula']."'>Read</div>"); //READ 
                            //  echo '<a class="btn btn-primary" href="index.php?page=controller_cars&op=read&id='.$row['id'].'">Read</a>';
                             echo '&nbsp;';
                             echo '<a class="btn btn-success" href="index.php?page=controller_cars&op=update&id='.$row['matricula'].'">Update</a>';
                             echo '&nbsp;';
                             echo '<a class=" borrar btn btn-danger openbtn" href="index.php?page=controller_cars&op=delete&id='.$row['id'].'&marca='.$row['marca'].'&modelo='.$row['modelo'].'">Delete</a>';
                             echo '</td>';
                             echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
     </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#list').DataTable();
    } );
</script>
<!-- modal window -->
<section id="cars_modal">
      <div id="details_cars" style="display: none;">
        <div id="details">
            <div id="container">
                Tipo: <div id="tipo"></div></br>
                Matricula: <div id="matricula"></div></br>
                Marca: <div id="marca"></div></br>
                Modelo: <div id="modelo"></div></br>
                Fabricante: <div id="fabricante"></div></br>
                Combustible: <div id="combus"></div></br>
                Extra: <div id="extra"></div></br>
                Color: <div id="color"></div></br>
                Puertas: <div id="puertas"></div></br>
                Caballos: <div id="caballos"></div></br>
                Marchas: <div id="marchas"></div></br>
                Velocidad: <div id="velocidad"></div></br>
                Motor: <div id="motor"></div></br>
                Fecha de fabricacion: <div id="date_fabric"></div></br>
            </div>
        </div>
    </div>
</section>


<section id="cars_delete">
      <div id="delete_cars" style="display: none;">
        <div id="delete">
            <div id="container">
              <tr>
                  <td align="center"  colspan="2"><h3>¿Desea borrar el Coche <?php echo $_GET['id']; ?>?</h3></td>
              </tr>
              <tr>
                  <td align="center"><button type="submit" class="btn btn-success"name="delete" id="delete">Aceptar</button></td>
                  <td align="center"><a class="btn btn-danger" href="index.php?page=controller_cars&op=list">Cancelar</a></td>
              </tr>
            </div>
        </div>
    </div>
</section>
