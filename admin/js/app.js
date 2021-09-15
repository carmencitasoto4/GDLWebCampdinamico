$("#crear_registro").attr('disabled', true);

$('#repetir_password').on('input', function() {
    var password_nuevo = $('#password').val();

    if ($(this).val() == password_nuevo) {
        $('#resultado_password').text("¡Correcto!");
        $('#resultado_password').parents('.form-group').addClass('alert');
        $('#resultado_password').parents('.form-group').addClass('alert-success').removeClass('alert-danger');
        $('input#password').parents('.form-group').addClass('alert');
        $('input#password').parents('.form-group').addClass('alert-success').removeClass('alert-danger');
        $("#crear_registro").attr('disabled', false);

    } else {
        $("#crear_registro").attr('disabled', true);
        $('#resultado_password').text("¡No son iguales!");

        $('#resultado_password').parents('.form-group').addClass('alert');
        $('#resultado_password').parents('.form-group').addClass('alert-danger').removeClass('alert-success');

        $('input#password').parents('.form-group').addClass('alert');
        $('input#password').parents('.form-group').addClass('alert-danger').removeClass('alert-success');
    }



})
$(document).ready(function() {
    $('.select2').select2();

    (async() => {
        const response = await fetch('js/fontawesome4.json')
        const result = await response.json()
        const iconpicker = new Iconpicker(document.querySelector('.iconpicker'), {
            icons: result,
            showSelectedIn: document.querySelector('.selected-icon'),
            defaultValue: document.querySelector('.iconpicker').getAttribute('icono'),
            valueFormat: val => `fa ${val}`,

        })

    })()

    $('#datetimepicker4').datetimepicker({
        format: 'L'
    });

    $('#timepicker').datetimepicker({
        format: 'LT'
    })

    bsCustomFileInput.init()

    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var y = []
    var x = []
    $.getJSON('servicios-registrados.php', function(data) {

            console.log(data.length)
            console.log(data[0]['cantidad'])





            for (var i = 0; i < data.length; i++) {
                y.push(data[i]['cantidad'])
                x.push(data[i]['fecha'])
            }
            console.log(y)
            console.log(x)
                /*
                 * BAR CHART
                 * ---------
                 */
            var registrados = []
            for (var i = 0; i < y.length; i++) {
                registrados.push([i, y[i]])
            }

            var fecha_registro = []
            for (var i = 0; i < x.length; i++) {
                fecha_registro.push([i, x[i]])
            }

            console.log(registrados)
            console.log(fecha_registro)
            var bar_data = {
                data: registrados,
                bars: { show: true }
            }
            $.plot('#bar-chart', [bar_data], {
                    grid: {
                        borderWidth: 1,
                        borderColor: '#f3f3f3',
                        tickColor: '#f3f3f3'
                    },
                    series: {
                        bars: {
                            show: true,
                            barWidth: 0.3,
                            align: 'center',
                        },
                    },
                    colors: ['#3c8dbc'],
                    xaxis: {
                        ticks: fecha_registro

                    }
                })
                /* END BAR CHART */



        }) //getJSON


});