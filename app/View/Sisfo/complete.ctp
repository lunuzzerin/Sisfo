<style>
    select{
        width: 98%;
        height: 50px;
    }
</style>
<?php
    echo $this->Form->Create('change_control') ?>
        <div class="container">
            
            <div class="row" style='text-align: center; margin-bottom: -15pt;'>
                <div class="col-4 border" style='width: 10%'><img src="img/LogoSisfo.png" alt=""></div>
                <div class="col-4 border" style='width: 80%; text-align: center;'>REGISTRO <br>CONTROL DE CAMBIOS EN LOS REQUERIMIENTOS </div>
                <div class="col-4 border" style='width: 10%'>Código: SOP-FOR.009 <br> Fecha: 03/04/2017 <br> Version: 02</div>
            </div>
            <?php 
                //Proyecto/Producto/Modulo
                echo $this->Form->input('product', array(
                    'label'     => '<b>Proyecto/Producto/Modulo: </b>',
                    'id'        => 'product',
                    'type'      => 'text',
                    'maxlength' => '100',
                    'style'     => 'margin-bottom: -10pt;',
                    'value'     => $changeControls['ChangeControl']['product'],
                    'class'     => 'form-control-plaintext',
                    'readonly'  => '',
                    )
                );
            ?>
            <div class="row" style="padding: 0pt; margin-bottom: -30pt; margin-top: -10pt;">
                <div class="col-6">
                    <?php
                        //Campo de fecha
                        echo $this->Form->input('date', array(
                            'label'     => '<b>Fecha: </b>',
                            'id'        => 'datepicker',
                            'type'      => 'text',
                            'value'     => $changeControls['ChangeControl']['date'],
                            'style'     => 'height: 50px;',
                            'class'     => 'form-control-plaintext',
                            'readonly'  => '',
                            )
                        );
                    ?>
                </div>
                <div class="col-6">
                    <?php
                        //Cambio solicitado por:
                        echo $this->Form->input('user_id', array(
                            'label'     => '<b>1- Cambio solicitado por: </b>',
                            'id'        => 'user_id',
                            'type'      => 'select',
                            'options'   => $users, 
                            'empty'     => '--Seleccione--',
                            'style'     => 'width: 96%',
                            'selected'  => $changeControls['ChangeControl']['user_id'],
                            'class'     => 'form-control-plaintext',
                            'disable'   => 'true',
                        )
                        );
                    ?>
                </div>
            </div>
            <?php
                //Proceso asociado al cambio:
                echo $this->Form->input('process', array(
                    'label'     => '<b>2- Proceso asociado al cambio: </b>',
                    'id'        => 'process',
                    'type'      => 'text',
                    'maxlength' => '100',
                    'style'     => 'margin-bottom: -20pt;',
                    'value'     => $changeControls['ChangeControl']['process'],
                    'class'     => 'form-control-plaintext',
                    'readonly'  => '',
                    )
                );

                $reason=array("1"=>"Error del sistema","2"=>"Mejora");
                //Motivo del cambio: Erro.Value=0 Mejor.Value=1
                echo $this->Form->input('reason', array(
                    'label'     => '<b>3- Motivo del cambio: </b>',
                    'id'        => 'reason',
                    'type'      => 'select',
                    'empty'     => '--Seleccione--',
                    'options'   => $reason,
                    'selected'  => $changeControls['ChangeControl']['reason'],
                    'class'     => 'form-control-plaintext',
                    )
                );
            ?>
            <b>4- Descripción</b>
                    <?php 
                        //Motivo del cambio:
                        echo $this->Form->input('functionality', array(
                            'label'     => '<b>Funcionalidad: </b>',
                            'id'        => 'functionality',
                            'type'      => 'textarea',
                            'style'     => 'height: 150px;',
                            'maxlength' => '150',
                            'style'     => 'margin-bottom: -20pt; margin-top: 0pt;',
                            'value'     => $changeControls['ChangeControl']['functionality'],
                            'class'     => 'form-control-plaintext',
                            'readonly'  => '',
                            )
                        );
                    ?>
                    <?php 
                        //Descripción del cambio:
                        echo $this->Form->input('description', array(
                            'label'     => '<b>Descripción del cambio: </b>',
                            'id'        => 'description',
                            'type'      => 'textarea',
                            'style'     => 'height: 150px;',
                            'maxlength' => '200',
                            'style'     => 'margin-bottom: -20pt; margin-top: 0pt;',
                            'value'     => $changeControls['ChangeControl']['description'],
                            'class'     => 'form-control-plaintext',
                            'readonly'  => '',
                            )
                        );
                    ?>
                    <?php 
                        //Criterios de aceptación a tener en cuenta
                        echo $this->Form->input('accept', array(
                            'label'     => '<b>Criterios de aceptación a tener en cuenta: </b>',
                            'id'        => 'accept',
                            'type'      => 'textarea',
                            'style'     => 'height: 150px;',
                            'maxlength' => '150',
                            'style'     => 'margin-bottom: -20pt; margin-top: 0pt;',
                            'value'     => $changeControls['ChangeControl']['accept'],
                            'class'     => 'form-control-plaintext',
                            'readonly'  => '',
                            )
                        );
                    ?>
            <div class="row" style="margin-bottom: -30pt; margin-top: -5pt">
                <div class="col-6">
                    <?php
                        //5- ¿Adjuntos? Si.value=1 No.value=2
                        $adjunts=array("1"=>"Si","2"=>"No");
                        echo $this->Form->input('adjunt', array(
                            'label'     => '<b>5- ¿Adjuntos?: </b>',
                            'id'        => 'adjunt',
                            'type'      => 'select',
                            'empty'     => '--Seleccione--',
                            'options'   => $adjunts,
                            'selected'  => $changeControls['ChangeControl']['adjunt'],
                            'class'     => 'form-control-plaintext',
                            )
                        ); 
                    ?>
                </div>
                <div class="col-6">
                    <?php
                        //5- archivo adjunto Si.value=1 No.value=2
                        $adjunts=array("1"=>"Si","2"=>"No");
                        echo $this->Form->input('adjunt_file', array(
                            'label'     => '<b>Si su respuesta es sí, por favor, adjunte sus archivos:</b> ',
                            'id'        => 'adjunt_file',
                            'type'      => 'file',
                            'value'     => $changeControls['ChangeControl']['adjunt_file'],
                            'class'     => 'form-control-plaintext',
                            'readonly'  => '',
                            )
                        ); 
                    ?>
                </div>
            </div>
            <b>6- Si aplica, por favor, seleccione y describa.</b>
            <div class="row" style="margin-bottom: -50pt; margin-top: -10pt">
                <div class="col-6">
                    <?php
                        //6- Si aplica, por favor, seleccione y describa. Si.value=1 No.value=2
                        $scope=array("1"=>"Si","2"=>"No");
                        echo $this->Form->input('scope', array(
                            'label'     => '<b>6.1. ¿Afecta el alcance del proyecto?: </b>',
                            'id'        => 'scope',
                            'type'      => 'select',
                            'empty'     => '--Seleccione--',
                            'options'   => $scope,
                            'selected'  => $changeControls['ChangeControl']['scope'],
                            'class'     => 'form-control-plaintext',
                            )
                        ); 
                    ?>
                </div>
                <div class="col-6">
                    <?php 
                        //6- Si aplica, por favor, seleccione y describa. Si.value=0 No.value=1
                        echo $this->Form->input('scope_description', array(
                            'label'         => '<b>Si su respuesta es si: </b>',
                            'id'            => 'scope_description',
                            'type'          => 'text',
                            'placeholder'   => 'Ingrese descripción',
                            'maxlength'     => '100',
                            'value'         => $changeControls['ChangeControl']['scope_description'],
                            'class'         => 'form-control-plaintext',
                            'readonly'      => '',
                            )
                        ); 
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <?php
                        //6- Si aplica, por favor, seleccione y describa. Si.value=1 No.value=2
                        $schedule=array("1"=>"Si","2"=>"No");
                        echo $this->Form->input('schedule', array(
                            'label'     => '<b>6.2. ¿Afecta el cronograma del proyecto?: </b>',
                            'id'        => 'schedule',
                            'type'      => 'select',
                            'empty'     => '--Seleccione--',
                            'options'   => $schedule,
                            'selected'  => $changeControls['ChangeControl']['schedule'],
                            'class'     => 'form-control-plaintext',
                            )
                        ); 
                    ?>
                </div>
                <div class="col-6">
                    <?php 
                        //6- Si aplica, por favor, seleccione y describa. Si.value=1 No.value=2
                        $scope=array("1"=>"Si","2"=>"No");
                        echo $this->Form->input('schedule_description', array(
                            'label'         => '<b>Si su respuesta es si:</b> ',
                            'id'            => 'schedule_description',
                            'type'          => 'text',
                            'placeholder'   => 'Ingrese descripción',
                            'maxlength'     => '100',
                            'value'         => $changeControls['ChangeControl']['schedule_description'],
                            'class'         => 'form-control-plaintext',
                            'readonly'      => '',
                            )
                        ); 
                    ?>
                </div>
            </div>
            
        <center style="margin-bottom: -30pt; margin-top: -30pt">
            <?php 
                echo $this->Html->link('Exportar a PDF',array('controller' => 'Sisfo', 'action' => 'pdf', $changeControls['ChangeControl']['id']), array('class' => 'btn btn-primary',)); 
                echo " ";
                echo $this->Html->link('Volver a consultar','view', array('class' => 'btn btn-primary',)); 
            ?>
        </center>
        </div>