<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Edita Vacante</h2>
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
            <div class="panel panel-default"><!--panel-primary-->
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-12">
                            <center><h3><?= $row_vacante->titulo; ?></h3></center>
                        </div>
                    </div>                                         
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4><strong>Descripcion</strong></h4>
                            <p><?= $row_vacante->descripcion; ?></p>
                        </div>
                        <div class="col-lg-6">
                            <h4><strong>Requisitos</strong></h4>
                            <p><?=  $row_vacante->requisitos; ?></p>
                        </div>
                        <div class="col-lg-12">
                            <h4><strong>Beneficios</strong></h4>
                            <p><?=  $row_vacante->beneficios; ?></p>
                        </div>
                        <div class="col-lg-4">
                            <h4><strong>Salario</strong></h4>
                            <p class="form-control-static"><?= $row_vacante->salario; ?></p>
                        </div>
                        <div class="col-lg-4">
                            <h4><strong>Fecha de Publicacion</strong></h4>
                            <p class="form-control-static"><?= date("d/m/Y", strtotime($row_vacante->fechaPublicacion)); ?></p>                            
                        </div>
                        <div class="col-lg-4">
                            <h4><strong>Tipo de vacante</strong></h4>
                            <p class="form-control-static"><?= $row_vacante->tipo; ?></p>                            
                        </div>                        
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <!--<div class="col-lg-6">
                            <center><a href="<?= base_url(PATH_MENU)."/Vacante"; ?>" class="btn btn-primary"><strong>ATRAS</strong></a></center>
                        </div>
                        <div class="col-lg-6">
                            <center><a href="<?= base_url(PATH_MENU)."/Postulacion/enviaPostulacion/".$row_vacante->idvac; ?>" class="btn btn-success"><strong>ENVIAR CV</strong></a></center>
                        </div>-->
                    </div>
                </div>
            </div>    
            <hr>
<?php
        }
    }else{
?>
            <h2>No existen vacantes registradas!!!</h2>
<?php            
    }
?>
        </div>
        <!-- /.col-lg-6 -->        
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->