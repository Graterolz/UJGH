<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <img src="<?php echo base_url(PATH_BACK2)?>/ujgh.png" class="img-thumbnail" alt="imgs" width="100%">
                <h2>Nuevo archivo adjunto</h2>
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
        'required' => TRUE
    );

    $attributes = array(
        'role' => 'form',
        'autocomplete' => 'off'
    );    
?>
                <?= form_open_multipart('',$attributes); ?>
                    <div class="row">
                        <div class="col-lg-12">                        
                            <div class="form-group">
                                <?= form_label('Titulo','titulo') ?>
                                <?= form_input($titulo) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Ruta','ruta') ?>
                                <input type="file" name="userfile" required>
                            </div>                      
                        </div>                          
                        <div class="col-lg-6">
                            <center><a href="<?= base_url(PATH_MENU)."/Usuario"; ?>" class="btn btn-primary"><strong>ATRAS</strong></a></center>
                        </div>
                        <div class="col-lg-6">
                            <center><button type="submit" class="btn btn-success"><strong>Subir archivo</strong></button></center>
                        </div>
                    </div>                            
                <?= form_close(); ?>                                 
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