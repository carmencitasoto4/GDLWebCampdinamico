$(document).ready(function() {

        $('#guardar_registro').on('submit', function(e) {
                e.preventDefault();

                var datos = $(this).serializeArray();

                $.ajax({

                        type: $(this).attr('method'),
                        data: datos,
                        url: $(this).attr('action'),
                        dataType: 'json',

                        success: function(data) {
                                var resultado = data;
                                console.log(data);
                                if (resultado.respuesta == 'exito') {
                                    Swal.fire(
                                        'Correcto!',
                                        'Se guardó correctamente',
                                        'success')
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'Hubo un error!'

                                    })
                                }
                            } //success

                    }) //ajax



            }) //guarda-registro


        //Se ejecuta cuando hay un archivo

        $('#guardar_registro_archivo').on('submit', function(e) {
                e.preventDefault();

                var datos = new FormData(this);

                $.ajax({

                        type: $(this).attr('method'),
                        data: datos,
                        url: $(this).attr('action'),
                        dataType: 'json',
                        contentType: false,
                        processData: false,
                        async: true,
                        cache: false,

                        success: function(data) {
                                var resultado = data;
                                console.log(data);
                                if (resultado.respuesta == 'exito') {
                                    Swal.fire(
                                        'Correcto!',
                                        'Se guardó correctamente',
                                        'success')
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'Hubo un error!'

                                    })
                                }
                            } //success

                    }) //ajax



            }) //guarda-archivo






        //eliminar un registro     
        $('.borrar_registro').on('click', function(e) {

                e.preventDefault();

                var id = $(this).attr('data-id')
                var tipo = $(this).attr('data-tipo')

                Swal.fire({
                        title: '¿Estás seguro?',
                        text: "Un registro eliminado no se puede recuperar",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sí, eliminar!',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                    type: 'post',
                                    data: {
                                        id: id,
                                        registro: 'eliminar'
                                    },
                                    url: 'modelo-' + tipo + '.php',
                                    success: function(data) {
                                            console.log(data);
                                            var resultado = JSON.parse(data);
                                            if (resultado.respuesta == 'exito') {
                                                Swal.fire(
                                                    'Eliminado!',
                                                    'Registro eliminado.',
                                                    'success'
                                                )
                                                jQuery('[data-id="' + resultado.id_eliminado + '"]').parents('tr').remove()
                                            } else {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Error',
                                                    text: 'No se pudo eliminar'
                                                })
                                            }

                                        } //success function

                                }) //ajax

                        } //if es confirmed
                    }) //then 


            }) //.borrar-registro on click



    }) //document.ready