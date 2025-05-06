<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reserva tu evento</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<style>
     footer {
            background-color: #000000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        footer a:hover {
            text-decoration: underline;
        }
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .footer-section {
            flex: 1;
            margin: 10px;
            min-width: 200px;
        }
        .footer-section h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }
        .footer-section p {
            margin: 5px 0;
        }
        .social-icons a {
            font-size: 24px;
            margin: 0 5px;
        }
        .footer-bottom {
            margin-top: 20px;
            border-top: 1px solid #000000;
            padding-top: 10px;
        }
</style>
<body>
    <header>
        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <img class="logo" src="img/favicon.png" alt="luxury" />
                <ul class="menu">
                    <a href="index.html" style="color: #d0a933;">Inicio</a>
                    <a href="#categorias" style="color: #d0a933;">Categorias</a>
                    <li><a href="#" onclick="openLoginModal()" style="color: #d0a933;">Inicio de sesión</a></li>
                    <li><a href="accesoempresa.html" onclick="mostrarLogin()" style="color: #d0a933;">Área de empresas</a></li>
                </ul>
                
            </nav>
        </div>
    </header>

    <section class="banner">
        <div class="content-banner">
            <h2>Bienvenido a tu portal de eventos: descubre, reserva y vive experiencias únicas cerca de ti.</h2>
        </div>
    </section>
    <section id="categorias">
    <section class="container top-categories">
        <h1 id="categorias" class="heading-1">Categorías</h1>
        <div class="container-categories">
            <div class="card-category category-boda">
                <p>Salones para bodas</p>
                <span><a href="luxury.bodas">Ver más</a></span>
            </div>
            <div class="card-category category-corporativos">
                <p>Salones corporativos</p>
                <span><a href="corporativos.html">Ver más</a></span>
            </div>
            <div class="card-category category-fiestas">
                <p>Salones para fiestas</p>
                <span><a href="fiestas.html">Ver más</a></span>
            </div>
            <div class="card-category category-infantil">
                <p>Salones infantiles</p>
                <span><a href="infantiles.html">Ver más</a></span>
            </div>
            <div class="card-category category-campestre">
                <p>Salones al aire libre</p>
                <span><a href="airelibre.html">Ver más</a></span>
            </div>
            <div class="card-category category-lujo">
                <p>Salones lujosos</p>
                <span><a href="lujosos.html">Ver más</a></span>
            </div>
        </div>
    </section>
</section>
    <!-- Modal de Inicio de Sesión -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeLoginModal()">x</span>
            <h2>Inicia sesión o registrate</h2>
            <button class="social-btn google-btn" onclick="loginWithGoogle()">
                <img src="https://img.icons8.com/color/48/000000/google-logo.png" alt="Google Icon">
                Ingresa con Google
            </button>
            <button class="social-btn facebook-btn" onclick="loginWithFacebook()">
                <img src="https://img.icons8.com/color/48/000000/facebook-new.png" alt="Facebook Icon">
                Ingresa con Facebook
            </button>
            <form id="loginForm">
                <input type="email" id="email" placeholder="Correo electrónico" required>
                <input type="password" id="password" placeholder="Contraseña" required>
                <button type="submit" class="submit-btn">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <script>
        // Funciones para abrir y cerrar el modal
        function openLoginModal() {
            document.getElementById('loginModal').style.display = 'flex';
        }

        function closeLoginModal() {
            document.getElementById('loginModal').style.display = 'none';
        }
        function loginWithGoogle() {
            alert('Iniciando sesión con Google...');
        }

        function loginWithFacebook() {
            alert('Iniciando sesión con Facebook...');
        }
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            alert(`Iniciando sesión con:\nEmail: ${email}\nContraseña: ${password}`);
        });
    </script>
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
                <a href="#">Inicio</a><br>
                <a href="#">Servicios</a><br>
                <a href="#">Nosotros</a><br>
                <a href="#">Contacto</a>
            </div>
            <div class="footer-section">
                <h3>Síguenos</h3>
                <div class="social-icons">
                    <a href="#" class="facebook" target="_blank"><img src="img/icons8-facebook-logo-16.png" alt=""></a> <!-- Facebook -->
                    <a href="#" class="twitter" target="_blank"><img src="img/logox.jpeg" alt="x"></a> <!-- Twitter -->
                    <a href="#" class="instagram"  target="_blank"><img sizes="5x5" src="img/icons8-instagram-logo-16.png" alt=""></a> <!-- Instagram -->
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 LUXURY. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>