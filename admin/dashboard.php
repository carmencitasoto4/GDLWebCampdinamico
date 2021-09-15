<?php
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php';
include_once 'templates/header.php';
include_once 'templates/barra.php';
include_once 'templates/navegacion.php';
?> 
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Información sobre el evento</h3>

        </div>
        <div class="card-body">
        
        <div class="card-header">
          <h3 class="card-title">Resumen de Registros</h3>

        </div>
        <br>
<div class="row">


  <div class="col-md-6">
            <!-- Bar chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Bar Chart
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="bar-chart" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->

          
          </div>

           
            

          </div>






</div><!--row-->





    <div class="row">
        <div class="col-lg-3 col-6">
            <?php 
            $sql="SELECT COUNT(ID_Registrado) AS registros FROM registrados";
            $resultado=$conn->query($sql);
            $registrados= $resultado->fetch_assoc();
            ?>


            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?></h3>

                <p>Total Registrados</p>
              </div>
              <div class="icon">
              <i class="fas fa-user"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div>


        <div class="col-lg-3 col-6">
            <?php 
            $sql="SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE pagado=1";
            $resultado=$conn->query($sql);
            $registrados= $resultado->fetch_assoc();
            ?>


            <!-- small card -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?></h3>

                <p>Total Pagados</p>
              </div>
              <div class="icon">
              <i class="fas fa-users"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div>


        <div class="col-lg-3 col-6">
            <?php 
            $sql="SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE pagado=0";
            $resultado=$conn->query($sql);
            $registrados= $resultado->fetch_assoc();
            ?>


            <!-- small card -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?></h3>

                <p>Sin Pagar</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-times"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <?php 
            $sql="SELECT SUM(total_pagado) AS ganancias FROM registrados WHERE pagado=1";
            $resultado=$conn->query($sql);
            $registrados= $resultado->fetch_assoc();
            ?>


            <!-- small card -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $registrados['ganancias']; ?></h3>

                <p>Ganancias totales</p>
              </div>
              <div class="icon">
              <i class="fas fa-dollar-sign"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div>

        




    </div><!--row-->


    
    <div class="card-header">
          <h3 class="card-title">Regalos</h3>

        </div>
        <br>
<div class="row">

<div class="col-lg-3 col-6">
            <?php 
            $sql="SELECT COUNT(regalo) AS pulseras FROM registrados WHERE pagado=1 AND regalo=1";
            $resultado=$conn->query($sql);
            $registrados= $resultado->fetch_assoc();
            ?>


            <!-- small card -->
            <div class="small-box bg-teal">
              <div class="inner">
                <h3><?php echo $registrados['pulseras']; ?></h3>

                <p>Pulseras</p>
              </div>
              <div class="icon">
              <i class="fas fa-gift"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div>


        <div class="col-lg-3 col-6">
            <?php 
            $sql="SELECT COUNT(regalo) AS etiquetas FROM registrados WHERE pagado=1 AND regalo=2";
            $resultado=$conn->query($sql);
            $registrados= $resultado->fetch_assoc();
            ?>


            <!-- small card -->
            <div class="small-box bg-pink">
              <div class="inner">
                <h3><?php echo $registrados['etiquetas']; ?></h3>

                <p>Etiquetas</p>
              </div>
              <div class="icon">
              <i class="fas fa-gift"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div>


        <div class="col-lg-3 col-6">
            <?php 
            $sql="SELECT COUNT(regalo) AS plumas FROM registrados WHERE pagado=1 AND regalo=3";
            $resultado=$conn->query($sql);
            $registrados= $resultado->fetch_assoc();
            ?>


            <!-- small card -->
            <div class="small-box bg-purple">
              <div class="inner">
                <h3><?php echo $registrados['plumas']; ?></h3>

                <p>Plumas</p>
              </div>
              <div class="icon">
              <i class="fas fa-gift"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div>

</div><!--row-->





        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include_once 'templates/footer.php';
?>

