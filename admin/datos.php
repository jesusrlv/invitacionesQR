<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reporte de Universidades</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500&family=DM+Mono&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg:      #f5f4f0;
      --surface: #ffffff;
      --surface2:#f0efe9;
      --border:  rgba(0,0,0,0.08);
      --border2: rgba(0,0,0,0.14);
      --text:    #1a1a18;
      --text2:   #6b6b67;
      --text3:   #9e9e99;
      --radius-md: 8px;
      --radius-lg: 12px;
      --font: 'DM Sans', sans-serif;
      --mono: 'DM Mono', monospace;
    }

    body {
      font-family: var(--font);
      background: var(--bg);
      color: var(--text);
      min-height: 100vh;
    }

    /* ── TOP BAR ── */
    .topbar {
      background: var(--surface);
      border-bottom: 0.5px solid var(--border);
      padding: 1.1rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 12px;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    .topbar-left { display: flex; align-items: center; gap: 12px; }

    .logo-icon {
      width: 38px; height: 38px;
      border-radius: var(--radius-md);
      background: var(--surface2);
      border: 0.5px solid var(--border);
      display: flex; align-items: center; justify-content: center;
      font-size: 20px; color: var(--text2);
    }

    .topbar-title { font-size: 15px; font-weight: 500; color: var(--text); }
    .topbar-sub   { font-size: 12px; color: var(--text3); margin-top: 1px; }

    /* ── MAIN ── */
    .main { max-width: 960px; margin: 0 auto; padding: 2rem 1.5rem; }

    /* ── PAGE HEADER ── */
    .page-header { margin-bottom: 1.5rem; }
    .page-header h1 { font-size: 22px; font-weight: 500; margin-bottom: 4px; }
    .page-header p  { font-size: 13px; color: var(--text2); }

    /* ── STATS ── */
    .stats-row {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
      gap: 12px;
      margin-bottom: 1.5rem;
    }

    .stat-card {
      background: var(--surface);
      border: 0.5px solid var(--border);
      border-radius: var(--radius-lg);
      padding: 1rem 1.25rem;
    }

    .stat-label {
      font-size: 11px; font-weight: 500; color: var(--text3);
      text-transform: uppercase; letter-spacing: 0.06em;
      margin-bottom: 6px;
      display: flex; align-items: center; gap: 5px;
    }

    .stat-label i { font-size: 13px; }
    .stat-value   { font-size: 28px; font-weight: 500; color: var(--text); line-height: 1; }
    .stat-delta   { font-size: 11px; margin-top: 5px; color: #1D9E75; display: flex; align-items: center; gap: 3px; }

    /* ── TABLE ── */
    .table-card {
      background: var(--surface);
      border: 0.5px solid var(--border);
      border-radius: var(--radius-lg);
      overflow: hidden;
    }

    .table-header {
      display: grid;
      grid-template-columns: 2.5rem 1fr 120px 120px 140px;
      gap: 12px;
      padding: 10px 1.25rem;
      font-size: 11px; font-weight: 500; color: var(--text3);
      text-transform: uppercase; letter-spacing: 0.06em;
      border-bottom: 0.5px solid var(--border);
    }

    .uni-row {
      display: grid;
      grid-template-columns: 2.5rem 1fr 120px 120px 140px;
      gap: 12px;
      align-items: center;
      padding: 12px 1.25rem;
      border-bottom: 0.5px solid var(--border);
      transition: background 0.1s;
    }

    .uni-row:last-child { border-bottom: none; }
    .uni-row:hover { background: var(--surface2); }

    .uni-num  { font-size: 13px; font-weight: 500; color: var(--text3); text-align: center; }

    .uni-info { display: flex; align-items: center; gap: 10px; min-width: 0; }

    .uni-avatar {
      width: 32px; height: 32px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 11px; font-weight: 500; flex-shrink: 0;
    }

    .uni-name { font-size: 13px; font-weight: 500; color: var(--text); }

    .uni-cant { font-size: 15px; font-weight: 500; color: var(--text); text-align: right; }

    /* ── FOOTER ── */
    footer {
      text-align: center; padding: 2rem 1rem;
      font-size: 12px; color: var(--text3);
      display: flex; align-items: center; justify-content: center; gap: 6px;
    }

    @media (max-width: 640px) {
      .search-box input { width: 130px; }
    }
  </style>
</head>
<body>

  <!-- TOP BAR -->
  <header class="topbar">
    <div class="topbar-left">
      <div class="logo-icon"><i class="ti ti-building-community"></i></div>
      <div>
        <div class="topbar-title">Directorio de universidades</div>
        <div class="topbar-sub">Registros recibidos del formulario</div>
      </div>
    </div>
  </header>

  <!-- MAIN -->
  <main class="main">

    <div class="page-header">
      <h1>Universidades registradas</h1>
      <p>Listado actualizado con los datos enviados desde el formulario.</p>
    </div>

    <!-- STATS -->
    <div class="stats-row">
      <div class="stat-card">
        <div class="stat-label"><i class="ti ti-building"></i> Total registros en formulario  </div>
        <div class="stat-value" id="totalTipos"></div>
        <div class="stat-delta"><i class="ti ti-refresh"></i> Total de registros</div>
      </div>
      <div class="stat-card">
        <div class="stat-label"><i class="ti ti-users"></i> Total CHECK IN en el evento</div>
        <div class="stat-value" id="totalInv">—</div>
        <div class="stat-delta" style="color:var(--text3)">Check In</div>
      </div>
    </div>

    <!-- TABLA -->
    <div class="table-card">
      <div class="table-header">
        <span>#</span>
        <span>Tipo de invitación</span>
        <span style="text-align:right">Cantidad</span>
        <span style="text-align:right">Check-in</span>
        <span style="text-align:right">No registrados</span>
      </div>
      <div id="lista"></div>
    </div>

  </main>

  <footer>
    <i class="ti ti-lock" style="font-size:13px;"></i>
    Información confidencial — solo uso interno
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
    $.ajax({
      url: 'query_datos.php',
      type: 'GET',
      dataType: 'json',
      success: function(data) {

        // Calcular totales
        var totalInv = 0;
        for (var i = 0; i < data.length; i++) {
          totalInv += parseInt(data[i].num);
        }
        $('#totalTipos').text(data.length);
        $('#totalInv').text(totalInv);

        // Colores de texto para cada avatar (el fondo viene de data[i].color)
        var colores = [
          '#085041', '#0C447C', '#3C3489',
          '#633806', '#712B13', '#27500A'
        ];

        // Pintar filas
        var html = '';
        for (var i = 0; i < data.length; i++) {
          var txtColor  = colores[i % colores.length];
          var iniciales = data[i].tipoInvitacion.trim().slice(0, 2).toUpperCase();
          html += '<div class="uni-row">';
          html += '  <div class="uni-num">' + (i + 1) + '</div>';
          html += '  <div class="uni-info">';
          html += '    <div class="uni-avatar" style="background:#' + data[i].color + ';color:' + txtColor + '">' + iniciales + '</div>';
          html += '    <div class="uni-name">' + data[i].tipoInvitacion + '</div>';
          html += '  </div>';
          html += '  <div class="uni-cant">' + data[i].num + '</div>';
          html += '  <div class="uni-cant">' + data[i].checkin + '</div>';
          html += '  <div class="uni-cant">' + data[i].no_registrados + '</div>';
          html += '</div>';
        }
        $('#lista').html(html);

      }
    });

    $.ajax({
      url: 'query_datos_cards.php',
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        let totalInvitaciones =  data[0].total_invitaciones || 0;
        let totalCheckin =  data[0].total_checkin || 0;
        let totalNoRegistrados =  data[0].total_no_registrados || 0;
        $('#totalTipos').text(totalInvitaciones);
        $('#totalInv').text(totalCheckin);

      }
    });
  </script>

</body>
</html>