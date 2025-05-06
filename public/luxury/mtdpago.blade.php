<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Pago - Luxury Premium</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Variables de diseño */
    :root {
      --gold: #d4af37;
      --gold-light: #f8f3e6;
      --black: #1a1a1a;
      --white: #ffffff;
      --gray-light: #f5f7fa;
      --gray: #e3e3e3;
      --gray-dark: #444444;
      --blue: #00a6c9;
      --red: #f16363;
      --green: #28a745;
      --error: #dc3545;
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

    html, body {
      height: 100%;
      width: 100%;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--gray-light);
      color: var(--black);
      line-height: 1.6;
      display: flex;
      flex-direction: column;
    }

    /* Header */
    header {
      background-color: var(--black);
      padding: 15px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
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

    /* Contenedor principal */
    .main-container {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .content-wrapper {
      flex: 1;
      display: flex;
      flex-direction: column;
      padding: 30px;
    }

    .container {
      max-width: 800px;
      width: 100%;
      margin: 0 auto;
      background-color: var(--white);
      padding: 30px;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    /* Info Box */
    .info-box {
      background-color: #e9f6f8;
      padding: 18px;
      border-left: 4px solid var(--blue);
      border-radius: var(--radius);
      margin-bottom: 25px;
      font-size: 14px;
      color: var(--black);
      display: flex;
      align-items: center;
    }

    .info-box i {
      margin-right: 15px;
      color: var(--blue);
      font-size: 20px;
    }

    /* Título del formulario */
    .form-title {
      font-size: 22px;
      margin-bottom: 25px;
      font-weight: 600;
      display: flex;
      align-items: center;
    }

    .form-title i {
      margin-right: 15px;
      color: var(--gold);
    }

    /* Credit Card Box */
    .credit-card-box {
      display: flex;
      gap: 25px;
      margin-bottom: 20px;
      flex: 1;
    }

    /* Form Section */
    .form-section {
      flex: 2;
      background-color: var(--white);
      border: 1px solid var(--gray);
      border-radius: var(--radius);
      padding: 25px;
      box-shadow: var(--shadow);
      display: flex;
      flex-direction: column;
    }

    .form-content {
      flex: 1;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-size: 14px;
      margin-bottom: 8px;
      display: block;
      color: var(--gray-dark);
      font-weight: 500;
    }

    input {
      width: 100%;
      padding: 12px 15px;
      font-size: 15px;
      border-radius: var(--radius);
      border: 1px solid var(--gray);
      transition: var(--transition);
    }

    input:focus {
      outline: none;
      border-color: var(--gold);
      box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.2);
    }

    /* Small Icons */
    .small-icons {
      margin-top: 10px;
      display: flex;
      gap: 10px;
    }

    .small-icons img {
      height: 24px;
      opacity: 0.7;
      transition: var(--transition);
    }

    .small-icons img:hover {
      opacity: 1;
      transform: translateY(-2px);
    }

    /* Split Inputs */
    .split-inputs {
      display: flex;
      gap: 15px;
    }

    /* Submit Button */
    .submit-btn {
      background: linear-gradient(135deg, var(--gold) 0%, #d0a933 100%);
      color: var(--white);
      border: none;
      padding: 14px 25px;
      border-radius: var(--radius);
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      margin-top: 15px;
      width: 100%;
      transition: var(--transition);
      box-shadow: 0 2px 10px rgba(241, 99, 99, 0.3);
    }

    .submit-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(241, 99, 99, 0.4);
    }

    /* CVC Info */
    .cvc-info {
      flex: 1;
      background-color: var(--gold-light);
      border-radius: var(--radius);
      padding: 25px;
      font-size: 14px;
      color: var(--black);
      box-shadow: var(--shadow);
      display: flex;
      flex-direction: column;
    }

    .cvc-info strong {
      color: var(--black);
      font-size: 16px;
      display: block;
      margin-bottom: 15px;
    }

    .cvc-info i {
      color: var(--gold);
      margin-right: 10px;
    }

    /* Messages */
    .success {
      background-color: #d4edda;
      color: #155724;
      padding: 12px;
      border-radius: var(--radius);
      margin-top: 20px;
      font-size: 14px;
      display: flex;
      align-items: center;
    }

    .success i {
      margin-right: 10px;
      color: var(--green);
    }

    .error {
      background-color: #f8d7da;
      color: var(--error);
      padding: 12px;
      border-radius: var(--radius);
      margin-top: 10px;
      font-size: 14px;
      display: flex;
      align-items: center;
    }

    .error i {
      margin-right: 10px;
    }

    /* Footer */
    footer {
      background-color: var(--black);
      color: var(--white);
      padding: 30px 0;
      text-align: center;
      border-radius: 0 0 var(--radius) var(--radius);
      flex-shrink: 0;
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
    @media (max-width: 768px) {
      .credit-card-box {
        flex-direction: column;
      }
      
      header {
        flex-direction: column;
        padding: 15px;
      }
      
      .nav-links {
        margin-top: 15px;
        flex-wrap: wrap;
        justify-content: center;
      }
      
      .content-wrapper {
        padding: 15px;
      }
      
      .container {
        padding: 20px;
      }
    }

    @media (max-width: 480px) {
      .split-inputs {
        flex-direction: column;
      }
      
      .nav-links {
        gap: 15px;
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <img class="logo" src="favicon.png" alt="Luxury Premium">
    
    <div class="nav-links">
      <a href="#" class="nav-item">
        <i class="fas fa-play-circle"></i>
        <span>Comenzar</span>
      </a>
      <a href="#" class="nav-item">
        <i class="fas fa-store"></i>
        <span>Mi escaparate</span>
      </a>
      <a href="#" class="nav-item">
        <i class="fas fa-envelope"></i>
        <span>Peticiones</span>
      </a>
      <a href="#" class="nav-item">
        <i class="fas fa-star"></i>
        <span>Reseñas</span>
      </a>
      <a href="#" class="nav-item active">
        <i class="fas fa-file-invoice-dollar"></i>
        <span>Facturación</span>
      </a>
      <a href="#" class="nav-item">
        <i class="fas fa-user-cog"></i>
        <span>Mi cuenta</span>
      </a>
    </div>
  </header>

  <!-- Contenido principal -->
  <div class="main-container">
    <div class="content-wrapper">
      <div class="container">
        <div class="info-box">
          <i class="fas fa-shield-alt"></i>
          <div>En Luxury utilizamos tecnología altamente avanzada para mantener los altos niveles de seguridad de nuestra plataforma en línea.</div>
        </div>

        <h2 class="form-title"><i class="far fa-credit-card"></i> Tarjeta de crédito</h2>

        <div class="credit-card-box">
          <div class="form-section">
            <div class="form-content">
              <form id="paymentForm">
                <div class="form-group">
                  <label for="card-number">Número de tarjeta</label>
                  <input type="text" id="card-number" placeholder="XXXX XXXX XXXX XXXX" maxlength="19">
                  <div class="small-icons">
                    <img src="https://img.icons8.com/color/48/000000/visa.png" alt="Visa" />
                    <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" alt="Mastercard" />
                    <img src="https://img.icons8.com/color/48/000000/amex.png" alt="Amex" />
                  </div>
                </div>

                <div class="split-inputs">
                  <div class="form-group" style="flex:1;">
                    <label for="expiry">Fecha de expiración</label>
                    <input type="text" id="expiry" placeholder="MM/AA" maxlength="5">
                  </div>
                  <div class="form-group" style="flex:1;">
                    <label for="cvc">CVC</label>
                    <input type="text" id="cvc" placeholder="3 cifras" maxlength="3">
                  </div>
                </div>

                <div class="form-group">
                  <label for="owner">Titular de la tarjeta</label>
                  <input type="text" id="owner" placeholder="Nombre del propietario">
                </div>

                <button type="submit" class="submit-btn">Añadir método de pago</button>
                <div id="message"></div>
              </form>
            </div>
          </div>

          <div class="cvc-info">
            <strong><i class="fas fa-info-circle"></i> ¿Qué es CVC?</strong>
            <p>Es el código de tres números que se encuentra en el reverso de la tarjeta. Se utiliza para aumentar la seguridad de la transacción.</p>
            <p style="margin-top: 15px;"><i class="far fa-credit-card"></i> En American Express son 4 dígitos en la parte frontal.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <h3>Luxury Premium</h3>
        <p>La plataforma líder para proveedores de eventos de lujo.</p>
      </div>
      <div class="footer-section">
        <h3>Ayuda</h3>
        <ul>
          <li><a href="#">Preguntas frecuentes</a></li>
          <li><a href="#">Seguridad</a></li>
          <li><a href="#">Contactar soporte</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2023 Luxury Premium. Todos los derechos reservados.
    </div>
  </footer>

  <script>
    document.getElementById('paymentForm').addEventListener('submit', function (e) {
      e.preventDefault();

      const cardNumber = document.getElementById('card-number').value.trim();
      const expiry = document.getElementById('expiry').value.trim();
      const cvc = document.getElementById('cvc').value.trim();
      const owner = document.getElementById('owner').value.trim();
      const messageDiv = document.getElementById('message');
      messageDiv.innerHTML = '';

      // Validación simple
      const cardRegex = /^\d{4} ?\d{4} ?\d{4} ?\d{4}$/;
      const expiryRegex = /^(0[1-9]|1[0-2])\/\d{2}$/;
      const cvcRegex = /^\d{3,4}$/;

      if (!cardRegex.test(cardNumber)) {
        return showError("<i class='fas fa-exclamation-circle'></i> Número de tarjeta no válido. Use formato XXXX XXXX XXXX XXXX");
      }
      if (!expiryRegex.test(expiry)) {
        return showError("<i class='fas fa-exclamation-circle'></i> Fecha de expiración no válida. Use formato MM/AA");
      }
      if (!cvcRegex.test(cvc)) {
        return showError("<i class='fas fa-exclamation-circle'></i> Código CVC inválido. Debe contener 3 o 4 dígitos");
      }
      if (owner.length < 3) {
        return showError("<i class='fas fa-exclamation-circle'></i> Por favor ingrese el nombre del titular");
      }

      messageDiv.innerHTML = `<div class="success"><i class="fas fa-check-circle"></i> Método de pago añadido correctamente.</div>`;
      
      // Reset form after success
      setTimeout(() => {
        document.getElementById('paymentForm').reset();
        messageDiv.innerHTML = '';
      }, 3000);

      function showError(msg) {
        messageDiv.innerHTML = `<div class="error">${msg}</div>`;
      }
    });

    // Formato automático para número de tarjeta
    document.getElementById('card-number').addEventListener('input', function(e) {
      let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/g, '');
      if (value.length > 0) {
        value = value.match(new RegExp('.{1,4}', 'g')).join(' ');
      }
      e.target.value = value;
    });

    // Formato automático para fecha de expiración
    document.getElementById('expiry').addEventListener('input', function(e) {
      let value = e.target.value.replace(/\D/g, '');
      if (value.length >= 2) {
        value = value.substring(0, 2) + '/' + value.substring(2, 4);
      }
      e.target.value = value;
    });
  </script>
</body>
</html>