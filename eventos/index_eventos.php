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
  <title>Gestión de Eventos | scannCore</title>
  <link rel="icon" type="image/png" href="../img/icon.ico"/>

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome 6 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #f5f7fc 0%, #eef2f8 100%);
      min-height: 100vh;
      color: #1e2f3e;
      display: flex;
      flex-direction: column;
    }

    /* ========== BARRA DE MENÚ ========== */
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

    .navbar-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      position: relative;
    }

    .nav-links-left {
      display: flex;
      gap: 1.8rem;
      align-items: center;
      flex-wrap: wrap;
    }

    .nav-links-right {
      display: flex;
      gap: 1.8rem;
      align-items: center;
      flex-wrap: wrap;
    }

    .nav-link-custom {
      text-decoration: none;
      font-weight: 500;
      color: #2c4b66;
      transition: all 0.2s;
      font-size: 0.95rem;
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

    /* LOGO */
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

    .btn-soft-outline {
      border: 1px solid #cad2db;
      background: white;
      border-radius: 40px;
      padding: 0.4rem 1.2rem;
      font-size: 0.85rem;
      font-weight: 500;
      transition: 0.2s;
      color: #2c4b66;
      white-space: nowrap;
    }

    .btn-soft-outline:hover {
      background: #2c7da0;
      border-color: #2c7da0;
      color: white;
    }

    /* SECCIÓN PRINCIPAL */
    .main-content {
      flex: 1;
      padding: 2rem 1rem;
      width: 100%;
    }

    /* CARD PRINCIPAL */
    .card-eventos {
      background: rgba(255, 255, 255, 0.96);
      backdrop-filter: blur(4px);
      border-radius: 32px;
      border: none;
      box-shadow: 0 25px 45px -12px rgba(0, 0, 0, 0.12);
      padding: 1.8rem;
      width: 100%;
    }

    /* Encabezado */
    .header-eventos {
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

    /* Botón agregar evento */
    .btn-agregar {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
      border: none;
      border-radius: 40px;
      padding: 0.6rem 1.5rem;
      font-size: 0.9rem;
      font-weight: 600;
      color: white;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: 0.2s;
      text-decoration: none;
    }

    .btn-agregar:hover {
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

    /* Badges de estadísticas */
    .badge-registrados {
      background: #dbeafe;
      color: #1e40af;
      padding: 0.25rem 0.8rem;
      border-radius: 40px;
      font-size: 0.75rem;
      font-weight: 600;
    }

    .badge-asistentes {
      background: #d1fae5;
      color: #065f46;
      padding: 0.25rem 0.8rem;
      border-radius: 40px;
      font-size: 0.75rem;
      font-weight: 600;
    }

    .badge-no-asistentes {
      background: #fee2e2;
      color: #991b1b;
      padding: 0.25rem 0.8rem;
      border-radius: 40px;
      font-size: 0.75rem;
      font-weight: 600;
    }

    /* Botones de acción */
    .btn-accion {
      background: none;
      border: none;
      padding: 6px 10px;
      border-radius: 30px;
      cursor: pointer;
      transition: 0.2s;
      margin: 0 3px;
    }

    .btn-editar {
      color: #2c7da0;
    }

    .btn-editar:hover {
      background: #e0f2fe;
      transform: scale(1.1);
    }

    .btn-eliminar {
      color: #dc2626;
    }

    .btn-eliminar:hover {
      background: #fee2e2;
      transform: scale(1.1);
    }

    /* MODAL MODERNO */
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
      margin-bottom: 1rem;
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

    .input-group-modern .form-control,
    .input-group-modern .form-select {
      border: none;
      padding: 0.7rem 0.8rem 0.7rem 0;
      background: transparent;
      font-size: 0.9rem;
    }

    .input-group-modern .form-control:focus,
    .input-group-modern .form-select:focus {
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
      padding: 2rem 0 1.2rem;
      margin-top: auto;
      border-top: 1px solid rgba(255,255,255,0.05);
    }

    .footer-brand {
      font-size: 1.3rem;
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
      width: 34px;
      height: 34px;
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
      padding-top: 1.2rem;
      font-size: 0.75rem;
      color: #7e8c9e;
    }

    /* RESPONSIVE */
    @media (max-width: 992px) {
      .navbar-container {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
      }
      .nav-links-left, .nav-links-right {
        gap: 1.2rem;
      }
      .logo-central {
        order: 2;
        margin: 0 0.5rem;
      }
      .nav-links-left { order: 1; }
      .nav-links-right { order: 3; }
    }

    @media (max-width: 768px) {
      .card-eventos {
        padding: 1rem;
        overflow-x: auto;
      }
      .header-eventos {
        flex-direction: column;
        align-items: stretch;
      }
      .btn-agregar {
        justify-content: center;
      }
      .table-modern thead th {
        font-size: 0.7rem;
        padding: 0.7rem 0.4rem;
      }
      .table-modern tbody td {
        font-size: 0.75rem;
        padding: 0.6rem 0.4rem;
      }
      .btn-accion {
        padding: 4px 6px;
      }
    }

    @media (max-width: 580px) {
      .navbar-container {
        flex-direction: column;
        gap: 0.5rem;
      }
      .nav-links-left, .nav-links-right {
        justify-content: center;
        width: 100%;
      }
      .logo-central {
        order: 1;
      }
      .nav-links-left { order: 2; }
      .nav-links-right { order: 3; }
    }
  </style>
</head>
<body>

  <!-- BARRA DE MENÚ -->
  <nav class="navbar-central">
    <div class="container">
      <div class="navbar-container">
        <div class="nav-links-left">
          <a href="#" class="nav-link-custom" id="linkInicio"><i class="fas fa-home"></i> <span>Inicio</span></a>
          <a href="#" class="nav-link-custom" id="linkExplorar"><i class="fas fa-compass"></i> <span>Explorar</span></a>
          <a href="#" class="nav-link-custom" id="linkProyectos"><i class="fas fa-code-branch"></i> <span>Proyectos</span></a>
        </div>

        <a href="#" class="logo-central text-decoration-none" id="logoHome">
          <div class="logo-circle mx-auto">
            <i class="bi bi-upc-scan"></i>
          </div>
          <div class="logo-text">scannCore</div>
        </a>

        <div class="nav-links-right">
          <a href="#" class="nav-link-custom" id="linkAyuda"><i class="fas fa-headset"></i> <span>Ayuda</span></a>
          <a href="#" class="nav-link-custom" id="linkPerfil"><i class="fas fa-user-circle"></i> <span>Perfil</span></a>
          <button class="btn-soft-outline" id="btnDemoNotif"><i class="fas fa-bell"></i> <span class="d-none d-sm-inline">Noticias</span></button>
        </div>
      </div>
    </div>
  </nav>

  <!-- CONTENIDO PRINCIPAL - TABLA DE EVENTOS -->
  <div class="main-content">
    <div class="container">
      <div class="card-eventos">
        
        <!-- Encabezado con botón agregar evento -->
        <div class="header-eventos">
          <div class="header-title">
            <h3><i class="bi bi-calendar-event-fill"></i> Gestión de Eventos</h3>
            <p class="text-muted small mt-1">Administra los eventos, visualiza estadísticas y controla accesos</p>
          </div>
          <button class="btn-agregar" id="btnAgregarEvento" data-bs-toggle="modal" data-bs-target="#modalEvento">
            <i class="bi bi-plus-circle-fill"></i> Agregar evento
          </button>
        </div>

        <!-- Tabla de eventos responsiva -->
        <div class="table-responsive">
          <table class="table-modern">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre del evento</th>
                <th>Fecha</th>
                <th>Ubicación</th>
                <th>Registrados</th>
                <th>Asistentes</th>
                <th>No asistentes</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id="tablaEventos">
              <!-- Datos de ejemplo - se reemplazarán con datos reales desde backend -->
              <tr>
                <td>1</td>
                <td class="fw-semibold">Conferencia Innovación 2025</td>
                <td>15/03/2025</td>
                <td>Centro de Convenciones</td>
                <td><span class="badge-registrados">156</span></td>
                <td><span class="badge-asistentes">98</span></td>
                <td><span class="badge-no-asistentes">58</span></td>
                <td>
                  <button class="btn-accion btn-editar" onclick="editarEvento(1)" title="Editar evento"><i class="bi bi-pencil-square"></i></button>
                  <button class="btn-accion btn-eliminar" onclick="eliminarEvento(1)" title="Dar de baja / Eliminar"><i class="bi bi-trash3-fill"></i></button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td class="fw-semibold">Taller de Desarrollo Web</td>
                <td>22/03/2025</td>
                <td>Universidad Tecnológica</td>
                <td><span class="badge-registrados">84</span></td>
                <td><span class="badge-asistentes">67</span></td>
                <td><span class="badge-no-asistentes">17</span></td>
                <td>
                  <button class="btn-accion btn-editar" onclick="editarEvento(2)" title="Editar evento"><i class="bi bi-pencil-square"></i></button>
                  <button class="btn-accion btn-eliminar" onclick="eliminarEvento(2)" title="Dar de baja / Eliminar"><i class="bi bi-trash3-fill"></i></button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td class="fw-semibold">Hackathon 2025</td>
                <td>05/04/2025</td>
                <td>Polifórum</td>
                <td><span class="badge-registrados">210</span></td>
                <td><span class="badge-asistentes">185</span></td>
                <td><span class="badge-no-asistentes">25</span></td>
                <td>
                  <button class="btn-accion btn-editar" onclick="editarEvento(3)" title="Editar evento"><i class="bi bi-pencil-square"></i></button>
                  <button class="btn-accion btn-eliminar" onclick="eliminarEvento(3)" title="Dar de baja / Eliminar"><i class="bi bi-trash3-fill"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Mensaje cuando no hay eventos -->
        <div id="noEventosMsg" class="text-center py-5 text-muted" style="display: none;">
          <i class="bi bi-calendar-x-fill" style="font-size: 3rem; opacity: 0.5;"></i>
          <p class="mt-2">No hay eventos registrados. ¡Agrega tu primer evento!</p>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL PARA AGREGAR/EDITAR EVENTO -->
  <div class="modal fade modal-modern" id="modalEvento" tabindex="-1" aria-labelledby="modalEventoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalEventoLabel"><i class="bi bi-calendar-plus me-2"></i>Agregar evento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="eventoId" value="">
          
          <div class="input-group-modern d-flex">
            <span class="input-group-text"><i class="bi bi-tag-fill"></i></span>
            <input type="text" class="form-control" id="eventoNombre" placeholder="Nombre del evento">
          </div>

          <div class="input-group-modern d-flex">
            <span class="input-group-text"><i class="bi bi-calendar-date"></i></span>
            <input type="date" class="form-control" id="eventoFecha">
          </div>

          <div class="input-group-modern d-flex">
            <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
            <input type="text" class="form-control" id="eventoUbicacion" placeholder="Ubicación">
          </div>

          <div class="row g-2">
            <div class="col-md-4">
              <div class="input-group-modern d-flex">
                <span class="input-group-text"><i class="bi bi-people-fill"></i></span>
                <input type="number" class="form-control" id="eventoRegistrados" placeholder="Registrados" value="0">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group-modern d-flex">
                <span class="input-group-text"><i class="bi bi-check-circle-fill"></i></span>
                <input type="number" class="form-control" id="eventoAsistentes" placeholder="Asistentes" value="0">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group-modern d-flex">
                <span class="input-group-text"><i class="bi bi-x-circle-fill"></i></span>
                <input type="number" class="form-control" id="eventoNoAsistentes" placeholder="No asistentes" value="0">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cancelar</button>
          <button type="button" class="btn btn-guardar" onclick="guardarEvento()" data-bs-dismiss="modal"><i class="bi bi-save"></i> Guardar evento</button>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="footer-elegant">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="footer-brand mb-2">
            <i class="bi bi-upc-scan"></i> scannCore
          </div>
          <p class="small mt-2" style="color:#94a3b8;">Plataforma de registro de accesos por medio del escaneo de códigos QR.</p>
          <div class="footer-social-icons mt-3">
            <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="me-2"><i class="fab fa-github"></i></a>
            <a href="#" class="me-2"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-md-2">
          <h6 class="text-white mb-3 fw-semibold">Producto</h6>
          <div class="footer-links d-flex flex-column gap-2">
            <a href="#"><i class="fas fa-chevron-right fa-xs me-1"></i> Características</a>
            <a href="#"><i class="fas fa-chevron-right fa-xs me-1"></i> Precios</a>
            <a href="#"><i class="fas fa-chevron-right fa-xs me-1"></i> API</a>
          </div>
        </div>
        <div class="col-md-3">
          <h6 class="text-white mb-3 fw-semibold">Recursos</h6>
          <div class="footer-links d-flex flex-column gap-2">
            <a href="#"><i class="fas fa-chevron-right fa-xs me-1"></i> Documentación</a>
            <a href="#"><i class="fas fa-chevron-right fa-xs me-1"></i> Centro de ayuda</a>
            <a href="#"><i class="fas fa-chevron-right fa-xs me-1"></i> Estado del sistema</a>
          </div>
        </div>
        <div class="col-md-3">
          <h6 class="text-white mb-3 fw-semibold">Legal</h6>
          <div class="footer-links d-flex flex-column gap-2">
            <a href="#"><i class="fas fa-chevron-right fa-xs me-1"></i> Privacidad</a>
            <a href="#"><i class="fas fa-chevron-right fa-xs me-1"></i> Términos</a>
            <a href="#"><i class="fas fa-chevron-right fa-xs me-1"></i> Cookies</a>
          </div>
        </div>
      </div>
      <div class="footer-bottom text-center mt-4">
        <p class="mb-0">
          <i class="far fa-copyright me-1"></i> 2026 scannCore · Plataforma de registro de accesos.
        </p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Variables globales para manejo de eventos
    let eventos = [
      { id: 1, nombre: "Conferencia Innovación 2025", fecha: "2025-03-15", ubicacion: "Centro de Convenciones", registrados: 156, asistentes: 98, noAsistentes: 58 },
      { id: 2, nombre: "Taller de Desarrollo Web", fecha: "2025-03-22", ubicacion: "Universidad Tecnológica", registrados: 84, asistentes: 67, noAsistentes: 17 },
      { id: 3, nombre: "Hackathon 2025", fecha: "2025-04-05", ubicacion: "Polifórum", registrados: 210, asistentes: 185, noAsistentes: 25 }
    ];
    let nextId = 4;
    let editandoId = null;

    // Función para renderizar la tabla
    function renderizarTabla() {
      const tbody = document.getElementById('tablaEventos');
      const noEventosMsg = document.getElementById('noEventosMsg');
      
      if (eventos.length === 0) {
        tbody.innerHTML = '';
        noEventosMsg.style.display = 'block';
        return;
      }
      
      noEventosMsg.style.display = 'none';
      let html = '';
      eventos.forEach((evento, index) => {
        // Formatear fecha
        const fechaFormateada = evento.fecha ? new Date(evento.fecha).toLocaleDateString('es-ES') : 'No definida';
        
        html += `
          <tr>
            <td>${index + 1}</td>
            <td class="fw-semibold">${escapeHtml(evento.nombre)}</td>
            <td>${fechaFormateada}</td>
            <td>${escapeHtml(evento.ubicacion)}</td>
            <td><span class="badge-registrados">${evento.registrados || 0}</span></td>
            <td><span class="badge-asistentes">${evento.asistentes || 0}</span></td>
            <td><span class="badge-no-asistentes">${evento.noAsistentes || 0}</span></td>
            <td>
              <button class="btn-accion btn-editar" onclick="editarEvento(${evento.id})" title="Editar evento"><i class="bi bi-pencil-square"></i></button>
              <button class="btn-accion btn-eliminar" onclick="eliminarEvento(${evento.id})" title="Dar de baja / Eliminar"><i class="bi bi-trash3-fill"></i></button>
            </td>
          </tr>
        `;
      });
      tbody.innerHTML = html;
    }

    // Función para escapar HTML
    function escapeHtml(text) {
      if (!text) return '';
      const div = document.createElement('div');
      div.textContent = text;
      return div.innerHTML;
    }

    // Abrir modal para agregar evento
    function abrirModalAgregar() {
      editandoId = null;
      document.getElementById('modalEventoLabel').innerHTML = '<i class="bi bi-calendar-plus me-2"></i>Agregar evento';
      document.getElementById('eventoId').value = '';
      document.getElementById('eventoNombre').value = '';
      document.getElementById('eventoFecha').value = '';
      document.getElementById('eventoUbicacion').value = '';
      document.getElementById('eventoRegistrados').value = '0';
      document.getElementById('eventoAsistentes').value = '0';
      document.getElementById('eventoNoAsistentes').value = '0';
    }

    // Abrir modal para editar evento
    function editarEvento(id) {
      const evento = eventos.find(e => e.id === id);
      if (!evento) return;
      
      editandoId = id;
      document.getElementById('modalEventoLabel').innerHTML = '<i class="bi bi-pencil-square me-2"></i>Editar evento';
      document.getElementById('eventoId').value = id;
      document.getElementById('eventoNombre').value = evento.nombre;
      document.getElementById('eventoFecha').value = evento.fecha || '';
      document.getElementById('eventoUbicacion').value = evento.ubicacion || '';
      document.getElementById('eventoRegistrados').value = evento.registrados || 0;
      document.getElementById('eventoAsistentes').value = evento.asistentes || 0;
      document.getElementById('eventoNoAsistentes').value = evento.noAsistentes || 0;
      
      // Abrir modal
      const modal = new bootstrap.Modal(document.getElementById('modalEvento'));
      modal.show();
    }

    // Guardar evento (agregar o editar)
    function guardarEvento() {
      const nombre = document.getElementById('eventoNombre').value.trim();
      const fecha = document.getElementById('eventoFecha').value;
      const ubicacion = document.getElementById('eventoUbicacion').value.trim();
      const registrados = parseInt(document.getElementById('eventoRegistrados').value) || 0;
      const asistentes = parseInt(document.getElementById('eventoAsistentes').value) || 0;
      const noAsistentes = parseInt(document.getElementById('eventoNoAsistentes').value) || 0;
      
      if (!nombre) {
        Swal.fire({
          icon: 'warning',
          title: 'Campo requerido',
          text: 'El nombre del evento es obligatorio',
          confirmButtonColor: '#2c7da0'
        });
        return;
      }
      
      if (editandoId) {
        // Editar evento existente
        const index = eventos.findIndex(e => e.id === editandoId);
        if (index !== -1) {
          eventos[index] = {
            ...eventos[index],
            nombre: nombre,
            fecha: fecha,
            ubicacion: ubicacion,
            registrados: registrados,
            asistentes: asistentes,
            noAsistentes: noAsistentes
          };
          Swal.fire({
            icon: 'success',
            title: 'Evento actualizado',
            text: 'Los cambios se han guardado correctamente',
            timer: 1500,
            showConfirmButton: false
          });
        }
      } else {
        // Agregar nuevo evento
        const nuevoEvento = {
          id: nextId++,
          nombre: nombre,
          fecha: fecha,
          ubicacion: ubicacion,
          registrados: registrados,
          asistentes: asistentes,
          noAsistentes: noAsistentes
        };
        eventos.push(nuevoEvento);
        Swal.fire({
          icon: 'success',
          title: 'Evento agregado',
          text: 'El evento se ha creado correctamente',
          timer: 1500,
          showConfirmButton: false
        });
      }
      
      renderizarTabla();
      editandoId = null;
    }

    // Eliminar evento (dar de baja)
        // Eliminar evento (dar de baja)
    function eliminarEvento(id) {
      const evento = eventos.find(e => e.id === id);
      if (!evento) return;
      
      Swal.fire({
        title: '¿Dar de baja evento?',
        text: `¿Estás seguro de que deseas eliminar "${evento.nombre}"? Esta acción no se puede deshacer.`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#2c7da0',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          eventos = eventos.filter(e => e.id !== id);
          renderizarTabla();
          Swal.fire({
            icon: 'success',
            title: 'Evento eliminado',
            text: 'El evento ha sido dado de baja correctamente',
            timer: 1500,
            showConfirmButton: false
          });
        }
      });
    }

    // Eventos de la barra de navegación
    $(document).ready(function() {
      renderizarTabla();
      
      // Botón agregar evento
      $('#btnAgregarEvento').on('click', function() {
        abrirModalAgregar();
      });
      
      // Enlaces de navegación
      $('#linkInicio, #logoHome').on('click', function(e) {
        e.preventDefault();
        location.reload();
      });
      
      $('#linkAyuda').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
          title: 'Centro de ayuda',
          html: 'Para soporte técnico contacta a:<br><strong>soporte@scanncore.com</strong><br>Tel: (492) 123 4567',
          icon: 'info',
          confirmButtonColor: '#2c7da0'
        });
      });
      
      $('#linkPerfil').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
          title: 'Perfil de usuario',
          text: 'Administrador - scannCore',
          icon: 'info',
          confirmButtonColor: '#2c7da0'
        });
      });
      
      $('#btnDemoNotif').on('click', function() {
        Swal.fire({
          title: 'Notificaciones',
          text: 'No hay notificaciones nuevas',
          icon: 'info',
          timer: 1500,
          showConfirmButton: false
        });
      });
      
      $('#linkExplorar').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
          title: 'Explorar eventos',
          text: 'Aquí puedes ver todos los eventos disponibles',
          icon: 'info',
          confirmButtonColor: '#2c7da0'
        });
      });
      
      $('#linkProyectos').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
          title: 'Proyectos',
          text: 'Sistema de gestión de eventos y control de accesos mediante QR',
          icon: 'info',
          confirmButtonColor: '#2c7da0'
        });
      });
    });
  </script>
</body>
</html>
