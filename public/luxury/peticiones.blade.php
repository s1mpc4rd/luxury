<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mis Peticiones - Luxury Premium</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Variables de diseño */
    :root {
      --gold: #d4af37;
      --gold-light: #f8f3e6;
      --black: #1a1a1a;
      --white: #ffffff;
      --gray-light: #f8f8f8;
      --gray: #e0e0e0;
      --gray-dark: #888888;
      --blue: #2196f3;
      --green: #4caf50;
      --orange: #ff9800;
      --red: #f44336;
      --radius: 12px;
      --shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      --transition: all 0.3s ease;
    }

    /* Reset y estilos base */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--gray-light);
      color: var(--black);
      line-height: 1.6;
    }

    /* Header elegante */
    header {
      background-color: var(--black);
      padding: 15px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .logo {
      height: 40px;
      width: auto;
    }

    .nav-links {
      display: flex;
      gap: 25px;
    }

    .nav-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      color: var(--white);
      text-decoration: none;
      font-size: 14px;
      transition: var(--transition);
    }

    .nav-item i {
      font-size: 18px;
      margin-bottom: 5px;
      color: var(--gray-dark);
    }

    .nav-item span {
      color: var(--gold);
    }

    .nav-item:hover, .nav-item.active {
      transform: translateY(-2px);
    }

    .nav-item.active i {
      color: var(--gold);
    }

    .progress-container {
      display: flex;
      align-items: center;
      background: rgba(255,255,255,0.1);
      padding: 8px 15px;
      border-radius: 20px;
    }

    .progress-text {
      margin-right: 10px;
      font-size: 13px;
      font-weight: 500;
      color: var(--gold);
    }

    .progress-bar {
      width: 120px;
      height: 6px;
      background: rgba(255,255,255,0.2);
      border-radius: 3px;
      overflow: hidden;
    }

    .progress-fill {
      height: 100%;
      width: 30%;
      background: var(--gold);
      border-radius: 3px;
      transition: width 0.6s ease;
    }

    /* Contenedor principal */
    .container {
      max-width: 1200px;
      margin: 30px auto;
      padding: 0 20px;
      display: flex;
      gap: 25px;
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      background-color: var(--white);
      padding: 25px;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      height: fit-content;
    }

    .sidebar h4 {
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: var(--gray-dark);
      margin-bottom: 15px;
      padding-bottom: 8px;
      border-bottom: 1px solid var(--gray);
    }

    .sidebar ul {
      list-style: none;
      padding-left: 0;
      margin-bottom: 30px;
    }

    .sidebar ul li {
      padding: 8px 0;
      font-size: 14px;
      color: var(--black);
      cursor: pointer;
      transition: var(--transition);
      display: flex;
      align-items: center;
    }

    .sidebar ul li:hover {
      color: var(--gold);
      transform: translateX(5px);
    }

    .sidebar ul li i {
      margin-right: 10px;
      width: 20px;
      text-align: center;
    }

    .sidebar .highlight {
      font-size: 13px;
      color: var(--gold);
      font-weight: 600;
      margin-top: 15px;
      display: block;
      padding: 8px 0;
      border-top: 1px solid var(--gray);
    }

    /* Main Content */
    .main {
      flex: 1;
      background-color: var(--white);
      padding: 30px;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .main-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
      padding-bottom: 15px;
      border-bottom: 1px solid var(--gray);
    }

    .main-header h2 {
      font-size: 22px;
      margin: 0;
      color: var(--black);
      font-weight: 600;
    }

    .btn-premium {
      background: linear-gradient(135deg, var(--gold) 0%, #e6c44d 100%);
      color: var(--black);
      padding: 10px 20px;
      font-size: 14px;
      font-weight: 600;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: var(--transition);
      box-shadow: 0 2px 10px rgba(212, 175, 55, 0.3);
    }

    .btn-premium:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4);
    }

    /* Estadísticas */
    .stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 15px;
      background-color: var(--gold-light);
      padding: 20px;
      border-radius: var(--radius);
      margin-bottom: 30px;
    }

    .stat-item {
      text-align: center;
      padding: 10px;
    }

    .stat-value {
      display: block;
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .stat-label {
      font-size: 13px;
      color: var(--gray-dark);
    }

    /* Buscador */
    .search-box {
      display: flex;
      justify-content: flex-end;
      margin-bottom: 30px;
    }

    .search-box input {
      padding: 12px 20px;
      border: 1px solid var(--gray);
      border-radius: 30px;
      width: 300px;
      font-size: 14px;
      transition: var(--transition);
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23888' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: 15px center;
      background-size: 16px;
      padding-left: 40px;
    }

    .search-box input:focus {
      outline: none;
      border-color: var(--gold);
      box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.2);
    }

    /* Estado vacío */
    .empty-box {
      text-align: center;
      padding: 60px 20px;
      color: var(--gray-dark);
    }

    .empty-box img {
      width: 80px;
      margin-bottom: 20px;
      opacity: 0.7;
    }

    .empty-box p {
      font-size: 16px;
      margin-bottom: 20px;
    }

    /* Colores de estado */
    .status-pending { color: var(--orange); }
    .status-managed { color: var(--blue); }
    .status-confirmed { color: var(--green); }
    .status-discarded { color: var(--red); }

    /* Responsive */
    @media (max-width: 1024px) {
      .container {
        flex-direction: column;
      }

      .sidebar {
        width: 100%;
      }

      .nav-links {
        display: none; /* Menú hamburguesa sería ideal aquí */
      }
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        padding: 15px;
      }

      .progress-container {
        margin-top: 15px;
      }

      .stats {
        grid-template-columns: 1fr 1fr;
      }

      .search-box input {
        width: 100%;
      }
    }

    @media (max-width: 480px) {
      .stats {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <img class="logo" src="favicon.png" alt="Luxury Premium">
    
    <div class="nav-links">
      <a href="comenzar.html" class="nav-item">
        <i class="fas fa-play-circle"></i>
        <span>Comenzar</span>
      </a>
      <a href="miescaparate.html" class="nav-item">
        <i class="fas fa-store"></i>
        <span>Mi escaparate</span>
      </a>
      <a href="#" class="nav-item active">
        <i class="fas fa-envelope"></i>
        <span>Mis peticiones</span>
      </a>
      <a href="reseñas.html" class="nav-item">
        <i class="fas fa-star"></i>
        <span>Reseñas</span>
      </a>
      <a href="mtdpago.html" class="nav-item">
        <i class="fas fa-file-invoice-dollar"></i>
        <span>Facturación</span>
      </a>
      <a href="#" class="nav-item">
        <i class="fas fa-user-cog"></i>
        <span>Mi cuenta</span>
      </a>
    </div>
    
    <div class="progress-container">
      <span class="progress-text">Completa tu escaparate</span>
      <div class="progress-bar">
        <div class="progress-fill"></div>
      </div>
    </div>
  </header>

  <!-- Contenido principal -->
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h4>CARPETAS</h4>
      <ul>
        <li><i class="far fa-clock"></i> Muy pronto</li>
        <li><i class="far fa-envelope"></i> No leído</li>
        <li><i class="far fa-check-circle"></i> Leer</li>
        <li><i class="far fa-folder"></i> Archivado</li>
      </ul>

      <h4>ESTADO</h4>
      <ul>
        <li class="status-pending"><i class="fas fa-circle"></i> Pendiente</li>
        <li class="status-managed"><i class="fas fa-circle"></i> Administrado</li>
        <li class="status-confirmed"><i class="fas fa-circle"></i> Confirmado</li>
        <li class="status-discarded"><i class="fas fa-circle"></i> Descartado</li>
      </ul>

      <h4>COMPETENCIA</h4>
      <ul>
        <li><i class="fas fa-tag"></i> Cupones</li>
      </ul>

      <h4>INSTRUMENTOS</h4>
      <ul>
        <li><i class="fas fa-cog"></i> Ajustes</li>
        <li><i class="far fa-copy"></i> Plantillas de respuesta</li>
        <li class="highlight"><i class="fas fa-file-export"></i> Exportar a Excel</li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="main">
      <div class="main-header">
        <h2>Mis peticiones</h2>
        <button class="btn-premium">HAZTE PREMIUM</button>
      </div>

      <div class="stats">
        <div class="stat-item">
          <span class="stat-value">0</span>
          <span class="stat-label">Administrado</span>
        </div>
        <div class="stat-item">
          <span class="stat-value">0</span>
          <span class="stat-label">Confirmado</span>
        </div>
        <div class="stat-item">
          <span class="stat-value">0</span>
          <span class="stat-label">Descartado</span>
        </div>
        <div class="stat-item">
          <span class="stat-value">-- : --</span>
          <span class="stat-label">Tiempo de respuesta</span>
        </div>
      </div>

      <div class="search-box">
        <input type="search" placeholder="Buscar solicitud...">
      </div>

      <div class="empty-box">
        <img src="https://img.icons8.com/ios/100/email--v1.png" alt="Sin solicitudes">
        <p>No hemos encontrado ninguna solicitud de cotización</p>
      </div>
    </main>
  </div>
</body>
</html>