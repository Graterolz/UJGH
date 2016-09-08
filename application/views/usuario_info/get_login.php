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
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <center><h3 class="panel-title"><strong>Ingrese al Sistema</strong></h3></center>
                </div>
                <div class="panel-body">
                    <?= form_open('', array('role' => 'form','autocomplete' => 'off')) ?>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Usuario o E-mail" name="user" autofocus required > <!--type="email"-->
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="pass" type="password" value="" required>
                            </div>
                            <input type="submit" class="btn btn-lg btn-success btn-block" id="login" value="Login">
                            <a href="#" class="btn btn-lg btn-primary btn-block"><strong>Registrate</strong></a>
                        </fieldset>
                    <?= form_close() ?>                    
                </div>                
            </div>
            <br><br><br>
        </div>
    </div>
    <!-- /.row -->
</div>