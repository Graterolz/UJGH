        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Postulaciones</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lista de Postulaciones
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Cargo</th>
                                            <th>Descripcion</th>
                                            <th>Fecha de Postulacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($usuario_postula){
                                            foreach($usuario_postula->result() as $row_postula){
                                        ?>
                                        <tr>
                                            <td><?= $row_postula->idpos; ?></td>
                                            <td><?= $row_postula->titulo; ?></td>                                                
                                            <td><?= $row_postula->descripcion; ?></td>
                                            <td><?= $row_postula->fechaPostulacion; ?></td>
                                        </tr>                                        
                                        <?php                                                
                                                /*
                                                idvac
                                                beneficios
                                                requisitos
                                                salario
                                                fechaPublicacion
                                                tipo

                                                idpos
                                                idusu
                                                fechaPostulacion
                                                */


                                                /*if(true){
                                                    
                                                }*/
                                            }
                                            //var_dump($row_postula);
                                        }else{
                                            echo "<tr><td colspan=3><h3>No has hecho ninguna, Postulate!!! </h3></td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->