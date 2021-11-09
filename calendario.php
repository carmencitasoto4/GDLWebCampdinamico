<?php include_once 'includes/templates/header.php' ?>


    <section class="seccion contenedor">
        <h2>Calendario</h2>

        <?php try{
require_once('includes/funciones/bd_conexion.php');

$sql=" SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado, icono ";
$sql.=" FROM eventos ";
$sql.=" INNER JOIN categoria_evento ";
$sql.=" ON eventos.id_cat_evento= categoria_evento.id_categoria ";
$sql.= " INNER JOIN invitados ";
$sql.= " ON eventos.id_inv =invitados.invitado_id ";
$resultado= $conn->query($sql);

}catch(Exception $e){
echo $e->getMessage();

}
?>

<div class="calendario">
<?php 
$calendario=array();
while($eventos=$resultado->fetch_assoc()){ 
    $fecha=$eventos['fecha_evento'];
$evento=array(
'titulo'=>$eventos['nombre_evento'],
'fecha'=>$eventos['fecha_evento'],
'hora'=>$eventos['hora_evento'],
'categoria'=>$eventos['cat_evento'],
'icono'=>$eventos["icono"],
'invitado'=>$eventos['nombre_invitado']. " ". $eventos['apellido_invitado']

);
$calendario[$fecha][]=$evento;
?>
<?php }?>
<?php 
foreach($calendario as $dia=>$lista_eventos){?>

<h3>
    <i class="fa fa-calendar"></i>

    
    <?php 
    //setlocale(LC_TIME, 'spanish');
    //echo strftime("%e-%m-%Y", strtotime($dia));
   // setlocale(LC_TIME, 'es_ES.UTF-8');
//echo strftime( '%e de %B de %Y', strtotime($dia) );

setlocale(LC_TIME, 'spanish');
$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
echo  $diassemana[strftime("%w", strtotime($dia))]." ";
 echo strftime("%d de %B del %Y", strtotime($dia));



    ?>
</h3>
<div class="eventos-por-fecha">
<?php 
foreach($lista_eventos as $eventos){?>
<div class="dia">
<p class="titulo"> <?php echo $eventos["titulo"]; ?></p>
<p class="hora">
    <i class="fa fa-clock-o"></i>
    <?php echo $eventos["fecha"]. " ". $eventos["hora"];?>
</p>
<p>
    <i class="<?php echo $eventos["icono"];?>"></i>
    <?php echo $eventos["categoria"]?>
</p>
<p>
<i class="fa fa-user"></i>
<?php echo $eventos["invitado"]?>
</p>
</div>
<?php }
?>

</div>

<?php } ?>






<?php 
$conn->close();
?>

</div>



        
    </section>

<?php include_once 'includes/templates/footer.php' ?>