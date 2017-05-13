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
if ($usuario_academico){
	$usuario_academico_row = $usuario_academico->row();

	$usuario_academico_form = array(
		TITULO => array(
			'class' => 'form-control',
			'name' => TITULO,
			'placeholder' => $usuario_academico_rules[TITULO]['label'],
			'value' => $usuario_academico_row->titulo,
			'required' => TRUE
		),
		NIVEL_ESTUDIO => array(
			'class' => 'form-control',
			'name' => NIVEL_ESTUDIO,
			'placeholder' => $usuario_academico_rules[NIVEL_ESTUDIO]['label'],
			'value' => $usuario_academico_row->nivel_estudio,
			'required' => TRUE
		),
		INSTITUCION => array(
			'class' => 'form-control',
			'name' => INSTITUCION,
			'placeholder' => $usuario_academico_rules[INSTITUCION]['label'],
			'value' => $usuario_academico_row->institucion,
			'required' => TRUE
		),
		MES_INICIO => array(
			'class' => 'form-control',
			'name' => MES_INICIO,
			'value' => $usuario_academico_row->mes_inicio,
			'required' => TRUE
		),
		ANIO_INICIO => array(
			'class' => 'form-control',
			'name' => ANIO_INICIO,
			'value' => $usuario_academico_row->anio_inicio,
			'required' => TRUE
		),
		MES_FIN => array(
			'class' => 'form-control',
			'name' => MES_FIN,
			'value' => $usuario_academico_row->mes_fin,
			'required' => TRUE
		),
		ANIO_FIN => array(
			'class' => 'form-control',
			'name' => ANIO_FIN,
			'value' => $usuario_academico_row->anio_fin,
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
								<a href="<?= base_url(PATH_MENU)."/".USUARIO_INFO_CONTROLLER; ?>">
									<i class="fa fa-book fa-fw"></i><strong><?= TITULO_USUARIO_ACADEMICO; ?></strong>
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
											<?= form_label($usuario_academico_rules[TITULO]['label'],$usuario_academico_rules[TITULO]['field']); ?>
											<?= form_input($usuario_academico_form[TITULO]) ?>
										</div>
										<div class="col-lg-3">
											<?= form_label($usuario_academico_rules[MES_INICIO]['label']." / ".$usuario_academico_rules[ANIO_INICIO]['label']); ?>
											<br>
											<?= form_dropdown(NULL,$meses,$usuario_academico_form[MES_INICIO]['value'],$usuario_academico_form[MES_INICIO]); ?>
											<?= form_dropdown(NULL,$anios,$usuario_academico_form[ANIO_INICIO]['value'],$usuario_academico_form[ANIO_INICIO]); ?>
										</div>
										<div class="col-lg-3">
											<?= form_label($usuario_academico_rules[MES_FIN]['label']." / ".$usuario_academico_rules[ANIO_FIN]['label']); ?>
											<br>
											<?= form_dropdown(NULL,$meses,$usuario_academico_form[MES_FIN]['value'],$usuario_academico_form[MES_FIN]); ?>
											<?= form_dropdown(NULL,$anios,$usuario_academico_form[ANIO_FIN]['value'],$usuario_academico_form[ANIO_FIN]); ?>
										</div>
										<div class="col-lg-2">
											<center>
												<button type="submit" class="btn btn-success "><i class="fa fa-gear fa-fw"></i><strong>EDITAR</strong></button>
											</center>
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