<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi Escaparate - Luxury Premium</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Variables de diseño */
    :root {
      --gold: #d4af37;
      --gold-light: #f0e6d2;
      --black: #1a1a1a;
      --white: #ffffff;
      --gray-light: #f8f8f8;
      --gray: #e0e0e0;
      --gray-dark: #888888;
      --success: #4caf50;
      --warning: #ff9800;
      --danger: #f44336;
      --info: #2196f3;
      --radius: 12px;
      --shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    /* Reset y estilos base */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    body {
      font-family: 'poppins', 'Helvetica Neue', Arial, sans-serif;
      background-color: var(--gray-light);
      color: var(--black);
      line-height: 1.6;
    }

    /* Header elegante */
    header {
      background-color: black;
      box-shadow: var(--shadow);
      padding: 15px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .logo-container {
      display: flex;
      align-items: center;
    }

    .logo {
      height: 40px;
      margin-right: 15px;
    }

    .nav-links {
      display: flex;
      gap: 25px;
    }

    .nav-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      color: var(--black);
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
      color: var(--black);
    }

    .nav-item:hover, .nav-item.active {
      color: var(--gold);
    }

    .nav-item:hover i, .nav-item.active i {
      color: var(--gold);
    }

    .progress-container {
      display: flex;
      align-items: center;
      background: var(--gold-light);
      padding: 8px 15px;
      border-radius: 20px;
    }

    .progress-text {
      margin-right: 10px;
      font-size: 13px;
      font-weight: 500;
      color: var(--black);
    }

    .progress-bar {
      width: 120px;
      height: 6px;
      background: var(--gray);
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

    /* Contenido principal */
    .dashboard {
      max-width: 1400px;
      margin: 30px auto;
      padding: 0 30px;
    }

    /* Estadísticas */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .stat-card {
      background: var(--white);
      padding: 25px;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      transition: var(--transition);
      position: relative;
      overflow: hidden;
    }

    .stat-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .stat-card::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 4px;
      height: 100%;
      background: var(--gold);
    }

    .stat-value {
      font-size: 32px;
      font-weight: 700;
      margin-bottom: 5px;
      color: var(--black);
    }

    .stat-label {
      font-size: 14px;
      color: var(--gray-dark);
    }

    .stat-period {
      font-size: 12px;
      color: var(--gray-dark);
      margin-top: 5px;
    }

    /* Alerta */
    .alert-card {
      background: linear-gradient(135deg, #f5f7fa 0%, #f0f4f8 100%);
      border-left: 4px solid var(--gold);
      padding: 20px 25px;
      margin-bottom: 30px;
      border-radius: var(--radius);
      display: flex;
      align-items: center;
      box-shadow: var(--shadow);
    }

    .alert-icon {
      font-size: 24px;
      color: var(--gold);
      margin-right: 15px;
    }

    .alert-content {
      flex: 1;
    }

    .alert-text {
      font-size: 15px;
      margin-bottom: 5px;
    }

    .alert-link {
      color: var(--gold);
      font-weight: 600;
      text-decoration: none;
      transition: opacity 0.3s;
    }

    .alert-link:hover {
      opacity: 0.8;
      text-decoration: underline;
    }

    /* Panel principal */
    .main-panel {
      display: grid;
      grid-template-columns: 1fr 320px;
      gap: 25px;
      margin-bottom: 40px;
    }

    .chart-container {
      background: var(--white);
      padding: 25px;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .chart-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .chart-title {
      font-size: 18px;
      font-weight: 600;
    }

    .chart-description {
      font-size: 14px;
      color: var(--gray-dark);
      margin-top: 5px;
    }

    .chart-placeholder {
      background: linear-gradient(135deg, #f5f7fa 0%, #eef2f5 100%);
      height: 250px;
      border-radius: var(--radius);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gray-dark);
      font-size: 14px;
    }

    /* Panel derecho */
    .side-panel {
      display: flex;
      flex-direction: column;
      gap: 25px;
    }

    .progress-panel, .reviews-panel {
      background: var(--white);
      padding: 25px;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .panel-title {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
    }

    .panel-title i {
      margin-right: 10px;
      color: var(--gold);
    }

    .circular-progress {
      position: relative;
      width: 120px;
      height: 120px;
      margin: 0 auto 20px;
    }

    .progress-bg {
      fill: none;
      stroke: var(--gray);
      stroke-width: 8;
    }

    .progress-fill-circle {
      fill: none;
      stroke: var(--gold);
      stroke-width: 8;
      stroke-linecap: round;
      transform: rotate(-90deg);
      transform-origin: 50% 50%;
      stroke-dasharray: 314;
      stroke-dashoffset: 220;
      animation: progress 1.5s ease-in-out forwards;
    }

    @keyframes progress {
      0% { stroke-dashoffset: 314; }
    }

    .progress-percent {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 24px;
      font-weight: 700;
      color: var(--black);
    }

    .progress-steps {
      text-align: center;
      font-size: 14px;
      color: var(--gray-dark);
      margin-bottom: 20px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background: var(--gold);
      color: var(--white);
      border-radius: 30px;
      font-size: 14px;
      font-weight: 600;
      text-align: center;
      transition: var(--transition);
      border: none;
      cursor: pointer;
      width: 100%;
    }

    .btn:hover {
      background: #d0a933;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(212, 175, 55, 0.3);
    }

    .divider {
      height: 1px;
      background: var(--gray);
      margin: 25px 0;
    }

    .stars {
      color: var(--gold);
      font-size: 20px;
      letter-spacing: 5px;
      margin-bottom: 15px;
    }

    /* Bloques informativos */
    .info-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 25px;
      margin-bottom: 50px;
    }

    .info-card {
      background: var(--white);
      padding: 30px;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      text-align: center;
      transition: var(--transition);
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .info-icon {
      font-size: 48px;
      color: var(--gold);
      margin-bottom: 20px;
    }

    .info-title {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .info-text {
      font-size: 15px;
      color: var(--gray-dark);
      margin-bottom: 20px;
      line-height: 1.6;
    }

    .btn-premium {
      background: linear-gradient(135deg, var(--gold) 0%, #d0a933 100%);
      color: white;
      border: none;
    }

    .btn-reviews {
      background: linear-gradient(135deg, var(--gold) 0%, #d0a933 100%);
      color: white;
      border: none;
    }

    /* Responsive */
    @media (max-width: 1200px) {
      .main-panel {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        padding: 15px;
      }
      
      .nav-links {
        margin-top: 15px;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
      }
      
      .progress-container {
        margin-top: 15px;
      }
      
      .dashboard {
        padding: 0 15px;
      }
    }

    @media (max-width: 480px) {
      .stats-grid {
        grid-template-columns: 1fr;
      }
      
      .nav-item {
        font-size: 12px;
      }
      
      .nav-item i {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>
  <!-- Header elegante -->
  <header>
    <div class="logo-container">
      <img class="logo" src="img/favicon.png" alt="">
      <div class="logo">Luxury<sup>Premium</sup></div>
    </div>
    
    <div class="nav-links">
      <a href="comenzar.html" class="nav-item">
        <i class="fas fa-play-circle"></i>
        <span style="color: #fff;">Comenzar</span>
      </a>
      <a href="miescaparate.html" class="nav-item active">
        <i class="fas fa-store"></i>
        <span style="color: #fff;">Mi escaparate</span>
      </a>
      <a href="peticiones.html" class="nav-item">
        <i class="fas fa-envelope"></i>
        <span style="color: #fff;">Peticiones</span>
      </a>
      <a href="reseñas.html" class="nav-item">
        <i class="fas fa-star"></i>
        <span style="color: #fff;">Reseñas</span>
      </a>
      <a href="mtdpago.html" class="nav-item">
        <i class="fas fa-file-invoice-dollar"></i>
        <span style="color: #fff;">Facturación</span>
      </a>
      <a href="#" class="nav-item">
        <i class="fas fa-user-cog"></i>
        <span style="color: #fff">Mi cuenta</span>
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
  <div class="dashboard">
    <!-- Estadísticas -->
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-value">0</div>
        <div class="stat-label">Solicitudes recibidas</div>
        <div class="stat-period">últimos 12 meses</div>
      </div>
      <div class="stat-card">
        <div class="stat-value">0</div>
        <div class="stat-label">Reseñas</div>
        <div class="stat-period">últimos 12 meses</div>
      </div>
      <div class="stat-card">
        <div class="stat-value">0</div>
        <div class="stat-label">Impresiones</div>
        <div class="stat-period">últimos 12 meses</div>
      </div>
      <div class="stat-card">
        <div class="stat-value">0</div>
        <div class="stat-label">Clicks en teléfono</div>
        <div class="stat-period">últimos 12 meses</div>
      </div>
    </div>

    <!-- Alerta -->
    <div class="alert-card">
      <i class="fas fa-info-circle alert-icon"></i>
      <div class="alert-content">
        <p class="alert-text">Estamos verificando los datos de tu empresa. Una vez validados, publicaremos tu escaparate.</p>
        <a href="mailto:luxury@gmail.com" class="alert-link">Contacta a nuestro equipo</a>
      </div>
    </div>

    <!-- Panel principal -->
    <div class="main-panel">
      <div class="chart-container">
        <div class="chart-header">
          <div>
            <h3 class="chart-title">Impresiones en tu escaparate</h3>
            <p class="chart-description">Número de impresiones de parejas en tu escaparate</p>
          </div>
        </div>
        <div class="chart-placeholder">
          Gráfico de impresiones (datos no disponibles)
        </div>
      </div>
      
      <div class="side-panel">
        <div class="progress-panel">
          <h3 class="panel-title"><i class="fas fa-tasks"></i> Completa tu escaparate</h3>
          <div class="circular-progress">
            <svg viewBox="0 0 100 100">
              <circle class="progress-bg" cx="50" cy="50" r="45"></circle>
              <circle class="progress-fill-circle" cx="50" cy="50" r="45"></circle>
            </svg>
            <div class="progress-percent">30%</div>
          </div>
          <p class="progress-steps">Estás a 5 pasos de completar tu escaparate</p>
          <button class="btn">Continuar configuración</button>
        </div>
        
        <div class="reviews-panel">
          <h3 class="panel-title"><i class="fas fa-star"></i> Reputación</h3>
          <div class="stars">★★★★★</div>
          <p class="progress-steps">Mejora tu reputación con reseñas de clientes</p>
          <div class="divider"></div>
          <button class="btn">Solicitar reseñas</button>
        </div>
      </div>
    </div>

    <!-- Bloques informativos -->
    <div class="info-grid">
      <div class="info-card">
        <i class="fas fa-envelope-open-text info-icon"></i>
        <h3 class="info-title">Aún no tienes solicitudes</h3>
        <p class="info-text">Optimiza tu escaparate para aparecer en los primeros resultados y recibe más solicitudes de parejas interesadas.</p>
        <button class="btn btn-premium">Hazte Premium</button>
      </div>
      
      <div class="info-card">
        <i class="fas fa-star-half-alt info-icon"></i>
        <h3 class="info-title">Sin reseñas aún</h3>
        <p class="info-text">Las reseñas son fundamentales para que las parejas confíen en tus servicios. Pide a tus clientes que compartan su experiencia.</p>
        <button class="btn btn-reviews">Solicitar reseñas</button>
      </div>
    </div>
  </div>
</body>
</html>