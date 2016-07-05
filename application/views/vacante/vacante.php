        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Vacantes</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <?php 
                foreach($vac->result() as $row){ 
            ?>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?= $row->titulo; ?>
                        </div>
                        <div class="panel-body">
                            <p>
                                <strong>Requisitos</strong><br><br>
                                <?= $row->descripcion; ?><br><br>

                                <strong>Beneficios</strong><br><br>
                                <?= $row->beneficios; ?>
                            </p>                                
                        </div>
                        <div class="panel-footer">
                            <?= $row->salario; ?>
                        </div>
                    </div>
                </div>            
                <!--
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
            <?php                
                }
            ?>                
            <!-- /.col-lg-6 -->


                    <!--<div class="panel panel-primary">
                    <div class="panel panel-success">
                    <div class="panel panel-info">
                    <div class="panel panel-warning">
                    <div class="panel panel-danger">
                    <div class="panel panel-green">
                    <div class="panel panel-yellow">
                    <div class="panel panel-red">-->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->