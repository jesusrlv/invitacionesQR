<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Datos de accesos</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500&family=DM+Mono&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg: #f5f4f0;
      --surface: #ffffff;
      --surface2: #f0efe9;
      --border: rgba(0,0,0,0.08);
      --border2: rgba(0,0,0,0.14);
      --text: #1a1a18;
      --text2: #6b6b67;
      --text3: #9e9e99;
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

    .topbar-right { display: flex; align-items: center; gap: 8px; }

    .search-box {
      display: flex; align-items: center; gap: 8px;
      background: var(--surface2);
      border: 0.5px solid var(--border);
      border-radius: var(--radius-md);
      padding: 7px 12px;
    }

    .search-box i { font-size: 15px; color: var(--text3); }

    .search-box input {
      background: none; border: none; outline: none;
      font-family: var(--font); font-size: 13px;
      color: var(--text); width: 200px;
    }

    .search-box input::placeholder { color: var(--text3); }

    .sort-btn {
      display: flex; align-items: center; gap: 6px;
      background: none;
      border: 0.5px solid var(--border2);
      border-radius: var(--radius-md);
      padding: 7px 12px; cursor: pointer;
      font-family: var(--font); font-size: 13px;
      color: var(--text2);
      transition: background 0.12s;
    }

    .sort-btn:hover { background: var(--surface2); }

    /* ── MAIN CONTENT ── */
    .main { max-width: 960px; margin: 0 auto; padding: 2rem 1.5rem; }

    /* ── PAGE HEADER ── */
    .page-header {
      margin-bottom: 1.5rem;
    }

    .page-header h1 {
      font-size: 22px; font-weight: 500; color: var(--text);
      margin-bottom: 4px;
    }

    .page-header p {
      font-size: 13px; color: var(--text2);
    }

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
      font-size: 11px; font-weight: 500;
      color: var(--text3);
      text-transform: uppercase;
      letter-spacing: 0.06em;
      margin-bottom: 6px;
      display: flex; align-items: center; gap: 5px;
    }

    .stat-label i { font-size: 13px; }
    .stat-value { font-size: 28px; font-weight: 500; color: var(--text); line-height: 1; }

    .stat-delta {
      font-size: 11px; margin-top: 5px;
      display: flex; align-items: center; gap: 3px;
      color: #1D9E75;
    }

    .stat-delta i { font-size: 12px; }

    /* ── TABLE ── */
    .table-card {
      background: var(--surface);
      border: 0.5px solid var(--border);
      border-radius: var(--radius-lg);
      overflow: hidden;
    }

    .table-header {
      display: grid;
      grid-template-columns: 2.5rem 1fr 160px 110px 110px;
      gap: 12px;
      padding: 10px 1.25rem;
      font-size: 11px; font-weight: 500;
      color: var(--text3);
      text-transform: uppercase;
      letter-spacing: 0.06em;
      border-bottom: 0.5px solid var(--border);
    }

    .uni-row {
      display: grid;
      grid-template-columns: 2.5rem 1fr 160px 110px 110px;
      gap: 12px;
      align-items: center;
      padding: 12px 1.25rem;
      border-bottom: 0.5px solid var(--border);
      transition: background 0.1s;
      cursor: default;
    }

    .uni-row:last-child { border-bottom: none; }
    .uni-row:hover { background: var(--surface2); }

    .uni-num {
      font-size: 13px; font-weight: 500;
      color: var(--text3); text-align: center;
    }

    .uni-info { display: flex; align-items: center; gap: 10px; min-width: 0; }

    .uni-avatar {
      width: 32px; height: 32px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 11px; font-weight: 500; flex-shrink: 0;
    }

    .uni-name {
      font-size: 13px; font-weight: 500; color: var(--text);
      white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
    }

    .uni-city { font-size: 11px; color: var(--text3); margin-top: 1px; }

    .uni-phone { font-size: 12px; color: var(--text2); font-family: var(--mono); }

    .uni-date { font-size: 12px; color: var(--text3); }

    .badge {
      display: inline-flex; align-items: center; gap: 4px;
      font-size: 11px; font-weight: 500; padding: 3px 9px;
      border-radius: var(--radius-md);
    }

    .badge i { font-size: 11px; }
    .badge-new  { background: #E1F5EE; color: #085041; }
    .badge-ver  { background: #E6F1FB; color: #0C447C; }

    .empty-state {
      display: none;
      flex-direction: column; align-items: center;
      padding: 3rem 1rem; gap: 8px;
      color: var(--text3); font-size: 14px;
    }

    .empty-state i { font-size: 32px; margin-bottom: 4px; }

    /* ── FOOTER ── */
    footer {
      text-align: center; padding: 2rem 1rem;
      font-size: 12px; color: var(--text3);
      display: flex; align-items: center; justify-content: center; gap: 6px;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 640px) {
      .table-header,
      .uni-row {
        grid-template-columns: 2rem 1fr 130px;
      }
      .col-date, .col-status, .th-date, .th-status { display: none; }
      .search-box input { width: 130px; }
    }
  </style>
</head>
<body>

  <!-- TOP BAR -->
  <header class="topbar">
    <div class="topbar-left">
      <div class="logo-icon">
        <i class="ti ti-building-community"></i>
      </div>
      <div>
        <div class="topbar-title">Universidades participantes</div>
        <div class="topbar-sub">Registros recibidos del formulario</div>
      </div>
    </div>
    <div class="topbar-right">
      <div class="search-box">
        <i class="ti ti-search"></i>
        <input type="text" id="searchInput" placeholder="Buscar universidad..." oninput="filterRows()" />
      </div>
      <button class="sort-btn" onclick="toggleSort()">
        <i class="ti ti-arrows-sort"></i>
        <span id="sortLabel">A–Z</span>
      </button>
    </div>
  </header>

  <!-- MAIN -->
  <main class="main">

    <div class="page-header">
      <h1>Universidades registradas</h1>
      <p>Listado actualizado automáticamente con los datos enviados desde el formulario.</p>
    </div>

    <!-- STATS -->
    <div class="stats-row">
      <div class="stat-card">
        <div class="stat-label"><i class="ti ti-building"></i> Total registradas</div>
        <div class="stat-value" id="totalCount">8</div>
        <div class="stat-delta"><i class="ti ti-trending-up"></i> este mes</div>
      </div>
      <div class="stat-card">
        <div class="stat-label"><i class="ti ti-clock"></i> Esta semana</div>
        <div class="stat-value">3</div>
        <div class="stat-delta"><i class="ti ti-trending-up"></i> nuevas</div>
      </div>
      <div class="stat-card">
        <div class="stat-label"><i class="ti ti-map-pin"></i> Estados</div>
        <div class="stat-value">5</div>
        <div class="stat-delta" style="color:var(--text3)">representados</div>
      </div>
    </div>

    <!-- TABLE -->
    <div class="table-card">
      <div class="table-header">
        <span>#</span>
        <span>Universidad</span>
        <span>Teléfono</span>
        <span class="th-date">Registro</span>
        <span class="th-status">Estado</span>
      </div>
      <div id="uniList"></div>
      <div class="empty-state" id="emptyState">
        <i class="ti ti-search-off"></i>
        Sin resultados para esa búsqueda
      </div>
    </div>

  </main>

  <footer>
    <i class="ti ti-lock" style="font-size:13px;"></i>
    Información confidencial — solo uso interno
  </footer>

  <script>
    const colors = [
      { bg: '#E1F5EE', txt: '#085041' },
      { bg: '#E6F1FB', txt: '#0C447C' },
      { bg: '#EEEDFE', txt: '#3C3489' },
      { bg: '#FAEEDA', txt: '#633806' },
      { bg: '#FAECE7', txt: '#712B13' },
      { bg: '#EAF3DE', txt: '#27500A' },
    ];

    const data = [
      { name: 'UNAM',  full: 'Univ. Nacional Autónoma de México',    city: 'Ciudad de México', phone: '+52 55 5622 1616', date: '08 may 2026', status: 'verificada' },
      { name: 'TEC',   full: 'Tecnológico de Monterrey',             city: 'Monterrey, NL',    phone: '+52 81 8358 2000', date: '07 may 2026', status: 'verificada' },
      { name: 'UAM',   full: 'Universidad Autónoma Metropolitana',   city: 'Ciudad de México', phone: '+52 55 5483 4000', date: '06 may 2026', status: 'nueva'      },
      { name: 'UDEG',  full: 'Universidad de Guadalajara',           city: 'Guadalajara, Jal', phone: '+52 33 3134 2222', date: '05 may 2026', status: 'verificada' },
      { name: 'BUAP',  full: 'Benemérita Univ. Autónoma de Puebla',  city: 'Puebla, Pue',      phone: '+52 22 2229 5500', date: '04 may 2026', status: 'nueva'      },
      { name: 'UANL',  full: 'Universidad Autónoma de Nuevo León',   city: 'San Nicolás, NL',  phone: '+52 81 8329 4000', date: '03 may 2026', status: 'nueva'      },
      { name: 'IBERO', full: 'Universidad Iberoamericana',           city: 'Ciudad de México', phone: '+52 55 5950 4000', date: '01 may 2026', status: 'verificada' },
      { name: 'UV',    full: 'Universidad Veracruzana',              city: 'Xalapa, Ver',      phone: '+52 22 8818 1890', date: '28 abr 2026', status: 'verificada' },
    ];

    let sorted = 'asc';
    let currentData = [...data];

    function initials(name) {
      return name.slice(0, 2).toUpperCase();
    }

    function renderList(arr) {
      const list = document.getElementById('uniList');
      const empty = document.getElementById('emptyState');
      document.getElementById('totalCount').textContent = arr.length;

      if (arr.length === 0) {
        list.innerHTML = '';
        empty.style.display = 'flex';
        return;
      }

      empty.style.display = 'none';
      list.innerHTML = arr.map((u, i) => {
        const c = colors[i % colors.length];
        const badge = u.status === 'nueva'
          ? '<span class="badge badge-new"><i class="ti ti-sparkles"></i>Nueva</span>'
          : '<span class="badge badge-ver"><i class="ti ti-check"></i>Verificada</span>';
        return `
          <div class="uni-row">
            <div class="uni-num">${i + 1}</div>
            <div class="uni-info">
              <div class="uni-avatar" style="background:${c.bg};color:${c.txt}">${initials(u.name)}</div>
              <div>
                <div class="uni-name">${u.full}</div>
                <div class="uni-city">${u.city}</div>
              </div>
            </div>
            <div class="uni-phone">${u.phone}</div>
            <div class="uni-date col-date">${u.date}</div>
            <div class="col-status">${badge}</div>
          </div>`;
      }).join('');
    }

    function filterRows() {
      const q = document.getElementById('searchInput').value.toLowerCase();
      const filtered = currentData.filter(u =>
        u.full.toLowerCase().includes(q) ||
        u.city.toLowerCase().includes(q) ||
        u.phone.includes(q)
      );
      renderList(filtered);
    }

    function toggleSort() {
      sorted = sorted === 'asc' ? 'desc' : 'asc';
      document.getElementById('sortLabel').textContent = sorted === 'asc' ? 'A–Z' : 'Z–A';
      currentData.sort((a, b) =>
        sorted === 'asc'
          ? a.full.localeCompare(b.full)
          : b.full.localeCompare(a.full)
      );
      filterRows();
    }

    renderList(currentData);
  </script>
</body>
</html>