<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel de Empresa</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f5f5;
      color: #333;
    }

    .dashboard {
      display: flex;
      min-height: 100vh;
    }

    /* Sidebar */
    .sidebar {
      width: 240px;
      background-color: #fff;
      border-right: 1px solid #ddd;
      padding: 20px;
    }

    .sidebar h3 {
      text-align: center;
      font-size: 16px;
      margin-bottom: 10px;
    }

    .sidebar img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .sidebar nav {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .sidebar nav a {
      text-decoration: none;
      color: #444;
      font-size: 14px;
      padding: 5px 0;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .sidebar nav a:hover {
      color: #d85c5c;
    }

    /* Main content */
    .main {
      flex: 1;
      padding: 30px;
    }

    .header-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .progress {
      width: 200px;
      background: #eee;
      border-radius: 20px;
      overflow: hidden;
      height: 8px;
    }

    .progress-bar {
      width: 30%;
      background-color: #db4b4b;
      height: 100%;
    }

    .section {
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      margin-top: 20px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.05);
    }

    .section h2 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-size: 14px;
      display: block;
      margin-bottom: 5px;
      font-weight: 500;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .form-group small {
      display: block;
      margin-top: 5px;
      color: #666;
    }

    .highlight-box {
      background: #eef2fb;
      border-left: 5px solid #5177c0;
      padding: 10px 15px;
      font-size: 14px;
      margin-bottom: 15px;
    }
    .container {
      background-color: white;
      padding: 25px;
      border-radius: 10px;
      max-width: 600px;
      margin: 0 auto;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }

    .info-box {
      background-color: #eaf6fb;
      border-left: 5px solid #45a6d9;
      padding: 15px;
      font-size: 14px;
      margin-bottom: 20px;
    }

    h2 {
      font-size: 20px;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    .form-inline {
      display: flex;
      gap: 10px;
    }

    .form-inline select {
      flex: 0.4;
    }

    .form-inline input {
      flex: 1;
    }

    .note {
      font-size: 12px;
      color: #666;
      margin-top: 10px;
    }

    .btn {
      background-color: #ec5d5d;
      color: white;
      border: none;
      padding: 12px 25px;
      font-size: 14px;
      border-radius: 6px;
      cursor: pointer;
      margin-top: 20px;
    }

    .btn:hover {
      background-color: #d64a4a;
    }

    a {
      color: #444;
    }
  </style>
</head>
<body>

<div class="dashboard">

  <!-- Sidebar -->
  <aside class="sidebar">
    <img src="https://via.placeholder.com/200x100" alt="Foto empresa">
    <h3>LUJOSO</h3>
    <a href="#">Ver escaparate</a>

    <nav>
      <a href="#">📄 Datos de la empresa</a>
      <a href="#">🗺️ Ubicación y mapa</a>
      <a href="#">❓ Preguntas frecuentes</a>
      <a href="#">💥 Promociones</a>
      <a href="#">📷 Foto</a>
      <a href="#">🎥 Video</a>
      <a href="#">📅 Eventos</a>
      <a href="#">🏢 Empresas asociadas</a>
      <a href="#">👥 Personal</a>
      <a href="#">🔗 Red social</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="main">
    <div class="header-bar">
      <h1>Datos de la empresa</h1>
      <div>
        <p style="font-size: 13px;">Completa tu escaparate</p>
        <div class="progress">
          <div class="progress-bar"></div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="highlight-box">
        🔒 El enlace del sitio y el número de teléfono son beneficios Premium. <br>
        <a href="#">Actualice ahora</a>
      </div>

      <p style="margin-bottom: 20px;">Añade información general sobre tu empresa. Introduzca sus datos aquí. Recuerda mantenerlos actualizados.</p>

      <div class="form-group">
        <label for="usuario">Nombre de usuario</label>
        <input type="text" id="usuario" value="luxxury">
        <small><a href="#">Quiero cambiar mi contraseña</a></small>
      </div>

      <div class="form-group">
        <label for="descripcion">Descripción de su empresa (escriba en tercera persona)</label>
        <textarea id="descripcion" rows="4" placeholder="Escriba algo como 'Esta empresa está formada por artistas...'"></textarea>
      </div>
    </div>
  </main>
</div>
  <div class="container">
    <h2>Información del contacto</h2>

    <div class="info-box">
      Ingrese su dirección de correo electrónico y permita que las parejas se pongan en contacto con usted para solicitar una cotización. Recibirá en su buzón sus solicitudes, así como novedades del portal.
    </div>

    <form>
      <div class="form-group">
        <label for="persona">Persona de contacto *</label>
        <input type="text" id="persona" value="ximena">
      </div>

      <div class="form-group">
        <label for="correo">Correo electrónico *</label>
        <input type="email" id="correo" value="lpenalosa640@gmail.com">
      </div>

      <div class="form-group">
        <label for="telefono">Teléfono *</label>
        <div class="form-inline">
          <select>
            <option selected>CO (+57)</option>
            <option>AR (+54)</option>
            <option>MX (+52)</option>
          </select>
          <input type="tel" value="3046812029">
        </div>
      </div>

      <div class="form-group">
        <label for="movil">Teléfono móvil</label>
        <div class="form-inline">
          <select>
            <option selected>CO (+57)</option>
            <option>AR (+54)</option>
            <option>MX (+52)</option>
          </select>
          <input type="tel" value="3046812029">
        </div>
      </div>

      <div class="form-group">
        <label for="fax">Fax</label>
        <input type="text" id="fax">
      </div>

      <div class="form-group">
        <label for="sitio">Sitio web</label>
        <input type="url" id="sitio" placeholder="https://">
      </div>

      <p class="note">
        El contenido publicado cumple con las <a href="#">Condiciones Legales</a> de Matrimonio.com.
      </p>

      <button class="btn" type="submit">Ahorrar</button>
    </form>
  </div>
</body>
</html>