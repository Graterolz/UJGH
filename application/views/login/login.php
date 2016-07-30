<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <center>
                    <img src="<?php echo base_url(PATH_BACK2)?>/ujgh.png" class="img-thumbnail" alt="imgs" height="70%" width="70%">
                </center>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Ingresa tus datos</h3></center>
                </div>
                <div class="panel-body">
<?php
    $attributes = array(
        'role' => 'form',
        'autocomplete' => 'off'
    );
?>
                    <?= form_open('Login/login',$attributes) ?>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="user" autofocus required > <!--type="email"-->
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="" required>
                            </div>
                            <input type="submit" class="btn btn-lg btn-success btn-block" id="login" value="Login">
                            <a href="<?= base_url(PATH_MENU)."/Usuario/registro"; ?>" class="btn btn-lg btn-primary btn-block"><strong>Registrate</strong></a>
                            </fieldset>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <br><br><br><br><br><br><br><br><br><br>
</div>