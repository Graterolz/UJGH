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
	$usuario_adjunto_form = array(
		TITULO => array(
			'class' => 'form-control',
			'name' => TITULO,
			'placeholder' => $usuario_adjunto_rules[TITULO]['label'],
			'required' => TRUE
		)
	);
?>
			<?= form_open_multipart('',$form_attributes);?>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-lg-10">
							<div class="btn btn-default">
								<a href="<?= base_url(PATH_MENU)."/".USUARIO_INFO_CONTROLLER; ?>">
									<i class="fa fa-paperclip fa-fw"></i><strong><?= TITULO_USUARIO_ADJUNTO; ?></strong>
								</a>
							</div>
						</div>
						<div class="col-lg-2">
							<button type="submit" class="btn btn-default"><i class="fa fa-paperclip fa-fw"></i><strong>NUEVO</strong></button>
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
											<?= form_label($usuario_adjunto_rules[TITULO]['label'],$usuario_adjunto_rules[TITULO]['field']); ?>
											<?= form_input($usuario_adjunto_form[TITULO]) ?>
										</div>
										<div class="col-lg-6">
											<?= form_label($usuario_adjunto_rules[URL]['label'],$usuario_adjunto_rules[URL]['field']); ?>
											<!-- Alternativa HTML -->
											<input type="file" name="userfile" required>
										</div>
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