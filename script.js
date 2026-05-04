function editarDatos(id){
    $.ajax({
           type:"POST",
           url:"queryEditar.php",
           data:{
               id:id
           },
           dataType: 'json',
           success: function(response) {
               var jsonData = JSON.parse(JSON.stringify(response));

             if (jsonData.success == 1){
               document.getElementById("nombre").value = jsonData.nombre;
               document.getElementById("curp").value = jsonData.curp;
               document.getElementById("email").value = jsonData.email;
               document.getElementById("telefono").value = jsonData.telefono;
               document.getElementById("id").value = jsonData.id;
               
             }
             else if(jsonData.success == 0){
               console.log("Error")
             }

           }               
       });

}

function guardarEditar(){
    var id = document.getElementById("id").value;
    var nombre = document.getElementById("nombre").value;
    var curp = document.getElementById("curp").value;
    var email = document.getElementById("email").value;
    var telefono = document.getElementById("telefono").value;

    $.ajax({
        type:"POST",
        url:"queryEditarDatos.php",
        data:{
            id:id,
            nombre:nombre,
            curp:curp,
            email:email,
            telefono:telefono
        },
        dataType: 'json',
        success: function(response) {
            var jsonData = JSON.parse(JSON.stringify(response));

          if (jsonData.success == 1){
            alert("Datos actualizados");
            saveAsistente();
            
          }
          else if(jsonData.success == 0){
            alert("Error al actualizar");
          }

        }               
    });

}

// bloqueos de cada cuenta
function bloquearCuenta(id){
    $.ajax({
        type:"POST",
        url:"queryBloquear.php",
        data:{
            id:id
        },
        dataType: 'json',
        success: function(response) {
            // var jsonData = JSON.parse(JSON.stringify(response));

          if (response.success == 1){
            // alert("Los accesos QR se han terminado, gracias por tu participación");
            Swal.fire({
              icon: 'warning',
              title: '¡Atención!',
              text: 'No quedan accesos disponibles para esta cuenta. Gracias por tu interés y participación.',
              imageUrl: 'img/logo_injuventud_01.png',
              imageHeight: 150,
              imageAlt: 'INJUVENTUD',
              confirmButtonText: 'Entendido',
              confirmButtonColor: '#f39c12',
              background: '#fff9e6',
              iconColor: '#f39c12',
              customClass: {
                  popup: 'swal-warning-custom',
                  title: 'swal-warning-title',
                  confirmButton: 'swal-warning-button'
              }
          }).then((result) => {
              if (result.isConfirmed) {
                  // Redireccionar al link que quieras
                  window.location.href = 'https://juventud.zacatecas.gob.mx';
                  // O si es dentro del mismo sitio: window.location.href = '/pagina-destino';
              }
          });
            document.getElementById("registroBtn").disabled = true;
          }
          else if(response.success == 0){
            console.log("Aún hay accesos disponibles: " + response.num);
          }
        }
    });
}