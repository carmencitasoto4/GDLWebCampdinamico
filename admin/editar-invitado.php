<?php
include_once 'funciones/sesiones.php';
include_once 'templates/header.php';

include_once 'funciones/funciones.php';
$id=$_GET['id'];

if(!filter_var($id, FILTER_VALIDATE_INT)){
    die("Error!!");
}
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
            <h1>Editar invitado</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <div class="card-body">

        <div class="row"> <div class="col-md-8">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Editar invitado</h3>

        </div>
        <?php 
        $sql="SELECT * FROM invitados WHERE invitado_id=$id";
        $resultado= $conn->query($sql);
        $invitado=$resultado->fetch_assoc();

      
        
        
        ?>



<form name="guardar_registro_archivo" id="guardar_registro_archivo" method="post" action="modelo-invitado.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre_invitado">Nombre:</label>                    
                    <input type="text" class="form-control" id="nombre_invitado" name="nombre_invitado" placeholder="Nombre" value="<?php echo $invitado['nombre_invitado'];?>">
                      
                    <div class="form-group">
                    <label for="apellido_invitado">Apellido:</label>
                    <input type="text" class="form-control" id="apellido_invitado" name="apellido_invitado" placeholder="Apellido" value="<?php echo $invitado['apellido_invitado'];?>">
                  </div>
                  <div class="form-group">
                        <label for="biografia_invitado">Descripcion</label>
                        <textarea class="form-control" name="biografia_invitado" id="biografia_invitado" rows="3" placeholder="Biograf??a ..." ><?php echo $invitado['descripcion'];?></textarea>
                      </div>
                      <div class="form-group">
                          <label for="imagen_actual"> Imagen Actual</label>
                          <br>
                          <img src="../img/invitados/<?php echo $invitado['url_imagen'];?>" width="200">
                      </div>

                  <div class="form-group">
                    <label for="imagen_invitado">Imagen Invitado</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="imagen_invitado" name="imagen" value="">
                        <label class="custom-file-label" for="imagen_invitado">Choose file</label>
                      </div>
                     
                    </div>
                     <!--<input name="imagen" type="file" >-->
                  </div>
                 
                  
                <!-- /.card-body -->

                <div class="card-footer">
                <input type="hidden" name="registro" value="actualizar">
                <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>

              
        </div><!-- /.card-body -->
       
       
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    </div></div>
  </div>
  <!-- /.content-wrapper -->
<?php
  include_once 'templates/footer.php';
?>

