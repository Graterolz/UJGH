<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Vacantes</h2>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
<?php
    if ($vacante){
        $row_vacante = $vacante->row();
?>    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2><?= $row_vacante->titulo; ?></h2>
                        </div>
                        <div class="col-lg-2">
                            <br>
                            <a href="Vacante/view/<?= $row_vacante->idvac; ?>" class="btn btn-primary"><strong>ENVIAR CV</strong></a>
                        </div>
                    </div>                        
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <p class="form-control-static"><?= $row_vacante->descripcion; ?></p>
                                </div>
                                <div class="form-group">
                                    <label>Beneficios</label>
                                    <p class="form-control-static"><?= $row_vacante->beneficios; ?></p>
                                </div>
                                <div class="form-group">
                                    <label>Requisitos</label>
                                    <p class="form-control-static"><?= $row_vacante->requisitos; ?></p>
                                </div>
                                <div class="form-group">
                                    <label>Salario</label>
                                    <p class="form-control-static"><?= $row_vacante->salario; ?></p>
                                </div>
                                <div class="form-group">
                                    <label>Fecha de Publicacion</label>
                                    <p class="form-control-static"><?= $row_vacante->fechaPublicacion; ?></p>
                                </div>
                                <div class="form-group">
                                    <label>Tipo de vacante</label>
                                    <p class="form-control-static"><?= $row_vacante->tipo; ?></p>
                                </div>                                
<?php
/*
<p><?= $row_vacante->idvac; ?></p>
*/
}
?>                                
                            </form>
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
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<!--<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Vacantes</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
<?php
    if ($vacante){
        foreach($vacante->result() as $row){
?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?= $row->titulo; ?>
                </div>
                <div class="panel-body">
                    <p>
                        <strong>Descripcion</strong><br><br>
                        <?= $row->descripcion; ?><br>
                    </p>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-4">
                            <strong>Salario: </strong>
                            <?= $row->salario; ?>
                        </div>
                        <div class="col-lg-4">
                            <strong>Tipo de vacante: </strong>
                            <?= $row->tipo; ?>
                        </div>
                        <div class="col-lg-4">
                            <a href="Vacante/view/<?= $row->idvac; ?>" class="btn btn-success"><strong>Ver vacante</strong></a>
                        </div>
                    </div>
                </div>
            </div>    
<?php
        }
    }else{
?>
            <h2>No existen vacante registradas</h2>
<?php            
    }        
?>
        </div>
    </div>
</div>
-->