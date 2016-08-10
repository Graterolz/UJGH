<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">                        
                <img src="<?php echo base_url(PATH_BACK2)?>/ujgh.png" class="img-thumbnail" alt="imgs" width="100%">
                <h2>Agrega datos academicos</h2>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
<?php
    /*if ($usuario_academico){
        foreach($usuario_academico->result() as $row_usuario_academico){*/
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
                                  
<?php
    $titulo = array(
        'class' => 'form-control',
        'name' => 'titulo',
        'placeholder' => 'Enter text',
        //'value' => $row_usuario_academico->titulo,
        'required' => TRUE
    );
    $nivelEstudio = array(
        'class' => 'form-control',
        'name' => 'nivelEstudio',
        'placeholder' => 'Enter text',
        'rows' => 3,
        //'value' => $row_usuario_academico->nivelEstudio,
        'required' => TRUE
    );
    $institucion = array(
        'class' => 'form-control',
        'name' => 'institucion',
        'placeholder' => 'Enter text',
        'rows' => 3,
        //'value' => $row_usuario_academico->institucion,
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
                <?= form_open('',$attributes); ?>
                    <div class="row">
                        <div class="col-lg-12">                        
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <?= form_label('Titulo','titulo') ?>
                                        <?= form_input($titulo) ?>
                                    </div>
                                    <div class="col-lg-3">
                                        <?= form_label('Mes inicio / Año inicio','mesInicio') ?>
                                        <!--<?= form_label('Año desde','anioInicio') ?>-->
                                        <br>
                                        <?= form_dropdown('mesInicio',$meses,'',$mesInicio); ?>
                                        <?= form_dropdown('anioInicio',$anio,'',$anioInicio); ?>
                                    </div>
                                
                                    <div class="col-lg-3">
                                        <?= form_label('Mes fin / Año fin','mesFin') ?>
                                        <!--<?= form_label('Año hasta','anioFin') ?>-->
                                        <br>
                                        <?= form_dropdown('mesFin',$meses,'',$mesFin); ?>
                                        <?= form_dropdown('anioFin',$anio,'',$anioFin); ?>
                                    </div>                                                                    
                                </div>
                            </div>
                            <div class="form-group">
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
                            </div>                  
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <center><a href="<?= base_url(PATH_MENU)."/Usuario"; ?>" class="btn btn-primary"><strong>ATRAS</strong></a></center>
                                    </div>
                                    <div class="col-lg-6">
                                        <center><button type="submit" class="btn btn-success"><strong>Agrega datos</strong></button><!--<a href="<?= base_url(PATH_MENU)."/Postulacion/enviaPostulacion/".$row_vacante->idvac; ?>" class="btn btn-success"><strong>ENVIAR CV</strong></a>--></center>
                                    </div>                                        
                                </div>
                            </div>                                
                        <!--</div>    -->                        
                    </div>                            
                <?= form_close(); ?>
<?php
       /* }
    }else{
?>
            <h2>No existe infomacion academica solicitada!!!</h2>
<?php            
    }*/
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