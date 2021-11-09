$(function() {

    //lettering

    $(".nombre-sitio").lettering();

    //Menu height

    var windowHeight = $(window).height();
    var barraAltura = $(".barra").innerHeight();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > windowHeight) {
            $(".barra").addClass("fixed")
        } else { $(".barra").removeClass("fixed") }
    })

    //Menu Responsive
    $('.mobile-menu').on('click', function() {
        $('.navegacion-principal').slideToggle();
    });

    $(".programa-evento .info-curso:first").show();
    $(".menu-programa a:first").addClass("activo")
    $('.menu-programa a').on("click", function() {
        $(".menu-programa a").removeClass("activo");
        $(this).addClass("activo")
        $("div.ocultar").hide();
        var enlace = $(this).attr("href")
        $(enlace).fadeIn(1000);

        return false
    })

    //Animaciones para los numeros//

    $(".resumen-evento li:nth-child(1) p").animateNumber({ number: 6 }, 5000);
    $(".resumen-evento li:nth-child(2) p").animateNumber({ number: 15 }, 5000);
    $(".resumen-evento li:nth-child(3) p").animateNumber({ number: 3 }, 3000);
    $(".resumen-evento li:nth-child(4) p").animateNumber({ number: 9 }, 1200);

    //cuenta regresiva//
    $(".cuenta-regresiva").countdown("2022/10/04 09:00:00", function(event) {
            $("#dias").html(event.strftime('%D'))
            $("#horas").html(event.strftime('%H'))
            $("#minutos").html(event.strftime('%M'))
            $("#segundos").html(event.strftime('%S'))
        })
        //Colorbox

    $(".invitado-info").colorbox({ inline: true, width: "50%" });





});