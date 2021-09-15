(function() {
    'use strict';
    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function() {



        //campos datos usuario

        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');


        //campos pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_completo = document.getElementById('pase_completo')
        var pase_dosdias = document.getElementById('pase_dosdias')
            //botones y divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var sumaTotal = document.getElementById('suma-total');

        // Extras

        var etiquetas = document.getElementById('etiquetas');
        var camisas = document.getElementById('camisa_evento')

        botonRegistro.disabled = true;


        //calcular.onclick = calcularMontos;
        calcular.addEventListener('click', calcularMontos);
        // calcular.addEventListener('mouseover', function() { this.value = "Gracias" })
        // calcular.addEventListener('mouseout', function() { this.value = "CALCULAR" });
        pase_dia.addEventListener('blur', mostrarDia);
        pase_completo.addEventListener('blur', mostrarDia);
        pase_dosdias.addEventListener('blur', mostrarDia);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarEmail);

        var formulario_editar = document.getElementsByClassName('editar-form')
        if (formulario_editar.length > 0) {
            if (pase_dia.value || pase_dosdias.value || pase_completo.value) {
                mostrarDia();
            }
        }

        function validarCampos() {
            if (this.value == '') {
                errorDiv.style.display = "block";
                errorDiv.innerHTML = "Este campo es obligatorio";

                this.style.border = " 1px solid red"
                this.style.backgroundColor = "pink"
            } else {
                errorDiv.style.display = "none";
                this.style.border = "1px solid #cccccc"
                this.style.backgroundColor = "white"
            }
        }

        function validarEmail() {
            if (this.value.includes('@') == true) {
                errorDiv.style.display = "none";
                this.style.border = "1px solid #cccccc"
                this.style.backgroundColor = "white"
            } else {
                errorDiv.style.display = "block";
                errorDiv.innerHTML = "Debe contener al menos un @";

                this.style.border = " 1px solid red"
                this.style.backgroundColor = "pink"
            }
        }

        function calcularMontos(event) {

            event.preventDefault();
            console.log("haz hecho click");
            if (regalo.value === "") {
                alert("Seleccione un regalo");
                regalo.focus();
            } else {
                var boletoDia = pase_dia.value,
                    boletoDosDias = pase_dosdias.value,
                    boletoCompleto = pase_completo.value,
                    cantCamisas = camisas.value,
                    cantEtiquetas = etiquetas.value;
                var totalPagar = (boletoDia * 30) + (boletoDosDias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

                console.log(totalPagar);

                var listadoProductos = [];

                if (boletoDia >= 1) {
                    listadoProductos.push(boletoDia + " pases por día")
                }

                if (boletoDosDias >= 1) {
                    listadoProductos.push(boletoDosDias + " pases por dos días")
                }
                if (boletoCompleto >= 1) {
                    listadoProductos.push(boletoCompleto + " pases completos")
                }

                if (cantCamisas >= 1) {
                    listadoProductos.push(cantCamisas + " Camisas")
                }
                if (cantEtiquetas >= 1) {
                    listadoProductos.push(cantEtiquetas + " etiquetas")
                }

                console.log(listadoProductos)

                lista_productos.style.display = "block"
                lista_productos.innerHTML = "";
                for (let i = 0; i < listadoProductos.length; i++) {
                    lista_productos.innerHTML += listadoProductos[i] + "<br/>"
                }

                sumaTotal.innerHTML = "$" + totalPagar.toFixed(2)

            }

            botonRegistro.disabled = false;
            document.getElementById('total_pedido').value = totalPagar;
        }

        function mostrarDia() {
            var boletoDia = pase_dia.value,
                boletoDosDias = pase_dosdias.value,
                boletoCompleto = pase_completo.value;
            var diasElegidos = [];
            if (boletoDia > 0) {

                diasElegidos.push('viernes')

            }
            if (boletoDosDias > 0) {

                diasElegidos.push('viernes', 'sabado')

            }
            if (boletoCompleto > 0) {

                diasElegidos.push('viernes', 'sabado', 'domingo')

            }


            for (let i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = "block"

            }


        }




    });




})();