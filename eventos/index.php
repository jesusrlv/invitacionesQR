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
  <title>scannCore</title>
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

    /* SECCIÓN PRINCIPAL - CENTRADO PERFECTO */
    .main-content {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: calc(100vh - 260px);
      padding: 2rem;
      width: 100%;
    }

    .centered-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
    }

    /* CARD SIN EFECTOS HOVER */
    .card-selector {
      background: rgba(255, 255, 255, 0.96);
      backdrop-filter: blur(4px);
      border-radius: 48px;
      border: none;
      box-shadow: 0 25px 45px -12px rgba(0, 0, 0, 0.12);
      padding: 2rem 2rem 2.2rem;
      max-width: 700px;
      width: 100%;
      margin: 0 !important;
      /* Sin transición ni transform al hover */
    }

    .selector-title {
      font-weight: 600;
      font-size: 1rem;
      color: #2c5a74;
    }

    /* SELECT SIN EFECTOS VISUALES AL SELECCIONAR */
    .custom-select-lg {
      border-radius: 60px;
      padding: 0.8rem 1.2rem;
      font-size: 1rem;
      border: 1.5px solid #e2e8f0;
      background-color: white;
      font-weight: 500;
      color: #1e293b;
      cursor: pointer;
      /* Eliminamos cualquier efecto de focus o cambio de color */
      outline: none;
      transition: none;
    }

    /* Eliminamos completamente el efecto focus del select */
    .custom-select-lg:focus {
      border-color: #e2e8f0;
      box-shadow: none;
      outline: none;
    }

    /* Botón de navegación - solo funcional, sin efectos extras */
    .btn-navegar {
      background: linear-gradient(135deg, #2c7da0 0%, #236b8a 100%);
      border: none;
      border-radius: 60px;
      padding: 0.75rem 2rem;
      font-weight: 600;
      cursor: pointer;
      transition: none;
    }

    .btn-navegar:hover {
      background: linear-gradient(135deg, #2c7da0 0%, #236b8a 100%);
      transform: none;
    }

    /* FOOTER */
    .footer-elegant {
      background: linear-gradient(135deg, #1a2a38 0%, #0f1e2a 100%);
      color: #cbd5e1;
      padding: 2.5rem 0 1.5rem;
      margin-top: auto;
      border-top: 1px solid rgba(255,255,255,0.05);
    }

    .footer-brand {
      font-size: 1.4rem;
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
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: rgba(255,255,255,0.05);
    }

    .footer-social-icons a:hover {
      color: white;
      background: #2c7da0;
      transform: translateY(-3px);
    }

    .footer-links a {
      color: #94a3b8;
      text-decoration: none;
      transition: 0.2s;
      font-size: 0.85rem;
    }

    .footer-links a:hover {
      color: #2c7da0;
      padding-left: 5px;
    }

    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.05);
      padding-top: 1.5rem;
      font-size: 0.8rem;
      color: #7e8c9e;
    }

    /* RESPONSIVO */
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
      .nav-links-left {
        order: 1;
      }
      .nav-links-right {
        order: 3;
      }
      .main-content {
        padding: 1.8rem;
        min-height: calc(100vh - 240px);
      }
    }

    @media (max-width: 768px) {
      .navbar-central {
        padding: 0.6rem 0;
      }
      .navbar-container {
        gap: 0.6rem;
      }
      .nav-links-left, .nav-links-right {
        gap: 0.9rem;
      }
      .nav-link-custom {
        font-size: 0.8rem;
      }
      .nav-link-custom i {
        font-size: 0.85rem;
      }
      .logo-circle {
        width: 38px;
        height: 38px;
      }
      .logo-circle i {
        font-size: 20px;
      }
      .logo-text {
        font-size: 0.75rem;
        margin-top: 3px;
      }
      .btn-soft-outline {
        padding: 0.3rem 0.8rem;
        font-size: 0.75rem;
      }
      .card-selector {
        padding: 1.5rem;
      }
      .card-selector h3 {
        font-size: 1.3rem;
      }
      .custom-select-lg {
        padding: 0.6rem 1rem;
        font-size: 0.9rem;
      }
      .btn-navegar {
        padding: 0.6rem 1rem;
        font-size: 0.9rem;
      }
      .main-content {
        padding: 1.2rem;
        min-height: calc(100vh - 280px);
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
        margin: 4px 0;
      }
      .nav-links-left {
        order: 2;
      }
      .nav-links-right {
        order: 3;
      }
      .main-content {
        padding: 1rem;
        min-height: calc(100vh - 300px);
      }
      .card-selector {
        padding: 1.2rem;
      }
      .footer-elegant {
        padding: 1.8rem 0 1rem;
      }
      .footer-brand {
        font-size: 1.2rem;
      }
    }

    .container, .container-fluid {
      padding-left: 15px;
      padding-right: 15px;
    }

    .row {
      margin-left: 0;
      margin-right: 0;
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

  <!-- CONTENIDO PRINCIPAL CENTRADO -->
  <div class="main-content">
    <div class="centered-wrapper">
      <div class="card-selector text-center">
        <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
          <i class="fas fa-globe-americas fa-lg" style="color:#2c7da0;"></i>
          <span class="selector-title">Navegador inteligente</span>
        </div>
        <h3 class="fw-bold mt-2" style="color:#1e3a4d;">Elige el evento a escanear</h3>
        <p class="text-muted mb-4">Selecciona una opción y haz clic en "Ir al evento" para navegar</p>

        <div class="row g-3 align-items-end">
          <div class="col-md-8">
            <label class="form-label fw-semibold text-start w-100"><i class="fas fa-chevron-circle-down me-1"></i> Opciones disponibles</label>
            <select class="form-select custom-select-lg w-100" id="pageSelector">
              
            </select>
          </div>
          <div class="col-md-4">
            <button id="navigateBtn" class="btn btn-navegar w-100" onclick="irEvento()">
              <i class="fas fa-paper-plane me-2"></i>Ir al evento
            </button>
          </div>
        </div>
        
        <div class="mt-4 pt-2 text-start small bg-light bg-opacity-50 rounded-4 p-3" id="previewDestino" style="background: rgba(248,250,252,0.8);">
          <i class="fas fa-info-circle me-1" style="color:#2c7da0;"></i> Evento seleccionado: <strong id="previewText">No hay evento seleccionado ...</strong>
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
  
  <script src="inicio_escaner.js"></script>

  <script>
    (function() {
      const selectElement = document.getElementById('pageSelector');
      const navigateBtn = document.getElementById('navigateBtn');
      const previewTextSpan = document.getElementById('previewText');
      const linkInicio = document.getElementById('linkInicio');
      const linkExplorar = document.getElementById('linkExplorar');
      const linkProyectos = document.getElementById('linkProyectos');
      const linkAyuda = document.getElementById('linkAyuda');
      const linkPerfil = document.getElementById('linkPerfil');
      const btnDemoNotif = document.getElementById('btnDemoNotif');
      const logoHome = document.getElementById('logoHome');

      // Actualizar texto de vista previa
      function updatePreviewText() {
        const selectedOption = selectElement.options[selectElement.selectedIndex];
        const selectedText = selectedOption.text.replace(/^[^\w]+/, ''); // limpia emoji inicial
        previewTextSpan.innerText = selectedText;
      }

      selectElement.addEventListener('change', updatePreviewText);
      updatePreviewText();

      // Navegación REAL a la URL seleccionada
      function navigateToPage() {
        const selectedValue = selectElement.value;
        if (selectedValue && selectedValue !== '#') {
          // Redirige a la página seleccionada
          window.location.href = selectedValue;
        }
      }

      // Evento del botón navegar
      navigateBtn.addEventListener('click', navigateToPage);

      // Enter en el select también navega
      selectElement.addEventListener('keypress', (e) => {
        if(e.key === 'Enter') {
          e.preventDefault();
          navigateToPage();
        }
      });

      // Enlaces del menú - seleccionan opción en el select pero NO navegan automáticamente
      linkInicio.addEventListener('click', (e) => {
        e.preventDefault();
        selectElement.value = 'https://www.google.com';
        updatePreviewText();
      });
      linkExplorar.addEventListener('click', (e) => {
        e.preventDefault();
        selectElement.value = 'https://www.github.com';
        updatePreviewText();
      });
      linkProyectos.addEventListener('click', (e) => {
        e.preventDefault();
        selectElement.value = 'https://www.wikipedia.org';
        updatePreviewText();
      });
      linkAyuda.addEventListener('click', (e) => {
        e.preventDefault();
        selectElement.value = 'https://www.youtube.com';
        updatePreviewText();
      });
      linkPerfil.addEventListener('click', (e) => {
        e.preventDefault();
        selectElement.value = 'https://www.reddit.com';
        updatePreviewText();
      });
      
      // Logo vuelve a Google
      if(logoHome) {
        logoHome.addEventListener('click', (e) => {
          e.preventDefault();
          selectElement.value = 'https://www.google.com';
          updatePreviewText();
        });
      }
      
      // Botón de notificaciones demo
      btnDemoNotif.addEventListener('click', () => {
        // Solo muestra un mensaje, no afecta navegación
        alert('🔔 No hay notificaciones nuevas. Usa el selector para navegar.');
      });
      
      // Fecha en footer
      const fechaSpan = document.getElementById('fechaActual');
      if(fechaSpan) {
        const hoy = new Date();
        fechaSpan.innerText = hoy.toLocaleDateString('es-ES', { year:'numeric', month:'long', day:'numeric' });
      }
    })();
  </script>
</body>
</html>