<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Menu de Administracion</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-10">
                            <strong>Administracion de Vacantes</strong>
                        </div>
                        <div class="col-lg-2">
                            <center><a href="<?= base_url(PATH_MENU)."/Vacante/add"; ?>" class="btn btn-primary"><strong>Nueva vacante</strong></a></center>
                        </div>                        
                    </div>                                            
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">                        
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titulo</th>
                                    <th>Descripcion</th>
                                    <th>Postulaciones</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
<?php
    if ($vacante){
        foreach($vacante->result() as $row_vacante){
?> 
                                <tr>
                                    <td><?= $row_vacante->idvac; ?></td>
                                    <td><strong><?= $row_vacante->titulo; ?></strong></td>
                                    <td><?= $row_vacante->descripcion; ?></td>
                                    <td><strong><?= $row_vacante->postulaciones; ?></strong></td>
                                    <!--
                                    <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-eye" title="Ver"></i></a></td>
                                    <td><a href="" class="btn btn-primary btn-xs"><i class="fa fa-send" title="Enviar"></i></a></td>-->
                                    <td>
                                        <a href="<?= base_url(PATH_MENU)."/Vacante/edit/".$row_vacante->idvac; ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil" title="Editar"></i></a>
                                        <a href="<?= base_url(PATH_MENU)."/Postulacion/viewPostulacionVacante/".$row_vacante->idvac; ?>" class="btn btn-default btn-xs"><i class="fa fa-eye" title="Ver Postulados"></i></a>
                                    </td>
                                </tr>                                
<?php
        }
    }else{                                        
?>
                                <tr>
                                    <td colspan="5">
                                        <center>
                                            <h2>No tienes Postulaciones</h2>
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