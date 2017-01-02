<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <br>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <i class="fa fa-edit fa-fw"></i><strong><?= TITULO_POSTULACION; ?></strong>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><?= ucwords(IDPOS); ?></th>
                                    <th><?= ucwords(TITULO); ?></th>
                                    <th><?= ucwords(DESCRIPCION); ?></th>
                                    <th><?= ucwords(BENEFICIOS); ?></th>
                                    <th><?= ucwords(TIPO); ?></th>
                                    <th><?= ucwords(ESTADO); ?></th>
                                    <th><?= ucwords(FECHA_REGISTRO); ?></th>
                                </tr>
                            </thead>
                            <tbody>
<?php
    if($postulacion){    
        foreach($postulacion->result() as $postulacion_row){
            //var_dump($postulacion_row);
?>                            
                                <tr>
                                    <td><?= $postulacion_row->idpos; ?></td>
                                    <td><?= $postulacion_row->titulo; ?></td>
                                    <td><?= $postulacion_row->descripcion; ?></td>
                                    <td><?= $postulacion_row->beneficios; ?></td>
                                    <td><?= $postulacion_row->tipo; ?></td>
                                    <td><?= $postulacion_row->estado; ?></td>
                                    <td><?= date("d/m/Y", strtotime($postulacion_row->fecha_registro)); ?></td>
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