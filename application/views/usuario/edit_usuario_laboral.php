<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Edita datos laborales</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
<?php
    if ($usuario_laboral){
        foreach($usuario_laboral->result() as $row_usuario_laboral){
?>              
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-9">
                            <strong>Detalles</strong>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
<!--

            'beneficios' => $data['beneficios'],
            'salario' => $data['salario'],
            'motivoRetiro' => $data['motivoRetiro']
-->                                    
<?php
    $empresa = array(
        'class' => 'form-control',
        'name' => 'empresa',
        'placeholder' => 'Enter text',
        'value' => $row_usuario_laboral->empresa,
        'required' => TRUE
    );
    $direccion = array(
        'class' => 'form-control',
        'name' => 'direccion',
        'placeholder' => 'Enter text',
        'rows' => 3,
        'value' => $row_usuario_laboral->direccion,
        'required' => TRUE
    );
    $telefono = array(
        'class' => 'form-control',
        'name' => 'telefono',
        'placeholder' => 'Enter text',
        'rows' => 3,
        'value' => $row_usuario_laboral->telefono,
        'required' => TRUE
    );
    $cargo = array(
        'class' => 'form-control',
        'name' => 'cargo',
        'placeholder' => 'Enter text',
        'rows' => 3,
        'value' => $row_usuario_laboral->cargo,
        'required' => TRUE
    );
    $labores = array(
        'class' => 'form-control',
        'name' => 'labores',
        'placeholder' => 'Enter text',
        'rows' => 3,
        'value' => $row_usuario_laboral->labores,
        'required' => TRUE
    );
    $mesInicio = array(
        'class' => 'form-control',
        'name' => 'mesInicio',
        'required' => TRUE
    );
    $anioInicio = array(
        'class' => 'form-control',
        'name' => 'anioInicio',
        'required' => TRUE
    );
    $mesFin = array(
        'class' => 'form-control',
        'name' => 'mesFin',
        'required' => TRUE
    );    
    $anioFin = array(
        'class' => 'form-control',
        'name' => 'anioFin',
        'required' => TRUE
    );
    $beneficios = array(
        'class' => 'form-control',
        'name' => 'beneficios',
        'placeholder' => 'Enter text',
        'rows' => 3,
        'value' => $row_usuario_laboral->beneficios,
        'required' => TRUE
    );
    $salario = array(
        'class' => 'form-control',
        'name' => 'salario',
        'placeholder' => 'Enter text',
        'rows' => 3,
        'value' => $row_usuario_laboral->salario,
        'required' => TRUE
    );
    $motivoRetiro = array(
        'class' => 'form-control',
        'name' => 'motivoRetiro',
        'placeholder' => 'Enter text',
        'rows' => 3,
        'value' => $row_usuario_laboral->motivoRetiro,
        'required' => TRUE
    );            




    $attributes = array(
        'role' => 'form',
        'autocomplete' => 'off'
    );

    $meses = array(
        '' => '(None)',
        'Enero'     => 'Enero',
        'Febrero'   => 'Febrero',
        'Marzo'     => 'Marzo',
        'Abril'    => 'Abril',
        'Mayo'    => 'Mayo',
        'Junio'    => 'Junio',
        'Julio'    => 'Julio',
        'Agosto'    => 'Agosto',
        'Septiembre'    => 'Septiembre',
        'Octubre'    => 'Octubre',
        'Noviembre'    => 'Noviembre',
        'Diciembre'    => 'Diciembre',
    );

    $anio = array(
        '' => '(None)',
        '2000' => '2000',
        '2001' => '2001',
        '2002' => '2002',
        '2003' => '2003',
        '2004' => '2004',
        '2005' => '2005',
        '2006' => '2006',
        '2007' => '2007',
        '2008' => '2008',
        '2009' => '2009',
        '2010' => '2010',
        '2011' => '2011',
        '2012' => '2012',
        '2013' => '2013',
        '2014' => '2014',
        '2015' => '2015',
        '2016' => '2016',
    );
?>
                <?= form_open('',$attributes);?>
                    <div class="row">
                        <div class="col-lg-12">                        
                            <div class="form-group">
                                <div class="row">
                                  
                                    <div class="col-lg-6">
                                        <?= form_label('Empresa','empresa') ?>
                                        <?= form_input($empresa) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label('Direccion','direccion') ?>
                                        <?= form_input($direccion) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label('Telefono','telefono') ?>
                                        <?= form_input($telefono) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label('Cargo','cargo') ?>
                                        <?= form_input($cargo) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label('Labores','labores') ?>
                                        <?= form_input($labores) ?>
                                    </div>
                                    <div class="col-lg-3">
                                        <?= form_label('Mes inicio / Año inicio','mesInicio') ?>

                                        <br>
                                        <?= form_dropdown('mesInicio',$meses,$row_usuario_laboral->mesInicio,$mesInicio); ?>
                                        <?= form_dropdown('anioInicio',$anio,$row_usuario_laboral->anioInicio,$anioInicio); ?>
                                    </div>
                                
                                    <div class="col-lg-3">
                                        <?= form_label('Mes fin / Año fin','mesFin') ?>
                                        <br>
                                        <?= form_dropdown('mesFin',$meses,$row_usuario_laboral->mesFin,$mesFin); ?>
                                        <?= form_dropdown('anioFin',$anio,$row_usuario_laboral->anioFin,$anioFin); ?>
                                    </div>

                                    <div class="col-lg-6">
                                        <?= form_label('beneficios','beneficios') ?>
                                        <?= form_input($beneficios) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label('salario','salario') ?>
                                        <?= form_input($salario) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label('motivoRetiro','motivoRetiro') ?>
                                        <?= form_input($motivoRetiro) ?>
                                    </div>                                                                                                                                                


                                    <!--<div class="col-lg-6">
                                        <?= form_label('Empresa','empresa') ?>
                                        <?= form_input($empresa) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label('Empresa','empresa') ?>
                                        <?= form_input($empresa) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label('Empresa','empresa') ?>
                                        <?= form_input($empresa) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label('Empresa','empresa') ?>
                                        <?= form_input($empresa) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_label('Empresa','empresa') ?>
                                        <?= form_input($empresa) ?>
                                    </div>-->
                                                                    
                                </div>
                            </div>
                            <!--<div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?= form_label('Nivel de estudio','nivelEstudio') ?>
                                        <?= form_textarea($nivelEstudio) ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <?= form_label('Institucion','institucion') ?>
                                        <?= form_textarea($institucion) ?>                                        
                                    </div>
                                </div>                                
                            </div>-->                      
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <center><a href="<?= base_url(PATH_MENU)."/Usuario"; ?>" class="btn btn-primary"><strong>ATRAS</strong></a></center>
                                    </div>
                                    <div class="col-lg-6">
                                        <center><button type="submit" class="btn btn-success"><strong>Editar datos</strong></button><!--<a href="<?= base_url(PATH_MENU)."/Postulacion/enviaPostulacion/".$row_vacante->idvac; ?>" class="btn btn-success"><strong>ENVIAR CV</strong></a>--></center>
                                    </div>                                        
                                </div>
                            </div>                                
                        <!--</div>    -->                        
                    </div>                            
                <?= form_close(); ?>
<?php
        }
    }else{
?>
            <h2>No existe infomacion academica solicitada!!!</h2>
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
