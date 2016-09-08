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
                            <strong>Detalles de datos adjuntos</strong>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
<?php
    //var_dump($usuario_adjunto_rules);

    $rules_form = array(
        'titulo' => array(
            'class' => 'form-control',
            'name' => 'titulo',
            'placeholder' => 'Ingrese Titulo',
            'required' => TRUE
        )
    );

    $attributes = array(
        'role' => 'form',
        'autocomplete' => 'off'
    );    
?>                    
                        <?= form_open_multipart('',$attributes); ?>
                        <div class="form-group">
                            <?= form_label($rules_usuario_adjunto['titulo']['label'],$rules_usuario_adjunto['titulo']['field']); ?>
                            <?= form_input($rules_form['titulo']) ?>
                        </div>
                        <div class="form-group">
                            <?= form_label($rules_usuario_adjunto['url']['label'],$rules_usuario_adjunto['url']['field']); ?>
                            <input type="file" name="url" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <center>
                                        <a href="<?= base_url(PATH_MENU)."/usuario"; ?>" class="btn btn-primary"><strong>ATRAS</strong></a>
                                    </center>
                                </div>
                                <div class="col-lg-6">
                                    <center>
                                        <button type="submit" class="btn btn-success"><strong>ADJUNTAR</strong></button>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <?= form_close(); ?>
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