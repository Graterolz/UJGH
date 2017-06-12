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
										<div class="col-lg-4">
											<?= form_label($vacante_rules[TITULO]['label'],$vacante_rules[TITULO]['field']); ?>
											<?= form_input($vacante_form[TITULO]); ?>
										</div>
										<div class="col-lg-4">
											<?= form_label($vacante_rules[DESCRIPCION]['label'],$vacante_rules[DESCRIPCION]['field']); ?>
											<?= form_input($vacante_form[DESCRIPCION]) ?>
										</div>
										<div class="col-lg-4">
											<?= form_label($vacante_rules[TIPO]['label'],$vacante_rules[TIPO]['field']); ?>
											<?= form_dropdown(NULL,$tipo_vacante,$vacante_form[TIPO]['value'],$vacante_form[TIPO]); ?>
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
										<div class="col-lg-4">
											<?= form_label($vacante_rules[SALARIO]['label'],$vacante_rules[SALARIO]['field']); ?>
											<?= form_input($vacante_form[SALARIO]); ?>
										</div>
										<div class="col-lg-4">
											<?= form_label($vacante_rules[FECHA_REGISTRO]['label'],$vacante_rules[FECHA_REGISTRO]['field']); ?>
											<?= form_input($vacante_form[FECHA_REGISTRO]); ?>
										</div>
										<div class="col-lg-4">
											<br>
											<center>
												<a href="<?= base_url(PATH_MENU)."/".POSTULACION_ADD."/".$vacante_row->idvac; ?>" class="btn btn-success"><i class="fa fa-check fa-fw"></i><strong>ENVIAR CURRICULUM</strong></a>
											</center>
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
	</div>
	<!-- /.row -->
</div>
<!-- /#page-wrapper -->
