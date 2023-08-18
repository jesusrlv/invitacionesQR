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