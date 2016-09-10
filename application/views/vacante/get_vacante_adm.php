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
                        <div class="col-lg-12">
                            <strong>Detalles de la vacante</strong>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
<?php
if ($vacante){
    $row_vacante = $vacante->row();
    //var_dump($rules_vacante);
    $rules_form = array(
        'titulo' => array(
            'value' => $row_vacante->titulo
        ),
        'descripcion' => array(
            'value' => $row_vacante->descripcion
        ),
        'beneficios' => array(
            'value' => $row_vacante->beneficios
        ),
        'requisitos' => array(
            'value' => $row_vacante->requisitos
        ),
        'salario' => array(
            'value' => $row_vacante->salario
        ),
        'tipo' => array(
            'value' => $row_vacante->tipo
        )
    );
?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <?= form_label($rules_vacante['titulo']['label'],$rules_vacante['titulo']['field']) ?>
                                        <p class="form-control-static">
                                            <?= $rules_form['titulo']['value']; ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label($rules_vacante['beneficios']['label'],$rules_vacante['beneficios']['field']) ?>
                                        <p class="form-control-static">
                                            <?= $rules_form['beneficios']['value']; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <?= form_label($rules_vacante['descripcion']['label'],$rules_vacante['descripcion']['field']) ?>
                                        <p class="form-control-static">
                                            <?= $rules_form['descripcion']['value']; ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label($rules_vacante['requisitos']['label'],$rules_vacante['requisitos']['field']) ?>
                                        <p class="form-control-static">
                                            <?= $rules_form['requisitos']['value']; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <?= form_label($rules_vacante['salario']['label'],$rules_vacante['salario']['field']) ?>
                                        <p class="form-control-static">
                                            <?= $rules_form['salario']['value']; ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label($rules_vacante['tipo']['label'],$rules_vacante['tipo']['field']) ?>
                                        <p class="form-control-static">
                                            <?= $rules_form['tipo']['value']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
<?php
    }else{
?>
            <center>
                <h2>No existe la vacante solicitada.</h2>
            </center>
<?php            
    }
?>                         
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Lista de Postulados</strong>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre y apellido</th>
                                    <th>Cedula</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>
                                        <center>
                                            <a href="<?= base_url(PATH_MENU)."/usuario"; ?>" class="btn btn-primary btn-xs"><strong>ATRAS</strong></a>
                                        </center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
<?php
    if ($postulacion_vacante){
        foreach($postulacion_vacante->result() as $row_postula){
?> 
                                <tr>
                                    <td><?= $row_postula->idusu; ?></td>
                                    <td><?= $row_postula->nombre ." ". $row_postula->apellido; ?></td>
                                    <td><?= $row_postula->cedula; ?></td>
                                    <td><?= date("d/m/Y", strtotime($row_postula->fechaNacimiento)); ?></td>
                                    <td>
                                        <center>
                                            <a href="<?= base_url(PATH_MENU)."/usuario/get/".$row_postula->idusu; ?>" class="btn btn-default btn-xs"><strong>VER PERFIL</strong></a>
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
                                            <h2>No existe postulados para esta vacante.</h2>
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