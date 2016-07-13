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
    <div class="row">        
        <div class="col-lg-12">
<?php
    if ($vacante){
        foreach($vacante->result() as $row_vacante){
?>
            <div class="panel panel-default"><!--panel-primary-->
                <div class="panel-heading">
                    <h4><strong><?= $row_vacante->titulo; ?></strong></h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4><strong>Descripcion</strong></h4>
                            <p>                                
                                <?= $row_vacante->descripcion; ?>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h4><strong>Requisitos</strong></h4>
                            <p>
                                <?=  $row_vacante->requisitos; ?>
                            </p>
                        </div>                            
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-5">
                            <strong>
                                Salario: <?= $row_vacante->salario; ?>
                            </strong>
                        </div>
                        <div class="col-lg-5">
                            <strong>
                                Tipo de vacante: <?= $row_vacante->tipo; ?>
                            </strong>                            
                        </div>
                        <div class="col-lg-2">
                            <a href="<?= base_url(PATH_MENU)."/Vacante/view/".$row_vacante->idvac; ?>" class="btn btn-success"><strong>VER VACANTE</strong></a>
                        </div>
                    </div>
                </div>
            </div>    
            <hr>
<?php
        }
    }else{
?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <!--<h4><strong><?= $row_vacante->titulo; ?></strong></h4>-->
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <center><h3>No tenemos vacantes disponibles actualmente para usted.</h3></center>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                </div>
            </div>
<?php            
    }        
?>
        </div>
        <!-- /.col-lg-6 -->        
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->