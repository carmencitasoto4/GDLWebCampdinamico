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
            <h1>Editar categoria</h1>
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
          <h3 class="card-title">Editar categoria</h3>

        </div>
        <?php 
        $sql="SELECT * FROM categoria_evento WHERE id_categoria=$id";
        $resultado= $conn->query($sql);
        $cat=$resultado->fetch_assoc();

      
        
        
        ?>

<?php $icono_defecto=$cat['icono']; ?>

        <form name="guardar_registro" id="guardar_registro" method="post" action="modelo-categoria.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre_categoria">Nombre:</label>                    
                    <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="Categoría" value="<?php echo $cat['cat_evento'];?>">
                      
                  </div>
                  <div class="form-group">
                  <label for="">Icono:</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text h-100 selected-icon"></span>
                         </div>
                        <input type="text" class="form-control iconpicker" name="icono" icono="<?php echo $icono_defecto;?>">
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

