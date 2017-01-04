<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <br>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
<?php
if ($usuario_info){
    $usuario_info_row = $usuario_info->row();

    $usuario_info_form = array(
        CEDULA => array(
            'class' => 'form-control',
            'name' => CEDULA,
            'value' => $usuario_info_row->cedula,
            'readonly' => TRUE
        ),
        NOMBRE => array(
            'class' => 'form-control',
            'name' => NOMBRE,
            'value' => $usuario_info_row->nombre,
            'readonly' => TRUE
        ),
        APELLIDO => array(
            'class' => 'form-control',
            'name' => APELLIDO,
            'value' => $usuario_info_row->apellido,
            'readonly' => TRUE
        ),
        GENERO => array(
            'class' => 'form-control',
            'name' => GENERO,
            'value' => $usuario_info_row->genero,
            'readonly' => TRUE
        ),
        FECHA_NACIMIENTO => array(
            'class' => 'form-control',
            'name' => FECHA_NACIMIENTO,
            'value' => date("d/m/Y", strtotime($usuario_info_row->fecha_nacimiento)),
            'readonly' => TRUE
        ),
        NACIONALIDAD => array(
            'class' => 'form-control',
            'name' => NACIONALIDAD,
            'value' => $usuario_info_row->nacionalidad,
            'disabled' => TRUE
        ),
        ESTADO_CIVIL => array(
            'class' => 'form-control',
            'name' => ESTADO_CIVIL,
            'value' => $usuario_info_row->estado_civil,
            'disabled' => TRUE
        ),
        DIRECCION => array(
            'class' => 'form-control',
            'name' => DIRECCION,
            'value' => $usuario_info_row->direccion,
            'readonly' => TRUE
        ),
        TELEFONO1 => array(
            'class' => 'form-control',
            'name' => TELEFONO1,
            'value' => $usuario_info_row->telefono1,
            'readonly' => TRUE
        ),
        TELEFONO2 => array(
            'class' => 'form-control',
            'name' => TELEFONO2,
            'value' => $usuario_info_row->telefono2,
            'readonly' => TRUE
        ),
        EMAIL => array(
            'class' => 'form-control',
            'name' => EMAIL,
            'value' => $usuario_info_row->email,
            'readonly' => TRUE
        ),
        USER => array(
            'class' => 'form-control',
            'name' => USER,
            'value' => $usuario_info_row->user,
            'readonly' => TRUE
        )
    );
}
?>
            <!-- USUARIO_INFO -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="btn btn-default">
                                <i class="fa fa-user fa-fw"></i><strong><?= TITULO_USUARIO_INFO; ?></strong>
                            </div>
                        </div>
                        <div class="col-lg-2">

                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="well">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4> <?= $usuario_info_form[CEDULA]['value'];?>
                                            <small>
                                                <?= ' / '.
                                                    $usuario_info_form[NOMBRE]['value'].
                                                    ' '.
                                                    $usuario_info_form[APELLIDO]['value']; 
                                                ?>
                                                <br>
                                            </small>
                                        </h4>
                                    </div>
                                    <div class="col-lg-2"> 
                                        <center>
                                            <a href="<?= base_url(PATH_MENU)."/".USUARIO_INFO_EDIT."/".$usuario_info_row->idusu; ?>" class="btn btn-success"><i class="fa fa-gear fa-fw"></i><strong>EDITAR</strong></a>
                                        </center>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <?= form_label($usuario_info_rules[GENERO]['label'],$usuario_info_rules[GENERO]['field']); ?>
                                            <?= form_input($usuario_info_form[GENERO]); ?>
                                        </div> 
                                        <div class="form-group">
                                            <?= form_label($usuario_info_rules[ESTADO_CIVIL]['label'],$usuario_info_rules[ESTADO_CIVIL]['field']); ?>
                                            <?= form_dropdown(ESTADO_CIVIL,$estado_civil,$usuario_info_form[ESTADO_CIVIL]['value'],$usuario_info_form[ESTADO_CIVIL]); ?>
                                        </div>
                                        <div class="form-group">
                                            <?= form_label($usuario_info_rules[TELEFONO2]['label'],$usuario_info_rules[TELEFONO2]['field']); ?>
                                            <?= form_input($usuario_info_form[TELEFONO2]); ?>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <?= form_label($usuario_info_rules[FECHA_NACIMIENTO]['label'],$usuario_info_rules[FECHA_NACIMIENTO]['field']); ?>
                                            <?= form_input($usuario_info_form[FECHA_NACIMIENTO]); ?>
                                        </div>
                                        <div class="form-group">
                                            <?= form_label($usuario_info_rules[DIRECCION]['label'],$usuario_info_rules[DIRECCION]['field']); ?>
                                            <?= form_input($usuario_info_form[DIRECCION]); ?>
                                        </div>
                                        <div class="form-group">
                                            <?= form_label($usuario_info_rules[EMAIL]['label'],$usuario_info_rules[EMAIL]['field']); ?>
                                            <?= form_input($usuario_info_form[EMAIL]); ?>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <?= form_label($usuario_info_rules[NACIONALIDAD]['label'],$usuario_info_rules[NACIONALIDAD]['field']); ?>
                                            <?= form_dropdown(NACIONALIDAD,$nacionalidad,$usuario_info_form[NACIONALIDAD]['value'],$usuario_info_form[NACIONALIDAD]); ?>
                                        </div>
                                        <div class="form-group">
                                            <?= form_label($usuario_info_rules[TELEFONO1]['label'],$usuario_info_rules[TELEFONO1]['field']); ?>
                                            <?= form_input($usuario_info_form[TELEFONO1]); ?>
                                        </div>
                                        <div class="form-group">
                                            <?= form_label($usuario_info_rules[USER]['label'],$usuario_info_rules[USER]['field']); ?>
                                            <?= form_input($usuario_info_form[USER]); ?>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
            </div>
            <!-- /.panel -->

            <hr>

            <!-- USUARIO_ACADEMICO -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="btn btn-default">
                                <i class="fa fa-book fa-fw"></i><strong><?= TITULO_USUARIO_ACADEMICO; ?></strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <a href="<?= base_url(PATH_MENU)."/".USUARIO_ACADEMICO_ADD; ?>" class="btn btn-default"><i class="fa fa-book fa-fw"></i><strong>NUEVO</strong></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
<?php
if($usuario_academico){
    foreach($usuario_academico->result() as $usuario_academico_row){
        $usuario_academico_form = array(
            TITULO => array(
                'value' => $usuario_academico_row->titulo
            ),
            NIVEL_ESTUDIO => array(
                'class' => 'form-control',
                'name' => INSTITUCION,
                'value' => $usuario_academico_row->nivel_estudio,
                'readonly' => TRUE
            ),
            INSTITUCION => array(
                'class' => 'form-control',
                'name' => INSTITUCION,
                'value' => $usuario_academico_row->institucion,
                'readonly' => TRUE
            ),
            MES_INICIO => array(
                'value' => $usuario_academico_row->mes_inicio
            ),
            ANIO_INICIO => array(
                'value' => $usuario_academico_row->anio_inicio
            ),
            MES_FIN => array(
                'value' => $usuario_academico_row->mes_fin
            ),
            ANIO_FIN => array(
                'value' => $usuario_academico_row->anio_fin
            )
        );
?>
                        <div class="col-lg-12">
                            <div class="well">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <h4><?= $usuario_academico_form[TITULO]['value']; ?>
                                            <small>
                                                <?= $usuario_academico_form[MES_INICIO]['value'].
                                                    " ".
                                                    $usuario_academico_form[ANIO_INICIO]['value'].
                                                    " / ".
                                                    $usuario_academico_form[MES_FIN]['value'].
                                                    " ".
                                                    $usuario_academico_form[ANIO_FIN]['value'];
                                                ?>
                                                <br>
                                            </small>
                                        </h4>
                                    </div>
                                    <div class="col-lg-3"> 
                                        <center>
                                            <a href="<?= base_url(PATH_MENU)."/".USUARIO_ACADEMICO_EDIT."/".$usuario_academico_row->idaca; ?>" class="btn btn-success btn-xs"><i class="fa fa-gear fa-fw"></i><strong>EDITAR</strong></a>
                                            <a href="<?= base_url(PATH_MENU)."/".USUARIO_ACADEMICO_DEL."/".$usuario_academico_row->idaca; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-fw"></i><strong>ELIMINAR</strong></a>
                                        </center>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <?= form_label($usuario_academico_rules[INSTITUCION]['label'],$usuario_academico_rules[INSTITUCION]['field']); ?>
                                            <?= form_input($usuario_academico_form[INSTITUCION]); ?>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <?= form_label($usuario_academico_rules[NIVEL_ESTUDIO]['label'],$usuario_academico_rules[NIVEL_ESTUDIO]['field']); ?>
                                            <?= form_input($usuario_academico_form[NIVEL_ESTUDIO]); ?>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 (nested) -->
<?php
        }
    }
?>                        
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

            <hr>

            <!-- USUARIO_LABORAL -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="btn btn-default">
                                <i class="fa fa-suitcase fa-fw"></i><strong><?= TITULO_USUARIO_LABORAL; ?></strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <a href="<?= base_url(PATH_MENU)."/".USUARIO_LABORAL_ADD; ?>" class="btn btn-default"><i class="fa fa-suitcase fa-fw"></i><strong>NUEVO</strong></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
<?php
    if($usuario_laboral){
        foreach($usuario_laboral->result() as $usuario_laboral_row){
            $usuario_laboral_form = array(
                EMPRESA => array(
                    'value' => $usuario_laboral_row->empresa
                ),
                DIRECCION => array(                
                    'class' => 'form-control',
                    'name' => DIRECCION,
                    'value' => $usuario_laboral_row->direccion,
                    'readonly' => TRUE
                ),
                TELEFONO1 => array(
                    'class' => 'form-control',
                    'name' => TELEFONO1,
                    'value' => $usuario_laboral_row->telefono1,
                    'readonly' => TRUE
                ),
                CARGO => array(
                    'class' => 'form-control',
                    'name' => CARGO,
                    'value' => $usuario_laboral_row->cargo,
                    'readonly' => TRUE
                ),
                LABORES => array(
                    'class' => 'form-control',
                    'name' => LABORES,
                    'value' => $usuario_laboral_row->labores,
                    'readonly' => TRUE
                ),
                MES_INICIO => array(
                    'value' => $usuario_laboral_row->mes_inicio
                ),
                ANIO_INICIO => array(
                    'value' => $usuario_laboral_row->anio_inicio
                ),
                MES_FIN => array(
                    'value' => $usuario_laboral_row->mes_fin
                ),
                ANIO_FIN => array(
                    'value' => $usuario_laboral_row->anio_fin
                ),
                BENEFICIOS => array(
                    'class' => 'form-control',
                    'name' => BENEFICIOS,
                    'value' => $usuario_laboral_row->beneficios,
                    'readonly' => TRUE
                ),
                SALARIO => array(
                    'class' => 'form-control',
                    'name' => SALARIO,
                    'value' => $usuario_laboral_row->salario,
                    'readonly' => TRUE
                ),
                MOTIVO_RETIRO => array(
                    'class' => 'form-control',
                    'name' => MOTIVO_RETIRO,
                    'value' => $usuario_laboral_row->motivo_retiro,
                    'readonly' => TRUE
                )
            );
?>
                        <div class="col-lg-12">
                            <div class="well">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <h4><?= $usuario_laboral_form[EMPRESA]['value'];; ?>
                                            <small>
                                                <?= $usuario_laboral_form[MES_INICIO]['value'].
                                                    " ".
                                                    $usuario_laboral_form[ANIO_INICIO]['value'].
                                                    " / ".
                                                    $usuario_laboral_form[MES_FIN]['value'].
                                                    " ".
                                                    $usuario_laboral_form[ANIO_FIN]['value'];
                                                ?>
                                                <br>
                                            </small>
                                        </h4>
                                    </div>
                                    <div class="col-lg-3"> 
                                        <center>
                                            <a href="<?= base_url(PATH_MENU)."/".USUARIO_LABORAL_EDIT."/".$usuario_laboral_row->idlab; ?>" class="btn btn-success btn-xs"><i class="fa fa-gear fa-fw"></i><strong>EDITAR</strong></a>
                                            <a href="<?= base_url(PATH_MENU)."/".USUARIO_LABORAL_DEL."/".$usuario_laboral_row->idlab; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-fw"></i><strong>ELIMINAR</strong></a>
                                        </center>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <?= form_label($usuario_laboral_rules[DIRECCION]['label'],$usuario_laboral_rules[DIRECCION]['field']); ?>
                                            <?= form_input($usuario_laboral_form[DIRECCION]); ?>                                            
                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <?= form_label($usuario_laboral_rules[TELEFONO1]['label'],$usuario_laboral_rules[TELEFONO1]['field']); ?>
                                            <?= form_input($usuario_laboral_form[TELEFONO1]); ?>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <?= form_label($usuario_laboral_rules[CARGO]['label'],$usuario_laboral_rules[CARGO]['field']); ?>
                                            <?= form_input($usuario_laboral_form[CARGO]); ?>                                            
                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <?= form_label($usuario_laboral_rules[SALARIO]['label'],$usuario_laboral_rules[SALARIO]['field']); ?>
                                            <?= form_input($usuario_laboral_form[SALARIO]); ?>                                            
                                        </div>
                                        <div class="form-group">
                                            <?= form_label($usuario_laboral_rules[LABORES]['label'],$usuario_laboral_rules[LABORES]['field']); ?>
                                            <?= form_input($usuario_laboral_form[LABORES]); ?>                                            
                                        </div> 
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <?= form_label($usuario_laboral_rules[MOTIVO_RETIRO]['label'],$usuario_laboral_rules[MOTIVO_RETIRO]['field']); ?>
                                            <?= form_input($usuario_laboral_form[MOTIVO_RETIRO]); ?>
                                        </div>
                                        <div class="form-group">
                                            <?= form_label($usuario_laboral_rules[BENEFICIOS]['label'],$usuario_laboral_rules[BENEFICIOS]['field']); ?>
                                            <?= form_input($usuario_laboral_form[BENEFICIOS]); ?>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                            </div>
                        </div>
<?php
        }
    }
?>                          
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

            <hr>

            <!-- USUARIO_ADJUNTO --
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="btn btn-default">
                                <i class="fa fa-paperclip fa-fw"></i><strong><?= TITULO_USUARIO_ADJUNTO; ?></strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <a href="<?= base_url(PATH_MENU)."/".USUARIO_ADJUNTO_ADD; ?>" class="btn btn-default"><i class="fa fa-paperclip fa-fw"></i><strong>NUEVO</strong></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><?= ucwords(IDADJ); ?></th>
                                    <th><?= ucwords(TITULO); ?></th>
                                    <th><?= ucwords(FECHA_REGISTRO); ?></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
<?php
    if($usuario_adjunto){
        foreach($usuario_adjunto->result() as $usuario_adjunto_row){
?>                            
                                <tr>
                                    <td><?= $usuario_adjunto_row->idadj; ?></td>
                                    <td><?= $usuario_adjunto_row->titulo; ?></td>
                                    <td><?= date("d/m/Y", strtotime($usuario_adjunto_row->fecha_registro)); ?></td>
                                </tr>
<?php
        }
    }
?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->            
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->   
</div>
<!-- /#page-wrapper -->