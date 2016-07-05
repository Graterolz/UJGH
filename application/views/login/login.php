        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header" >
                        <center><img src="<?php echo base_url(PATH_BACK2)?>/ujgh.png" class="img-thumbnail" alt="imgs"></center>                        
                    </div>                    
                    
                    <!--<h1 class="page-header">Trabaja Con Nosotros</h1>-->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->            
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Trabaja con Nosotros - Ingresa tus datos</h3></center>
                    </div>
                    <div class="panel-body">
                        <?php
                            $attributes = array(
                                'role' => 'form',
                                'autocomplete' => 'off'
                            );
                        ?>
                        <?= form_open('Usuario'/*'/login/loginUser'*/,$attributes) ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus ><!--required-->
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" ><!--required-->
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!--<a href="<?php echo base_url(PATH_MENU)?>/Usuario" class="btn btn-lg btn-success btn-block">Login</a>-->
                                <input type="submit" class="btn btn-lg btn-success btn-block" id="login" value="Login">
                            </fieldset>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
            <!-- /.row -->
        </div>                        