<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prepara tu escaparate</title>
  <style>
    /* Variables de color */
    :root {
      --color-primary: #d0a933;
      --color-dark: #000;
      --color-light: #fafafa;
      --color-text: #222;
      --color-text-light: #444;
      --color-white: #fff;
    }

    /* Reset y estilos base */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'poppins', sans-serif;
      background-color: var(--color-light);
      color: var(--color-text);
      line-height: 1.6;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Header */
    header {
      background-color: var(--color-dark);
      display: flex;
      align-items: center;
      justify-content: space-around;
      padding: 20px;
      border-bottom: 1px solid var(--color-dark);
      font-size: 14px;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .logo {
      width: 50px;
      height: 50px;
      object-fit: contain;
    }

    header div {
      display: flex;
      flex-direction: column;
      align-items: center;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    header div:hover {
      transform: translateY(-2px);
    }

    header div span {
      margin-top: 4px;
      color: var(--color-primary);
    }

    /* Barra de progreso */
    .progress-bar-container {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 0 20px;
      font-size: 12px;
    }

    .progress-text {
      color: var(--color-primary);
      margin-right: 10px;
      font-weight: bold;
    }

    .progress-bar {
      background: #eee;
      width: 100px;
      height: 6px;
      border-radius: 10px;
      overflow: hidden;
    }

    .progress-bar-fill {
      background: var(--color-primary);
      width: 30%;
      height: 100%;
      transition: width 0.3s ease;
    }

    /* Contenedor principal */
    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
    }

    /* Títulos */
    .title {
      text-align: center;
      margin-bottom: 40px;
    }

    .title h1 {
      font-size: 2.2rem;
      margin-bottom: 10px;
      color: var(--color-text);
    }

    .title p {
      font-size: 1rem;
      color: var(--color-text-light);
      max-width: 700px;
      margin: 0 auto;
    }

    .title p a {
      color: var(--color-dark);
      font-weight: bold;
      text-decoration: underline;
      transition: color 0.3s ease;
    }

    .title p a:hover {
      color: var(--color-primary);
    }

    /* Pasos */
    .steps {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      margin-top: 40px;
    }

    .step {
      flex: 1;
      background-color: var(--color-white);
      border-radius: 16px;
      padding: 30px 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      text-align: center;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .step:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .step img {
      width: 60px;
      height: 60px;
      margin-bottom: 20px;
      object-fit: contain;
    }

    .step h3 {
      margin: 10px 0;
      font-size: 1.2rem;
      font-weight: bold;
      color: var(--color-dark);
    }

    .step p {
      font-size: 0.9rem;
      margin: 5px 0;
      color: var(--color-text-light);
    }

    .highlight {
      color: var(--color-dark);
      font-weight: 600;
    }

    /* Responsive */
    @media (max-width: 768px) {
      header {
        flex-wrap: wrap;
        padding: 15px;
      }
      
      header div {
        margin: 5px;
      }
      
      .progress-bar-container {
        order: -1;
        width: 100%;
        justify-content: center;
        margin-bottom: 15px;
      }

      .steps {
        flex-direction: column;
      }
      
      .title h1 {
        font-size: 1.8rem;
      }
    }
    /* Footer mejorado */
    footer {
      background-color: #000;
      color: var(--white);
      padding: 40px 0 20px;
      margin-top: auto;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      padding: 0 20px;
    }

    .footer-section {
      margin-bottom: 20px;
    }

    .footer-section h3 {
      color: #d0a933;
      font-size: 18px;
      margin-bottom: 15px;
      position: relative;
      padding-bottom: 10px;
    }

    .footer-section h3::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 50px;
      height: 2px;
      background-color: var(--primary-color);
    }

    .footer-section p, 
    .footer-section a {
      color: white;
      opacity: 0.8;
      font-size: 14px;
      line-height: 1.6;
      margin: 8px 0;
      transition: opacity 0.3s;
    }

    .footer-section a {
      display: block;
      text-decoration: none;
    }

    .footer-section a:hover {
      opacity: 1;
      text-decoration: underline;
    }

    .social-icons {
      display: flex;
      gap: 15px;
      margin-top: 15px;
    }

    .social-icons a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background-color: rgba(255,255,255,0.1);
      transition: background-color 0.3s;
    }

    .social-icons a:hover {
      background-color: var(--primary-color);
    }

    .footer-bottom {
      color:#fff;
      text-align: center;
      padding-top: 20px;
      margin-top: 30px;
      border-top: 1px solid rgba(255,255,255,0.1);
      font-size: 13px;
      opacity: 0.8;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 15px;
        padding: 15px;
      }
      
      .top-actions {
        flex-wrap: wrap;
        justify-content: center;
      }
      
      .footer-content {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <img class="logo" src="img/favicon.png" alt="Logo Luxury Premium">
    <a href="comenzar.html"><div><span>Comenzar</span></div></a>
    <a href="miescaparate.html"><div><span>Mi escaparate</span></div></a>
    <a href="peticiones.html"><div><span>Mis peticiones</span></div></a>
    <a href="reseñas.html"><div><span>Reseñas</span></div></a>
    <a href="mtdpago.html"><div><span>Facturación</span></div></a>
    <div><span>Mi cuenta</span></div>
    <div class="progress-bar-container">
      <a href="completa.html"><span class="progress-text">Completa tu escaparate</span></a>
      <div class="progress-bar"><div class="progress-bar-fill"></div></div>
    </div>
  </header>
  
  <!-- Contenido principal -->
  <div class="container">
    <div class="title">
      <h1>¡Prepara tu escaparate y hazte notar!</h1>
      <p>
        Complete estos sencillos pasos para hacer pública su tienda. Luego de verificar la información nuestro personal se pondrá en contacto con usted. ¿Necesitas ayuda? Puedes echarle un vistazo a este 
        <a href="ejemplo.html">ejemplo</a>.
      </p>
    </div>

    <!-- Pasos -->
    <div class="steps">
      <!-- Paso 1 -->
      <a href="paso1.html">
        <div class="step">
          <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" alt="Icono información de empresa">
          <h3>PASO 1</h3>
          <p class="highlight">Agregar información de la empresa</p>
          <p>Complétalo en solo 3 minutos</p>
        </div>
      </a>

      <!-- Paso 2 -->
      <a href="paso2.html">
        <div class="step">
          <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Icono dirección comercial">
          <h3>PASO 2</h3>
          <p class="highlight">Añade tu dirección comercial</p>
          <p>Complétalo en solo 2 minutos</p>
        </div>
      </a>

      <!-- Paso 3 -->
      <a href="paso3.html">
        <div class="step">
          <img src="https://cdn-icons-png.flaticon.com/512/709/709496.png" alt="Icono subir fotos">
          <h3>PASO 3</h3>
          <p class="highlight">Sube 8 fotos de calidad</p>
          <p>Complétalo en solo 4 minutos</p>
        </div>
      </a>
    </div>
  </div>
  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <h3>Contacto</h3>
        <p>Email: icesoft@gmail.com</p>
        <p>Teléfono: +57 3046812029</p>
        <p>Dirección: Cl. 70 #28 d3 129, Calipso, Cali, Valle del Cauca</p>
      </div>
      
      <div class="footer-section">
        <h3>Enlaces Rápidos</h3>
        <a href="#">Inicio</a>
        <a href="#">Servicios</a>
        <a href="#">Nosotros</a>
        <a href="#">Contacto</a>
      </div>
      
      <div class="footer-section">
        <h3>Síguenos</h3>
        <div class="social-icons">
          <a href="#" target="_blank" title="Facebook">FB</a>
          <a href="#" target="_blank" title="Twitter">TW</a>
          <a href="#" target="_blank" title="Instagram">IG</a>
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      <p>&copy; 2025 LUXURY. Todos los derechos reservados.</p>
    </div>
  </footer>
</body>
</html>