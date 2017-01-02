<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Titulos Paneles
define ('TITULO_VACANTES' , 'Vacantes');
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
                    <i class="fa fa-table fa-fw"></i><strong><?= TITULO_VACANTES; ?></strong>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><?= ucwords(IDADJ); ?></th>
                                    <th><?= ucwords(TITULO); ?></th>
                                    <th><?= ucwords(DESCRIPCION); ?></th>
                                    <th><?= ucwords(BENEFICIOS); ?></th>
                                    <th><?= ucwords(FECHA_REGISTRO); ?></th>
                                    <th></th>
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
                                    <td><?= $vacante_row->beneficios; ?></td>
                                    <td><?= date("d/m/Y", strtotime($vacante_row->fecha_registro)); ?></td>
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