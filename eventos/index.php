<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Inicio</title>
    <link rel="icon" type="image/png" href="../img/icon.ico"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
    <!-- font -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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
  </head>
  <body>
<main class="mb-0">
<header class="p-3" style="background-color:#e4037d;">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-between">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="../img/logo_juventudbarra.png" width="auto" height="70" role="img" alt="">        
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 ms-4 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 text-light">Registro eventos</a></li>
      </ul>

      <div class="text-end mt-2 mt-lg-0">
        <a href="prcd/sort.php" type="button" class="btn btn-outline-light">Salir</a>
      </div>
    </div>
  </div>
</header>

<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <img src="../img/logo_injuventud_02.png" width="auto" height="54" role="img" alt="">
        <span class="fs-4"></span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
    </header>
  </div>

  <div class="b-example-divider" style="background-color:#199bd8">

  </div>

    <div class="container-fluid w-75 h-100 mt-5 mb-1 p-2 text-center">
    <div class="row"> 
    <div class="col-md-12">
    <img src="../img/logo_pej2024.png" width="400" height="" role="img" alt="" class="img-fluid p-2 mb-3">
    <br>
        <h3 class="mb-5" style="color:#162944">Bienvenid@<strong class="text-dark"></strong></h3>
        </div>
        </div> 
      <hr>
      <form action="checkin.php" method="POST">
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-12">
                <div class="input-group mb-3 w-100 mt-5">
                    <span class="input-group-text" id="basic-addon1">Evento</span>
                    <select class="form-select" aria-label="Default select example" name="evento">
                        <option selected>Seleccionar ...</option>
                        <?php
                          include('prcd/qc.php');
                          // include('prcd/query_eventos.php');
                          $evento = "SELECT * FROM eventos";
                          $resultadoEvento = $conn->query($evento);
                          while($rowEventos = $resultadoEvento->fetch_assoc()){
                            echo'
                            <option value="'.$rowEventos['id'].'">'.$rowEventos['nombre'].'</option>
                            ';
                          }
                        ?>
                    </select>
                    <button class="btn btn-primary" type="submit"> <i class="bi bi-arrow-right-circle"></i></button>
            </form>
            </div>
          </div>
            <div class="col-md-0"></div>
        </div>
    </div>
  
</main>
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
      <div class="row">
        <div class="col-md-4">
          <span class="text-muted">&copy; 2024 INJUVENTUD</span>
        </div>
        <div class="col-md-4">
          <a href="/" class="d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <img src="../img/logo_injuventud_01.png" width="auto" height="80" role="img" alt="" class="p-2">
          </a>
        </div>
        <div class="col-md-4">
          <span class="text-muted">&copy; GODEZAC</span>
        </div>
      </div>
    </footer>
    </div>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
