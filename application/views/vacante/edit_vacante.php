<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Edita Vacante</h2>
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
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-9">
                            <strong>Detalles de la vacante</strong>
                        </div>
                        <div class="col-lg-3">
                            Fecha de publicacion: 
                            <strong><?= date("d/m/Y", strtotime($row_vacante->fechaPublicacion)); ?></strong>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                                  
<?php
    $titulo = array(
        'class' => 'form-control',
        'name' => 'titulo',
        'placeholder' => 'Enter text',
        'value' => $row_vacante->titulo
    );
    $descripcion = array(
        'class' => 'form-control',
        'name' => 'descripcion',
        'placeholder' => 'Enter text',
        'rows' => 5,
        'value' => $row_vacante->descripcion
    );
    $beneficios = array(
        'class' => 'form-control',
        'name' => 'beneficios',
        'placeholder' => 'Enter text',
        'rows' => 5,
        'value' => $row_vacante->beneficios
    );
    $requisitos = array(
        'class' => 'form-control',
        'name' => 'requisitos',
        'placeholder' => 'Enter text',
        'rows' => 5,
        'value' => $row_vacante->requisitos        
    );
    $salario = array(
        'class' => 'form-control',
        'name' => 'salario',
        'placeholder' => 'Enter text',
        'value' => $row_vacante->salario
    );
    $tipoDocente = array(
        'name' => 'tipo',
        'id' => 'id1',
        'value' => 'Docente',
        'checked' => ($row_vacante->tipo === 'Docente' ? TRUE : FALSE),
    );    
    $tipoAdmin = array(
        'name' => 'tipo',
        'id' => 'id2',
        'value' => 'Administrativo',
        'checked' => ($row_vacante->tipo === 'Administrativo' ? TRUE : FALSE),

    );
?>
                <?= form_open(); ?>
                    <div class="row">
                        <div class="col-lg-6">                        
                            <div class="form-group">
                                <?= form_label('Titulo','titulo') ?>
                                <?= form_input($titulo) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Descripcion','descripcion') ?>
                                <?= form_textarea($descripcion) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Beneficios','beneficios') ?>
                                <?= form_textarea($beneficios) ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?= form_label('Requisitos','requisitos') ?>
                                <?= form_textarea($requisitos) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Salario','salario') ?>
                                <?= form_input($salario) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Tipo de vacante','tipo') ?><br>
                                <?= form_radio($tipoDocente); ?><strong>Docente</strong><br>
                                <?= form_radio($tipoAdmin); ?><strong>Administrativo</strong><br>
                                <br>
                                <br>
                            </div>
                        </div>                            
                        <div class="col-lg-3">
                            <center><a href="<?= base_url(PATH_MENU)."/Usuario"; ?>" class="btn btn-primary"><strong>ATRAS</strong></a></center>
                        </div>
                        <div class="col-lg-3">
                            <center><button type="submit" class="btn btn-success"><strong>Edita vacante</strong></button><!--<a href="<?= base_url(PATH_MENU)."/Postulacion/enviaPostulacion/".$row_vacante->idvac; ?>" class="btn btn-success"><strong>ENVIAR CV</strong></a>--></center>
                        </div>
                    </div>                            
                <?= form_close(); ?>
<?php
        }
    }else{
?>
            <h2>No existe la vacantes registradas!!!</h2>
<?php            
    }
?>                                    
                        </div>
                        <!-- /.col-lg-6 (nested) -->
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
<!-- /#page-wrapper -->