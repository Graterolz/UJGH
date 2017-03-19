<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
<?php
if ($usuario_info){
    $usuario_info_row = $usuario_info->row();

    $usuario_info_form = array(
        CEDULA => array(
            'class' => 'form-control',
            'name' => CEDULA,
            'placeholder' => $usuario_info_rules[CEDULA]['label'],
            'value' => $usuario_info_row->cedula,
            'required' => TRUE
        ),
        NOMBRE => array(
            'class' => 'form-control',
            'name' => NOMBRE,
            'placeholder' => $usuario_info_rules[NOMBRE]['label'],
            'value' => $usuario_info_row->nombre,
            'required' => TRUE
        ),
        APELLIDO => array(
            'class' => 'form-control',
            'name' => APELLIDO,
            'placeholder' => $usuario_info_rules[APELLIDO]['label'],
            'value' => $usuario_info_row->apellido,
            'required' => TRUE
        ),
        GENERO => array(
            'class' => 'form-control',
            'name' => GENERO,
            'placeholder' => $usuario_info_rules[GENERO]['label'],
            'value' => $usuario_info_row->genero,
            'required' => TRUE
        ),
        FECHA_NACIMIENTO => array(
            'class' => 'form-control',
            'name' => FECHA_NACIMIENTO,
            'placeholder' => $usuario_info_rules[FECHA_NACIMIENTO]['label'],
            'value' => date("d/m/Y", strtotime($usuario_info_row->fecha_nacimiento)),
            'required' => TRUE
        ),
        NACIONALIDAD => array(
            'class' => 'form-control',
            'name' => NACIONALIDAD,
            'placeholder' => $usuario_info_rules[NACIONALIDAD]['label'],
            'value' => $usuario_info_row->nacionalidad,
            'required' => TRUE
        ),
        ESTADO_CIVIL => array(
            'class' => 'form-control',
            'name' => ESTADO_CIVIL,
            'placeholder' => $usuario_info_rules[ESTADO_CIVIL]['label'],
            'value' => $usuario_info_row->estado_civil,
            'required' => TRUE
        ),
        DIRECCION => array(
            'class' => 'form-control',
            'name' => DIRECCION,
            'placeholder' => $usuario_info_rules[DIRECCION]['label'],
            'value' => $usuario_info_row->direccion,
            'required' => TRUE
        ),
        TELEFONO1 => array(
            'class' => 'form-control',
            'name' => TELEFONO1,
            'placeholder' => $usuario_info_rules[TELEFONO1]['label'],
            'value' => $usuario_info_row->telefono1,
            'required' => TRUE
        ),
        TELEFONO2 => array(
            'class' => 'form-control',
            'name' => TELEFONO2,
            'placeholder' => $usuario_info_rules[TELEFONO2]['label'],
            'value' => $usuario_info_row->telefono2,
            'required' => TRUE
        ),
        EMAIL => array(
            'class' => 'form-control',
            'name' => EMAIL,
            'placeholder' => $usuario_info_rules[EMAIL]['label'],
            'value' => $usuario_info_row->email,
            'required' => TRUE
        ),
        USER => array(
            'class' => 'form-control',
            'name' => USER,
            'placeholder' => $usuario_info_rules[USER]['label'],
            'value' => $usuario_info_row->user,
            'required' => TRUE,
            'readonly' => TRUE
        )
    );
}
?>
            <?= form_open('',$form_attributes);?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn btn-default">
                                <a href="<?= base_url(PATH_MENU)."/".USUARIO_INFO_CONTROLLER; ?>">
                                    <i class="fa fa-user fa-fw"></i><strong><?= TITULO_USUARIO_INFO; ?></strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="well">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <?= form_label($usuario_info_rules[CEDULA]['label'],$usuario_info_rules[CEDULA]['field']); ?>
                                            <?= form_input($usuario_info_form[CEDULA]) ?>
                                        </div>
                                        <div class="col-lg-3">
                                            <?= form_label($usuario_info_rules[NOMBRE]['label'],$usuario_info_rules[NOMBRE]['field']); ?>
                                            <?= form_input($usuario_info_form[NOMBRE]) ?>
                                        </div>
                                        <div class="col-lg-3">
                                            <?= form_label($usuario_info_rules[APELLIDO]['label'],$usuario_info_rules[APELLIDO]['field']); ?>
                                            <?= form_input($usuario_info_form[APELLIDO]) ?>
                                        </div>
                                        <div class="col-lg-2">
                                            <center>
                                                <button type="submit" class="btn btn-success "><i class="fa fa-gear fa-fw"></i><strong>EDITAR</strong></button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <?= form_label($usuario_info_rules[GENERO]['label'],$usuario_info_rules[GENERO]['field']); ?>
                                    <?= form_dropdown(NULL,$generos,$usuario_info_form[GENERO]['value'],$usuario_info_form[GENERO]); ?>
                                </div>
                                <div class="form-group">
                                    <?= form_label($usuario_info_rules[ESTADO_CIVIL]['label'],$usuario_info_rules[ESTADO_CIVIL]['field']); ?>
                                    <?= form_dropdown(NULL,$estado_civil,$usuario_info_form[ESTADO_CIVIL]['value'],$usuario_info_form[ESTADO_CIVIL]); ?>
                                </div>
                                <div class="form-group">
                                    <?= form_label($usuario_info_rules[TELEFONO2]['label'],$usuario_info_rules[TELEFONO2]['field']); ?>
                                    <?= form_input($usuario_info_form[TELEFONO2]) ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <?= form_label($usuario_info_rules[FECHA_NACIMIENTO]['label'],$usuario_info_rules[FECHA_NACIMIENTO]['field']); ?>
                                    <?= form_input($usuario_info_form[FECHA_NACIMIENTO]) ?>
                                </div>
                                <div class="form-group">
                                    <?= form_label($usuario_info_rules[DIRECCION]['label'],$usuario_info_rules[DIRECCION]['field']); ?>
                                    <?= form_input($usuario_info_form[DIRECCION]) ?>
                                </div>
                                <div class="form-group">
                                    <?= form_label($usuario_info_rules[EMAIL]['label'],$usuario_info_rules[EMAIL]['field']); ?>
                                    <?= form_input($usuario_info_form[EMAIL]) ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <?= form_label($usuario_info_rules[NACIONALIDAD]['label'],$usuario_info_rules[NACIONALIDAD]['field']); ?>
                                    <?= form_dropdown(NULL,$nacionalidad,$usuario_info_form[NACIONALIDAD]['value'],$usuario_info_form[NACIONALIDAD]); ?>
                                </div>
                                <div class="form-group">
                                    <?= form_label($usuario_info_rules[TELEFONO1]['label'],$usuario_info_rules[TELEFONO1]['field']); ?>
                                    <?= form_input($usuario_info_form[TELEFONO1]) ?>
                                </div>
                                <div class="form-group">
                                    <?= form_label($usuario_info_rules[USER]['label'],$usuario_info_rules[USER]['field']); ?>
                                    <?= form_input($usuario_info_form[USER]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 (nested) -->
            </div>
            <?= form_close(); ?>
            <!-- /.row (nested) -->
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->