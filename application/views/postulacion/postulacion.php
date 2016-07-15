<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Postulaciones</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <strong>Lista de Postulaciones</strong>
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
                                    <th>Beneficios</th>
                                    <th>Fecha de Postulacion</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
    if ($usuario_postula){
        foreach($usuario_postula->result() as $row_postula){
?> 
                                <tr>
                                    <td><?= $row_postula->idpos; ?></td>
                                    <td><strong><?= $row_postula->titulo; ?></strong></td>
                                    <td><?= $row_postula->descripcion; ?></td>
                                    <td><?= $row_postula->beneficios; ?></td>
                                    <td><?= date("d/m/Y", strtotime($row_postula->fechaPostulacion)); ?></td>
                                </tr>
<!-- idvac,beneficios,requisitos,salario,fechaPublicacion,tipo,idpos,idusu,fechaPostulacion -->                                
<?php
        }
    }else{                                        
?>
                                <tr>
                                    <td colspan="5">
                                        <center>
                                            <h2>No tienes Postulaciones</h2>
                                            <h3>Postulate a una de nuestras <a href="<?= base_url(PATH_MENU)."/Vacante"; ?>"><strong>VACANTES</strong></a>!!!</h3>
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