(function() {
    "use strict";
    
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function(){
 
    
        
     var mapa = document.querySelector('#mapa');
     if(mapa) {
         var map = L.map('mapa').setView([25.578369, -108.459349], 14);
 
 L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
 }).addTo(map);
 
 L.marker([25.578369, -108.459349]).addTo(map)
     .bindPopup('Bienvenidos a.<br> Guasave')
     .openPopup();
     }
        //campos datos usuarios
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');
 
 
        //campos pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');
        
        //botones y divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');
 

      //  botonRegistro.disabled = true;
 
        //extras
        var camisas = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');
 
        
        
 
        if(document.getElementById('calcular')){
 
        
        //cambie el evento blur por el evento change
        calcular.addEventListener('click', calcularMontos);
        pase_dia.addEventListener('change', mostrarDias);
        pase_dosdias.addEventListener('change', mostrarDias);
        pase_completo.addEventListener('change', mostrarDias);
 
        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarMail);

        var formulario_editar = document.getElementsByClassName('editar-registrado');
        if(formulario_editar.length > 0){
            if(pase_dia.value || pase_dosdias.value || pase_completo.value){
                mostrarDias();
            }
        }
        
 
        function validarCampos() {
         if(this.value == '') {
             errorDiv.style.display = 'block';
             errorDiv.innerHTML = "Este Campo es Obligatorio";
             this.style.border = '1px solid red';
             errorDiv.style.border = '1px solid red';
         }else {
             errorDiv.style.display = 'none';
             this.style.border = '1px solid #cccccc';
         }
        }
 
        function validarMail() {
 
            if(this.value.indexOf("@") > -1) {
             errorDiv.style.display = 'none';
             this.style.border = '1px solid #cccccc';
 
            } else {
             errorDiv.style.display = 'block';
             errorDiv.innerHTML = "Debe tener almenos un @";
             this.style.border = '1px solid red';
             errorDiv.style.border = '1px solid red';
            }
 
        }
 
 
        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === '') {
                alert("debes elegir un regalo");
                regalo.focus();
            } else {
             var boletosDia = parseInt(pase_dia.value, 10) || 0,
             boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
             boletoCompleto = parseInt(pase_completo.value, 10) || 0,
             cantCamisas = parseInt(camisas.value, 10) || 0,
             cantEtiquetas = parseInt(etiquetas.value, 10) || 0;
             
             var total_pagar = (boletosDia *30) + (boletos2Dias *45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);
             
             var listadoProductos = [];
             if(boletosDia >= 1){
                 listadoProductos.push(boletosDia + ' Pases por dia');
             }
             if(boletos2Dias >= 1){
                 listadoProductos.push(boletos2Dias + ' Pases por 2 dias');
             }
             if(boletoCompleto >= 1){
             listadoProductos.push(boletoCompleto + ' Pases completos');
             }
             if(cantCamisas >= 1){
                 listadoProductos.push(cantCamisas + ' Camisas');
                 }
             if(cantEtiquetas >= 1){
             listadoProductos.push(cantEtiquetas + ' Etiquetas');
             }
             lista_productos.style.display = "block";
             lista_productos.innerHTML = '';
             for (var i = 0; i< listadoProductos.length; i++) {
                 lista_productos.innerHTML += listadoProductos[i] + '</br>';
             }
             suma.innerHTML = "$ " + total_pagar.toFixed(2);
             botonRegistro.disabled = false;
             document.getElementById('total_pedido').value = total_pagar;
        }
     }
    function mostrarDias() {
         var boletosDia = parseInt(pase_dia.value, 10) || 0,
             boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
             boletoCompleto = parseInt(pase_completo.value, 10) || 0;
 
             var diasElegidos = [];
             if(boletosDia > 0) {
                 diasElegidos.push('viernes');
             }
             if(boletos2Dias > 0) {
                 diasElegidos.push('viernes', 'sabado');
             }
             if(boletoCompleto > 0) {
                 diasElegidos.push('viernes', 'sabado', 'domingo');
             }
             for(var i = 0; i < diasElegidos.length; i++){
                 document.getElementById(diasElegidos[i]).style.display = 'block';
             }
 
 
    }
        }
    }); //DOMContentLoaded
 })();
 