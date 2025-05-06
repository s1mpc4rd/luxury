<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Añadir dirección - Luxury</title>
  <style>
    :root {
      --primary-color: #d0a933;
      --secondary-color: #000;
      --accent-color: #f33;
      --light-gray: #f8f8f8;
      --medium-gray: #ccc;
      --dark-gray: #888;
      --white: #fff;
      --black: #222;
    }

    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      background: var(--light-gray);
      color: var(--black);
      line-height: 1.6;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 5%;
      background: #000;
      border-bottom: 1px solid var(--medium-gray);
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .logo {

      font-size: 1.5rem;
      font-weight: bold;
      color:#d0a933;
    }

    .logo sup {
      color: var(--primary-color);
      font-size: 0.8rem;
      vertical-align: super;
    }

    .top-actions {
      display: flex;
      gap: 1.5rem;
      align-items: center;
      font-size: 0.9rem;
    }

    .top-actions .highlight {
      color: var(--primary-color);
      font-weight: 600;
      cursor: pointer;
    }

    .top-actions .highlight:hover {
      text-decoration: underline;
    }

    .package-tag {
      color: green;
      font-weight: 600;
    }

    .back-link {
      display: inline-block;
      margin: 20px 5% 10px;
      color: var(--secondary-color);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.2s;
    }

    .back-link:hover {
      color: var(--primary-color);
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      background: var(--white);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.05);
    }

    h2 {
      margin: 0 0 15px 0;
      color: var(--secondary-color);
      font-size: 1.8rem;
    }

    .description-box {
      background: #f7f7f7;
      padding: 18px;
      border-left: 4px solid var(--secondary-color);
      margin-bottom: 30px;
      border-radius: 0 4px 4px 0;
    }

    .description-box strong {
      display: block;
      margin-bottom: 8px;
      color: var(--secondary-color);
    }

    .description-box small {
      color: var(--dark-gray);
      font-size: 0.85rem;
    }

    label {
      font-weight: 600;
      display: block;
      margin: 20px 0 8px;
      color: var(--secondary-color);
      font-size: 0.95rem;
    }

    input[type="text"] {
      width: 100%;
      padding: 12px 15px;
      font-size: 1rem;
      border: 1px solid var(--medium-gray);
      border-radius: 6px;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    input[type="text"]:focus {
      outline: none;
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(208, 169, 51, 0.2);
    }

    .flex {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
    }

    .flex > div {
      flex: 1;
    }

    .update-button {
      margin-top: 20px;
      background-color: var(--white);
      color: var(--accent-color);
      border: 1px solid var(--accent-color);
      padding: 12px 25px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s;
    }

    .update-button:hover {
      background-color: var(--accent-color);
      color: var(--white);
    }

    .map-box {
      margin-top: 30px;
      background: #ade6f7;
      height: 350px;
      position: relative;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .map-box .map-options {
      position: absolute;
      top: 15px;
      left: 15px;
      z-index: 10;
    }

    .map-box .map-options button {
      background: var(--white);
      border: 1px solid var(--medium-gray);
      padding: 8px 15px;
      margin-right: 8px;
      border-radius: 6px;
      font-size: 0.9rem;
      cursor: pointer;
      transition: all 0.2s;
    }

    .map-box .map-options button:hover {
      background: #f0f0f0;
    }

    .map-box .fullscreen {
      position: absolute;
      bottom: 15px;
      right: 15px;
      background: var(--white);
      border: 1px solid var(--medium-gray);
      padding: 8px;
      border-radius: 6px;
      cursor: pointer;
      z-index: 10;
      transition: all 0.2s;
    }

    .map-box .fullscreen:hover {
      background: #f0f0f0;
    }

    footer {
      background-color: var(--secondary-color);
      color: var(--white);
      padding: 40px 5% 20px;
      margin-top: 50px;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 30px;
    }

    .footer-section {
      flex: 1;
      min-width: 200px;
    }

    .footer-section h3 {
      margin-bottom: 15px;
      font-size: 1.2rem;
      color: var(--primary-color);
    }

    .footer-section p, .footer-section a {
      margin: 8px 0;
      color: var(--white);
      opacity: 0.8;
      transition: opacity 0.2s;
    }

    .footer-section a {
      display: inline-block;
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
      font-size: 1.5rem;
      opacity: 0.8;
    }

    .social-icons a:hover {
      opacity: 1;
    }

    .footer-bottom {
      margin-top: 30px;
      padding-top: 20px;
      border-top: 1px solid rgba(255,255,255,0.1);
      text-align: center;
      font-size: 0.9rem;
      opacity: 0.7;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 15px;
        padding: 15px;
      }
      
      .flex {
        flex-direction: column;
        gap: 15px;
      }
      
      .container {
        padding: 20px;
        margin: 15px;
      }
      
      .footer-content {
        flex-direction: column;
        gap: 25px;
      }
    }
    .footer {
	background-color: var(--primary-color);
}

.container-footer {
	display: flex;
	flex-direction: column;
	gap: 4rem;
	padding: 3rem;
}

.menu-footer {
	display: grid;
	grid-template-columns: repeat(3, 1fr) 30rem;
	gap: 3rem;
	justify-items: center;
}

.title-footer {
	font-weight: 600;
	font-size: 1.6rem;
	text-transform: uppercase;
}

.contact-info,
.information,
.my-account,
.newsletter {
	display: flex;
	flex-direction: column;
	gap: 2rem;
}

.contact-info ul,
.information ul,
.my-account ul {
	display: flex;
	flex-direction: column;
	gap: 1rem;
}

.contact-info ul li,
.information ul li,
.my-account ul li {
	list-style: none;
	color: #fff;
	font-size: 1.4rem;
	font-weight: 300;
}

.information ul li a,
.my-account ul li a {
	text-decoration: none;
	color: #fff;
	font-weight: 300;
}

.information ul li a:hover,
.my-account ul li a:hover {
	color: var(--dark-color);
}

.social-icons {
	display: flex;
	gap: 1.5rem;
}

.social-icons span {
	border-radius: 50%;
	width: 3rem;
	height: 3rem;

	display: flex;
	align-items: center;
	justify-content: center;
}

.social-icons span i {
	color: #fff;
	font-size: 1.2rem;
}

.facebook {
	background-color: #3b5998;
}

.twitter {
	background-color: #000000;
}

.instagram {
	background: linear-gradient(
		#405de6,
		#833ab4,
		#c13584,
		#e1306c,
		#fd1d1d,
		#f56040,
		#fcaf45
	);
}

  </style>
</head>
<body>
  <header>
    <div class="logo">Luxury<sup style="color: #fff;">Premium</sup></div>
    <div class="top-actions">
      <span class="package-tag">PAQUETE DE INICIO</span>
      <span>Mejora tus resultados</span>
      <span class="highlight">HAZTE PREMIUM</span>
      <span>📞 Atención al cliente: 02 82 94 23 60</span>
    </div>
  </header>
  
  <a href="escaparate.html" class="back-link">← Volver</a>
  
  <div class="container">
    <h2>Añade la dirección</h2>
    <div class="description-box">
      <strong>Posiciona tu ubicación en el mapa arrastrando el cursor hasta el punto deseado</strong>
      <p>En la dirección deberás indicar el nombre de la calle y el número de la casa.</p>
      <small>Ejemplo: Via De Medici, 5</small>
    </div>

    <div class="flex">
      <div>
        <label for="cp">Código Postal *</label>
        <input type="text" id="cp" placeholder="Ej: 24020" required>
      </div>
      <div>
        <label for="ciudad">Ciudad *</label>
        <input type="text" id="ciudad" placeholder="Colere, Bergamo" required>
      </div>
    </div>

    <label for="direccion">Dirección *</label>
    <input type="text" id="direccion" placeholder="Via De Medici, 5" required>

    <button class="update-button">Actualizar mapa</button>

    <div class="map-box">
      <div class="map-options">
        <button>Mapa</button>
        <button>Satélite</button>
      </div>
      <div class="fullscreen">⛶</div>
      <!-- Aquí iría el mapa real integrado -->
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
          <a href="#" target="_blank">Facebook</a>
          <a href="#" target="_blank">Twitter</a>
          <a href="#" target="_blank">Instagram</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 LUXURY. Todos los derechos reservados.</p>
    </div>
  </footer>
</body>
</html>