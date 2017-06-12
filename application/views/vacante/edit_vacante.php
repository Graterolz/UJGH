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
			'placeholder' => $vacante_rules[TITULO]['label'],
			'value' => $vacante_row->titulo,
			'required' => TRUE
		),
		DESCRIPCION => array(
			'class' => 'form-control',
			'name' => DESCRIPCION,
			'placeholder' => $vacante_rules[TITULO]['label'],
			'value' => $vacante_row->descripcion,
			'required' => TRUE
		),
		BENEFICIOS => array(
			'class' => 'form-control',
			'name' => BENEFICIOS,
			'rows' => 3,
			'style' => 'resize:none',
			'value' => $vacante_row->beneficios,
			'required' => TRUE
		),
		REQUISITOS => array(
			'class' => 'form-control',
			'name' => REQUISITOS,
			'rows' => 3,
			'style' => 'resize:none',
			'value' => $vacante_row->requisitos,
			'required' => TRUE
		),
		SALARIO => array(
			'class' => 'form-control',
			'name' => SALARIO,
			'value' => $vacante_row->salario,
			'required' => TRUE
		),
		TIPO => array(
			'class' => 'form-control',
			'name' => TIPO,
			'value' => $vacante_row->tipo,
			'required' => TRUE
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
										<div class="col-lg-5">
											<?= form_label($vacante_rules[TITULO]['label'],$vacante_rules[TITULO]['field']); ?>
											<?= form_input($vacante_form[TITULO]); ?>
										</div>
										<div class="col-lg-5">
											<?= form_label($vacante_rules[DESCRIPCION]['label'],$vacante_rules[DESCRIPCION]['field']); ?>
											<?= form_input($vacante_form[DESCRIPCION]) ?>
										</div>
										<div class="col-lg-2">
											<center>
												<button type="submit" class="btn btn-success "><i class="fa fa-gear fa-fw"></i><strong>EDITAR</strong></button>
											</center>
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
	</div>
	<!-- /.row -->
</div>
<!-- /#page-wrapper -->