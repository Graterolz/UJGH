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
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-10">
                            <h4>Modulo de Vacantes</h4>
                        </div>
                        <div class="col-lg-2">
                            <center><a href="<?= base_url(PATH_MENU)."/vacante/add"; ?>" class="btn btn-primary"><strong>NUEVA VACANTE</strong></a></center>
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
                                    <td>
                                        <center>
                                            <a href="<?= base_url(PATH_MENU)."/vacante/get/".$row_vacante->idvac; ?>" class="btn btn-default btn-xs"><strong>VER</strong></i></a>
                                            <a href="<?= base_url(PATH_MENU)."/vacante/edit/".$row_vacante->idvac; ?>" class="btn btn-success btn-xs"><strong>EDITAR</strong></a>
                                            <a href="<?= base_url(PATH_MENU)."/vacante/del/".$row_vacante->idvac; ?>" class="btn btn-danger btn-xs"><strong>BORRAR</strong></a>
                                        </center>
                                    </td>
                                </tr>
<?php
        }
    }else{
?>
                                <tr>
                                    <td colspan="5">
                                        <center>
                                            <h2>No existen vacantes.</h2>
                                            <h3>Crea una nueva <a href="<?= base_url(PATH_MENU)."/vacante/add"; ?>"><strong>VACANTE</strong></a>!!!</h3>
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