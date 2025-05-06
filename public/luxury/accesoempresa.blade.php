<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso empresas</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <img class="logo" src="img/favicon.png" alt="luxury" />
                <ul class="menu">
                    <a href="index.html" style="color: #d0a933;">Inicio</a>
                    <li><a href="#" style="color: #d0a933;">Acceso de empresas</a></li>
                    <li><a href="premium.html" style="color: #d0a933;">Servicios premium</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--<form id="">
        <input type="email" id="email" placeholder="Correo electrónico" required>
        <input type="password" id="password" placeholder="Contraseña" required>
        <button type="submit" class="submit-btn">Iniciar Sesión</button>
    </form>
-->
<style>
  * { 
    margin: 0; 
    padding: 0; 
    box-sizing: border-box; }
  body { 
    font-family: 'poppins', sans-serif; 
  line-height: 1.6;
   color: #333; 
   font-size: 1.4rem; } 
  nav a { 
    margin-left: 1.5rem; 
    text-decoration: none; 
    color: #333; 
    font-weight: 500; 
    font-size: 1.2rem; } 
  .hero { 
    background: url('img/campestre.jpeg') center/cover no-repeat; 
    color: white; 
    padding: 6rem 2rem; 
    text-align: left; 
    position: relative; }
  .hero::before { 
    content: ""; 
    position: absolute; 
    top: 0; 
    left: 0; 
    width: 100%; 
    height: 100%; 
    background: rgba(0,0,0,0.4); }
  .hero-content { 
    position: relative; 
    z-index: 2; 
    max-width: 700px; }
  .hero h1 { 
    font-size: 3.4rem; 
    margin-bottom: 1.5rem; 
    color: #fff; } 
  .hero ul { 
    list-style: none; 
    padding-left: 1.5rem; 
    color: #fff; 
    font-size: 1.4rem; } 
  .hero ul li { 
    margin-bottom: 1rem; }
  .hero button { 
    margin-top: 1.5rem; 
    padding: 1.2rem 2.2rem; 
    background: #d0a933; 
    color: white; 
    border: none; 
    border-radius: 5px; 
    font-weight: bold; 
    font-size: 1.3rem; 
    cursor: pointer; } 
  .login-box { 
    background: #fff; 
    padding: 2rem; 
    border-radius: 8px; 
    box-shadow: 0 0 10px rgba(0,0,0,0.2); 
    position: relative; 
    max-width: 350px; 
    margin-right: 90px; 
    font-size: 1.3rem; } 
  .login-box h2 { 
    margin-bottom: 1.2rem; 
    font-size: 1.5rem; 
    color: #000;} 
  .login-box input { 
    display: block; 
    width: 100%; 
    margin-bottom: 1rem; 
    padding: 1rem; 
    border: 1px solid #ccc; 
    border-radius: 5px; 
    font-size: 1.2rem; } 
  .login-box button { 
    width: 100%; 
    background: #d0a933; 
    color: white; 
    padding: 1rem; 
    border: none; 
    border-radius: 5px; 
    font-weight: bold; 
    font-size: 1.3rem; 
    cursor: pointer; } 
  .section { 
    padding: 4rem 2rem; 
    text-align: center; 
    font-size: 1.4rem; } 
  .section h2 {
     margin-bottom: 2.5rem; 
     font-size: 2.4rem; } 
  .section .grid { 
    display: flex;
     justify-content: space-around; 
     flex-wrap: wrap; }
  .section .item { 
    max-width: 300px; 
    margin-bottom: 2rem; }
  .management-box { 
    background: #f9f9f9; 
    padding: 2.5rem; 
    border-radius: 8px; 
    max-width: 1000px; 
    margin: 0 auto; 
    text-align: left; 
    display: flex; 
    justify-content: space-between; 
    flex-wrap: wrap; 
    font-size: 1.3rem; } 
  .stats { 
    flex: 1; 
    padding-right: 2rem; }
  .stats div {
     margin-bottom: 1.2rem; 
     font-size: 1.3rem; } 
  .features {
     flex: 1; 
     font-size: 1.3rem; } 
  .features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 1.5rem;
  margin-top: 2rem;
  flex: 1;
}

.feature-card {
  background: #fff;
  padding: 1.5rem;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  min-height: 200px;
  justify-content: center;
}

.feature-card span {
  font-size: 2.5rem;
  margin-bottom: 0.8rem;
  color: #d0a933;
}

.feature-card p {
  font-size: 1.1rem;
  font-weight: 500;
  color: #333;
}
.container {
      display: flex;
      justify-content: center;
      gap: 60px;
    }
    .item {
      max-width: 250px;
    }
    .icon {
      font-size: 48px;
      margin-bottom: 10px;
    }
    h3 {
      margin-bottom: 10px;
    }
    p {
      font-size: 14px;
      color: #333;
    }
    h2 {
        text-align: center;
        margin-bottom: 40px;
      }
  
      .ofrecemos {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 60px;
        flex-wrap: wrap;
      }
  
      .beneficios {
        max-width: 500px;
      }
  
      .beneficio {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
      }
  
      .beneficio img.icono {
        width: 32px;
        height: 32px;
        margin-right: 15px;
        margin-top: 5px;
      }
  
      .beneficio p {
        font-size: 16px;
        color: #333;
        margin: 0;
      }
  
      .imagen-dispositivo img {
        max-width: 450px;
        height: auto;
      }   
    .gestion-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: flex-start;
      gap: 40px;
    }

    .panel-estadisticas {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      background-color: #fafafa;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 2px 2px 6px rgba(0,0,0,0.1);
      max-width: 420px;
    }

    .dato {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .dato-icono {
      width: 30px;
      height: 30px;
    }

    .dato-info {
      display: flex;
      flex-direction: column;
    }

    .dato-info strong {
      font-size: 18px;
    }

    .dato-info span {
      font-size: 14px;
      color: #666;
    }

    .texto-info {
      max-width: 400px;
    }

    .texto-info .linea {
      display: flex;
      align-items: flex-start;
      gap: 15px;
      margin-bottom: 20px;
    }

    .texto-info .linea img {
      width: 24px;
      height: 24px;
      margin-top: 2px;
    }

    @media (max-width: 768px) {
      .gestion-container {
        flex-direction: column;
        align-items: center;
      }

      .panel-estadisticas {
        grid-template-columns: 1fr;
      }
    }
    .re { 
              width: auto; 
              padding: 1rem 3rem; 
              background: #d0a933; 
              color: white; 
              border: none; 
              border-radius: 5px; 
              font-weight: bold; 
              font-size: 1.3rem; 
              cursor: pointer;
              margin: 20px auto;
              display: inline-block;
              text-decoration: none;
          }
          
          .re:hover {
              background: #b8972a;
          }
  
          /* Estilos mejorados para el footer */
          .footer {
              background-color: #000;
              color: white;
              padding: 0;
          }
  
          .container-footer {
              max-width: 1200px;
              margin: 0 auto;
              padding: 3rem 2rem;
          }
  
          .menu-footer {
              display: grid;
              grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
              gap: 2rem;
          }
  
          .title-footer {
              font-size: 1.2rem;
              margin-bottom: 1.5rem;
              color: #d0a933;
          }
  
          .footer a {
              color: #fff;
              text-decoration: none;
              transition: color 0.3s;
          }
  
          .footer a:hover {
              color: #d0a933;
          }
  
          .copyright {
              display: flex;
              justify-content: space-between;
              align-items: center;
              padding-top: 2rem;
              margin-top: 2rem;
              border-top: 1px solid #555;
          }
  
          .social-icons {
              display: flex;
              gap: 1rem;
          }
  
          .social-icons span {
              width: 35px;
              height: 35px;
              border-radius: 50%;
              display: flex;
              align-items: center;
              justify-content: center;
              transition: transform 0.3s;
          }
  
          .social-icons span:hover {
              transform: scale(1.1);
          }
  
          .facebook { background-color: #3b5998; }
          .twitter { background-color: #1DA1F2; }
          .instagram { background: linear-gradient(45deg, #405de6, #833ab4, #c13584, #e1306c, #fd1d1d); }

</style>
  <section class="hero">
    <div class="hero-content">
      <h1>¡Impulsa tu negocio con Luxury!</h1>
      <ul>
        <li>✅ Recibir solicitudes de cotización de parejas interesadas.</li>
        <li>✅ Adquiera nuevos clientes y multiplique el éxito de su negocio.</li>
        <li>✅ Más de 80.000 proveedores ya han depositado su confianza en nosotros.</li>
      </ul>
      <a href="registro.html"><button>Regístrate gratis</button></a>
    </div>
    <div class="login-box">
      <h2>INICIO DE SESIÓN DE LA EMPRESA</h2>
      <input type="text" placeholder="Usuario">
      <input type="password" placeholder="Contraseña">
      <button>Iniciar sesión</button>
      <a href="contraseña.html"><p style="text-align:center; margin-top:1rem; font-size:0.9rem;">¿Olvidaste tu contraseña?</p></a>
    </div>
  </section>

  <section class="section">
    <div class="grid">
      <div class="item">
        <h2>Las personas te encuentran</h2>
        <p>📷 Un escaparate completo que será visto por miles de personas interesadas en tus servicios.</p>
      </div>
      <div class="item">
        <h2>¿Qué te ofrecemos?</h2>
        <p>📣 Una plataforma de comunicación y marketing de referencia en el mundo de los eventos online.</p>
      </div>
      <div class="item">
        <h2>Conseguir un nuevo evento</h2>
        <p>👨‍💼 Un equipo completo de profesionales a tu servicio para ayudarte a impulsar tu negocio.</p>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="item">
      <div class="icon">🖥️🔍</div>
      <h3>Las personas te encuentran</h3>
      <p>Recibir solicitudes de cotización con sus datos y los servicios que les interesan.</p>
    </div>
    <div class="item">
      <div class="icon">✉️</div>
      <h3>Recibir solicitudes</h3>
      <p>Puede responder por correo electrónico. Para su comodidad, puede utilizar el Menú de Administración.</p>
    </div>
    <div class="item">
      <div class="icon">👩‍❤️‍👨✔️</div>
      <h3>Conseguir un nuevo evento</h3>
      <p>Conecta con personas interesadas en tus servicios y consigue nuevos clientes.</p>
    </div>
  </div>
  <br><br>
    <h2>¿Qué te ofrecemos?</h2>
  
    <div class="ofrecemos">
      <div class="beneficios">
        <div class="beneficio">
          <img src="https://img.icons8.com/ios/50/image-gallery.png" alt="Escaparate" class="icono">
          <p>Un escaparate completo que será visto por miles de personas interesadas en tus servicios.</p>
        </div>
        <div class="beneficio">
          <img src="https://img.icons8.com/ios/50/megaphone.png" alt="Marketing" class="icono">
          <p>Una plataforma de comunicación y marketing de referencia en el mundo de las bodas online.</p>
        </div>
        <div class="beneficio">
          <img src="https://img.icons8.com/ios/50/user-group-man-man.png" alt="Equipo" class="icono">
          <p>Un equipo completo de profesionales a tu servicio para ayudarte a impulsar tu negocio.</p>
        </div>
      </div>
  
      <div class="imagen-dispositivo">
        <img src="image.png" alt="Vista previa del servicio">
      </div>
    </div>
  <h2>Su menú de gestión</h2>

  <div class="gestion-container">
    <!-- Panel de estadísticas -->
    <div class="panel-estadisticas">
      <div class="dato">
        <img src="https://img.icons8.com/ios/50/send-mass-email.png" alt="Solicitudes" class="dato-icono">
        <div class="dato-info">
          <strong>593</strong>
          <span>Solicitudes recibidas<br></span>
        </div>
      </div>
      <div class="dato">
        <img src="https://img.icons8.com/ios/50/clock--v1.png" alt="Tiempo de respuesta" class="dato-icono">
        <div class="dato-info">
          <strong>00h 45m</strong>
          <span>Tiempo de respuesta<br><small>24 horas</small></span>
        </div>
      </div>
      <div class="dato">
        <img src="https://img.icons8.com/ios/50/star--v1.png" alt="Reseñas" class="dato-icono">
        <div class="dato-info">
          <strong>11</strong>
          <span>Reseñas<br></span>
        </div>
      </div>
      <div class="dato">
        <img src="https://img.icons8.com/ios/50/visible--v1.png" alt="Impresiones" class="dato-icono">
        <div class="dato-info">
          <strong>385.367</strong>
          <span>Vistas en tu escaparate<br></span>
        </div>
      </div>
    </div>

    <!-- Texto explicativo -->
    <div class="texto-info">
      <div class="linea">
        <img src="https://img.icons8.com/ios/50/maintenance.png" alt="Gestión">
        <p>Es una herramienta sencilla para gestionar tu escaparate, subir fotos, vídeos, promociones…</p>
      </div>
      <div class="linea">
        <img src="https://img.icons8.com/ios/50/database.png" alt="Sistema seguro">
        <p>Tienes a tu disposición un sistema seguro y eficaz para ordenar, buscar y responder solicitudes.</p>
      </div>
      <div class="linea">
        <img src="https://img.icons8.com/ios/50/speech-bubble.png" alt="Estadísticas">
        <p>Puedes pedir reseñas a las novias, consultar tus estadísticas y mucho más.</p>
      </div>
    </div>
  </div>
  <br>
    <section style="text-align: center; margin: 40px 0;">
          <h2>¡Haz crecer tu negocio con LUXURY!</h2>
          <a href="registro.html"><button class="re">Regístrate gratis</button></a>
      </section>
  
      <footer class="footer">
          <div class="container-footer">
              <div class="menu-footer">
                  <div class="contact-info">
                      <p class="title-footer">Contacto</p>
                      <ul>
                          <li>Teléfono: +123 456 789</li>
                          <li>Email: info@luxury.com</li>
                          <li>Dirección: Calle Falsa 123, Madrid</li>
                      </ul>
                  </div>
                  <div class="information">
                      <p class="title-footer">Información</p>
                      <ul>
                          <li><a href="#">Sobre nosotros</a></li>
                          <li><a href="#">Términos y condiciones</a></li>
                          <li><a href="#">Política de privacidad</a></li>
                      </ul>
                  </div>
                  <div class="my-account">
                      <p class="title-footer">Mi cuenta</p>
                      <ul>
                          <li><a href="#">Iniciar sesión</a></li>
                          <li><a href="#">Registrarse</a></li>
                          <li><a href="#">Ayuda</a></li>
                      </ul>
                  </div>
              </div>
              <div class="copyright">
                  <p>&copy; 2025 LUXURY. Todos los derechos reservados.</p>
                  <div class="social-icons">
                      <span class="facebook"><i class="fab fa-facebook-f"></i></span>
                      <span class="twitter"><i class="fab fa-twitter"></i></span>
                      <span class="instagram"><i class="fab fa-instagram"></i></span>
                  </div>
              </div>
          </div>
      </footer>
  </body>
  </html>
