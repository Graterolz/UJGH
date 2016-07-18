<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Ver postulados</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
<?php
    if ($vacante){
        foreach($vacante->result() as $row_vacante){
?>              
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-9">
                            <strong>Detalles de la vacante</strong>
                        </div>
                        <div class="col-lg-3">
                            Fecha de publicacion: 
                            <strong><?= date("d/m/Y", strtotime($row_vacante->fechaPublicacion)); ?></strong>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                	<div class="row">
                		<div class="col-lg-12">
                			<div class="row">
                				<div class="col-lg-6">
                					<div class="form-group">
                						<?= form_label('Titulo','titulo') ?>
                						<p class="form-control-static">
                							<?= $row_vacante->titulo; ?>
                						</p>
                					</div>
                					<div class="form-group">
                						<?= form_label('Descripcion','descripcion') ?>
                						<p class="form-control-static">
                							<?= $row_vacante->descripcion; ?>
                						</p>                                
                					</div>
                					<div class="form-group">
                						<?= form_label('Beneficios','beneficios') ?>
                						<p class="form-control-static">
                							<?= $row_vacante->beneficios; ?>
                						</p>                                
                					</div>
                				</div>

                				<div class="col-lg-6">
                					<div class="form-group">
                						<?= form_label('Requisitos','requisitos') ?>
                						<p class="form-control-static">
                							<?= $row_vacante->requisitos; ?>
                						</p>
                					</div>
                					<div class="form-group">
                						<?= form_label('Salario','salario') ?>
                						<p class="form-control-static">
                							<?= $row_vacante->salario; ?>
                						</p>
                					</div>
                					<div class="form-group">
                						<?= form_label('Tipo de vacante','tipo') ?><br>
                						<p class="form-control-static">
                							<?= $row_vacante->tipo; ?>
                						</p>
                					</div>
                				</div>                            
                			</div>
<?php
        }
    }else{
?>
            <h2>No existe la vacantes registradas!!!</h2>
<?php            
    }
?>                                    
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
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <strong>Lista de Postulados</strong>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">                        
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre y apellido</th>
                                    <th>Cedula</th>
                                    <!--<th>Fecha de nacimiento</th>-->
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
    if ($postulacion_vacante){
        foreach($postulacion_vacante->result() as $row_postula){
?> 
                                <tr>
                                    <td><?= $row_postula->idusu; ?></td>
                                    <td><?= $row_postula->nombre ." ". $row_postula->apellido; ?></td>
                                    <td><?= $row_postula->cedula; ?></td>
                                    <td><a href="<?= base_url(PATH_MENU)."/Usuario/viewCV/".$row_postula->idusu; ?>" class="btn btn-default btn-xs"><i class="fa fa-eye" title="Ver Perfil"></i></a></td>
                                </tr>
                               
<?php
        }
    }else{                                        
?>
                                <tr>
                                    <td colspan="5">
                                        <center>
                                            <h2>No hay postulaciones para esta vacante</h2>
                                            <!--<h3>Postulate a una de nuestras <a href="<?= base_url(PATH_MENU)."/Vacante"; ?>"><strong>VACANTES</strong></a>!!!</h3>-->
                                        </center>
                                    </td>
                                </tr>
<?php                                      
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
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->


</div>
<!-- /#page-wrapper -->