<div id="contenido">
    <h1>Informacion del Coche</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Matricula: </td>
            <td>
                <?php
                    echo $cars['matricula'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Tipo de coche: </td>
            <td>
                <?php
                    echo $cars['tipo'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Marca: </td>
            <td>
                <?php
                    echo $cars['marca'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Modelo: </td>
            <td>
                <?php
                    echo $cars['modelo'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Fabricante: </td>
            <td>
                <?php
                    echo $cars['fabricante'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Selecciona el tipo de combustible: </td>
            <td>
                <?php
                    echo $cars['combus'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Elige los extras: </td>
            <td>
                <?php
                    echo $cars['extra'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Color: </td>
            <td>
                <?php
                    echo $cars['color'];
                ?>
            </td>

        </tr>

        <tr>
            <td>Puertas: </td>
            <td>
                <?php
                    echo $cars['puertas'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Caballos: </td>
            <td>
                <?php
                    echo $cars['caballos'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Marchas: </td>
            <td>
                <?php
                    echo $cars['marchas'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Velocidad maxima: </td>
            <td>
                <?php
                    echo $cars['velocidad'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Motor: </td>
            <td>
                <?php
                    echo $cars['motor'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Fecha de fabricación: </td>
            <td>
                <?php
                    echo $cars['date_fabric'];
                ?>
            </td>
        </tr>

    </table>
    </p>
    <p><a href="index.php?page=controller_cars&op=list" class="btn btn-secondary">Volver</a></p>
</div>
