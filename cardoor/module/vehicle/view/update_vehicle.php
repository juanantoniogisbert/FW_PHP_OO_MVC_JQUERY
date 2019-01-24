</br></br></br>
<div id="contenido">
    <form autocomplete="on" method="post" name="update_cars" id="update_cars">
        <h1>Modificar Coche</h1>
        <table border='0'>
            <tr>
                <td>Maatricula: </td>
                <td><input type="text" id="matricula" name="matricula" placeholder="matricula" value="<?php echo $cars['matricula'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_matricula" class="error">
                        <?php
                            echo "$error_matricula";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Tipo de coche: </td>
                <td>
                    <?php
                        if ($cars['tipo']==="Deportivo"){
                    ?>
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="Deportivo" checked/>Deportivo
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="Todoterreno"/>Todoterreno
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="Turismo"/>Turismo
                    <?php
                  }else if ($cars['tipo']==="Todoterreno"){
                    ?>
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="Deportivo"/>Deportivo
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="Todoterreno" checked/>Todoterreno
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="Turismo"/>Turismo
                    <?php
                  }else{
                    ?>
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="Deportivo"/>Deportivo
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="Todoterreno"/>Todoterreno
                        <input type="radio" id="tipo" name="tipo" placeholder="tipo" value="Turismo" checked/>Turismo
                    <?php
                  }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_tipo" class="error">
                        <?php
                            echo "$error_tipo";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Marca: </td>
                <td><input type="text" id="marca" name="marca" placeholder="marca" value="<?php echo $cars['marca'];?>"/></td>
                <td><font color="red">
                    <span id="error_marca" class="error">
                        <?php
                            echo "$error_marca";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Modelo: </td>
                <td><input type="text" id= "modelo" name="modelo" placeholder="modelo" value="<?php echo $cars['modelo'];?>"/></td>
                <td><font color="red">
                    <span id="error_modelo" class="error">
                        <?php
                            echo "$error_modelo";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Fabricante: </td>
                <td><input type="text" id="fabricante" name="fabricante" placeholder="fabricante" value="<?php echo $cars['fabricante'];?>"/></td>
                <td><font color="red">
                    <span id="error_fabricante" class="error">
                        <?php
                            echo "$error_fabricante";
                        ?>
                    </span>
                </font></td>

            </tr>

            <tr>
                <td>Combustible: </td>
                <td><select id="combus" name="combus">
                    <?php
                        if($cars['combustible']==="Gasolina"){
                    ?>
                        <option value="gasolina" selected>Gasolina</option>
                        <option value="diesel">Diesel</option>
                        <option value="electrico">Electrico</option>
                        <option value="hybrid">Hybrid</option>
                    <?php
                        }elseif($cars['combustible']==="Diesel"){
                    ?>
                        <option value="gasolina">Gasolina</option>
                        <option value="diesel" selected>Diesel</option>
                        <option value="electrico">Electrico</option>
                        <option value="hybrid">Hybrid</option>
                    <?php
                        }elseif($cars['combustible']==="Electrico"){
                    ?>
                        <option value="gasolina">Gasolina</option>
                        <option value="diesel">Diesel</option>
                        <option value="electrico" selected>Electrico</option>
                        <option value="hybrid">Hybrid</option>
                    <?php
                        }else {
                    ?>
                        <option value="gasolina">Gasolina</option>
                        <option value="diesel">Diesel</option>
                        <option value="electrico">Electrico</option>
                        <option value="hybrid" selected>Hybrid</option>
                    <?php
                        }
                    ?>
                    </select></td>
                <td><font color="red">
                    <span id="error_combus" class="error">
                        <?php
                            echo "$error_combus";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Elige los extras: </td>
                <?php
                    $ext=explode(",", $cars['extra']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("llantas", $ext);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "extra[]" name="extra[]" value="llantas" checked/>Llantas de aleación
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "extra[]" name="extra[]" value="llantas"/>Llantas de aleación
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("ruedas", $ext);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "extra[]" name="extra[]" value="ruedas" checked/>Ruedas
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "extra[]" name="extra[]" value="ruedas"/>Ruedas
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("cristal", $ext);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "extra[]" name="extra[]" value="cristal" checked/>Crital tintado
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "extra[]" name="extra[]" value="cristal"/>Crital tintado
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("asientos", $ext);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "extra[]" name="extra[]" value="asientos" checked/>Asientos ventilados y calefactables
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "extra[]" name="extra[]" value="asientos"/>Asientos ventilados y calefactables
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("gps", $ext);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "extra[]" name="extra[]" value="gps" checked/>GPS
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "extra[]" name="extra[]" value="gps"/>GPS
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("sonido", $ext);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "extra[]" name="extra[]" value="sonido" checked/>Sonido surround
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "extra[]" name="extra[]" value="sonido"/>Sonido surround
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("wifi", $ext);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "extra[]" name="extra[]" value="wifi" checked/>WIFI
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "extra[]" name="extra[]" value="wifi"/>WIFI
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("des", $ext);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "extra[]" name="extra[]" value="des" checked/>Drive Easy Speak
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "extra[]" name="extra[]" value="des"/>Drive Easy Speak
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("crucero", $ext);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "extra[]" name="extra[]" value="crucero" checked/>Control de velocidad crucero</td>
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "extra[]" name="extra[]" value="crucero"/>Control de velocidad crucero</td>
                    <?php
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_extra" class="error">
                        <?php
                            echo "$error_extra";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Color: </td>
                <td><input type="text" id="color" name="color" placeholder="color" value="<?php echo $cars['color'];?>"/></td>
                <td><font color="red">
                    <span id="error_color" class="error">
                        <?php
                            echo "$error_color";
                        ?>
                    </span>
                </font></td>

            </tr>

            <tr>
                <td>Puertas: </td>
                <td><input type="text" id="puertas" name="puertas" placeholder="puertas" value="<?php echo $cars['puertas'];?>"/></td>
                <td><font color="red">
                    <span id="error_puertas" class="error">
                        <?php
                            echo "$error_puertas";
                        ?>
                    </span>
                </font></td>

            </tr>

            <tr>
                <td>Caballos: </td>
                <td><input type="text" id="caballos" name="caballos" placeholder="caballos" value="<?php echo $cars['caballos'];?>"/></td>
                <td><font color="red">
                    <span id="error_caballos" class="error">
                        <?php
                            echo "$error_caballos";
                        ?>
                    </span>
                </font></td>

            </tr>

            <tr>
                <td>Marchas: </td>
                <td><input type="text" id="marchas" name="marchas" placeholder="marchas" value="<?php echo $cars['marchas'];?>"/></td>
                <td><font color="red">
                    <span id="error_marchas" class="error">
                        <?php
                            echo "$error_marchas";
                        ?>
                    </span>
                </font></td>

            </tr>

            <tr>
                <td>Velocidad maxima: </td>
                <td><input type="text" id="velocidad" name="velocidad" placeholder="velocidad" value="<?php echo $cars['velocidad'];?>"/></td>
                <td><font color="red">
                    <span id="error_velocidad" class="error">
                        <?php
                            echo "$error_velocidad";
                        ?>
                    </span>
                </font></td>

            </tr>

            <tr>
                <td>Motor: </td>
                <td><input type="text" id="motor" name="motor" placeholder="motor" value="<?php echo $cars['motor'];?>"/></td>
                <td><font color="red">
                    <span id="error_motor" class="error">
                        <?php
                            echo "$error_motor";
                        ?>
                    </span>
                </font></td>

            </tr>

            <tr>
                <td>Fecha de fabricación: </td>
                <td><input type="date" id="date_fabric" name="date_fabric" placeholder="date_fabric" value="<?php echo $cars['date_fabric'];?>"/></td>
                <td><font color="red">
                    <span id="error_date_fabric" class="error">
                        <?php
                            echo "$error_date_fabric";
                        ?>
                    </span>
                </font></td>

            </tr>

            <tr>
                <td><input type="submit" name="update" id="update" value="Modificar" onclick="validate_cars_update()"/></td>
                <td align="right"><a href="index.php?page=controller_cars&op=list" class="btn btn-secondary">Volver</a></td>
            </tr>
        </table>
    </form>
</div>
