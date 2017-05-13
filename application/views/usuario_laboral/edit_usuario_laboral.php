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
if ($usuario_laboral){
	$usuario_laboral_row = $usuario_laboral->row();

	$usuario_laboral_form = array(
		EMPRESA => array(
			'class' => 'form-control',
			'name' => EMPRESA,
			'placeholder' => $usuario_laboral_rules[EMPRESA]['label'],
			'value' => $usuario_laboral_row->empresa,
			'required' => TRUE
		),
		DIRECCION => array(
			'class' => 'form-control',
			'name' => DIRECCION,
			'placeholder' => $usuario_laboral_rules[DIRECCION]['label'],
			'value' => $usuario_laboral_row->direccion,
			'required' => TRUE
		),
		TELEFONO1 => array(
			'class' => 'form-control',
			'name' => TELEFONO1,
			'placeholder' => $usuario_laboral_rules[TELEFONO1]['label'],
			'value' => $usuario_laboral_row->telefono1,
			'required' => TRUE
		),
		CARGO => array(
			'class' => 'form-control',
			'name' => CARGO,
			'placeholder' => $usuario_laboral_rules[CARGO]['label'],
			'value' => $usuario_laboral_row->cargo,
			'required' => TRUE
		),
		LABORES => array(
			'class' => 'form-control',
			'name' => LABORES,
			'placeholder' => $usuario_laboral_rules[LABORES]['label'],
			'value' => $usuario_laboral_row->labores,
			'required' => TRUE
		),
		MES_INICIO => array(
			'class' => 'form-control',
			'name' => MES_INICIO,
			'value' => $usuario_laboral_row->mes_inicio,
			'required' => TRUE
		),
		ANIO_INICIO => array(
			'class' => 'form-control',
			'name' => ANIO_INICIO,
			'value' => $usuario_laboral_row->anio_inicio,
			'required' => TRUE
		),
		MES_FIN => array(
			'class' => 'form-control',
			'name' => MES_FIN,
			'value' => $usuario_laboral_row->mes_fin,
			'required' => TRUE
		),
		ANIO_FIN => array(
			'class' => 'form-control',
			'name' => ANIO_FIN,
			'value' => $usuario_laboral_row->anio_fin,
			'required' => TRUE
		),
		BENEFICIOS => array(
			'class' => 'form-control',
			'name' => BENEFICIOS,
			'placeholder' => $usuario_laboral_rules[BENEFICIOS]['label'],
			'value' => $usuario_laboral_row->beneficios,
			'required' => TRUE
		),
		SALARIO => array(
			'class' => 'form-control',
			'name' => SALARIO,
			'placeholder' => $usuario_laboral_rules[SALARIO]['label'],
			'value' => $usuario_laboral_row->salario,
			'required' => TRUE
		),
		MOTIVO_RETIRO => array(
			'class' => 'form-control',
			'name' => MOTIVO_RETIRO,
			'placeholder' => $usuario_laboral_rules[MOTIVO_RETIRO]['label'],
			'value' => $usuario_laboral_row->motivo_retiro,
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
									<i class="fa fa-suitcase fa-fw"></i><strong><?= TITULO_USUARIO_LABORAL; ?></strong>
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
											<?= form_label($usuario_laboral_rules[EMPRESA]['label'],$usuario_laboral_rules[EMPRESA]['field']); ?>
											<?= form_input($usuario_laboral_form[EMPRESA]) ?>
										</div>
										<div class="col-lg-3">
											<?= form_label($usuario_laboral_rules[MES_INICIO]['label']." / ".$usuario_laboral_rules[ANIO_INICIO]['label']); ?>
											<br>
											<?= form_dropdown(NULL,$meses,$usuario_laboral_form[MES_INICIO]['value'],$usuario_laboral_form[MES_INICIO]); ?>
											<?= form_dropdown(NULL,$anios,$usuario_laboral_form[ANIO_INICIO]['value'],$usuario_laboral_form[ANIO_INICIO]); ?>
										</div>
										<div class="col-lg-3">
											<?= form_label($usuario_laboral_rules[MES_FIN]['label']." / ".$usuario_laboral_rules[ANIO_FIN]['label']); ?>
											<br>
											<?= form_dropdown(NULL,$meses,$usuario_laboral_form[MES_FIN]['value'],$usuario_laboral_form[MES_FIN]); ?>
											<?= form_dropdown(NULL,$anios,$usuario_laboral_form[ANIO_FIN]['value'],$usuario_laboral_form[ANIO_FIN]); ?>
										</div>
										<div class="col-lg-2">
											<center>
												<button type="submit" class="btn btn-success "><i class="fa fa-gear fa-fw"></i><strong>EDITAR</strong></button>
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
										<div class="col-lg-4">
											<div class="form-group">
												<?= form_label($usuario_laboral_rules[TELEFONO1]['label'],$usuario_laboral_rules[TELEFONO1]['field']); ?>
												<?= form_input($usuario_laboral_form[TELEFONO1]); ?>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
												<?= form_label($usuario_laboral_rules[CARGO]['label'],$usuario_laboral_rules[CARGO]['field']); ?>
												<?= form_input($usuario_laboral_form[CARGO]); ?>
											</div>
										</div>
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.panel-body -->
			</div>
			<?= form_close(); ?>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
</div>
<!-- /#page-wrapper -->