<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Luxury Premium</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'poppins', sans-serif;
    }

    body {
      display: flex;
      min-height: 100vh;
      background-color: #f8f6f1;
    }

    .left-panel {
      width: 40%;
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0,0,0,0.4)),
        url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb') no-repeat center center/cover;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 2rem;
    }

    .left-panel h2 {
      font-size: 2.2rem;
      line-height: 1.4;
    }

    .form-container {
      width: 60%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 3rem;
      background-color: #fff;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
    }

    .tabs {
      display: flex;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .tabs button {
      padding: 0.75rem 1.5rem;
      border: none;
      cursor: pointer;
      font-size: 1rem;
      background-color: #f1f1f1;
      border-radius: 30px;
      transition: 0.3s;
    }

    .tabs button.active {
      background-color: #d0a933;
      color: white;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    form {
      display: none;
      flex-direction: column;
      gap: 1rem;
      background-color: #fafafa;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
    }

    form.active {
      display: flex;
    }

    h1, h3 {
      color: #333;
    }

    input, select {
      padding: 0.75rem;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 6px;
      transition: border 0.2s ease;
    }

    input:focus, select:focus {
      outline: none;
      border-color: #d0a933;
      box-shadow: 0 0 5px rgba(208,169,51,0.3);
    }

    button[type="submit"] {
      padding: 0.75rem;
      background-color: #d0a933;
      color: white;
      font-size: 1rem;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #b38f2c;
    }

    label {
      font-weight: 500;
      margin-bottom: -0.5rem;
      font-size: 0.95rem;
      color: #444;
    }
    
    .bienvenido-container {
      width: 100%;
      height: 100%;
      position: fixed;
      z-index: 9999999999999999999;
      display: none;
      justify-content: center;
      align-items: center;
      background-color: rgba(0,0,0,0.5);
    }
    
    .bienvenido {
      width: 500px; 
      height: 400px; 
      background-color: #f1f1f1;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.3);
      text-align: center;
      position: relative;
    }
    
    .close-btn {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 24px;
      font-weight: bold;
      cursor: pointer;
      color: #333;
    }
    
    .close-btn:hover {
      color: #d0a933;
    }
  </style>
</head>
<body>
  <div class="bienvenido-container" id="bienvenidoContainer">
    <div class="bienvenido">
      <span class="close-btn" onclick="closeWelcomeModal()">×</span>
      Bienvenido a Luxury <br>
      Ahora es momento de crear tu escaparate para que así más personas puedan tener visión de tu salón de eventos
      <br>
      <a href="escaparate.html"><button>Crea tu escaparate</button></a>
    </div>
  </div>
  
  <div class="left-panel">
    <div>
      <h2>♥ Regístrate y potencia<br>tu negocio con nosotros</h2>
    </div>
  </div>

  <div class="form-container">
    <div class="tabs">
      <button id="btnRegistro" class="active" onclick="mostrarFormulario('registro')">Registrarse</button>
      <button id="btnLogin" onclick="mostrarFormulario('login')">Iniciar sesión</button>
    </div>

    <!-- FORMULARIO DE REGISTRO -->
    <form id="formRegistro" class="active" onsubmit="return registrarUsuario(event)">
      <h1>Prueba Luxury gratis y haz crecer tu negocio</h1>
      <input type="text" placeholder="Nombre de empresa" required>
      <input type="text" placeholder="Ciudad" required>
      <label for="tipo-industria">Tipo de Industria</label>
      <select id="tipo-industria" required>
        <option value="">Seleccione un grupo</option>
        <option value="recibo">Recibo</option>
        <option value="proveedores">Proveedores</option>
        <option value="esposa">Esposa</option>
        <option value="acicalar">Acicalar</option>
      </select>
      <select required>
        <option value="">Sector de actividad</option>
        <option value="sector1">Sector 1</option>
        <option value="sector2">Sector 2</option>
      </select>
      <input type="email" placeholder="Correo electrónico" id="registroEmail" required>
      <input type="tel" placeholder="Teléfono" required>
      <h3>Datos de inicio de sesión</h3>
      <input type="text" id="registroUsuario" placeholder="Nombre de usuario" minlength="5" required>
      <input type="password" id="registroClave" placeholder="Contraseña" minlength="8" maxlength="48" required>

      <button type="submit">Crea tu cuenta</button>
    </form>
    
    <!-- FORMULARIO DE INICIO DE SESIÓN -->
    <form id="formLogin" onsubmit="return iniciarSesion(event)">
      <h1>Inicia sesión</h1>
      <input type="text" id="loginUsuario" placeholder="Nombre de usuario" required>
      <input type="password" id="loginClave" placeholder="Contraseña" required>
      <button type="submit">Entrar</button>
    </form>
  </div>

  <script>
    function closeWelcomeModal() {
      document.getElementById('bienvenidoContainer').style.display = 'none';
    }
    
    function mostrarFormulario(tipo) {
      document.getElementById('formRegistro').classList.remove('active');
      document.getElementById('formLogin').classList.remove('active');
      document.getElementById('btnRegistro').classList.remove('active');
      document.getElementById('btnLogin').classList.remove('active');

      if (tipo === 'registro') {
        document.getElementById('formRegistro').classList.add('active');
        document.getElementById('btnRegistro').classList.add('active');
      } else {
        document.getElementById('formLogin').classList.add('active');
        document.getElementById('btnLogin').classList.add('active');
      }
    }

    // Guardar usuario en localStorage (solo para demo)
    function registrarUsuario(e) {
      e.preventDefault();
      const user = document.getElementById('registroUsuario').value;
      const pass = document.getElementById('registroClave').value;
      localStorage.setItem('usuario', user);
      localStorage.setItem('clave', pass);
      
      // Mostrar el div de bienvenida
      document.getElementById('bienvenidoContainer').style.display = 'flex';
      mostrarFormulario('login');
    }

    function iniciarSesion(e) {
      e.preventDefault();
      const user = document.getElementById('loginUsuario').value;
      const pass = document.getElementById('loginClave').value;
      const savedUser = localStorage.getItem('usuario');
      const savedPass = localStorage.getItem('clave');

      if (user === savedUser && pass === savedPass) {
        // Redirigir a escaparate.html después de iniciar sesión exitosamente
        window.location.href = 'escaparate.html';
      } else {
        alert('Usuario o contraseña incorrectos.');
      }
    }
  </script>
</body>
</html>