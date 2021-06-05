$(document).ready(function(){

    $('#btnGuardarRegistro').click(function(){

        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();

        if (nombre && apellido) {

            var datos = new FormData();
            datos.append("nombre", nombre);
            datos.append("apellido", apellido);
    
            $.ajax({
    
                url:"ajax/registro.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success: function(respuesta){
    
                    if (respuesta) {
    
                        Swal.fire(
                            'EXCELENTE!',
                            'El registro ha sido guardado correctamente!',
                            'success'
                          )
                        return false;
                    }else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'hubo un ERROR en la base de datos!',
                          })
                        return false;
                    }
          
    
                }
            })
    
            
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'hubo un ERROR, por favor verique los campos !',
              })
              
            return false;
        }

        return false;
    });
});