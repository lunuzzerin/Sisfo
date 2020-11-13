<style>
    .input{
        margin: 10pt;
    }

    select{
        width: 100%;
        height: 50px;
    }
</style>

<!-- Radios convalores numericos 1=si 2=no -->
<?php echo $this->Form->Create('change_control') ?>
        <div class="row">
            <div class="col-4" style='width: 20%'><img src="LogoSisfo.png" alt=""></div>
            <div class="col-4" style='width: 60%; text-align: center;'>REGISTRO <br>CONTROL DE CAMBIOS EN LOS REQUERIMIENTOS </div>
            <div class="col-4" style='width: 20%'>Código: SOP-FOR.009 <hr> Fecha: 03/04/2017</div>
        </div>

        <div class="container">
            <?php 
                //Proyecto/Producto/Modulo
                echo $this->Form->input('product', array(
                    'label'  => 'Proyecto/Producto/Modulo:',
                    'id'      => 'product',
                    'type'    => 'text',
                    'maxlength' => '100',
                    )
                );
            ?>
            <div class="row">
                <div class="col-6">
                    <?php
                        //Campo de fecha
                        echo $this->Form->input('date', array(
                            'label'  => 'Fecha:',
                            'id'      => 'datepicker',
                            'type'    => 'text',
                            'value' => date("Y-m-d"),
                            'style' => 'height: 50px;'
                            )
                        );
                    ?>
                </div>
                <div class="col-6">
                    <?php
                        //Cambio solicitado por:
                        echo $this->Form->input('user_id', array(
                            'label'  => '1- Cambio solicitado por: ',
                            'id'      => 'user_id',
                            'type'    => 'select',
                            'options' => $users, 
                            'empty'   => '--Seleccione--',
                        )
                        );
                    ?>
                </div>
            </div>
            <?php
                //Proceso asociado al cambio:
                echo $this->Form->input('process', array(
                    'label'  => '2- Proceso asociado al cambio: ',
                    'id'      => 'process',
                    'type'    => 'text',
                    'maxlength' => '100',
                    )
                );

                $reason=array("Error del sistema","Mejora");
                //Motivo del cambio: Erro.Value=0 Mejor.Value=1
                echo $this->Form->input('reason', array(
                    'label'  => '3- Motivo del cambio: ',
                    'id'      => 'reason',
                    'type'    => 'select',
                    'empty' => '--Seleccione--',
                    'options' => $reason,
                    )
                );
            ?>
            <b>4- Descripción</b>
            <div class="row">
                <div class="col-4">
                    <?php 
                        //Motivo del cambio:
                        echo $this->Form->input('functionality', array(
                            'label'  => 'Funcionalidad: ',
                            'id'      => 'functionality',
                            'type'    => 'textarea',
                            'style' => 'height: 150px;',
                            'maxlength' => '150',
                            )
                        );
                    ?>
                </div>
                <div class="col-4">
                    <?php 
                        //Descripción del cambio:
                        echo $this->Form->input('description', array(
                            'label'  => 'Descripción del cambio: ',
                            'id'      => 'description',
                            'type'    => 'textarea',
                            'style' => 'height: 150px;',
                            'maxlength' => '200',
                            )
                        );
                    ?>
                </div>
                <div class="col-4">
                    <?php 
                        //Criterios de aceptación a tener en cuenta
                        echo $this->Form->input('accept', array(
                            'label'  => 'Criterios de aceptación a tener en cuenta: ',
                            'id'      => 'accept',
                            'type'    => 'textarea',
                            'style' => 'height: 150px;',
                            'maxlength' => '150',
                            )
                        );
                    ?>
                </div>
            </div> 
            <div class="row">
                <div class="col-6">
                    <?php
                        //5- ¿Adjuntos?
                        $adjunts=array("Si","No");
                        echo $this->Form->input('adjunt', array(
                            'label'  => '5- ¿Adjuntos?: ',
                            'id'      => 'adjunt',
                            'type'    => 'select',
                            'empty' => '--Seleccione--',
                            'options' => $adjunts,

                            )
                        ); 
                    ?>
                </div>
                <div class="col-6">
                    <?php
                        //5- archivo adjunto
                        $adjunts=array("Si","No");
                        echo $this->Form->input('adjunt_file', array(
                            'label'  => 'Si su respuesta es sí, por favor, adjunte sus archivos: ',
                            'id'      => 'adjunt_file',
                            'type'    => 'file',
                            )
                        ); 
                    ?>
                </div>
            </div>
            <b>6- Si aplica, por favor, seleccione y describa.</b>
            <div class="row">
                <div class="col-6">
                    <?php
                        //6- Si aplica, por favor, seleccione y describa. Si.value=0 No.value=1
                        $scope=array("Si","No");
                        echo $this->Form->input('scope', array(
                            'label'  => '6.1. ¿Afecta el alcance del proyecto?: ',
                            'id'      => 'scope',
                            'type'    => 'select',
                            'empty' => '--Seleccione--',
                            'options' => $scope,

                            )
                        ); 
                    ?>
                </div>
                <div class="col-6">
                    <?php 
                        //6- Si aplica, por favor, seleccione y describa. Si.value=0 No.value=1
                        echo $this->Form->input('scope_description', array(
                            'label'  => 'Si su respuesta es si: ',
                            'id'      => 'scope_description',
                            'type'    => 'text',
                            'placeholder' => 'Ingrese descripción',
                            'maxlength' => '100',

                            )
                        ); 
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <?php
                        //6- Si aplica, por favor, seleccione y describa. Si.value=0 No.value=1
                        $schedule=array("Si","No");
                        echo $this->Form->input('schedule', array(
                            'label'  => '6.2. ¿Afecta el cronograma del proyecto?: ',
                            'id'      => 'schedule',
                            'type'    => 'select',
                            'empty' => '--Seleccione--',
                            'options' => $schedule,

                            )
                        ); 
                    ?>
                </div>
                <div class="col-6">
                    <?php 
                        //6- Si aplica, por favor, seleccione y describa. Si.value=0 No.value=1
                        $scope=array("Si","No");
                        echo $this->Form->input('schedule_description', array(
                            'label'  => 'Si su respuesta es si: ',
                            'id'      => 'schedule_description',
                            'type'    => 'text',
                            'placeholder' => 'Ingrese descripción',
                            'maxlength' => '100',

                            )
                        ); 
                    ?>
                </div>
            </div>
        </div>
<?php echo $this->Form->end("Registrar"); ?>

</body>
</html>