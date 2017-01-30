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
                        <div class="col-lg-10">
                            <div class="btn btn-default">
                                <i class="fa fa-table fa-fw"></i><strong><?= TITULO_VACANTE; ?></strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <a href="<?= base_url(PATH_MENU)."/".VACANTE_ADD; ?>" class="btn btn-default"><i class="fa fa-table fa-fw"></i><strong>NUEVO</strong></a>
                        </div>                        
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><?= $vacante_rules[IDVAC]['label']; ?></th>
                                    <th><?= $vacante_rules[TITULO]['label']; ?></th>
                                    <th><?= $vacante_rules[DESCRIPCION]['label']; ?></th>
                                    <th><?= $vacante_rules[FECHA_REGISTRO]['label']; ?></th>
                                    <th><?= $vacante_rules[POSTULACIONES]['label']; ?></th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
<?php
    if($vacante){    
        foreach($vacante->result() as $vacante_row){
            //var_dump($vacante_row);
?>                            
                                <tr>
                                    <td><?= $vacante_row->idvac; ?></td>
                                    <td><?= $vacante_row->titulo; ?></td>
                                    <td><?= $vacante_row->descripcion; ?></td>
                                    <td><?= date("d/m/Y", strtotime($vacante_row->fecha_registro)); ?></td>
                                    <td><center><?= $vacante_row->postulaciones; ?></center></td>
                                    <td><a href="<?= base_url(PATH_MENU)."/".VACANTE_GET."/".$vacante_row->idvac; ?>" class="btn btn-default btn-xs"><i class="fa fa-search fa-fw"></i><strong>VER</strong></a></td>
                                    <td><a href="<?= base_url(PATH_MENU)."/".VACANTE_EDIT."/".$vacante_row->idvac; ?>" class="btn btn-success btn-xs"><i class="fa fa-gear fa-fw"></i><strong>EDITAR</strong></a></td>
                                    <td><a href="<?= base_url(PATH_MENU)."/".VACANTE_DEL."/".$vacante_row->idvac; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i><strong>ELIMINAR</strong></a></td>
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