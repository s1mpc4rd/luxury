<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Solicitar Reseñas - Luxury Premium</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Variables de diseño */
    :root {
      --gold: #d4af37;
      --gold-light: #f8f3e6;
      --black: #1a1a1a;
      --white: #ffffff;
      --gray-light: #f7f7f7;
      --gray: #e0e0e0;
      --gray-dark: #888888;
      --orange: #f0ad4e;
      --red: #f16363;
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
      font-family: 'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
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
      font-size: 15px;
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
    }

    .sidebar ul li {
      margin: 12px 0;
      color: var(--black);
      cursor: pointer;
      font-size: 14px;
      transition: var(--transition);
      padding: 8px 10px;
      border-radius: 6px;
      display: flex;
      align-items: center;
    }

    .sidebar ul li:hover {
      background-color: var(--gold-light);
      color: var(--gold);
    }

    .sidebar ul li i {
      margin-right: 10px;
      width: 20px;
      text-align: center;
      color: var(--gray-dark);
    }

    .sidebar ul li:hover i {
      color: var(--gold);
    }

    /* Main Content */
    .main {
      flex: 1;
      background-color: var(--white);
      padding: 30px;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .main h2 {
      font-size: 24px;
      margin-bottom: 20px;
      color: var(--black);
      font-weight: 600;
      display: flex;
      align-items: center;
    }

    .main h2 i {
      margin-right: 10px;
      color: var(--gold);
    }

    /* Stats Box */
    .stats-box {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      align-items: center;
      margin-bottom: 25px;
      background-color: var(--gold-light);
      padding: 20px;
      border-radius: var(--radius);
      border: 1px solid var(--gray);
    }

    .stats-box div {
      font-size: 14px;
      color: var(--black);
      padding: 8px 15px;
      background-color: var(--white);
      border-radius: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .stats-box div strong {
      color: var(--gold);
    }

    /* Alert */
    .alert {
      background-color: #fff8f0;
      padding: 18px 25px;
      border-left: 4px solid var(--orange);
      border-radius: var(--radius);
      font-size: 14px;
      color: #8a5a00;
      margin-bottom: 30px;
      display: flex;
      align-items: center;
    }

    .alert i {
      margin-right: 15px;
      font-size: 20px;
      color: var(--orange);
    }

    /* Form Section */
    .form-section {
      border: 1px solid var(--gray);
      border-radius: var(--radius);
      padding: 25px;
    }

    .form-section h3 {
      margin-top: 0;
      margin-bottom: 20px;
      font-size: 18px;
      color: var(--black);
    }

    .form-section p {
      font-size: 14px;
      color: var(--gray-dark);
      margin-bottom: 20px;
    }

    /* Input Group */
    .input-group {
      display: flex;
      gap: 10px;
      margin-bottom: 15px;
    }

    .input-group input {
      padding: 12px 15px;
      border: 1px solid var(--gray);
      border-radius: var(--radius);
      flex: 1;
      font-size: 14px;
      transition: var(--transition);
    }

    .input-group input:focus {
      outline: none;
      border-color: var(--gold);
      box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.2);
    }

    .input-group button {
      background-color: var(--red);
      color: var(--white);
      border: none;
      padding: 0 20px;
      border-radius: var(--radius);
      cursor: pointer;
      font-weight: 600;
      transition: var(--transition);
    }

    .input-group button:hover {
      background-color: #e05555;
      transform: translateY(-2px);
    }

    /* CC Note */
    .cc-note {
      font-size: 13px;
      color: var(--gray-dark);
      margin-bottom: 20px;
      padding-left: 10px;
    }

    /* Message Box */
    .message-box {
      margin-top: 25px;
    }

    .message-box label {
      display: block;
      font-size: 14px;
      margin-bottom: 10px;
      color: var(--black);
      font-weight: 500;
    }

    .message-box textarea {
      width: 100%;
      height: 180px;
      padding: 15px;
      font-size: 14px;
      border-radius: var(--radius);
      border: 1px solid var(--gray);
      resize: vertical;
      transition: var(--transition);
      line-height: 1.6;
    }

    .message-box textarea:focus {
      outline: none;
      border-color: var(--gold);
      box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.2);
    }

    /* Dropdown */
    .dropdown {
      margin-top: 20px;
      font-size: 14px;
    }

    .dropdown select {
      padding: 8px 15px;
      border-radius: var(--radius);
      border: 1px solid var(--gray);
      background-color: var(--white);
      margin-left: 10px;
      transition: var(--transition);
    }

    .dropdown select:focus {
      outline: none;
      border-color: var(--gold);
    }

    /* Footer */
    footer {
      background-color: var(--black);
      color: var(--white);
      padding: 30px 0;
      text-align: center;
      margin-top: 50px;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .footer-section {
      flex: 1;
      min-width: 200px;
      margin-bottom: 20px;
    }

    .footer-section h3 {
      color: var(--gold);
      margin-bottom: 15px;
      font-size: 16px;
    }

    .footer-section ul {
      list-style: none;
      padding: 0;
    }

    .footer-section ul li {
      margin-bottom: 8px;
    }

    .footer-section ul li a {
      color: var(--white);
      text-decoration: none;
      transition: var(--transition);
    }

    .footer-section ul li a:hover {
      color: var(--gold);
    }

    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid rgba(255,255,255,0.1);
      margin-top: 20px;
      font-size: 13px;
      color: var(--gray-dark);
    }

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

      .input-group {
        flex-direction: column;
      }

      .input-group button {
        padding: 12px;
      }
    }

    @media (max-width: 480px) {
      .stats-box {
        flex-direction: column;
        align-items: flex-start;
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
      <a href="peticiones.html" class="nav-item">
        <i class="fas fa-envelope"></i>
        <span>Peticiones</span>
      </a>
      <a href="#" class="nav-item active">
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
      <h4>Reseñas</h4>
      <ul>
        <li><i class="fas fa-paper-plane"></i> Solicitar reseñas</li>
        <li><i class="fas fa-star"></i> Mis reseñas</li>
        <li><i class="fas fa-certificate"></i> Mis sellos</li>
        <li><i class="fas fa-code"></i> Widget de revisión</li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="main">
      <h2><i class="fas fa-paper-plane"></i> Solicitar reseñas</h2>

      <div class="stats-box">
        <div><strong>Tienes 0 reseñas</strong></div>
        <div><i class="fas fa-circle" style="color: var(--blue);"></i> 0 solicitudes enviadas</div>
        <div><i class="fas fa-circle" style="color: var(--orange);"></i> 0 sin respuesta</div>
        <div><i class="fas fa-circle" style="color: var(--gray);"></i> 0 sin foto</div>
      </div>

      <div class="alert">
        <i class="fas fa-exclamation-circle"></i>
        <div>Su empresa aún no ha sido publicada. Una vez que esté en línea, podrás enviar un correo electrónico a tus clientes solicitando una revisión de tus servicios.</div>
      </div>

      <div class="form-section">
        <h3>Destinatarios</h3>
        <p>Editar y enviar mensaje para solicitar opiniones de clientes. Recibirá una copia del correo electrónico.</p>

        <div class="input-group">
          <input type="text" placeholder="Nombre">
          <input type="email" placeholder="Correo electrónico">
          <button style="background-color: #d0a933;">Agregar</button>
        </div>

        <div class="cc-note">
          CC: 
        </div>

        <div class="message-box">
          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje">Estimado [Nombre],</textarea>

          <div class="dropdown">
            Modelo: 
            <select>
              <option>Plantilla por defecto</option>
              <option>Modelo personalizado</option>
            </select>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <h3>Luxury Premium</h3>
        <p>La plataforma líder para proveedores de eventos de lujo.</p>
      </div>
      <div class="footer-section">
        <h3>Enlaces rápidos</h3>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Cómo funciona</a></li>
          <li><a href="#">Precios</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Legal</h3>
        <ul>
          <li><a href="#">Términos y condiciones</a></li>
          <li><a href="#">Política de privacidad</a></li>
          <li><a href="#">Cookies</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2023 Luxury Premium. Todos los derechos reservados.
    </div>
  </footer>
</body>
</html>