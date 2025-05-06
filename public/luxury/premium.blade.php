<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Premium - Luxury</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <style>
        :root {
            --primary-color: #d0a933;
            --secondary-color: #000;
            --accent-color: #e04e4e;
            --light-gray: #f8f8f8;
            --medium-gray: #ddd;
            --dark-gray: #666;
            --white: #fff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--light-gray);
            color: var(--secondary-color);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Estilizado */
        header {
            background-color: var(--secondary-color);
            padding: 15px 5%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .container-navbar {
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            height: 40px;
        }

        .menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .menu a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .menu a:hover {
            color: var(--white);
            text-decoration: underline;
        }

        /* Hero Section - Imagen al lado del formulario */
        .hero {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding: 60px 5%;
            max-width: 1200px;
            margin: 0 auto;
            gap: 40px;
        }

        .form-container {
            flex: 1;
            min-width: 400px;
            max-width: 550px;
        }

        .form-container h1 {
            font-size: 2.2rem;
            margin-bottom: 1rem;
            color: var(--secondary-color);
            line-height: 1.3;
        }

        .form-container p {
            font-size: 1rem;
            color: var(--dark-gray);
            margin-bottom: 1.5rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin: 25px 0;
        }

        .form-grid input, 
        .form-grid select {
            padding: 12px 15px;
            border-radius: 6px;
            border: 1px solid var(--medium-gray);
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .form-grid input:focus, 
        .form-grid select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(208, 169, 51, 0.2);
        }

        .btn {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 14px 32px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #b38f2c;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .hero-image {
            flex: 1;
            min-width: 400px;
            max-width: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Resto del CSS se mantiene igual... */
        /* Beneficios Section */
        .beneficios {
            text-align: center;
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 5%;
        }

        .beneficios h2 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--secondary-color);
        }

        .beneficios .subtitulo {
            font-size: 1.1rem;
            color: var(--dark-gray);
            margin-bottom: 1.5rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .beneficios .destacado {
            font-size: 1.2rem;
            font-weight: 500;
            margin: 40px 0 20px;
            color: var(--secondary-color);
        }

        .beneficios img {
            width: 100%;
            max-width: 1000px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
        }

        /* Packs Section */
        .packs-container {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 5%;
            text-align: center;
        }

        .packs-container h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--secondary-color);
        }

        .packs-container p {
            font-size: 1.1rem;
            margin-bottom: 40px;
            color: var(--dark-gray);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .packs-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-bottom: 40px;
        }

        .packs-left {
            flex: 1 1 500px;
            display: flex;
            align-items: center;
        }

        .packs-left img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .packs-right {
            flex: 1 1 500px;
        }

        .pack-box {
            background-color: var(--white);
            border: 1px solid var(--medium-gray);
            border-left: 5px solid var(--primary-color);
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            text-align: left;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }

        .pack-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .pack-box h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--secondary-color);
        }

        .pack-box ul {
            padding-left: 20px;
            list-style-type: none;
        }

        .pack-box ul li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 25px;
            font-size: 0.95rem;
            color: var(--dark-gray);
        }

        .pack-box ul li:before {
            content: "✓";
            color: var(--primary-color);
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        .gold   { border-left-color: #f4c542; }
        .silver { border-left-color: #c0c0c0; }
        .red    { border-left-color: #e74c3c; }
        .gray   { border-left-color: #aaa; }

        .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 14px 32px;
            background-color: var(--primary-color);
            color: var(--white);
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            background-color: #b38f2c;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* Testimonials Section */
        .testimonials-container {
            max-width: 1000px;
            margin: 80px auto;
            padding: 40px 5%;
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.05);
        }

        .testimonials-container h2 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 40px;
            color: var(--secondary-color);
        }

        .testimonials-wrapper {
            position: relative;
            overflow: hidden;
        }

        .testimonials-list {
            display: flex;
            transition: transform 0.5s ease;
            animation: slide 30s infinite;
        }

        .testimonial {
            min-width: 100%;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .testimonial img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
            border: 3px solid var(--primary-color);
        }

        .testimonial p {
            font-size: 1rem;
            color: var(--dark-gray);
            margin-bottom: 15px;
            font-style: italic;
            max-width: 600px;
        }

        .testimonial h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 5px;
        }

        .testimonial span {
            color: var(--dark-gray);
            font-size: 0.9rem;
        }

        @keyframes slide {
            0% { transform: translateX(0); }
            25% { transform: translateX(-100%); }
            50% { transform: translateX(-200%); }
            75% { transform: translateX(-300%); }
            100% { transform: translateX(0); }
        }

        /* Final CTA Section */
        .final-cta {
            text-align: center;
            padding: 60px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .final-cta img {
            width: 100%;
            max-width: 1000px;
            border-radius: 10px;
            margin: 30px 0;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Footer Mejorado */
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

        /* Responsive Design */
        @media (max-width: 992px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .pack-box {
                padding: 20px;
            }
        }

        @media (max-width: 768px) {
            .menu {
                gap: 1rem;
            }
            
            .hero {
                flex-direction: column;
                padding: 40px 5%;
            }
            
            .form-container, 
            .hero-image {
                min-width: 100%;
                max-width: 100%;
            }
            
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .beneficios h2,
            .packs-container h2,
            .testimonials-container h2 {
                font-size: 1.6rem;
            }
            
            .beneficios .destacado {
                font-size: 1.1rem;
            }
            
            .testimonial img {
                width: 80px;
                height: 80px;
            }
        }

        @media (max-width: 576px) {
            .navbar {
                flex-direction: column;
                gap: 1rem;
            }
            
            .menu {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
            
            .hero {
                text-align: center;
            }
            
            .btn, .cta-button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container-navbar">
            <nav class="navbar container">
                <img class="logo" src="img/favicon.png" alt="Luxury">
                <ul class="menu">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="registroempresa.html">Acceso de empresas</a></li>
                    <li><a href="premium.html">Servicios premium</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="form-container">
            <h1>Consigue más clientes y más bodas</h1>
            <p>Aumenta tu visibilidad y llega a miles de parejas con nuestros packs Premium. Más visibilidad, más contactos, más oportunidades de éxito: ¿qué esperas?</p>
            <div class="form-grid">
                <input type="text" placeholder="Nombre y Apellido">
                <input type="text" placeholder="Nombre de su empresa">
                <input type="email" placeholder="Correo electrónico">
                <select><option selected disabled>Categoría</option></select>
                <input type="tel" placeholder="Teléfono">
                <select><option selected disabled>Provincia</option></select>
            </div>
            <button class="btn">Contáctanos</button>
        </div>
        
        <div class="hero-image">
            <img src="img/pre.jpg" alt="Pareja en boda">
        </div>
    </section>

    <!-- Resto del contenido se mantiene igual... -->
    <section class="beneficios">
        <h2>Descubre los beneficios de aparecer entre los primeros resultados</h2>
        <p class="subtitulo">Con tu escaparate en Luxury, las parejas te encontrarán y podrán contactarte para pedirte información.</p>
        <p class="destacado">1. Posición destacada: Preséntate a más clientes potenciales</p>
        <img src="infaltil.jpg" alt="Ejemplo de resultados destacados">
    </section>

    <section class="packs-container">
        <h2>Descubre nuestros Packs Premium</h2>
        <p>Contacta con más parejas y consigue más bodas gracias a tu posición destacada en Luxury, el sitio líder en bodas.</p>

        <div class="packs-wrapper">
            <div class="packs-left">
                <img src="campestre.jpeg" alt="Vista de los packs premium">
            </div>
            <div class="packs-right">
                <div class="pack-box gold">
                    <h3>PAQUETE DE ORO SUPERIOR</h3>
                    <ul>
                        <li>Máxima visibilidad: 1.ª posición en los listados</li>
                        <li>Posición asegurada en la primera página</li>
                        <li>Participas en la publicidad</li>
                        <li>Acceso ilimitado al buzón de parejas</li>
                        <li>Asistencia telefónica y formación</li>
                    </ul>
                </div>

                <div class="pack-box silver">
                    <h3>PAQUETE PLATA SUPERIOR</h3>
                    <ul>
                        <li>Visibilidad desde la posición 15</li>
                        <li>Posición asegurada en la primera página</li>
                        <li>Participas en la publicidad</li>
                        <li>Acceso ilimitado al buzón de parejas</li>
                        <li>Asistencia telefónica y formación</li>
                    </ul>
                </div>

                <div class="pack-box red">
                    <h3>PAQUETE PREMIUM</h3>
                    <ul>
                        <li>Hasta la posición 22 en listados</li>
                        <li>Participas en la publicidad</li>
                        <li>Acceso ilimitado al buzón de parejas</li>
                        <li>Asistencia telefónica y formación</li>
                    </ul>
                </div>

                <div class="pack-box gray">
                    <h3>PAQUETE DE INICIO</h3>
                    <ul>
                        <li>Prueba las funciones básicas</li>
                        <li>Recibe solicitudes de forma limitada</li>
                    </ul>
                </div>
            </div>
        </div>

        <a href="#" class="cta-button">Consigue más clientes</a>
    </section>

    <section class="final-cta">
        <img src="campestre.jpeg" alt="Planes de paquetes">
        <button class="btn">Consiga más clientes</button>
    </section>

    <section class="testimonials-container">
        <h2>Lo que dicen nuestros clientes</h2>
        <div class="testimonials-wrapper">
            <div class="testimonials-list">
                <div class="testimonial">
                    <img src="salon de fiesta.jpg" alt="Eventos de los cinco sentidos">
                    <p>"Impecable disponibilidad y asistencia por parte de todo el personal de Luxury."</p>
                    <h4>Eventos de los cinco sentidos</h4>
                    <span>Catering para bodas</span>
                </div>
                <div class="testimonial">
                    <img src="salonboda.jpeg" alt="Catering Eventos">
                    <p>"Un servicio fantástico, la mejor plataforma para encontrar parejas ideales."</p>
                    <h4>Catering Eventos</h4>
                    <span>Servicios para eventos exclusivos</span>
                </div>
                <div class="testimonial">
                    <img src="saloncorporativo.jpeg" alt="Fotografía Glamour">
                    <p>"Gracias a Luxury, conseguimos más clientes de los que imaginamos. ¡Totalmente recomendado!"</p>
                    <h4>Fotografía Glamour</h4>
                    <span>Fotógrafo de bodas</span>
                </div>
                <div class="testimonial">
                    <img src="favicon.png" alt="Diseños de Bodas">
                    <p>"La plataforma ha sido muy útil para aumentar nuestra visibilidad. ¡Nos ayudaron a obtener más bodas!"</p>
                    <h4>Diseños de Bodas</h4>
                    <span>Decoración y organización para bodas</span>
                </div>
            </div>
        </div>
    </section>

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