<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <center>
                    <!--<img src="<?php echo base_url(PATH_BACK2)?>/ujgh.png" class="img-thumbnail" alt="imgs">-->
                </center>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
            <!--<div class="login-panel panel panel-default">-->
                <div class="panel-heading">
                    <center><h3 class="panel-title">Registra tus datos</h3></center>
                </div>
                <div class="panel-body">
<?php
    $attributes = array(
        'role' => 'form',
        'autocomplete' => 'off'
    );
?>
                    <?= form_open(/*'Login/login',$attributes*/) ?>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="user" autofocus required > <!--type="email"-->
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Cedula" name="pass" type="text" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="nombre" name="pass" type="text" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="fechaNacimiento" name="pass" type="text" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="nacionalidad" name="pass" type="text" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="estado" name="pass" type="text" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="ciudad" name="pass" type="text" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="direccion" name="pass" type="text" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="telefonoCelular" name="pass" type="text" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="telefonoFijo" name="pass" type="text" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="estadoCivil" name="pass" type="text" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="sexo" name="pass" type="text" value="" required>
                            </div>

<?
/*
    `idusu` int(10) AUTO_INCREMENT,
    `idrol` varchar(3) NOT NULL,
    `email` varchar(50) NOT NULL,
    `contrasena` varchar(50) NOT NULL,
    `cedula` int(15) NOT NULL,
    `nombre` varchar(50) NOT NULL,
    `apellido` varchar(50) NOT NULL,  
    `fechaNacimiento` date NOT NULL,
    `nacionalidad` varchar(50) NOT NULL,
    `estado` varchar(50) NOT NULL,
    `ciudad` varchar(50) NOT NULL,
    `direccion` varchar(50) NOT NULL,
    `telefonoCelular` varchar(50) NOT NULL,
    `telefonoFijo` varchar(50) NOT NULL,
    `estadoCivil` varchar(50) NOT NULL,
    `sexo` varchar(50) NOT NULL,
*/
?>                            
                            <input type="submit" class="btn btn-lg btn-success btn-block" id="login" value="Registrate">
                            <a href="<?= base_url(PATH_MENU)."/Login"; ?>" class="btn btn-lg btn-primary btn-block"><strong>Atras</strong></a>
                            </fieldset>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <br><br><br><br><br><br><br><br><br><br>
</div>