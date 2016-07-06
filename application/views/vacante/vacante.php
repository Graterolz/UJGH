<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Vacantes</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
        <?php
        if ($vacante) {                    
            foreach($vacante->result() as $row){
        ?>

        <div class="panel panel-primary">            
            <div class="panel-heading">                
                <?= $row->titulo; ?>                
            </div>
            <div class="panel-body">
                <p>
                    <strong>Descripcion</strong><br><br>
                    <?= $row->descripcion; ?><br>
                </p>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-lg-4">
                        <strong>Salario: </strong>
                        <?= $row->salario; ?>
                    </div>
                    <div class="col-lg-4">
                        <strong>Tipo de vacante: </strong>
                        <?= $row->tipo; ?>
                    </div>
                    <div class="col-lg-4">
                        <a href="index.php" class="btn btn-success">Ver vacante</a>
                    </div>                                        
                </div>
            </div>
        </div>    
    <?php
            }
        }else{
    ?>
        <h2>No existen vacantes registradas</h2>
    <?php            
        }        
    ?>
    </div>
    <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->


                        <!--
                        <?= $row->beneficios; ?>
                /*$query->num_rows();*/
                echo $row->idvac."<br>";
                echo $row->titulo."<br>";
                echo $row->descripcion."<br>";
                echo $row->beneficios."<br>";
                echo $row->requisitos."<br>";
                echo $row->salario."<br>";
                echo $row->fechaPublicacion."<br>";
                echo $row->tipo."<br>";
                >-->