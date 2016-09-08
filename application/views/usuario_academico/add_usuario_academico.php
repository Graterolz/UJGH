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
                            <strong>Detalles de datos academicos</strong>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
<?php
    //var_dump($rules_usuario_academico);
    //var_dump($meses);
    //var_dump($anios);

    $rules_form = array(
        'titulo' => array(
            'class' => 'form-control',
            'name' => 'titulo',
            'placeholder' => 'Ingrese Titulo',
            'required' => TRUE
        ),
        'nivelEstudio' => array(
            'class' => 'form-control',
            'name' => 'nivelEstudio',
            'placeholder' => 'Ingrese Nivel de Estudios',
            'required' => TRUE
        ),
        'institucion' => array(
            'class' => 'form-control',
            'name' => 'institucion',
            'placeholder' => 'Ingrese Institucion',
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
        )
    );

    $attributes = array(
        'role' => 'form',
        'autocomplete' => 'off'
    );    
?> 
                    
                        <?= form_open('',$attributes); ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?= form_label($rules_usuario_academico['titulo']['label'],$rules_usuario_academico['titulo']['field']); ?>
                                    <?= form_input($rules_form['titulo']) ?>
                                </div>
                                <div class="col-lg-3">
                                    <?= form_label($rules_usuario_academico['mesInicio']['label'],$rules_usuario_academico['mesInicio']['field']);?>
                                    <strong> / </strong>
                                    <?= form_label($rules_usuario_academico['anioInicio']['label'],$rules_usuario_academico['anioInicio']['field']); ?>
                                    <br>
                                    <?= form_dropdown($rules_form['mesInicio'],$meses,''); ?>
                                    <?= form_dropdown($rules_form['anioInicio'],$anios,''); ?>
                                </div>
                                <div class="col-lg-3">
                                    <?= form_label($rules_usuario_academico['mesFin']['label'],$rules_usuario_academico['mesFin']['field']);?>
                                    <strong> / </strong>
                                    <?= form_label($rules_usuario_academico['anioFin']['label'],$rules_usuario_academico['anioFin']['field']); ?>
                                    <br>
                                    <?= form_dropdown($rules_form['mesFin'],$meses,''); ?>
                                    <?= form_dropdown($rules_form['anioFin'],$anios,''); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?= form_label($rules_usuario_academico['nivelEstudio']['label'],$rules_usuario_academico['nivelEstudio']['field']); ?>
                                    <?= form_input($rules_form['nivelEstudio']) ?>
                                </div>
                                <div class="col-lg-12">
                                    <?= form_label($rules_usuario_academico['institucion']['label'],$rules_usuario_academico['institucion']['field']); ?>
                                    <?= form_input($rules_form['institucion']) ?>
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