</br></br></br>
<div id="contenido">
    <form autocomplete="on" method="post" name="alta_cars" id="alta_cars">
      <?php
    		if(isset($error)){
    			print ("<BR><span CLASS='styerror'>" . " ".$error . "</span><br/>");
    		}?>
        <h1>Coche nuevo</h1>
        <table border='0'>
            <tr>
                <td>Tipo de coche: </td>
                <td><input type="radio" id="tipo" name="tipo" value="Deportivo"/>Deportivo
                    <input type="radio" id="tipo" name="tipo" value="Turismo"/>Turismo
                    <input type="radio" id="tipo" name="tipo" value="Todoterreno"/>Todoterreno</td>
                <td><font color="red">
                  <span id="error_tipo" class="error">
                  </span>
                </font></td>
            </tr>

            <tr>
                <td>Matricula: </td>
                <td><input type="text" id="matricula" name="matricula" placeholder="matricula" value="<?php echo $_POST?$_POST['matricula']:""; ?>"/>
                <td><font color="red">
                    <span id="error_matricula" class="error">
                        <?php
                            echo "$error";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Marca: </td>
                <td><input type="text" id="marca" name="marca" placeholder="marca" value="<?php echo $_POST?$_POST['marca']:""; ?>"/></td>
                <td><font color="red">
                    <span id="error_marca" class="error">
                      <?php
                          echo "$error";
                      ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Modelo: </td>
                <td><input type="text" id="modelo" name="modelo" placeholder="modelo" value="<?php echo $_POST?$_POST['modelo']:""; ?>"/></td>
                <td><font color="red">
                    <span id="error_modelo" class="error">
                        <?php
                            echo "$error";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Fabricante: </td>
                <td><input type="text" id="fabricante" name="fabricante" placeholder="fabricante" value="<?php echo $_POST?$_POST['fabricante']:""; ?>"/></td>
                <td><font color="red">
                    <span id="error_fabricante" class="error">
                        <?php
                            echo "$error";
                        ?>
                    </span>
                </font></td>
            </tr>


            <tr>
                <td>Selecciona el tipo de combustible: </td>
                <td><select id="combus" name="combus">
                    <option value="gasolina">Gasolina</option>
                    <option value="diesel">Diesel</option>
                    <option value="electrico">Electrico</option>
                    <option value="hybrid">Hybrid</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_combus" class="error">
                        <?php
                            echo "$error";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Elige los extras: </td>
                <br>
                <td><input name="extra[]" class="llantas" type="checkbox" value="llantas">Llantas de aleación
            			<input name="extra[]" class="ruedas" type="checkbox" value="ruedas">Ruedas
            			<input name="extra[]" class="cristal" type="checkbox" value="cristal">Crital tintado
            			<input name="extra[]" class="asientos" type="checkbox" value="asientos">Asientos ventilados y calefactables
                <br>
                  <input name="extra[]" class="gps" type="checkbox" value="gps">GPS
            			<input name="extra[]" class="sonido" type="checkbox" value="sonido">Sonido surround
            			<input name="extra[]" class="wifi" type="checkbox" value="wifi">WIFI
            			<input name="extra[]" class="des" type="checkbox" value="des">Drive Easy Speak
            			<input name="extra[]" class="crucero" type="checkbox" value="crucero">Control de velocidad crucero</td>
                <td><font color="red">
                    <span id="error_extra[]" class="error">
                        <?php
                            echo "$error";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Color: </td>
                <td><input type="text" id="color" name="color" placeholder="color" value="<?php echo $_POST?$_POST['color']:""; ?>"/></td>
                <td><font color="red">
                    <span id="error_color" class="error">
                        <?php
                            echo "$error";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Puertas: </td>
                <td><input type="text" id="puertas" name="puertas" placeholder="puertas" value="<?php echo $_POST?$_POST['puertas']:""; ?>"/></td>
                <td><font color="red">
                    <span id="error_puertas" class="error">
                        <?php
                            echo "$error";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Caballos: </td>
                <td><input type="text" id="caballos" name="caballos" placeholder="caballos" value="<?php echo $_POST?$_POST['caballos']:""; ?>"/></td>
                <td><font color="red">
                    <span id="error_caballos" class="error">
                        <?php
                            echo "$error";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Marchas: </td>
                <td><input type="text" id="marchas" name="marchas" placeholder="marchas" value="<?php echo $_POST?$_POST['marchas']:""; ?>"/></td>
                <td><font color="red">
                    <span id="error_marchas" class="error">
                        <?php
                            echo "$error";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Velocidad maxima: </td>
                <td><input type="text" id="velocidad" name="velocidad" placeholder="velocidad" value="<?php echo $_POST?$_POST['velocidad']:""; ?>"/></td>
                <td><font color="red">
                    <span id="error_velocidad" class="error">
                        <?php
                            echo "$error";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Motor: </td>
                <td><input type="text" id="motor" name="motor" placeholder="motor" value="<?php echo $_POST?$_POST['motor']:""; ?>"/></td>
                <td><font color="red">
                    <span id="error_motor" class="error">
                        <?php
                            echo "$error";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td>Fecha de fabricación: </td>
                <td><input id="date_fabric" type="date" name="date_fabric" placeholder="dd/mm/yyyy" value="<?php echo $_POST?$_POST['date_fabric']:""; ?>"/></td>
                <td><font color="red">
                    <span id="error_date_fabric" class="error">
                        <?php
                            echo "$error";
                        ?>
                    </span>
                </font></td>
            </tr>

            <tr>
                <td><input type="button" name="create" id="create" value="Enviar" onclick="validate_cars()"/></td>
                <td align="right"><a href="index.php?page=controller_cars&op=list" class="btn btn-secondary">Volver</a></td>
            </tr>
        </table>
    </form>
</div>
