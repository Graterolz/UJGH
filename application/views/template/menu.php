<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin: 0 150px 0 150px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                
                <a class="navbar-brand" href="<?php echo base_url(PATH_MENU)?>/usuario">Empleo UJGH</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
<?php
    if($idusu){
?>            
                <!--<li class="dropdown">-->
                    <!--<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>-->
                    <!--<ul class="dropdown-menu dropdown-user">-->
                        <li>
                            <a href="<?= base_url(PATH_MENU)."/usuario"; ?>"><i class="fa fa-user fa-fw"></i><strong>Inicio</strong></a>
                        </li>
<?php
        if($idrol=='USR'){
?>                         
                        <li>
                            <a href="<?= base_url(PATH_MENU)."/vacante"; ?>"><i class="fa fa-gear fa-fw"></i><strong>Vacantes</strong></a>
                        </li>
                        <!--<li><a href="<?= base_url(PATH_MENU)."/postulacion"; ?>"><i class="fa fa-check fa-fw"></i> Postulaciones</a>
                        </li>                   -->     
                        <li class="divider"></li>
<?php
        }
?>                        
                        <li>
                            <a href="<?= base_url(PATH_MENU)."/usuario/logout"; ?>"><i class="fa fa-sign-out fa-fw"></i><strong>Logout</strong></a>
                        </li>
                    <!--</ul>-->
                    <!-- /.dropdown-user -->
                <!--</li>-->
                <!-- /.dropdown -->

<?php
    }
?>            
            </ul>
            <!-- /.navbar-top-links -->
</nav>