<footer class="site-footer ">
        <div class="contenedor contenido-footer ">
            <div class="footer-informacion contenedor-footer ">
                <h3>Sobre <span>GDLWebCam</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, autem accusantium. Modi saepe quod debitis fuga. Dolorum quam rem minima quo praesentium sit ratione totam, laboriosam quisquam, amet temporibus tempora!</p>

            </div>

            <div class="ultimos-tweets contenedor-footer ">
                <h3>ultimos <span>tweets</span></h3>

            </div>

            <div class="menu contenedor-footer ">
                <h3>redes<span> sociales</span></h3>
                <nav class="redes-sociales ">
                    <a href=" "><i class="fab fa-facebook-f "></i></a>
                    <a href=" "><i class="fab fa-twitter "></i></a>
                    <a href=" "><i class="fab fa-youtube "></i></a>
                    <a href=" "><i class="fab fa-pinterest-p "></i></a>
                    <a href=" "><i class="fab fa-instagram "></i></a>

                </nav>

            </div>


        </div>

        <p class="copyright "> Todos los derechos reservados GDLWebCam 2021</p>

    </footer>


    <script src="js/vendor/modernizr-3.11.2.min.js "></script>
    <script src="js/video.js"></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="js/mapa.js"></script>
    <script src="js/jquery.animateNumber.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <?php 
    $archivo=basename($_SERVER['PHP_SELF']);
    $pagina=str_replace(".php","", $archivo);
    if($pagina =='invitados' || $pagina =='index'){
        echo '<script src="js/jquery.colorbox-min.js"></script>';
    }
    else if($pagina=="conferencias"){
        echo '<script src="js/lightbox.js"></script>';
    }
        
    ?>
    
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/cotizador.js"></script>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'anonymizeIp', true);
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js " async></script>



</body>

</html>