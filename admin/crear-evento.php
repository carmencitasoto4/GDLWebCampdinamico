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
            <h1>Crear evento</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div><!--rowmb2-->

      </div><!-- /.container-fluid -->
   
    </section>


    <div class="card-body">
        <div class="row"> 
            <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Crear evento</h3>

                        </div>
                    
                        <form name="guardar_registro" id="guardar_registro" method="post" action="modelo-evento.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="titulo_evento">Título del Evento:</label>
                                    <input type="text" class="form-control" id="titulo_evento" name="titulo_evento" placeholder="Título Evento">
                                </div>

                                <div class="form-group">
                                    <label for="categoria">Categoría: </label>
                                    <select name="categoria_evento" class="form-control select2"  style="width: 100%;">
                                        <option value="0"> --Seleccione--</option>
                                        <?php 
                                            try {
                                                $sql="SELECT * FROM categoria_evento";
                                                $resultado=$conn->query($sql);
                                                while($cat_evento=$resultado->fetch_assoc()){?>
                                                    <option value="<?php echo $cat_evento['id_categoria'];?>">
                                                    <?php echo $cat_evento['cat_evento'];?>
                                                    </option>

                                                <?php }
                                                } 
                                            catch (Exception $e) {
                                                $error=$e->getMessage();
                                                echo $error;
                                                }
                                    ?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Fecha evento:</label>
                                    <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="fecha_evento">
                                        <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                </div>
                                        </div>
                                    </div>
                            
                                </div>
                            
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>Hora:</label>

                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" name="hora_evento"/>
                                            <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i><div>
                                            </div>
                                        </div><!-- /.input group -->
                                    </div> <!-- /.form group -->
                                </div><!-- /.timepicker -->

                            


                                </div>
                                <div class="form-group">
                                    <label for="nombre">Invitado o Ponente: </label>
                                    <select name="invitado" class="form-control select2"  style="width: 100%;" data-select2-id="2" tabindex="-1" aria-hidden="true">
                                        <option value=""> --Seleccione--</option>
                                        <?php 
                                            try {
                                                $sql="SELECT invitado_id, nombre_invitado, apellido_invitado FROM invitados";
                                                $resultado=$conn->query($sql);
                                                while($invitados=$resultado->fetch_assoc()){?>
                                                    <option value="<?php echo $invitados['invitado_id'];?>">
                                                    <?php echo $invitados['nombre_invitado']." ". $invitados['apellido_invitado'];?>
                                                    </option>

                                                <?php }
                                                } 
                                            catch (Exception $e) {
                                                $error=$e->getMessage();
                                                echo $error;
                                                }
                                    ?>
                                    </select>
                                </div>

                                <div class="card-footer">
                                    <input type="hidden" name="registro" value="nuevo">
                                    <button type="submit" class="btn btn-primary" >Añadir</button>
                                </div>

                            </div> <!-- /.card-body -->
                        </form>

                        
                   
                
                
                    </div>
                    <!-- /.card -->

                </section>
                
                
                <!-- /.content -->
                </div><!-- col-md-8--->
       

       
        </div><!-- card-row--->
    </div><!-- card-body-->

</div><!-- content-wraper-->
<?php
  include_once 'templates/footer.php';
?>

