    <?php include_once 'includes/templates/header.php' ?>
    <section class="seccion contenedor">
        <h2> La mejor conferencia de diseño web en español</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum odit magnam labore! Corrupti dolor quaerat earum. Illo, adipisci saepe voluptas sequi nulla sint sit eum quam minima, eligendi reprehenderit. Sed.</p>
    </section>

    <section class="programa">
        <div class="contenedor-video">
            <video id="ocScreencapVideo" autoplay="autoplay" muted="muted" loop="loop" playsinline="playsinline" preload="metadata" data-aos="fade-up">
                
               <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogv" type="video/ogv">
           
           
           
            
            </video>

        </div>

        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del Evento</h2>
                    <nav class="menu-programa ">
                    <?php try{
require_once('includes/funciones/bd_conexion.php');

$sql="SELECT * FROM `categoria_evento`";
$resultado= $conn->query($sql);

}catch(Exception $e){
echo $e->getMessage();

}
?>
<?php while($cat=$resultado->fetch_assoc()){?>
                        <a href="#<?php echo strtolower($cat["cat_evento"]); ?> "><i class="<?php echo $cat["icono"];?>"></i><?php echo $cat["cat_evento"]; ?></a>
<?php } ?>
                    </nav>
<?php  
  try{
    require_once('includes/funciones/bd_conexion.php');
    
    $sql=" SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado, icono ";
    $sql.=" FROM eventos ";
    $sql.=" INNER JOIN categoria_evento ";
    $sql.=" ON eventos.id_cat_evento= categoria_evento.id_categoria ";
    $sql.= " INNER JOIN invitados ";
    $sql.= " ON eventos.id_inv =invitados.invitado_id ";
    $sql.=" AND eventos.id_cat_evento = 1 ";
    $sql.=" ORDER BY `evento_id` LIMIT 2;"; 
    $sql.=" SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado, icono ";
    $sql.=" FROM eventos ";
    $sql.=" INNER JOIN categoria_evento ";
    $sql.=" ON eventos.id_cat_evento= categoria_evento.id_categoria ";
    $sql.= " INNER JOIN invitados ";
    $sql.= " ON eventos.id_inv =invitados.invitado_id ";
    $sql.=" AND eventos.id_cat_evento = 2 ";
    $sql.=" ORDER BY `evento_id` LIMIT 2;"; 
    $sql.=" SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado, icono ";
    $sql.=" FROM eventos ";
    $sql.=" INNER JOIN categoria_evento ";
    $sql.=" ON eventos.id_cat_evento= categoria_evento.id_categoria ";
    $sql.= " INNER JOIN invitados ";
    $sql.= " ON eventos.id_inv =invitados.invitado_id ";
    $sql.=" AND eventos.id_cat_evento = 3 ";
    $sql.=" ORDER BY `evento_id` LIMIT 2;"; 
    
    
    }catch(Exception $e){
    echo $e->getMessage();
    
    }

?>

<?php $conn->multi_query($sql); ?>

<?php 
do {
    $resultado=$conn->store_result();
    $row=$resultado->fetch_all(MYSQLI_ASSOC);?>

    <?php 
    $i=0;
    foreach($row as $evento): ?>
    <?php if($i%2==0){ ?>
    <div id="<?php echo strtolower($evento['cat_evento'])?>" class="info-curso ocultar ">
    <?php } ?>
    <div class="detalle-evento ">
        <h3><?php echo $evento['nombre_evento'] ?></h3>
    
        <p class="no-margin "><i class="far fa-clock "></i><?php echo $evento['hora_evento'] ?></p>
        <p class="no-margin "> <i class="far fa-calendar-alt "></i><?php echo $evento['fecha_evento'] ?></p>
        <p class="no-margin "><i class="fas fa-user "></i><?php echo $evento['nombre_invitado']. " ". $evento['apellido_invitado'] ?> </p>
    </div>
    

<?php if($i%2==1){ ?>
    <div class="boton-derecha ">
        <a href=" " class="boton ">Ver todas</a>
    </div>
</div>
    <?php } ?>
    <?php $i++; 
endforeach;?>
<?php 
$resultado->free();
} while($conn->more_results() && $conn->next_result()) ?>
                   

                   



                </div>
            </div>
        </div>


    </section>

    <?php include_once 'includes/templates/invitado.php' ?>

    <div class="contador parallax ">

        <div class="contenedor ">
            <ul class="resumen-evento ">
                <li>
                    <p class="numero"></p>
                    Invitados
                </li>
                <li>
                    <p class="numero"></p>
                    Talleres
                </li>
                <li>
                    <p class="numero"></p>
                    Días
                </li>
                <li>
                    <p class="numero"></p>
                    Conferencias
                </li>
            </ul>
        </div>
    </div>

    <section class="precios seccion ">
        <h2>Precios</h2>
        <div class="contenedor ">
            <ul class="lista-precios ">
                <li class="card-precios ">
                    <div class="tabla-precio ">
                        <h3>Pase por día</h3>
                        <p class="numero "> $40</p>
                        <ul>
                            <li>Bocadillos gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href=" " class="boton hollow ">Comprar</a>
                    </div>
                </li>
                <li class="card-precios ">
                    <div class="tabla-precio ">
                        <h3>Pase por día</h3>
                        <p class="numero "> $40</p>
                        <ul>
                            <li>Bocadillos gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href=" " class="boton hollow ">Comprar</a>
                    </div>
                </li>
                <li class="card-precios ">
                    <div class="tabla-precio ">
                        <h3>Pase por día</h3>
                        <p class="numero "> $40</p>
                        <ul>
                            <li>Bocadillos gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href=" " class="boton hollow ">Comprar</a>
                    </div>
                </li>

            </ul>

        </div>

    </section>

    <div id="mapa" class="mapa">

    </div>

    <section class="seccion ">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor ">
            <div class="testimonial ">
                <blockquote>
                    <div class="texto-blockquote ">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, debitis dignissimos. Quod quaerat mollitia minus, est pariatur quos explicabo eligendi!</p>
                    </div>
                    <footer>
                        <div class="image-testimonial ">
                            <img src="img/testimonial.jpg " alt=" ">
                        </div>
                        <div class="cite ">
                            <cite>Osvaldo Aponte Escobedo <span>Diseñador en Prisma</span></cite>
                        </div>
                    </footer>
                </blockquote>
            </div>

            <div class="testimonial ">
                <blockquote>
                    <div class="texto-blockquote ">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, debitis dignissimos. Quod quaerat mollitia minus, est pariatur quos explicabo eligendi!</p>
                    </div>
                    <footer>
                        <div class="image-testimonial ">
                            <img src="img/testimonial.jpg " alt=" ">
                        </div>
                        <div class="cite ">
                            <cite>Osvaldo Aponte Escobedo <span>Diseñador en Prisma</span></cite>
                        </div>
                    </footer>
                </blockquote>
            </div>

            <div class="testimonial ">
                <blockquote>
                    <div class="texto-blockquote ">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, debitis dignissimos. Quod quaerat mollitia minus, est pariatur quos explicabo eligendi!</p>
                    </div>
                    <footer>
                        <div class="image-testimonial ">
                            <img src="img/testimonial.jpg " alt=" ">
                        </div>
                        <div class="cite ">
                            <cite>Osvaldo Aponte Escobedo <span>Diseñador en Prisma</span></cite>
                        </div>
                    </footer>
                </blockquote>
            </div>

        </div>

    </section>

    <div class="newsletter parallax ">
        <div class="contenido contenedor ">
            <p>Registrate al Newsletter</p>
            <h3>GDLWebCam</h3>
            <a href=" " class="boton transparente ">Registrate</a>
        </div>

    </div>

    <section class="seccion ">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva ">
            <ul>
                <li>
                    <p id="dias" class="numero "></p>dias
                </li>
                <li>
                    <p id="horas" class="numero "></p>horas
                </li>
                <li>
                    <p id="minutos" class="numero "></p>minutos
                </li>
                <li>
                    <p id="segundos" class="numero "></p>segundos
                </li>
            </ul>

        </div>

    </section>

    <?php include_once 'includes/templates/footer.php' ?>  