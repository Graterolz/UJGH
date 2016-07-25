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
    $nombre = array(
        'class' => 'form-control',
        'name' => 'nombre',
        'placeholder' => 'nombre',
        'required' => TRUE        
    );
    $apellido = array(
        'class' => 'form-control',
        'name' => 'apellido',
        'placeholder' => 'apellido',
        'required' => TRUE        
    );
    $cedula = array(
        'class' => 'form-control',
        'name' => 'cedula',
        'placeholder' => 'cedula',
        'required' => TRUE        
    );
    $email = array(
        'type' => 'email',
        'class' => 'form-control',
        'name' => 'email',
        'placeholder' => 'email',
        'required' => TRUE        
    );

    $fechaNacimiento = NULL;

    $nacionalidad = array(
        'class' => 'form-control',
        'name' => 'nacionalidad',
        'required' => TRUE
    );    

    $direccion = array(
        'class' => 'form-control',
        'name' => 'direccion',
        'placeholder' => 'direccion',
        'required' => TRUE
    );
    $telefonoCelular = array(
        'class' => 'form-control',
        'name' => 'telefonoCelular',
        'placeholder' => 'telefonoCelular',
        'required' => TRUE
    );
    $telefonoFijo = array(
        'class' => 'form-control',
        'name' => 'telefonoFijo',
        'placeholder' => 'telefonoFijo',
        'required' => TRUE
    );

    $estadoCivil = array(
        'class' => 'form-control',
        'name' => 'estadoCivil',
        'required' => TRUE
    );
    $sexo = array(
        'class' => 'form-control',
        'name' => 'sexo',
        'required' => TRUE
    );
    $contrasena = array(
        'type' => 'password',
        'class' => 'form-control',
        'name' => 'contrasena',
        'placeholder' => 'contrasena',
        'required' => TRUE  
    );
    $contrasena2 = array(
        'type' => 'password',
        'class' => 'form-control',
        'name' => 'contrasena2',
        'placeholder' => 'contrasena2',
        'required' => TRUE  
    );    

    //
    $nacionalidades = array(
        '' => 'Elige opcion..',
        'Venezolano/a' => 'Venezolano/a',
        'Extranjero/a' => 'Extranjero/a',
    );
    $estadosCiviles = array(
        '' => 'Elige opcion..',
        'Soltero/a' => 'Soltero/a',
        'Casado/a' => 'Casado/a',
    ); 
    $sexos = array(
        '' => 'Elige opcion..',
        'Masculino' => 'Masculino',
        'Femenino' => 'Femenino',
    );
    
    //
    $attributes = array(
        'role' => 'form',
        'autocomplete' => 'off'
    );
?>
                    <?= form_open('',$attributes); ?>
                        <fieldset>
                            <div class="form-group">
                                <?= form_label('Nombre','nombre') ?>
                                <?= form_input($nombre) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Apellido','apellido') ?>
                                <?= form_input($apellido) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Cedula','cedula') ?>
                                <?= form_input($cedula) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Email','Email') ?>
                                <?= form_input($email) ?>
                            </div>                            
                            <!--<div class="form-group">
                                <?= form_label('fechaNacimiento','fechaNacimiento') ?>
                                <?= form_input($fechaNacimiento) ?>
                            </div>-->
                            <div class="form-group">
                                <?= form_label('Nacionalidad','nacionalidad') ?>
                                <?= form_dropdown('nacionalidad',$nacionalidades,'',$nacionalidad); ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Direccion','direccion') ?>
                                <?= form_input($direccion) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Telefono Celular','telefonoCelular') ?>
                                <?= form_input($telefonoCelular) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Telefono Fijo','telefonoFijo') ?>
                                <?= form_input($telefonoFijo) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Estado Civil','estadoCivil') ?>
                                <?= form_dropdown('estadoCivil',$estadosCiviles,'',$estadoCivil); ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Sexo','sexo') ?>
                                <?= form_dropdown('sexo',$sexos,'',$sexo); ?>
                            </div>
                            <hr>
                            <div class="form-group">
                                <?= form_label('Contrasena','contrasena') ?>
                                <?= form_input($contrasena) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Repetir Contrasena','contrasena2') ?>
                                <?= form_input($contrasena2) ?>
                            </div>

                            <input type="submit" class="btn btn-lg btn-success btn-block" id="login" value="Registrate">
                            <a href="<?= base_url(PATH_MENU)."/Login"; ?>" class="btn btn-lg btn-primary btn-block"><strong>Atras</strong></a>
                            </fieldset>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>