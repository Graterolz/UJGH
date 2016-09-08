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
                            <strong>Detalles de la vacante</strong>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
<?php
    //var_dump($rules_vacante);

    $rules_form = array(
        'titulo' => array(
            'class' => 'form-control',
            'name' => 'titulo',
            'placeholder' => 'Ingrese titulo',
            'required' => TRUE
        ),
        'descripcion' => array(
            'class' => 'form-control',
            'name' => 'descripcion',
            'placeholder' => 'Ingrese descripcion',
            'rows' => 5,
            'required' => TRUE
        ),
        'beneficios' => array(
            'class' => 'form-control',
            'name' => 'beneficios',
            'placeholder' => 'Ingrese beneficios',
            'rows' => 5,
            'required' => TRUE
        ),
        'requisitos' => array(
            'class' => 'form-control',
            'name' => 'requisitos',
            'placeholder' => 'Ingrese requisitos',
            'rows' => 5,
            'required' => TRUE
        ),
        'salario' => array(
            'class' => 'form-control',
            'name' => 'salario',
            'placeholder' => 'Ingrese salario',
            'required' => TRUE
        ),
        'tipo' => array(
            'docente' => array(
                'name' => 'tipo',
                'value' => 'Docente',
                'checked' => TRUE
            ),
            'administrativo' => array(
                'name' => 'tipo',
                'value' => 'Administrativo'
            )
        )
    );

    $attributes = array(
        'role' => 'form',
        'autocomplete' => 'off'
    );
?>
                <?= form_open('',$attributes); ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?= form_label($rules_vacante['titulo']['label'],$rules_vacante['titulo']['field']) ?>
                                <?= form_input($rules_form['titulo']) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label($rules_vacante['descripcion']['label'],$rules_vacante['descripcion']['field']) ?>
                                <?= form_textarea($rules_form['descripcion']) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label($rules_vacante['beneficios']['label'],$rules_vacante['beneficios']['field']) ?>
                                <?= form_textarea($rules_form['beneficios']) ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?= form_label($rules_vacante['requisitos']['label'],$rules_vacante['requisitos']['field']) ?>
                                <?= form_textarea($rules_form['requisitos']) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label($rules_vacante['salario']['label'],$rules_vacante['salario']['field']) ?>
                                <?= form_input($rules_form['salario']) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label($rules_vacante['tipo']['label'],$rules_vacante['tipo']['field']) ?><br><br>
                                <?= form_radio($rules_form['tipo']['docente']); ?>
                                    <strong>
                                        <?= $rules_form['tipo']['docente']['value']?>
                                    </strong><br>
                                <?= form_radio($rules_form['tipo']['administrativo']); ?>
                                    <strong>
                                        <?= $rules_form['tipo']['administrativo']['value']?>
                                    </strong><br>
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <center>
                                <a href="<?= base_url(PATH_MENU)."/usuario"; ?>" class="btn btn-primary"><strong>ATRAS</strong></a>
                            </center>
                        </div>
                        <div class="col-lg-3">
                            <center>
                                <button type="submit" class="btn btn-success"><strong>AGREGAR VACANTE</strong></button>
                            </center>
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