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
	$usuario_academico_form = array(
		TITULO => array(
			'class' => 'form-control',
			'name' => TITULO,
			'placeholder' => $usuario_academico_rules[TITULO]['label'],
			'required' => TRUE
		),
		NIVEL_ESTUDIO => array(
			'class' => 'form-control',
			'name' => NIVEL_ESTUDIO,
			'placeholder' => $usuario_academico_rules[NIVEL_ESTUDIO]['label'],
			'required' => TRUE
		),
		INSTITUCION => array(
			'class' => 'form-control',
			'name' => INSTITUCION,
			'placeholder' => $usuario_academico_rules[INSTITUCION]['label'],
			'required' => TRUE
		),
		MES_INICIO => array(
			'class' => 'form-control',
			'name' => MES_INICIO,
			'required' => TRUE
		),
		ANIO_INICIO => array(
			'class' => 'form-control',
			'name' => ANIO_INICIO,
			'required' => TRUE
		),
		MES_FIN => array(
			'class' => 'form-control',
			'name' => MES_FIN,
			'required' => TRUE
		),
		ANIO_FIN => array(
			'class' => 'form-control',
			'name' => ANIO_FIN,
			'required' => TRUE
		)
	);
?>
			<?= form_open('',$form_attributes);?>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-lg-10">
							<div class="btn btn-default">
								<a href="<?= base_url(PATH_MENU)."/".USUARIO_INFO_CONTROLLER; ?>">
									<i class="fa fa-book fa-fw"></i><strong><?= TITULO_USUARIO_ACADEMICO; ?></strong>
								</a>
							</div>
						</div>
						<div class="col-lg-2">
							<button type="submit" class="btn btn-default"><i class="fa fa-book fa-fw"></i><strong>NUEVO</strong></button>
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
											<?= form_label($usuario_academico_rules[TITULO]['label'],$usuario_academico_rules[TITULO]['field']); ?>
											<?= form_input($usuario_academico_form[TITULO]) ?>
										</div>
										<div class="col-lg-4">
											<?= form_label($usuario_academico_rules[MES_INICIO]['label']." / ".$usuario_academico_rules[ANIO_INICIO]['label']); ?>
											<br>
											<?= form_dropdown(NULL,$meses,NULL,$usuario_academico_form[MES_INICIO]); ?>
											<?= form_dropdown(NULL,$anios,NULL,$usuario_academico_form[ANIO_INICIO]); ?>
										</div>
										<div class="col-lg-4">
											<?= form_label($usuario_academico_rules[MES_FIN]['label']." / ".$usuario_academico_rules[ANIO_FIN]['label']); ?>
											<br>
											<?= form_dropdown(NULL,$meses,NULL,$usuario_academico_form[MES_FIN]); ?>
											<?= form_dropdown(NULL,$anios,NULL,$usuario_academico_form[ANIO_FIN]); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<?= form_label($usuario_academico_rules[INSTITUCION]['label'],$usuario_academico_rules[INSTITUCION]['field']); ?>
									<?= form_input($usuario_academico_form[INSTITUCION]) ?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<?= form_label($usuario_academico_rules[NIVEL_ESTUDIO]['label'],$usuario_academico_rules[NIVEL_ESTUDIO]['field']); ?>
									<?= form_input($usuario_academico_form[NIVEL_ESTUDIO]) ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?= form_close(); ?>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
</div>
<!-- /#page-wrapper -->