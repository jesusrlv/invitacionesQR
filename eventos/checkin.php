<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Check-in</title>
    <link rel="icon" type="image/png" href="../img/icon.ico"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
    <!-- font -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- swal -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="instascan.min.js"></script>

    <?php
      
      $idEventos = $_POST['evento'];
      include('prcd/query_eventos.php');
      $rowEventos = $resultadoEventoQR->fetch_assoc();
    ?>

    <audio id="myAudio">
      <source src="beep.mp3" type="audio/mpeg">
    </audio>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@200;500&family=Russo+One&display=swap');

      .textRusso{
        font-family: 'Mulish', sans-serif;
        font-family: 'Russo One', sans-serif;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>
  <body onunload="cerrarPagina()">
<main class="mb-0">
  <header class="p-3" style="background-color:#363636;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none rounded ">
        <img src="../img/logo_juventudbarra.png" width="auto" height="50" role="img" alt="">        
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 ms-4 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-light"> Registro de asistentes QR</a></li>
        </ul>

        <div class="text-end">
          <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->
          <a href="prcd/sort.php" type="button" class="btn btn-primary"><i class="bi bi-door-open-fill"></i> Salir</a>
        </div>
      </div>
    </div>
  </header>
<div class="row">
  <div class="col-md-12">
  <div class="b-example-divider">
    <p class="text-secondary text-center  mt-2 mb-4" style="font-size:1rem;">EVENTO: <span class="text-dark text-wrap"><strong><?php echo $rowEventos['nombre'] ?></strong></span>
    </p>
  </div>
  </div>
  </div>
  <div class="container-fluid w-100 h-100 mt-2" style="width:100%; height:auto">
    <div class="row mb-0 border-bottom">
      <div class="col-md-12 border-start align-self-center justify-content-center">
        <!-- <p class="mt-3"></p> -->
        <div class="card w-100 text-center" style="height:700px">
          <div class="card-header text-light mb-5" style="background-color:#393d41;">
          <i class="bi bi-camera-fill"></i><strong> Cámara de registro de asistentes</strong>
          <div class="text-center mt-2">
          <button class="btn btn-primary btn-sm" onclick="abrirCamara()"><i class="bi bi-qr-code"></i> Leer QR</button> <button class="btn btn-danger btn-sm"  id="botonCerrar"><i class="bi bi-qr-code"></i> Cerrar QR</button>
          </div>
          </div>
            <div class="card-body text-center">
              <img src="../img/pejlogosilver.png" style="max-width: 400px;" class="mt-5 img-fluid" alt="" id="imagenFCA">
              <video id="preview" class="w-100" style="height:500px;" hidden></video>  
          </div>
          <p hidden><input type="text" id="textQR" onchange="checkIn()"></p>
          <p hidden><input type="text" id="evento" value="<?php echo $idEventos ?>"></p>

      </div>

    </div>
  </div>
  
</main>
  <!-- <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
        <p class="col-md-4 mb-0 text-muted">&copy; 2023 INJUVENTUD</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img src="../img/logo_injuventud_01.png" width="auto" height="80" role="img" alt="" class="p-2">
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">GODEZAC</a></li>
        </ul>
      </footer>
    </div>  -->
  </body>
</html>
