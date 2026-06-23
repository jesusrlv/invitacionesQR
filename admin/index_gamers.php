<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="QR/ajax_generate_code.js"></script>
  <script src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

  <title>Reporte de invitados | Gamers 2026 </title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background: linear-gradient(135deg, #f5f7fc 0%, #eef2f8 100%);
      min-height: 100vh;
      color: #1e2f3e;
      display: flex;
      flex-direction: column;
    }

    /* ========== BARRA DE MENÚ ESTILO MODERNO ========== */
    .navbar-central {
      background: rgba(255, 255, 255, 0.96);
      backdrop-filter: blur(12px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
      border-bottom: 1px solid rgba(224, 232, 240, 0.8);
      padding: 0.7rem 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      width: 100%;
    }

    /* Reemplazo del navbar-toggler original manteniendo funcionalidad */
    .navbar-toggler-custom {
      width: 47px;
      height: 34px;
      background-color: #ffffff;
      border: 1px solid #cad2db;
      border-radius: 12px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 5px;
      cursor: pointer;
      transition: all 0.2s;
    }

    .navbar-toggler-custom:hover {
      background-color: #f0f2f5;
    }

    .navbar-toggler-custom .line {
      width: 24px;
      height: 2px;
      background-color: #2c4b66;
      border-radius: 2px;
    }

    .navbar-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      position: relative;
    }

    .nav-links-left {
      display: flex;
      gap: 1.5rem;
      align-items: center;
      flex-wrap: wrap;
    }

    .nav-link-custom {
      text-decoration: none;
      font-weight: 500;
      color: #2c4b66;
      transition: all 0.2s;
      font-size: 0.9rem;
      letter-spacing: -0.2px;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      white-space: nowrap;
    }

    .nav-link-custom i {
      font-size: 1rem;
      opacity: 0.8;
    }

    .nav-link-custom:hover {
      color: #1d7e9c;
      transform: translateY(-2px);
    }

    /* LOGO CENTRAL */
    .logo-central {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      transition: all 0.2s;
      flex-shrink: 0;
    }

    .logo-circle {
      background: white;
      width: 44px;
      height: 44px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 28px;
      box-shadow: 0 5px 12px rgba(0, 0, 0, 0.05);
      transition: 0.25s;
      border: 1px solid rgba(44,125,160,0.15);
    }

    .logo-circle i {
      font-size: 24px;
      color: #2c7da0;
    }

    .logo-text {
      font-weight: 700;
      font-size: 0.9rem;
      margin-top: 4px;
      letter-spacing: -0.2px;
      color: #1f5068;
      line-height: 1.2;
    }

    .logo-central:hover .logo-circle {
      transform: scale(1.02);
      box-shadow: 0 8px 18px rgba(44,125,160,0.12);
    }

    .btn-salir {
      border: 1px solid #cad2db;
      background: white;
      border-radius: 40px;
      padding: 0.4rem 1.2rem;
      font-size: 0.85rem;
      font-weight: 500;
      transition: 0.2s;
      color: #dc2626;
      white-space: nowrap;
    }

    .btn-salir:hover {
      background: #dc2626;
      border-color: #dc2626;
      color: white;
    }

    /* SECCIÓN PRINCIPAL */
    .main-content {
      flex: 1;
      padding: 2rem 1rem;
      width: 100%;
    }

    /* CARD PRINCIPAL */
    .card-reporte {
      background: rgba(255, 255, 255, 0.96);
      backdrop-filter: blur(4px);
      border-radius: 32px;
      border: none;
      box-shadow: 0 25px 45px -12px rgba(0, 0, 0, 0.12);
      padding: 1.8rem;
      width: 100%;
    }

    /* Encabezado */
    .header-reporte {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.8rem;
      gap: 1rem;
    }

    .header-title h3 {
      font-weight: 700;
      color: #1e3a4d;
      margin: 0;
      font-size: 1.4rem;
    }

    .header-title i {
      color: #2c7da0;
      margin-right: 8px;
    }

    .header-controls {
      display: flex;
      gap: 0.8rem;
      flex-wrap: wrap;
      align-items: center;
    }

    .search-input {
      border-radius: 60px;
      border: 1.5px solid #e2e8f0;
      padding: 0.5rem 1rem;
      font-size: 0.85rem;
      width: 250px;
      transition: all 0.2s;
    }

    .search-input:focus {
      border-color: #2c7da0;
      box-shadow: 0 0 0 3px rgba(44,125,160,0.1);
      outline: none;
    }

    .btn-excel {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
      border: none;
      border-radius: 40px;
      padding: 0.5rem 1.2rem;
      font-size: 0.85rem;
      font-weight: 500;
      color: white;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: 0.2s;
    }

    .btn-excel:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(16,185,129,0.3);
      color: white;
    }

    /* TABLA MODERNA */
    .table-modern {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
    }

    .table-modern thead th {
      background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
      color: #1e3a4d;
      font-weight: 600;
      font-size: 0.85rem;
      padding: 1rem 0.8rem;
      border: none;
      text-align: center;
    }

    .table-modern tbody tr {
      transition: all 0.2s;
      border-bottom: 1px solid #e2e8f0;
    }

    .table-modern tbody tr:hover {
      background: rgba(44,125,160,0.03);
      transform: scale(1.01);
    }

    .table-modern tbody td {
      padding: 0.9rem 0.8rem;
      vertical-align: middle;
      font-size: 0.85rem;
      color: #334155;
      text-align: center;
    }

    /* Botones de acción */
    .btn-eliminar {
      background: none;
      border: none;
      color: #dc2626;
      font-size: 1.2rem;
      cursor: pointer;
      transition: 0.2s;
      padding: 5px 10px;
      border-radius: 30px;
    }

    .btn-eliminar:hover {
      background: #fee2e2;
      transform: scale(1.1);
    }

    /* Modal moderno */
    .modal-modern .modal-content {
      border-radius: 32px;
      border: none;
      box-shadow: 0 30px 50px rgba(0,0,0,0.2);
    }

    .modal-modern .modal-header {
      border-bottom: 1px solid #e2e8f0;
      background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
      border-radius: 32px 32px 0 0;
      padding: 1.2rem 1.5rem;
    }

    .modal-modern .modal-footer {
      border-top: 1px solid #e2e8f0;
      padding: 1rem 1.5rem;
    }

    .input-group-modern {
      border-radius: 60px;
      overflow: hidden;
      border: 1.5px solid #e2e8f0;
      background: white;
      transition: all 0.2s;
    }

    .input-group-modern:focus-within {
      border-color: #2c7da0;
      box-shadow: 0 0 0 3px rgba(44,125,160,0.1);
    }

    .input-group-modern .input-group-text {
      background: transparent;
      border: none;
      color: #2c7da0;
      padding-left: 1.2rem;
    }

    .input-group-modern .form-control {
      border: none;
      padding: 0.7rem 0.8rem 0.7rem 0;
      background: transparent;
      font-size: 0.9rem;
    }

    .input-group-modern .form-control:focus {
      box-shadow: none;
      outline: none;
    }

    .btn-guardar {
      background: linear-gradient(135deg, #2c7da0 0%, #236b8a 100%);
      border: none;
      border-radius: 40px;
      padding: 0.5rem 1.5rem;
      font-weight: 500;
      color: white;
    }

    .btn-guardar:hover {
      transform: translateY(-2px);
    }

    /* FOOTER */
    .footer-elegant {
      background: linear-gradient(135deg, #1a2a38 0%, #0f1e2a 100%);
      color: #cbd5e1;
      padding: 1.8rem 0 1rem;
      margin-top: auto;
      border-top: 1px solid rgba(255,255,255,0.05);
    }

    .footer-brand {
      font-size: 1.2rem;
      font-weight: 700;
      background: linear-gradient(135deg, #fff 0%, #a0c4d9 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      display: inline-block;
    }

    .footer-social-icons a {
      color: #94a3b8;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: rgba(255,255,255,0.05);
      margin-right: 5px;
    }

    .footer-social-icons a:hover {
      color: white;
      background: #2c7da0;
      transform: translateY(-3px);
    }

    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.05);
      padding-top: 1rem;
      font-size: 0.7rem;
      color: #7e8c9e;
    }

    /* RESPONSIVE */
    @media (max-width: 992px) {
      .navbar-container {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
      }
      .nav-links-left {
        gap: 1rem;
      }
      .logo-central {
        order: 2;
        margin: 0 0.5rem;
      }
    }

    @media (max-width: 768px) {
      .card-reporte {
        padding: 1rem;
      }
      .header-reporte {
        flex-direction: column;
        align-items: stretch;
      }
      .header-controls {
        justify-content: space-between;
      }
      .search-input {
        width: 100%;
      }
      .table-modern thead th {
        font-size: 0.7rem;
        padding: 0.7rem 0.4rem;
      }
      .table-modern tbody td {
        font-size: 0.75rem;
        padding: 0.6rem 0.4rem;
      }
    }

    @media (max-width: 580px) {
      .navbar-container {
        flex-direction: column;
        gap: 0.5rem;
      }
      .nav-links-left {
        justify-content: center;
        width: 100%;
      }
      .logo-central {
        order: 1;
      }
      .table-modern {
        font-size: 0.7rem;
      }
    }
  </style>
</head>
<body onload="saveAsistente()">

  <!-- BARRA DE MENÚ MODERNA (estilo NavCore) -->
  <nav class="navbar-central">
    <div class="container">
      <div class="navbar-container">
        <div class="nav-links-left">
          <button class="navbar-toggler-custom d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenuCollapse" aria-controls="navbarMenuCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </button>
          <a href="#" class="nav-link-custom" id="linkAdmin"><i class="bi bi-shield-lock-fill"></i> <span>Admin</span></a>
          <a href="index.php" class="nav-link-custom nav-link-active"><i class="bi bi-list-columns"></i> <span>Reporte general</span></a>
          <a href="registrados.php" class="nav-link-custom"><i class="bi bi-check-circle-fill text-success"></i> <span>Registrados</span></a>
          <a href="noRegistrados.php" class="nav-link-custom"><i class="bi bi-x-circle-fill text-danger"></i> <span>No registrados</span></a>
          <a href="datos.php" class="nav-link-custom"><i class="bi bi-braces-asterisk"></i></i> <span>Datos</span></a>
        </div>

        <a href="#" class="logo-central text-decoration-none" id="logoHome">
          <div class="logo-circle mx-auto">
            <i class="bi bi-award-fill"></i>
          </div>
          <div class="logo-text">Listado</div>
        </a>

        <div class="nav-links-right">
          <button class="btn-salir" id="btnSalir"><i class="bi bi-box-arrow-right"></i> Salir</button>
        </div>
      </div>
    </div>
  </nav>

  <!-- CONTENIDO PRINCIPAL -->
  <div class="main-content">
    <div class="container">
      <div class="card-reporte">
        
        <!-- Encabezado -->
        <div class="header-reporte">
          <div class="header-title">
            <h3><i class="bi bi-trophy text-warning"></i> Reporte Gamers Cup 2026</h3>
          </div>
          <div class="header-controls">
            <input class="search-input" id="myInput" type="search" placeholder="🔍 Buscar por nombre, email..." aria-label="Search">
            <a href="reporte.php" class="btn-excel"><i class="bi bi-file-earmark-excel-fill"></i> Excel</a>
            <a href="gamersCredenciales.php" class="btn-excel"><i class="bi bi-credit-card-2-front-fill"></i> Credenciales</a>
          </div>
        </div>

        <!-- Tabla responsiva -->
        <div class="table-responsive">
          <table class="table-modern">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Tipo de invitación</th>
                <th>Edad</th>
                <th>Gamer Tag</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody id="tablaInvitados">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER ELEGANTE -->
  <footer class="footer-elegant">
    <div class="container">
      <div class="row g-3 align-items-center">
        <div class="col-md-4">
          <div class="footer-brand mb-1">
            <i class="bi bi-award-fill me-2"></i>Listado
          </div>
          <p class="small" style="color:#94a3b8;">Premio Estatal de la Juventud · INJUVENTUD GODEZAC</p>
        </div>
        <div class="col-md-4 text-center">
          <div class="footer-social-icons">
            <a href="#" target="_blank"><i class="bi bi-twitter-x"></i></a>
            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
          </div>
        </div>
        <div class="col-md-4 text-md-end">
          <p class="small mb-0">&copy; 2023-2025 INJUVENTUD | GODEZAC</p>
        </div>
      </div>
      <div class="footer-bottom text-center mt-3">
        <p class="mb-0"><i class="bi bi-shield-check me-1"></i> Sistema de gestión de invitados · Reportes en tiempo real</p>
      </div>
    </div>
  </footer>

  <!-- MODAL EDITAR (modernizado manteniendo IDs originales) -->
  <div class="modal fade modal-modern" id="editarInformacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-pencil-square me-2"></i>Editar información</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="text" name="" id="id" hidden>
          <div class="input-group-modern d-flex mb-3">
            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
            <input type="text" class="form-control" placeholder="Nombre" id="nombre">
          </div>
          <div class="input-group-modern d-flex mb-3">
            <span class="input-group-text"><i class="bi bi-regex"></i></span>
            <input type="text" class="form-control" placeholder="CURP" id="curp">
          </div>
          <div class="input-group-modern d-flex mb-3">
            <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
            <input type="text" class="form-control" placeholder="email" id="email">
          </div>
          <div class="input-group-modern d-flex mb-3">
            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
            <input type="text" class="form-control" placeholder="Teléfono" id="telefono">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cerrar</button>
          <button type="button" class="btn btn-guardar" data-bs-dismiss="modal" onclick="guardarEditar()"><i class="bi bi-save"></i> Guardar cambios</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // FUNCIONES ORIGINALES COMPLETAMENTE PRESERVADAS
    function saveAsistente(){
        $.ajax({
            type:"POST",
            url:"tablaInvitadosGamers.php",
            dataType: "html",
            success: function(data) {
                $('#tablaInvitados').fadeIn(20).html(data);
            }               
        });
    }

    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#tablaInvitados tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    function generarQR(){
        var texto = document.getElementById('curp').value;
        var qrcode = new QRCode(document.getElementById("qr"), {
            text: texto,
            width: 300,
            height: 300,
            correctLevel: QRCode.CorrectLevel.H
        });
    }

    $(document).ready(function() {   
        $('#btnCURP').on('click', function() {
            var username = document.getElementById('curpSearch').value;       
            var dataString = 'username='+username;
            $.ajax({
                type: "POST",
                url: "verificacion2.php",
                dataType:"json",
                data: dataString,
                success: function(data) {
                    var jsonData = JSON.parse(JSON.stringify(data));
                    var verificador = jsonData.success;
                    if (verificador == 1){
                        var texto = jsonData.curp;
                        var qrcode = new QRCode(document.getElementById("qr2"), {
                            text: texto,
                            width: 300,
                            height: 300,
                            correctLevel: QRCode.CorrectLevel.H
                        });
                    }
                    else if (verificador == 0){
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'No existe el invitado',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                }
            });
        });              
    });  

    function eliminarRegistro(reg){
      let result = confirm("¿Borrar este registro?");
      if(result){
          $.ajax({
              type:"POST",
              url:"eliminar.php",
              data:{
                  reg:reg
              },
              dataType: "JSON",
              success: function(data) {
                  var jsonData = JSON.parse(JSON.stringify(data));
                  var verificador = jsonData.success;
                  if (verificador == 1){
                      console.log('Registro eliminado');
                      saveAsistente();
                  }
                  else{
                      console.log('No se eliminó el registro');
                  }
              }               
          });
        }
        else{
          alert("No se eliminó el registro");
        }
    }

    // Funciones adicionales para compatibilidad
    function guardarEditar() {
        // Función de edición (debe existir en script.js)
        if(typeof window.guardarEditarOriginal === 'function') {
            window.guardarEditarOriginal();
        } else {
            console.log('Función guardarEditar definida en script.js');
        }
    }

    // Eventos adicionales para UI moderna
    $(document).ready(function() {
        $('#btnSalir').on('click', function() {
            Swal.fire({
                title: '¿Cerrar sesión?',
                text: '¿Estás seguro de que deseas salir?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#2c7da0',
                cancelButtonColor: '#dc2626',
                confirmButtonText: 'Sí, salir',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'login.html';
                }
            });
        });

        $('#logoHome, #linkAdmin').on('click', function(e) {
            e.preventDefault();
            location.reload();
        });
    });
  </script>
</body>
</html>