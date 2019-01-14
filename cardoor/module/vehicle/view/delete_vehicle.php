</br></br></br></br>
<div id="contenido">
    <form autocomplete="on" method="post" name="delete_vehicle" id="delete_vehicle" action="index.php?page=controller_cars&op=delete&id=<?php echo $_GET['id']; ?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>¿Desea borrar <?php echo $_GET['marca']; ?> <?php echo $_GET['modelo']; ?>?</h3></td>

            </tr>
            <tr>
                <td align="center"><button type="submit" class="btn btn-success"name="delete" id="delete">Aceptar</button></td>
                <td align="center"><a class="btn btn-danger" href="index.php?page=controller_cars&op=list">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>