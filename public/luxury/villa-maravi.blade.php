<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa Maravi - Presentación</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ===== ESTILOS GENERALES ===== */
        :root {
            --primary-color: #d0a933;
            --primary-dark: #b8972a;
            --secondary-color: #4285f4;
            --dark-color: #222;
            --gray-color: #777;
            --light-gray: #f5f5f5;
            --white: #ffffff;
            --black: #000000;
            --error-color: #d23f57;
        }
        
        * {
           font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }
        
        body {
        
            background-color: var(--light-gray);
            color: var(--dark-color);
            line-height: 1.6;

        }
        
        img {
            max-width: 100%;
            height: auto;
        }
        
        /* ===== HEADER ===== */
        .navbar {
            background-color: var(--black);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .navbar-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.25rem;
        }
        
        .logo {
            height: 40px;
        }
        
        .menu {
            display: flex;
            list-style: none;
            gap: 1.5rem;
        }
        
        .menu a {
            text-decoration: none;
            color: var(--primary-color);
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .menu a:hover {
            color: var(--primary-dark);
        }
        
        .search-form {
            display: flex;
            align-items: center;
        }
        
        .search-form input {
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 20px 0 0 20px;
            outline: none;
            width: 200px;
            transition: all 0.3s ease;
        }
        
        .search-form input:focus {
            width: 250px;
            border-color: var(--primary-color);
        }
        
        .btn-search {
            padding: 0.5rem 1rem;
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: 0 20px 20px 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .btn-search:hover {
            background-color: var(--primary-dark);
        }
        
        /* ===== CONTENIDO PRINCIPAL ===== */
        .main-container {
            max-width: 1000px;
            margin: 2rem auto;
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .hero-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        
        .content {
            padding: 1.5rem;
        }
        
        /* ===== TARJETA DE SALÓN ===== */
        .salon-card {
            display: flex;
            gap: 1.25rem;
            margin-bottom: 1.5rem;
            align-items: center;
        }
        
        .salon-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        
        .salon-info {
            flex: 1;
        }
        
        .salon-name {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: var(--dark-color);
        }
        
        .salon-rating {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        
        .stars {
            color: #FFD700;
            font-size: 1.1rem;
            margin-right: 0.5rem;
        }
        
        .rating-text {
            font-size: 0.9rem;
            color: var(--gray-color);
        }
        
        .salon-location {
            font-size: 0.9rem;
            color: var(--gray-color);
            margin-bottom: 0.6rem;
        }
        
        .salon-highlight {
            font-size: 0.9rem;
            color: var(--error-color);
            font-weight: bold;
        }
        
        /* ===== SECCIÓN DESTACADA ===== */
        .highlight-box {
            background-color: #fffaf0;
            padding: 1.25rem;
            border-radius: 8px;
            margin: 1.5rem 0;
            border-left: 4px solid var(--primary-color);
        }
        
        .highlight-title {
            font-size: 1.1rem;
            color: #444;
            margin-bottom: 1rem;
            font-weight: bold;
        }
        
        .highlight-item {
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
        }
        
        .highlight-icon {
            color: var(--primary-color);
            margin-right: 0.6rem;
        }
        
        /* ===== LISTA DE CARACTERÍSTICAS ===== */
        .features-section {
            margin: 1.8rem 0;
        }
        
        .section-title {
            font-size: 1.25rem;
            color: var(--dark-color);
            margin-bottom: 1rem;
            padding-bottom: 0.3rem;
            border-bottom: 1px solid #eee;
        }
        
        .features-list {
            list-style-type: none;
            padding: 0;
        }
        
        .feature-item {
            padding: 0.6rem 0;
            border-bottom: 1px dashed #eee;
            display: flex;
            align-items: center;
        }
        
        .feature-icon {
            color: var(--primary-color);
            margin-right: 0.6rem;
            font-size: 1.1rem;
        }
        
        /* ===== GALERÍA ===== */
        .gallery-section {
            margin: 1.8rem 0;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            height: 150px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: scale(1.03);
        }
        
        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
        }
        
        /* ===== FOOTER LINKS ===== */
        .footer-links {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 1.8rem 0;
            justify-content: center;
        }
        
        .footer-link {
            color: var(--gray-color);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }
        
        .footer-link:hover {
            color: var(--primary-color);
        }
        
        /* ===== BOTONES ===== */
        .action-buttons {
            display: flex;
            gap: 1rem;
            margin: 1.8rem 0;
            justify-content: center;
        }
        
        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 30px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            box-shadow: 0 3px 10px rgba(208, 169, 51, 0.3);
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(208, 169, 51, 0.4);
        }
        
        .btn-secondary {
            background-color: var(--white);
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }
        
        .btn-secondary:hover {
            background-color: #f9f4e6;
            transform: translateY(-2px);
        }
        
        /* ===== MODAL DE IMAGEN ===== */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            overflow: auto;
        }
        
        .modal-content {
            margin: auto;
            display: block;
            max-width: 90%;
            max-height: 90%;
            margin-top: 50px;
            animation: zoom 0.3s ease;
        }
        
        @keyframes zoom {
            from { transform: scale(0.5); }
            to { transform: scale(1); }
        }
        
        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: var(--white);
            font-size: 2.5rem;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        
        .close:hover {
            color: var(--primary-color);
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .navbar-container {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }
            
            .menu {
                flex-direction: column;
                align-items: center;
                gap: 0.6rem;
            }
            
            .search-form {
                width: 100%;
            }
            
            .salon-card {
                flex-direction: column;
                text-align: center;
            }
            
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <header class="navbar">
        <div class="navbar-container">
            <i class="fa-solid fa-bars"></i>
            <img class="logo" src="img/favicon.png" alt="Luxury Venues">
            
            <ul class="menu">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="index.html#categorias">Categorias</a></li>
                <li><a href="#" onclick="openLoginModal()">Inicio de sesión</a></li>
                <li><a href="#" onclick="mostrarLogin()">Área de empresas</a></li>
            </ul>
            
            <form class="search-form">
                <input type="search" placeholder="Buscar...">
                <button class="btn-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="main-container">
        <img src="https://skybox.blockadelabs.com/e/b2976aafb3d1d0fe31621d1497db3a2c" width=700 height=700 style="border:0;" allow="fullscreen"
            class="hero-image" 
             alt="Villa Maravi - Vista exterior">
        
        <div class="content">
            <!-- TARJETA DE SALÓN -->
            <section class="salon-card">
                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                     class="salon-image" 
                     alt="Villa Maravi">
                
                <div class="salon-info">
                    <h1 class="salon-name">Villa Maravi</h1>
                    
                    <div class="salon-rating">
                        <div class="stars">★★★★★</div>
                        <div class="rating-text">4.9 valoraciones · 3.5k</div>
                    </div>
                    
                    <p class="salon-location">Sorrento, Napoli</p>
                    <p class="salon-highlight">Localización 1% de diferencia</p>
                </div>
            </section>

            <!-- INFORMACIÓN DESTACADA -->
            <section class="highlight-box">
                <h2 class="highlight-title">Información importante</h2>
                
                <div class="highlight-item">
                    <i class="fas fa-map-marker-alt highlight-icon"></i>
                    <span>En el centro de la ciudad</span>
                </div>
                
                <div class="highlight-item">
                    <i class="fas fa-umbrella-beach highlight-icon"></i>
                    <span>Terraza, jardines, piscina</span>
                </div>
                
                <div class="highlight-item">
                    <i class="fas fa-calendar-day highlight-icon"></i>
                    <span>Sólo un evento por día</span>
                </div>
            </section>

            <!-- CUALIDADES DESTACADAS -->
            <section class="features-section">
                <h2 class="section-title">Cualidades destacadas por las parejas</h2>
                
                <ul class="features-list">
                    <li class="feature-item">
                        <i class="fas fa-user-tie feature-icon"></i>
                        Personal atento y profesional
                    </li>
                    
                    <li class="feature-item">
                        <i class="fas fa-palette feature-icon"></i>
                        Color y saber estar en la decoración
                    </li>
                    
                    <li class="feature-item">
                        <i class="fas fa-utensils feature-icon"></i>
                        Decoración y arreglo de mesa impecables
                    </li>
                    
                    <li class="feature-item">
                        <i class="fas fa-search-plus feature-icon"></i>
                        Atención al detalle excepcional
                    </li>
                </ul>
            </section>

            <!-- GALERÍA -->
            <section class="gallery-section">
                <h2 class="section-title">Galería de imágenes</h2>
                
                <div class="gallery-grid">
                    <div class="gallery-item" onclick="openModal('https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                        <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             class="gallery-image" 
                             alt="Villa Maravi - Fachada principal">
                    </div>
                    
                    <div class="gallery-item" onclick="openModal('https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                        <img src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             class="gallery-image" 
                             alt="Villa Maravi - Salón principal">
                    </div>
                    
                    <div class="gallery-item" onclick="openModal('https://images.unsplash.com/photo-1513519245088-0e12902e5a38?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                        <img src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             class="gallery-image" 
                             alt="Villa Maravi - Terraza">
                    </div>
                    
                    <div class="gallery-item" onclick="openModal('https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                        <img src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             class="gallery-image" 
                             alt="Villa Maravi - Jardines">
                    </div>
                </div>
            </section>

            <!-- FOOTER LINKS -->
            <nav class="footer-links">
                <a href="#" class="footer-link">matrimonio.com</a>
                <a href="#" class="footer-link">MÁS BOXAS</a>
                <a href="#" class="footer-link">REGIONES</a>
                <a href="#" class="footer-link">PROVEEDORES</a>
                <a href="#" class="footer-link">BODAS</a>
                <a href="#" class="footer-link">ARTÍCULOS</a>
                <a href="#" class="footer-link">NOVIOS</a>
                <a href="#" class="footer-link">INVITADOS</a>
                <a href="#" class="footer-link">GRUPOS</a>
            </nav>

            <!-- BOTONES DE ACCIÓN -->
            <div class="action-buttons">
                <button class="btn btn-primary" onclick="solicitarPresupuesto()">
                    <i class="fas fa-envelope"></i> Solicitar Presupuesto
                </button>
                
                <button class="btn btn-secondary" onclick="consultarDisponibilidad()">
                    <i class="fas fa-calendar-check"></i> Consultar Disponibilidad
                </button>
                
            </div>
        </div>
    </main>

    <!-- MODAL PARA IMÁGENES -->
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage" alt="Imagen ampliada">
    </div>

    <script>
        // ===== FUNCIONES DEL MODAL =====
        function openModal(imageSrc) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            
            modal.style.display = "block";
            modalImg.src = imageSrc;
        }

        function closeModal() {
            document.getElementById('imageModal').style.display = "none";
        }

        // Cerrar modal al hacer clic fuera de la imagen
        window.onclick = function(event) {
            const modal = document.getElementById('imageModal');
            if (event.target === modal) {
                closeModal();
            }
        }

        // ===== FUNCIONES DE LOS BOTONES =====
        function solicitarPresupuesto() {
            alert('Presupuesto solicitado para Villa Maravi. Nos pondremos en contacto contigo pronto.');
        }

        function consultarDisponibilidad() {
            alert('Consulta de disponibilidad para Villa Maravi. Te mostraremos las fechas disponibles.');
        }

        // ===== FUNCIONES DEL MENÚ =====
        function openLoginModal() {
            alert('Modal de inicio de sesión');
        }

        function mostrarLogin() {
            alert('Área de empresas');
        }
    </script>
</body>
</html>