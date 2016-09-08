<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <img src="<?php echo base_url(PATH_BACK2)?>/ujgh.png" class="img-thumbnail" alt="imgs" width="100%">
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-12">
                            <strong>Detalles de datos laborales</strong>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
<?php
    //var_dump($rules_usuario_laboral);
    //var_dump($meses);
    //var_dump($anios);

    $rules_form = array(
        'empresa' => array(
            'class' => 'form-control',
            'name' => 'empresa',
            'placeholder' => 'Ingrese empresa',
            'required' => TRUE
        ),
        'direccion' => array(
            'class' => 'form-control',
            'name' => 'direccion',
            'placeholder' => 'Ingrese direccion',
            'required' => TRUE
        ),
        'telefono' => array(
            'class' => 'form-control',
            'name' => 'telefono',
            'placeholder' => 'Ingrese telefono',
            'required' => TRUE            
        ),
        'cargo' => array(
            'class' => 'form-control',
            'name' => 'cargo',
            'placeholder' => 'Ingrese cargo',
            'required' => TRUE
        ),
        'labores' => array(
            'class' => 'form-control',
            'name' => 'labores',
            'placeholder' => 'Ingrese labores realizadas',
            'rows' => 3,
            'required' => TRUE
        ),
        'mesInicio' => array(
            'class' => 'form-control',
            'name' => 'mesInicio',
            'required' => TRUE
        ),        
        'anioInicio' => array(
            'class' => 'form-control',
            'name' => 'anioInicio',
            'required' => TRUE
        ),
        'mesFin' => array(
            'class' => 'form-control',
            'name' => 'mesFin',
            'required' => TRUE
        ),
        'anioFin' => array(
            'class' => 'form-control',
            'name' => 'anioFin',
            'required' => TRUE
        ),
        'beneficios' => array(
            'class' => 'form-control',
            'name' => 'beneficios',
            'placeholder' => 'Ingrese beneficios',
            'rows' => 3,            
            'required' => TRUE
        ),
        'salario' => array(
            'class' => 'form-control',
            'name' => 'salario',
            'placeholder' => 'Ingrese salario',
            'required' => TRUE
        ),
        'motivoRetiro' => array(
            'class' => 'form-control',
            'name' => 'motivoRetiro',
            'placeholder' => 'Ingrese motivo del retiro',
            'rows' => 3,
            'required' => TRUE
        )
    );

    $attributes = array(
        'role' => 'form',
        'autocomplete' => 'off'
    );
?>
                            <?= form_open('',$attributes);?>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <?= form_label($rules_usuario_laboral['empresa']['label'],$rules_usuario_laboral['empresa']['field']); ?>
                                        <?= form_input($rules_form['empresa']) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label($rules_usuario_laboral['direccion']['label'],$rules_usuario_laboral['direccion']['field']); ?>
                                        <?= form_input($rules_form['direccion']) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label($rules_usuario_laboral['telefono']['label'],$rules_usuario_laboral['telefono']['field']); ?>
                                        <?= form_input($rules_form['telefono']) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label($rules_usuario_laboral['cargo']['label'],$rules_usuario_laboral['cargo']['field']); ?>
                                        <?= form_input($rules_form['cargo']) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label($rules_usuario_laboral['salario']['label'],$rules_usuario_laboral['salario']['field']); ?>
                                        <?= form_input($rules_form['salario']) ?>
                                    </div>
                                    <div class="col-lg-3">
                                        <?= form_label($rules_usuario_laboral['mesInicio']['label'],$rules_usuario_laboral['mesInicio']['field']);?>
                                        <strong> / </strong>
                                        <?= form_label($rules_usuario_laboral['anioInicio']['label'],$rules_usuario_laboral['anioInicio']['field']); ?>
                                        <br>
                                        <?= form_dropdown($rules_form['mesInicio'],$meses,''); ?>
                                        <?= form_dropdown($rules_form['anioInicio'],$anios,''); ?>
                                    </div>
                                    <div class="col-lg-3">
                                        <?= form_label($rules_usuario_laboral['mesFin']['label'],$rules_usuario_laboral['mesFin']['field']);?>
                                        <strong> / </strong>
                                        <?= form_label($rules_usuario_laboral['anioFin']['label'],$rules_usuario_laboral['anioFin']['field']); ?>
                                        <br>
                                        <?= form_dropdown($rules_form['mesFin'],$meses,''); ?>
                                        <?= form_dropdown($rules_form['anioFin'],$anios,''); ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <?= form_label($rules_usuario_laboral['labores']['label'],$rules_usuario_laboral['labores']['field']); ?>
                                        <?= form_textarea($rules_form['labores']) ?>
                                    </div>

                                    <div class="col-lg-12">
                                        <?= form_label($rules_usuario_laboral['beneficios']['label'],$rules_usuario_laboral['beneficios']['field']); ?>
                                        <?= form_textarea($rules_form['beneficios']) ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <?= form_label($rules_usuario_laboral['motivoRetiro']['label'],$rules_usuario_laboral['motivoRetiro']['field']); ?>
                                        <?= form_textarea($rules_form['motivoRetiro']) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <center>
                                            <a href="<?= base_url(PATH_MENU)."/usuario"; ?>" class="btn btn-primary"><strong>ATRAS</strong></a>
                                        </center>
                                    </div>
                                    <div class="col-lg-6">
                                        <center>
                                            <button type="submit" class="btn btn-success"><strong>AGREGAR</strong></button>                                            
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <?= form_close(); ?>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
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