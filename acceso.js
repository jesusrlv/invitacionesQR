function _(el){
    return document.getElementById(el);
}
function acceso(){
    let usr = _("usr").value;
    let pwd = _("pwd").value;

    if(usr == "" || pwd == ""){
        alert("Por favor, complete todos los campos");
        return false;

    }else{
        $.ajax({
            url: "prcd_acceso.php",
            method: "POST",
            data: {
                usr: usr,
                pwd: pwd
            },
            dataType: "json",
            success: function(data){
                let success = data.success;

                if(success == 1){
                    if(data.perfil == 1){
                        Swal.fire({
                            icon: 'success',
                            imageUrl: 'img/logo_oso_trava.png',
                            imageHeight: 200,
                            title: 'Usuario correcto',
                            text: 'Credenciales correctas',
                            confirmButtonColor: '#3085d6',
                            footer: 'Escanner App',
                        }).then((result) => {
                            if(result.isConfirmed){
                                window.location.href = "admin/";
                            }
                        });
                    }
                    else if(data.perfil == 2){
                        Swal.fire({
                            icon: 'success',
                            imageUrl: 'img/logo_oso_trava.png',
                            imageHeight: 200,
                            title: 'Usuario correcto',
                            text: 'Credenciales correctas',
                            confirmButtonColor: '#3085d6',
                            footer: 'Escanner App',
                        }).then((result) => {
                            if(result.isConfirmed){
                                window.location.href = "eventos/";
                            }
                        });
                    }
                }
                else{
                    Swal.fire({
                        icon: 'error',
                        imageUrl: 'img/logo_oso_trava.png',
                        imageHeight: 200,
                        title: 'Usuario incorrecto',
                        text: 'Credenciales incorrectas',
                        confirmButtonColor: '#3085d6',
                        footer: 'Escanner App',
                    });
                }
            }
        });
        
    }
}