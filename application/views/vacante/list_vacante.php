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
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?= $row_vacante->titulo; ?>
                </div>
                <div class="panel-body">
                    <p>
                        <strong>Descripcion</strong><br><br>
                        <?= $row_vacante->descripcion; ?><br>
                    </p>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-4">
                            <strong>Salario: </strong>
                            <?= $row_vacante->salario; ?>
                        </div>
                        <div class="col-lg-4">
                            <strong>Tipo de vacante: </strong>
                            <?= $row_vacante->tipo; ?>
                        </div>
                        <div class="col-lg-4">
                            <a href="Vacante/view/<?= $row_vacante->idvac; ?>" class="btn btn-success"><strong>VER VACANTE</strong></a>
                        </div>
                    </div>
                </div>
            </div>    
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