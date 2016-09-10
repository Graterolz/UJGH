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
        <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-10">
                            <strong>Datos Personales</strong>
                        </div>
<?php
if ($usuario_info){
    $row_usuario_info = $usuario_info->row();
?>
                        <div class="col-lg-2">
                            <!--<center>
                                <a href="<?= base_url(PATH_MENU)."/usuario_info/edit/".$row_usuario_info->idusu; ?>" class="btn btn-primary btn-xs"><strong>EDITAR</strong></a>
                            </center>-->
                        </div>
<?php
}
?>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form">
<?php
if ($usuario_info){
    //var_dump($usuario_info);
    //var_dump($rules_usuario_info);

    $rules_form_info = array(
        'email' => array(
            'value' => $row_usuario_info->email
        ),
        'cedula' => array(
            'value' => $row_usuario_info->cedula
        ),
        'nombre' => array(
            'value' => $row_usuario_info->nombre
        ),
        'apellido' => array(
            'value' => $row_usuario_info->apellido
        ),
        'fechaNacimiento' => array(
            'value' => date("d/m/Y", strtotime($row_usuario_info->fechaNacimiento))//$row_usuario_info->fechaNacimiento
        ),
        'nacionalidad' => array(
            'value' => $row_usuario_info->nacionalidad
        ),
        'direccion' => array(
            'value' => $row_usuario_info->direccion
        ),
        'telefonoCelular' => array(
            'value' => $row_usuario_info->telefonoCelular
        ),
        'telefonoFijo' => array(
            'value' => $row_usuario_info->telefonoFijo
        ),
        'estadoCivil' => array(
            'value' => $row_usuario_info->estadoCivil
        ),
        'sexo' => array(
            'value' => $row_usuario_info->sexo
        )
    );
?>
                                    <h3><?= $rules_form_info['nombre']['value']." ".$rules_form_info['apellido']['value']; ?></h3>
                                    <p class="form-control-static">
                                        <?= form_label($rules_usuario_info['fechaNacimiento']['label'],$rules_usuario_info['fechaNacimiento']['field']) ?>
                                        <strong>:</strong>
                                        <?= $rules_form_info['fechaNacimiento']['value']; ?>
                                        <br>
                                        <?= form_label($rules_usuario_info['nacionalidad']['label'],$rules_usuario_info['nacionalidad']['field']) ?>
                                        <strong>:</strong>
                                        <?= $rules_form_info['nacionalidad']['value']; ?>
                                        <br>
                                        <?= form_label($rules_usuario_info['estadoCivil']['label'],$rules_usuario_info['estadoCivil']['field']) ?>
                                        <strong>:</strong>
                                        <?= $rules_form_info['estadoCivil']['value']; ?>
                                        <br>
                                        <?= form_label($rules_usuario_info['cedula']['label'],$rules_usuario_info['cedula']['field']) ?>
                                        <strong>:</strong>
                                        <?= $rules_form_info['cedula']['value']; ?>
                                        <br>
                                        <?= form_label($rules_usuario_info['sexo']['label'],$rules_usuario_info['sexo']['field']) ?>
                                        <strong>:</strong>
                                        <?= $rules_form_info['sexo']['value']; ?>
                                        <br>
                                        <?= form_label($rules_usuario_info['direccion']['label'],$rules_usuario_info['direccion']['field']) ?>
                                        <strong>:</strong>
                                        <?= $rules_form_info['direccion']['value']; ?>
                                        <br>
                                        <?= form_label($rules_usuario_info['telefonoCelular']['label'],$rules_usuario_info['telefonoCelular']['field']) ?>
                                        <strong>:</strong>
                                        <?= $rules_form_info['telefonoCelular']['value']; ?>
                                        <br>
                                        <?= form_label($rules_usuario_info['telefonoFijo']['label'],$rules_usuario_info['telefonoFijo']['field']) ?>
                                        <strong>:</strong>
                                        <?= $rules_form_info['telefonoFijo']['value']; ?>
                                        <br>
                                        <?= form_label($rules_usuario_info['email']['label'],$rules_usuario_info['email']['field']) ?>
                                        <strong>:</strong>
                                        <?= $rules_form_info['email']['value']; ?>
                                    </p>
<?php
}else{
?>
                                    <strong>Sin datos de personales.</strong>
<?php    
}
?>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->

        <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-9">
                            <strong>Datos Adjuntos</strong>
                        </div>
                        <div class="col-lg-3">
                            <center>
                                <!--<a href="<?= base_url(PATH_MENU)."/usuario_adjunto/add"; ?>" class="btn btn-primary btn-xs"><strong>AGREGAR</strong></a>-->
                                <a href="<?= base_url(PATH_MENU)."/usuario"; ?>" class="btn btn-primary btn-xs"><strong>ATRAS</strong></a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
<?php
    if($usuario_adjunto){
        //var_dump($rules_usuario_adjunto);
        foreach($usuario_adjunto->result() as $row_usuario_adjunto){
            $rules_form_adjunto = array(
                'idadj' => array(
                    'value' => $row_usuario_adjunto->idadj
                ),
                'titulo' => array(
                    'value' => $row_usuario_adjunto->titulo
                ),
                'url' => array(
                    'value' => $row_usuario_adjunto->url
                )
            );            
?>
                    <p class="form-control-static">
                        <!--<a href="<?= base_url(PATH_MENU)."/usuario_adjunto/del/".$rules_form_adjunto['idadj']['value']; ?>" class="btn btn-danger btn-xs"><strong>ELIMINAR</strong></a>-->
                        <a href="<?= base_url()."uploads/".$rules_form_adjunto['url']['value']; ?>" target="_blank"><strong># <?= $rules_form_adjunto['titulo']['value']; ?></strong></a>
                    </p>
<?php
        }
    }else{
?>
                                <strong>Sin datos adjuntos.</strong>
<?php
    }
?>
                            </form>
                        </div>
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
                    <div class="row">
                        <div class="col-lg-10">
                            <strong>Datos Academicos</strong>
                        </div>
                        <div class="col-lg-2">
                            <!--<center>
                                <a href="<?= base_url(PATH_MENU)."/usuario_academico/add"; ?>" class="btn btn-primary btn-xs"><strong>AGREGAR</strong></a>
                            </center>-->
                        </div>  
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form">
<?php
    if($usuario_academico){
        //var_dump($rules_usuario_academico);
        foreach($usuario_academico->result() as $row_usuario_academico){
            $rules_form_academico = array(
                'idaca' => array(
                    'value' => $row_usuario_academico->idaca
                ),
                'titulo' => array(
                    'value' => $row_usuario_academico->titulo
                ),
                'nivelEstudio' => array(
                    'value' => $row_usuario_academico->nivelEstudio
                ),
                'institucion' => array(
                    'value' => $row_usuario_academico->institucion
                ),
                'mesInicio' => array(
                    'value' => $row_usuario_academico->mesInicio
                ),
                'anioInicio' => array(
                    'value' => $row_usuario_academico->anioInicio
                ),
                'mesFin' => array(
                    'value' => $row_usuario_academico->mesFin
                ),
                'anioFin' => array(
                    'value' => $row_usuario_academico->anioFin
                )
            );
?>
                            <div class="row">
                                <div class="col-lg-10">
                                    <h3><?= $rules_form_academico['titulo']['value']; ?>
                                        <small>
                                            <?= $rules_form_academico['mesInicio']['value']." ".$rules_form_academico['anioInicio']['value']; ?>
                                            <strong> / </strong>
                                            <?= $rules_form_academico['mesFin']['value']." ".$rules_form_academico['anioFin']['value']; ?>
                                            <br>
                                        </small>
                                    </h3>
                                </div>
                                <div class="col-lg-2"> 
                                    <!--<center>
                                        <a href="<?= base_url(PATH_MENU)."/usuario_academico/edit/".$rules_form_academico['idaca']['value']; ?>" class="btn btn-default btn-xs"><strong>EDITAR</strong></a>
                                        <a href="<?= base_url(PATH_MENU)."/usuario_academico/del/".$rules_form_academico['idaca']['value']; ?>" class="btn btn-danger btn-xs"><strong>ELIMINAR</strong></a>
                                    </center>-->
                                </div>
                            </div>
                                <p class="form-control-static">
                                    <?= form_label($rules_usuario_academico['institucion']['label'],$rules_usuario_academico['institucion']['field']) ?>
                                    <strong>: </strong>
                                    <?= $rules_form_academico['institucion']['value']; ?>
                                    <br>

                                    <?= form_label($rules_usuario_academico['nivelEstudio']['label'],$rules_usuario_academico['nivelEstudio']['field']) ?>
                                    <strong>: </strong>
                                    <?= $rules_form_academico['nivelEstudio']['value']; ?><br>
                                </p>
<?php
        }
    }else{
?>
                                    <strong>Sin datos academicos.</strong>
<?php
    }
?>
                                </div>
                            </form>
                        </div>
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
                    <div class="row">
                        <div class="col-lg-10">
                            <strong>Datos Laborales</strong>
                        </div>                      
                        <div class="col-lg-2">
                            <!--<center>
                                <a href="<?= base_url(PATH_MENU)."/usuario_laboral/add"; ?>" class="btn btn-primary btn-xs"><strong>AGREGAR</strong></a>
                            </center>-->
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
<?php
    if($usuario_laboral){
        //var_dump($rules_usuario_laboral);
        foreach($usuario_laboral->result() as $row_usuario_laboral){
            $rules_form_laboral = array(
                'idlab' => array(
                    'value' => $row_usuario_laboral->idlab
                ),
                'empresa' => array(
                    'value' => $row_usuario_laboral->empresa
                ),
                'direccion' => array(
                    'value' => $row_usuario_laboral->direccion
                ),
                'telefono' => array(
                    'value' => $row_usuario_laboral->telefono
                ),
                'cargo' => array(
                    'value' => $row_usuario_laboral->cargo
                ),
                'labores' => array(
                    'value' => $row_usuario_laboral->labores
                ),
                'mesInicio' => array(
                    'value' => $row_usuario_laboral->mesInicio
                ),
                'anioInicio' => array(
                    'value' => $row_usuario_laboral->anioInicio
                ),
                'mesFin' => array(
                    'value' => $row_usuario_laboral->mesFin
                ),
                'anioFin' => array(
                    'value' => $row_usuario_laboral->anioFin
                ),
                'beneficios' => array(
                    'value' => $row_usuario_laboral->beneficios
                ),
                'salario' => array(
                    'value' => $row_usuario_laboral->salario
                ),
                'motivoRetiro' => array(
                    'value' => $row_usuario_laboral->motivoRetiro
                )
            ); 
?>
                    <div class="row">
                        <div class="col-lg-10">
                                <h3><?= $rules_form_laboral['cargo']['value']; ?>
                                    <small>
                                        <?= $rules_form_laboral['mesInicio']['value']." ".$rules_form_laboral['anioInicio']['value']; ?>
                                        <strong> / </strong>
                                        <?= $rules_form_laboral['mesFin']['value']." ".$rules_form_laboral['anioFin']['value']; ?>
                                        <br>
                                    </small>
                                </h3>
                        </div>
                        <div class="col-lg-2"> 
                            <!--<center>
                                <a href="<?= base_url(PATH_MENU)."/usuario_laboral/edit/".$rules_form_laboral['idlab']['value']; ?>" class="btn btn-default btn-xs"><strong>EDITAR</strong></a>
                                <a href="<?= base_url(PATH_MENU)."/usuario_laboral/del/".$rules_form_laboral['idlab']['value']; ?>" class="btn btn-danger btn-xs"><strong>ELIMINAR</strong></a>
                            </center>-->
                        </div>
                    </div>
                                <h4><?= $rules_form_laboral['empresa']['value']; ?></h4>

                                <p class="form-control-static">
                                    <?= form_label($rules_usuario_laboral['direccion']['label'],$rules_usuario_laboral['direccion']['field']) ?>
                                    <strong>: </strong>
                                    <?= $rules_form_laboral['direccion']['value']; ?>
                                    <br>

                                    <?= form_label($rules_usuario_laboral['telefono']['label'],$rules_usuario_laboral['telefono']['field']) ?>
                                    <strong>: </strong>
                                    <?= $rules_form_laboral['telefono']['value']; ?>
                                    <br>

                                    <?= form_label($rules_usuario_laboral['labores']['label'],$rules_usuario_laboral['direccion']['field']) ?>
                                    <strong>: </strong>
                                    <?= $rules_form_laboral['labores']['value']; ?>
                                    <br>

                                    <?= form_label($rules_usuario_laboral['beneficios']['label'],$rules_usuario_laboral['beneficios']['field']) ?>
                                    <strong>: </strong>
                                    <?= $rules_form_laboral['beneficios']['value']; ?>
                                    <br>

                                    <?= form_label($rules_usuario_laboral['salario']['label'],$rules_usuario_laboral['salario']['field']) ?>
                                    <strong>: </strong>
                                    <?= $rules_form_laboral['salario']['value']; ?>
                                    <br>

                                    <?= form_label($rules_usuario_laboral['motivoRetiro']['label'],$rules_usuario_laboral['motivoRetiro']['field']) ?>
                                    <strong>: </strong>
                                    <?= $rules_form_laboral['motivoRetiro']['value']; ?>
                                </p>                                
<?php
        }
    }else{
?>
                                <strong>Sin datos laborales.</strong>
<?php
    }
?>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>