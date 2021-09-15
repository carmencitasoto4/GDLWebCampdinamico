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
            <h1>Listado de personas registradas</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         <!-- <div class="col-12">-->
          

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Maneja las categorías de los eventos </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="registro" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha registro</th>
                    <th>Articulos</th>
                    <th>Talleres</th>
                    <th>Regalos</th>
                    <th>Compras</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                 <?php 
                 try {
                     //code...
                     $sql="SELECT ID_Registrado, nombre_registrado, apellido_registrado, email_registrado, fecha_registrado, pases_articulos, talleres_registrados, nombre_regalo, pagado , total_pagado ";
                     $sql.=" FROM registrados ";
                     $sql.= " INNER JOIN regalos ";
                     $sql.=" ON registrados.regalo=regalos.ID_regalo ";
                    
                     $resultado=$conn->query($sql);
                 } catch (Exception $e) {
                     $error=$e->getMessage();
                     echo $error;
                 }

                  while($registro=$resultado->fetch_assoc()){ ?>
                  <tr>
                  <td><?php echo $registro['nombre_registrado']." ".$registro['apellido_registrado'] ; 
                $pagado=$registro['pagado'];
                if($pagado=='1'){
                  echo '<span class="badge bg-green">Pagado</span>';
                }else{
                  echo '<span class="badge bg-red">No pagado</span>';
                }
                ?>
                </td>
                  <td><?php echo $registro['email_registrado']; ?></td>
                  <td class="fecha"><?php echo $registro['fecha_registrado']; ?></td>
                  <td class="articulos">
                    <?php $articulos=json_decode($registro['pases_articulos'],true); 
                    $arreglo_articulos=array(
                      'un_dia'=>'Pase 1 día',
                      'pase_2dias'=>'Pase 2 días',
                      'pase_completo'=>'Pase Completo',
                      'camisas'=>'Camisas',
                      'etiquetas'=>'Etiquetas'

                    );
                  
                  foreach($articulos as $llave=>$articulo){
                   if(array_key_exists('cantidad',$articulo)){
                    echo $articulo['cantidad']." ".  $arreglo_articulos[$llave] ;
                    echo "<br>";
                   }
                   else{echo $articulo." ".  $arreglo_articulos[$llave] ;
                    echo "<br>";}
                    
                  }


                    ?></td>
                  <td class="talleres">
                    <?php $eventos_resultado=$registro['talleres_registrados']; 
                          $talleres=json_decode($eventos_resultado,true);
                          $talleres=implode("','", $talleres['eventos']);
                          $sql_talleres="SELECT nombre_evento, fecha_evento, hora_evento FROM eventos WHERE clave IN ('$talleres') OR evento_id IN('$talleres')";
                          $resultado_talleres=$conn->query($sql_talleres);
                          while($eventos=$resultado_talleres->fetch_assoc()){
                          echo $eventos['nombre_evento']. " ". $eventos['fecha_evento']. " ". $eventos['hora_evento']. "<br>";
                        }
                  
                  
                  ?></td>
                  <td><?php echo $registro['nombre_regalo']; ?></td>
                  <td><?php echo (float) $registro['total_pagado']; ?></td>
                  <td>
                  <a href="editar-registro.php?id=<?php echo $registro['ID_Registrado'];?>" class="btn bg-orange btn-app">
                  <i class="fa fa-pencil"></i>
                  </a>

                  <a href="#" data-id="<?php echo $registro['ID_Registrado'];?>" data-tipo="registrado" class="btn bg-maroon btn-app borrar_registro">
                  <i class="fa fa-trash"></i>
                  </a>
                  </td>
                  </tr>
                                  
                                  
                                  
                                  
                                  <?php }     ?>



                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha registro</th>
                    <th>Articulos</th>
                    <th>Talleres</th>
                    <th>Regalos</th>
                    <th>Compras</th>
                    <th>Acciones</th>
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <!--</div>
         /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include_once 'templates/footer.php';
?>