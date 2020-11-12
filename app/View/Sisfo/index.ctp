<style>
    .input{
        margin: 15pt;
    }

    select{
        width: 100%;
        height: 50px;
    }
</style>

<?php echo $this->Form->Create('change_control') ?>
        <table border="1">
            <tr>
                <td style='width: 20%'><img src="Images/logoSisfo.png" alt=""></td>
                <td style='width: 60%; text-align: center;'>REGISTRO <br>CONTROL DE CAMBIOS EN LOS REQUERIMIENTOS </td>
                <td style='width: 20%'>Código: SOP-FOR.009 <hr> Fecha: 03/04/2017</td>
            </tr>
        </table>
        <div class="input">
            <label for="product">Proyecto/Producto/Modulo:</label><input type="text" name="product" maxlength="100" required id="product">
        </div>
        <div class="input">
            <label for="date">Fecha:</label><input type="date" name="date" value="<?php echo date("Y-m-d")?>" require id="date">
        </div>
        <div class="input">
            <label for="date">1- Cambio solicitado por:</label>
            <?php 
                echo $this->Form->input('user', array(
                    'label'  => false,
                    'id'      => 'user',
                    'type'    => 'select',
                    'options' => $users,
                    'empty'   => '--Seleccione--',
                    )
                );
            ?>
        </div>
        <div class="input">
            <label for="process">2- Proceso asociado al cambio:</label><input type="text" name="process" required maxlength="100" id="process">
        </div>
        <div class="input">
            <label for="process">3- Motivo del cambio:</label>
            <p><input type="radio" name="reason" required value="Error del sistema">Error del sistema</p>
            <p><input type="radio" name="reason" required value="Mejora">Mejora</p>
        </div>
        <div class="input">
            <table>
                <tr >
                    <td><b>4- Descripción</b></td>
                </tr>
                <tr>
                    <td style='width: 25%;'><label for="functionality">Funcionalidad</label></td>
                    <td style='width: 50%;'><label for="description">Descripción del cambio</label></td>
                    <td style='width: 25%;'><label for="accept">Criterios de aceptación a tener en cuenta</label></td>
                </tr>
                <tr>
                    <td style='width: 25%;'><textarea name="functionality" id="functionality" cols="30" rows="10" style='height: 100px;' maxlength="150"></textarea></td>
                    <td style='width: 50%;' maxlength="150"><textarea name="description" id="description" cols="30" rows="10" style='height: 100px;'></textarea></td>
                    <td style='width: 25%;' maxlength="150"><textarea name="accept" id="accept" cols="30" rows="10" style='height: 100px;'></textarea></td>
                </tr>
            </table>
        </div>
        <div class="input">
            <label for="adjunt">5- ¿Adjuntos?:</label>
            <p><input type="radio" name="adjunt" required value="Si">Si</p>
            <p><input type="radio" name="adjunt" required value="No">No</p>
            <input type="file" name="adjunt_file" id="adjunt">
        </div>
        <div class="input">
            <table>
                <tr>
                    <td><b>7- Si aplica por favor seleccione y describa</b></td>
                </tr>
                <tr>
                    <td style='width: 30%; padding-left: 25pt'><label for="scope">7.1. Afecta el alcance del proyecto</label></td>
                    <td style='width: 70%;'>
                        <p><input type="radio" name="scope" id="scope" required value="Si">Si</p>
                        <p><input type="radio" name="scope" id="scope" required value="No">No</p>
                        <p><input type="text" name="scope_description" id="scope" required placeholder="Ingrese descripción" maxlength="100"></p>
                    </td>
                </tr>
                <tr>
                    <td style='width: 30%; padding-left: 25pt'><label for="schedule">7.2. Afecta el cronograma del proyecto</label></td>
                    <td style='width: 70%;'>
                        <p><input type="radio" name="schedule" id="schedule" required value="Si">Si</p>
                        <p><input type="radio" name="schedule" id="schedule" required value="No">No</p>
                        <p><input type="text" name="schedule_description" id="schedule" required placeholder="Ingrese descripción" maxlength="100"></p>
                    </td>
                </tr>
            </table>
        </div>

        <?php echo $this->Form->end("Registrar"); ?>
</body>
</html>