<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
    $row_info = $usuario_info->row();    
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Perfil</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Datos Personales
                        </div>
                        <div class="panel-body">
                            <div class="row">                                           
                                <div class="col-lg-8">
                                    <form role="form">
                                        <div class="form-group">
                                            <h3><?= $row_info->nombre ." ".$row_info->apellido; ?></h3>
                                            <p class="form-control-static">
                                                <strong>Fecha de nacimiento: </strong>
                                                <?= $row_info->fechaNacimiento; ?><br>

                                                <strong>Nacionalidad: </strong>
                                                <?= $row_info->nacionalidad; ?><br>

                                                <strong>Estado civil: </strong>
                                                <?= $row_info->estadoCivil; ?><br>

                                                <strong>Direccion: </strong>
                                                <?= $row_info->direccion; ?><br>

                                                <strong>Telefono celular / Telefono fijo: </strong>
                                                <?= $row_info->telefonoCelular." / ".$row_info->telefonoFijo; ?><br>

                                                <strong>Email: </strong>
                                                <?= $row_info->email; ?>
<!--
    idusu
    idrol
    contrasena
    cedula
    estado
    ciudad
    sexo
-->                                                                                                
                                            </p>
                                        </div>                                                                              
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->

                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Datos Academicos
                        </div>
                        <div class="panel-body">
                            <div class="row">                                           
                                <div class="col-lg-12">
                                    <form role="form">                            
                                    <?php
                                        foreach($usuario_academico->result() as $row_academico){
                                    ?>
                                        <h3><?= $row_academico->titulo; ?>
                                            <small>
                                            <?= $row_academico->mesInicio." ".$row_academico->anioInicio; ?>
                                            <strong> / </strong>
                                            <?= $row_academico->mesFin." ".$row_academico->anioFin; ?><br>                                            
                                            </small>
                                        </h3>         
                                        <p class="form-control-static">
                                            <strong>Institucion: </strong>
                                            <?= $row_academico->institucion; ?><br>

                                            <strong>Nivel de estudio: </strong>
                                            <?= $row_academico->nivelEstudio; ?><br>
                                        </p>
                                    <?php
                                            //var_dump($row2);
                                            /*
                                            echo $row_academico->idaca."<br>";
                                            echo $row_academico->idusu."<br>";
                                            */
                                        }
                                    ?>
                                    </form>
                                </div>
                            </div>                            
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->


                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Datos Laborales
                        </div>
                        <div class="panel-body">
                            <div class="row">                                           
                                <div class="col-lg-12">
                                    <form role="form">
                                    <?php
                                        foreach($usuario_laboral->result() as $row_laboral){
                                    ?> 
                                        <h3><?= $row_laboral->cargo; ?>                                            
                                            <small>                                            
                                            <?= $row_laboral->mesInicio." ".$row_laboral->anioInicio; ?>
                                            <strong> / </strong>
                                            <?= $row_laboral->mesFin." ".$row_laboral->anioFin; ?><br>                                            
                                            </small>
                                        </h3>                                            
                                        <h4><?= $row_laboral->empresa; ?></h4>
                                        <p class="form-control-static">                                        
                                            <strong>Direccion: </strong>
                                            <?= $row_laboral->direccion." - Telefono: ".$row_laboral->telefono; ?><br>

                                            <strong>Labores: </strong>
                                            <?= $row_laboral->labores; ?><br>

                                            <strong>Beneficios: </strong>
                                            <?= $row_laboral->beneficios; ?><br>
                                            
                                            <strong>Salario: </strong>
                                            <?= $row_laboral->salario; ?><br>

                                            <strong>Motivo de Retiro: </strong>
                                            <?= $row_laboral->motivoRetiro; ?>
                                        </p>
                                    <?php

                                    /*
                                    idlab 
                                    idusu
                                    */
                                        }
                                    ?>                                                                   
                                    </form>
                                </div>
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