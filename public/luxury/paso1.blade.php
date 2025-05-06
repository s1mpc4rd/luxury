<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Agregar Información de Empresa</title>
  <style>
    :root {
      --primary-color: #d0a933;
      --secondary-color: #000;
      --white: #fff;
      --light-gray: #f8f8f8;
      --medium-gray: #ddd;
      --dark-gray: #666;
    }

    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      background: var(--light-gray);
      color: #222;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      background: var(--secondary-color);
      color: var(--white);
    }

    .logo {
      font-size: 20px;
    }

    .logo span {
      color: var(--primary-color);
      font-weight: bold;
    }

    .top-actions {
      display: flex;
      align-items: center;
      font-size: 14px;
      gap: 20px;
    }

    .top-actions span {
      font-weight: bold;
    }

    .top-actions .highlight {
      color: orange;
    }

    .progress-bar-container {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      padding: 10px 30px;
      background: var(--white);
      border-bottom: 1px solid var(--medium-gray);
    }

    .progress-bar {
      width: 200px;
      height: 6px;
      background: var(--medium-gray);
      border-radius: 10px;
      margin: 0 10px;
      position: relative;
    }

    .progress-bar::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      height: 6px;
      width: 0%;
      background-color: var(--dark-gray);
      border-radius: 10px;
      transition: width 0.3s ease;
    }

    main {
      padding: 20px;
      max-width: 1000px;
      margin: 0 auto;
      flex: 1;
      width: 100%;
    }

    .back-link {
      color: #555;
      font-size: 14px;
      margin-bottom: 20px;
      display: inline-block;
      cursor: pointer;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .info-box, .gray-box {
      background-color: #eef3fc;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 20px;
      font-size: 14px;
      display: flex;
      align-items: flex-start;
    }

    .gray-box {
      background-color: #f5f5f5;
    }

    .info-box::before, .gray-box::before {
      content: '🔒';
      margin-right: 10px;
      font-size: 20px;
    }

    .form-section {
      background: var(--white);
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
      border: 1px solid var(--medium-gray);
    }

    .form-section h3 {
      margin-bottom: 15px;
      font-size: 16px;
    }

    label {
      display: block;
      margin: 15px 0 5px;
      font-size: 13px;
      font-weight: bold;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid var(--medium-gray);
      font-size: 14px;
      box-sizing: border-box;
    }

    .link {
      display: block;
      margin-top: 10px;
      font-size: 13px;
      color: var(--dark-gray);
      text-decoration: underline;
      cursor: pointer;
    }
    
    .editor-container {
      background: var(--white);
      border: 1px solid var(--medium-gray);
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
    }
  
    h2 {
      font-size: 18px;
      margin-bottom: 10px;
    }
  
    .editor-description {
      font-size: 14px;
      margin-bottom: 15px;
      line-height: 1.5;
    }
  
    .editor-description span {
      font-style: italic;
      color: var(--dark-gray);
    }
  
    .toolbar {
      background: #f4f4f4;
      padding: 8px;
      border: 1px solid var(--medium-gray);
      border-bottom: none;
      display: flex;
      gap: 8px;
      border-radius: 6px 6px 0 0;
    }
  
    .toolbar button {
      background: none;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      font-weight: bold;
      border-radius: 4px;
    }
  
    .toolbar button:hover {
      background: #e0e0e0;
    }
  
    .editor {
      border: 1px solid var(--medium-gray);
      min-height: 200px;
      padding: 15px;
      border-radius: 0 0 6px 6px;
      line-height: 1.5;
    }
  
    .editor[contenteditable="true"]:focus {
      outline: none;
      background-color: #fcfcfc;
    }
  
    a.example-link {
      font-size: 13px;
      display: inline-block;
      margin-top: 10px;
      color: #669;
      text-decoration: underline;
    }

    /* Footer mejorado */
    footer {
      background-color: var(--secondary-color);
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
      color: var(--primary-color);
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
      color: var(--white);
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
  <header>
    <div class="logo"><span>Luxury</span><sup style="color: var(--white);">Premium</sup></div>
    <div class="top-actions">
      <span style="color: green;">PAQUETE DE INICIO</span>
      <span>Mejora tus resultados</span>
      <a href="premium.html" class="highlight">HAZTE PREMIUM</a>
      <span>📞 Atención al cliente: 02 82 94 23 60</span>
    </div>
  </header>

  <div class="progress-bar-container">
    <span>Crea tu escaparate</span>
    <div class="progress-bar" style="--progress: 0%;"></div>
    <span>0/3</span>
  </div>

  <main>
    <a href="escaparate.html" class="back-link">← Hacia atrás</a>
    <h1>Agregar información de la empresa</h1>

    <div class="info-box">
      <div>
        <strong>El enlace del sitio y el número de teléfono son beneficios Premium</strong><br>
        Descubre estas características y muéstralas en tu Showcase con un perfil Premium. 
        <a href="premium.html">Actualice ahora</a>
      </div>
    </div>

    <div class="gray-box">
      <div>
        <strong>Añade información general sobre tu empresa.</strong><br>
        Introduzca sus datos aquí. Recuerde mantenerlos siempre actualizados.
      </div>
    </div>

    <div class="form-section">
      <h3>Datos de inicio de sesión</h3>
      <label for="username">NOMBRE DE USUARIO *</label>
      <input type="text" id="username" placeholder="luxurayy" />
      <a class="link">Quiero cambiar mi contraseña</a>
    </div>

    <div class="editor-container">
      <h2>Descripción de su empresa (escriba en tercera persona) <span style="color: red;">*</span></h2>
      <div class="editor-description">
        ¡Utilice este espacio para informar a las parejas! Danos toda la información necesaria, háblanos de tu trabajo, de tus productos y servicios, de tu filosofía de empresa… Crearemos una descripción para ti que hará tu propuesta aún más interesante.<br><br>
        <span>*La descripción no debe contener sus datos de contacto.</span><br>
        <a href="#" class="example-link">Ver un ejemplo de perfil de empresa</a>
      </div>
  
      <div class="toolbar">
        <button onclick="execCmd('bold')"><b>B</b></button>
        <button onclick="execCmd('italic')"><i>I</i></button>
        <button onclick="execCmd('insertUnorderedList')">• Lista</button>
        <button onclick="execCmd('undo')">↶</button>
        <button onclick="execCmd('redo')">↷</button>
      </div>
  
      <div id="editor" class="editor" contenteditable="true">
        <!-- El usuario escribe aquí -->
      </div>
    </div>
  </main>

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

  <script>
    function execCmd(command) {
      document.execCommand(command, false, null);
    }
  </script>
</body>
</html>