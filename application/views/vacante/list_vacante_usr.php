<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">                        
                <img src="<?php echo base_url(PATH_BACK2)?>/ujgh.png" class="img-thumbnail" alt="imgs" width="100%">
            </div>
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-10">
                            <strong><?= $row_vacante->titulo; ?></strong>
                        </div>                            
                        <div class="col-lg-2">
                            <a href="<?= base_url(PATH_MENU)."/vacante/get/".$row_vacante->idvac; ?>" class="btn btn-success btn-xs"><strong>VER VACANTE</strong></a>
                        </div>                        
                    </div>                    
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <strong>Descripcion</strong>
                            <p>                                
                                <?= $row_vacante->descripcion; ?>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <strong>Requisitos</strong>
                            <p>
                                <?=  $row_vacante->requisitos; ?>
                            </p>
                        </div>                            
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-5">
                            <strong>Salario: <?= $row_vacante->salario; ?></strong>
                        </div>
                        <div class="col-lg-5">
                            <strong>Tipo de vacante: <?= $row_vacante->tipo; ?></strong>
                        </div>
                        <div class="col-lg-2">
                            <strong>Postulados: <?= $row_vacante->postulaciones; ?></strong>
                        </div>
                    </div>
                </div>
            </div>
<?php
        }
    }else{
?>
            <div class="panel panel-primary">
                <div class="panel-heading">
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