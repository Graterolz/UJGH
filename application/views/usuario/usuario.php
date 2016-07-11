<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Perfil</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Datos Personales</strong>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form">
<?php
    if ($usuario_info){
        $row_info = $usuario_info->row();
?>
                                    <h3><?= $row_info->nombre ." ".$row_info->apellido; ?></h3>
                                    <p class="form-control-static">

                                        <strong>Fecha de nacimiento: </strong>
                                        <?= date("d/m/Y", strtotime($row_info->fechaNacimiento)); ?><br>

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
                                        <!-- idusu, idrol,contrasena,cedula,estado,ciudad,sexo-->
                                    </p>
<?php
    }else{
?>
                                        <strong>Sin datos personales</strong>
<?php
    }
?>
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
                    <strong>Datos Academicos</strong>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <?php
                                if($usuario_academico){
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
                                    <!-- var_dump($row2);echo $row_academico->idaca."<br>";echo $row_academico->idusu."<br>";-->
                                </p>
                                <?php
                                    }
                                }else{
                                ?>
                                    <strong>Sin datos academicos</strong>
                                <?php
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
            <div class="panel panel-green">
                <div class="panel-heading">
                    <strong>Datos Laborales</strong>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <?php
                                if($usuario_laboral){
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
                                    <!--idlab,idusu-->
                                </p>                                
                                <?php
                                    }
                                }else{
                                ?>
                                    <strong>Sin datos laborales</strong>
                                <?php
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