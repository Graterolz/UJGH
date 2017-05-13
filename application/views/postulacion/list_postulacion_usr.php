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
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-lg-12">
							<div class="btn btn-default">
								<i class="fa fa-edit fa-fw"></i><strong><?= TITULO_POSTULACION; ?></strong>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th><?= $postulacion_rules[IDPOS]['label']; ?></th>
									<th><?= $vacante_rules[TITULO]['label']; ?></th>
									<th><?= $vacante_rules[DESCRIPCION]['label']; ?></th>
									<th><?= $vacante_rules[BENEFICIOS]['label']; ?></th>
									<th><?= $vacante_rules[TIPO]['label']; ?></th>
									<th><?= $postulacion_rules[ESTADO]['label']; ?></th>
									<th><?= $vacante_rules[FECHA_REGISTRO]['label']; ?></th>
								</tr>
							</thead>
							<tbody>
<?php
	if($postulacion){
		foreach($postulacion->result() as $postulacion_row){
			//var_dump($postulacion_row);
?>
								<tr>
									<td><?= $postulacion_row->idpos; ?></td>
									<td><?= $postulacion_row->titulo; ?></td>
									<td><?= $postulacion_row->descripcion; ?></td>
									<td><?= $postulacion_row->beneficios; ?></td>
									<td><?= $postulacion_row->tipo; ?></td>
									<td><?= $postulacion_row->estado; ?></td>
									<td><?= date("d/m/Y", strtotime($postulacion_row->fecha_registro)); ?></td>
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
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-8 -->
	</div>
	<!-- /.row -->
</div>
<!-- /#page-wrapper -->