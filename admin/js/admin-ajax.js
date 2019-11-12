$(document).ready(function(){
    $('#guardar_registro').on('submit', function(e){
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if(resultado.respuesta == 'exito'){
                    Swal.fire(
                        'Correcto!',
                        'Se Guardo Correctamente',
                        'success'
                      )
                } else {
                    Swal.fire({
                        type: 'error',
                        title: 'Error...',
                        text: 'Hubo un error',
                        
                      })
                }
            }
        });
    });
    //se ejecuta cuando hay un archivo
    
        $('#guardar_registro-archivo').on('submit', function(e){
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
                    console.log(data);
                    var resultado = data;
                    if(resultado.respuesta == 'exito'){
                        Swal.fire(
                            'Correcto!',
                            'Se Guardo Correctamente',
                            'success'
                          )
                    } else {
                        Swal.fire({
                            type: 'error',
                            title: 'Error...',
                            text: 'Hubo un error',
                            
                          })
                    }
                }
            });
        });
    
    
    //eliminar un registro
    $('.barrar_registro').on('click', function(e){
        e.preventDefault();
        var id= $(this).attr('data-id');
        var tipo= $(this).attr('data-tipo');
        Swal.fire({
            title: 'Estas seguro?',
            text: "un registro eliminado no se puede recuperar",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.value) {
                    $.ajax({
                        type:'post',
                        data:{
                            'id':id,
                            'registro' :'eliminar'
                        },
                        url: 'modelo-'+tipo+'.php',
                        success:function(data) {
                            var resultado = JSON.parse(data);
                            if(resultado.respuesta == 'exito'){
                                swal(
                                    'Eliminado!',
                                    'Se eliminó el registro de la dase de datos.',
                                    'success'
                                )
                                jQuery('[data-id="'+resultado.id_eliminado+'"]').parents('tr').remove();
                            }
                           
                        }
                    })
                } else if (result.dismiss === 'cancel') {
                    swal(
                      'Cancelado',
                      'No se eliminó el registro',
                      'error'
                    )
                  }
                });            
    });



});