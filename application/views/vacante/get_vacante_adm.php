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
if ($vacante){
    $vacante_row = $vacante->row();

    $vacante_form = array(
    	TITULO => array(
			'class' => 'form-control',
			'name' => TITULO,
			'value' => $vacante_row->titulo,
			'readonly' => TRUE
    	),
    	DESCRIPCION => array(
			'class' => 'form-control',
			'name' => DESCRIPCION,
			'value' => $vacante_row->descripcion,
			'readonly' => TRUE
    	),
    	BENEFICIOS => array(
			'class' => 'form-control',
			'name' => BENEFICIOS,
			'rows' => 3,
			'style' => 'resize:none',
			'value' => $vacante_row->beneficios,
			'readonly' => TRUE
    	),
    	REQUISITOS => array(
			'class' => 'form-control',
			'name' => REQUISITOS,
			'rows' => 3,
			'style' => 'resize:none',
			'value' => $vacante_row->requisitos,
			'readonly' => TRUE
    	),
    	SALARIO => array(
			'class' => 'form-control',
			'name' => SALARIO,
			'value' => $vacante_row->salario,
			'readonly' => TRUE
    	),
    	TIPO => array(
			'class' => 'form-control',
			'name' => TIPO,
			'value' => $vacante_row->tipo,
			'disabled' => TRUE
    	),
    	FECHA_REGISTRO => array(
			'class' => 'form-control',
			'name' => FECHA_REGISTRO,
			'value' => date("d/m/Y", strtotime($vacante_row->fecha_registro)),
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
                                <a href="<?= base_url(PATH_MENU)."/".VACANTE_CONTROLLER; ?>">
                                    <i class="fa fa-table fa-fw"></i><strong><?= TITULO_VACANTE; ?></strong>
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
                                        <div class="col-lg-6">
                                            <?= form_label($vacante_rules[TITULO]['label'],$vacante_rules[TITULO]['field']); ?>
                                            <?= form_input($vacante_form[TITULO]); ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <?= form_label($vacante_rules[DESCRIPCION]['label'],$vacante_rules[DESCRIPCION]['field']); ?>
                                            <?= form_input($vacante_form[DESCRIPCION]) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?= form_label($vacante_rules[REQUISITOS]['label'],$vacante_rules[REQUISITOS]['field']); ?>
                                            <?= form_textarea($vacante_form[REQUISITOS]); ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <?= form_label($vacante_rules[BENEFICIOS]['label'],$vacante_rules[BENEFICIOS]['field']); ?>
                                            <?= form_textarea($vacante_form[BENEFICIOS]); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?= form_label($vacante_rules[SALARIO]['label'],$vacante_rules[SALARIO]['field']); ?>
                                            <?= form_input($vacante_form[SALARIO]); ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <?= form_label($vacante_rules[TIPO]['label'],$vacante_rules[TIPO]['field']); ?>
                                            <?= form_dropdown(NULL,$tipo_vacante,$vacante_form[TIPO]['value'],$vacante_form[TIPO]); ?>
                                        </div>
                                    </div>
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

        <div class="col-lg-12">
            <?= form_open('',$form_attributes);?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn btn-default">
                                <a href="<?= base_url(PATH_MENU)."/".VACANTE_CONTROLLER; ?>">
                                    <i class="fa fa-table fa-fw"></i><strong><?= TITULO_VACANTE; ?></strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><?= $usuario_info_rules[IDUSU]['label']; ?></th>
                                    <th><?= $usuario_info_rules[NOMBRE]['label']; ?></th>
                                    <th><?= $usuario_info_rules[APELLIDO]['label']; ?></th>
                                    <th><?= $usuario_info_rules[CEDULA]['label']; ?></th>
                                    <th><?= $usuario_info_rules[EMAIL]['label']; ?></th>
                                    <th colspan="1"></th>
                                </tr>
                            </thead>
                            <tbody>
<?php
    if($usuario_info){    
        foreach($usuario_info->result() as $usuario_info_row){
            //var_dump($usuario_info);
?>                            
                                <tr>
                                    <td><?= $usuario_info_row->idusu; ?></td>
                                    <td><?= $usuario_info_row->nombre; ?></td>
                                    <td><?= $usuario_info_row->apellido; ?></td>
                                    <td><?= $usuario_info_row->cedula; ?></td>
                                    <td><?= $usuario_info_row->email; ?></td>
                                    <td><a href="<?= base_url(PATH_MENU)."/".USUARIO_INFO_GET."/".$usuario_info_row->idusu; ?>" class="btn btn-default btn-xs"><i class="fa fa-search fa-fw"></i><strong>VER</strong></a></td>
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
                <!-- /.col-lg-12 (nested) -->
            </div>
            <?= form_close(); ?>
            <!-- /.row (nested) -->
        </div>            
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->