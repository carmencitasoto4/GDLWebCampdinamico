<?php
include_once 'funciones/sesiones.php';
include_once 'templates/header.php';
include_once 'templates/barra.php';
include_once 'funciones/funciones.php';
include_once 'templates/navegacion.php';
?> 
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Invitados</h1>
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
          <h3 class="card-title">Crear invitados</h3>

        </div>
        
        <form name="guardar_registro_archivo" id="guardar_registro_archivo" method="post" action="modelo-invitado.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre_invitado">Nombre:</label>
                    <input type="text" class="form-control" id="nombre_invitado" name="nombre_invitado" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <label for="apellido_invitado">Apellido:</label>
                    <input type="text" class="form-control" id="apellido_invitado" name="apellido_invitado" placeholder="Apellido">
                  </div>
                  <div class="form-group">
                        <label for="biografia_invitado">Descripcion</label>
                        <textarea class="form-control" name="biografia_invitado" id="biografia_invitado" rows="3" placeholder="Biografía ..."></textarea>
                      </div>

                  <div class="form-group">
                    <label for="imagen_invitado">Imagen Invitado</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="imagen_invitado" name="imagen">
                        <label class="custom-file-label" for="imagen_invitado">Choose file</label>
                      </div>
                     
                    </div>
                     <!--<input name="imagen" type="file" >-->
                  </div>







                </div>
                    
                  
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="hidden" name="registro" value="nuevo">
                  <button type="submit" class="btn btn-primary" >Añadir</button>
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

