<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salones lujosos</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <header>
        <div class="container-navbar">
            <nav class="navbar">
                <i class="fa-solid fa-bars"></i>
                <img class="logo" src="img/favicon.png" alt="luxury" />
                <ul class="menu">
                    <li><a href="index.html" style="color: #d0a933;">Inicio</a></li>
                    <li><a href="index.html#categorias" style="color: #d0a933;">Categorias</a></li>
                    <li><a href="#" onclick="openLoginModal()" style="color: #d0a933;">Inicio de sesion</a></li>
                    <li><a href="#" onclick="mostrarLogin()" style="color: #d0a933;">Área de empresas</a></li>
                </ul>
                <form class="search-form">
                    <input type="search" placeholder="Buscar..." id="searchInput" />
                    <button class="btn-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </nav>
        </div>
    </header>

    <div class="main-content">
        <!-- Filtros a la izquierda -->
        <aside class="filters-sidebar">
            <div class="filter-section">
                <h3>Tipo de establecimiento</h3>
                <label>
                    <input type="checkbox" value="recepcion" checked onclick="filterProperties()">
                    <span>Recepciones</span>
                </label>
                <label>
                    <input type="checkbox" value="hacienda" checked onclick="filterProperties()">
                    <span>Haciendas matrimonio</span>
                </label>
                <label>
                    <input type="checkbox" value="hotel" onclick="filterProperties()">
                    <span>Hoteles matrimonios</span>
                </label>
                <label>
                    <input type="checkbox" value="restaurante" onclick="filterProperties()">
                    <span>Restaurantes matrimonios</span>
                </label>
                <label>
                    <input type="checkbox" value="salon" checked onclick="filterProperties()">
                    <span>Salones de fiestas</span>
                </label>
                <label>
                    <input type="checkbox" value="club" onclick="filterProperties()">
                    <span>Clubs</span>
                </label>
                <label>
                    <input type="checkbox" value="centro" onclick="filterProperties()">
                    <span>Centros eventos</span>
                </label>
            </div>

            <div class="filter-section">
                <h3>Precio por persona</h3>
                <label>
                    <input type="checkbox" value="price1" onclick="filterProperties()">
                    <span>Menos de 50€</span>
                </label>
                <label>
                    <input type="checkbox" value="price2" checked onclick="filterProperties()">
                    <span>50€ - 100€</span>
                </label>
                <label>
                    <input type="checkbox" value="price3" onclick="filterProperties()">
                    <span>100€ - 150€</span>
                </label>
                <label>
                    <input type="checkbox" value="price4" onclick="filterProperties()">
                    <span>Más de 150€</span>
                </label>
            </div>

            <div class="filter-section">
                <h3>Valoración</h3>
                <label>
                    <input type="checkbox" value="rating5" onclick="filterProperties()">
                    <span>★★★★★ (5.0)</span>
                </label>
                <label>
                    <input type="checkbox" value="rating4" checked onclick="filterProperties()">
                    <span>★★★★☆ (4.0+)</span>
                </label>
                <label>
                    <input type="checkbox" value="rating3" onclick="filterProperties()">
                    <span>★★★☆☆ (3.0+)</span>
                </label>
            </div>
            
            <button class="cta-button" onclick="resetFilters()" style="width: 100%; margin-top: 20px;">
                Reiniciar filtros
            </button>
        </aside>

        <!-- Resultados a la derecha -->
        <main class="results-content">
            <div class="results-count" id="resultsCount">6 RESULTADOS</div>
            
            <div class="no-results" id="noResults">
                No se encontraron resultados con los filtros seleccionados.
            </div>
            
            <!-- Tarjetas de propiedades -->
            <div class="property-card" data-category="recepcion salon" data-price="price2" data-rating="rating4">
                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Villa Maravi" class="property-image">
                <div class="property-info">
                    <div class="property-name">Villa Maravi</div>
                    <div class="rating">
                        <span class="rating-score">4.9</span>
                        <span class="review-count">(14)</span>
                        <span class="location">· Sorrento, Napoli</span>
                    </div>
                    <div class="description">
                        Villa Maravi es una location unica, moderna, avvolgente, luminosa, ritmica. La location si contraddistingue gli spazi ampi e luminosi e vi offre le tecnologie, le professionalità, le sensibilità giuste per interpretare l'evento della vostra vita secondo il vostro desiderio. L'architettura è fresca e...
                    </div>
                    <div class="price-info">
                        <span class="price">Desde 130€</span>
                        <span class="price-range">80 - 300</span>
                        <span class="promotions">2 promociones</span>
                        <span class="discount">5%</span>
                    </div>
                    <button class="cta-button">Presupuesto Gratis</button>
                </div>
            </div>
            
            <div class="property-card" data-category="hacienda" data-price="price2" data-rating="rating4">
                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Villa Vittoria" class="property-image">
                <div class="property-info">
                    <div class="property-name">Villa Vittoria</div>
                    <div class="rating">
                        <span class="rating-score">4.8</span>
                        <span class="review-count">(45)</span>
                        <span class="location">· Carmignano, Prato</span>
                    </div>
                    <div class="description">
                        Esta splendida villa d'epoca rinascimentale domina con la sua grande terrazza naturale tutta la vallata del Montalbano. Le sue incantevoli sale affrescate, che accolgono antiche opere d'arte, sono il luogo ideale per onorare la magia del vostro grande giorno.
                    </div>
                    <div style="margin-top: 12px;">
                        <button class="cta-button">Presupuesto Gratis</button>
                        <span class="response-time">Responde en 24 horas</span>
                    </div>
                </div>
            </div>
            
            <div class="property-card" data-category="recepcion" data-price="price2" data-rating="rating4">
                <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Palacio Real" class="property-image">
                <div class="property-info">
                    <div class="property-name">Palacio Real</div>
                    <div class="rating">
                        <span class="rating-score">4.7</span>
                        <span class="review-count">(32)</span>
                        <span class="location">· Madrid</span>
                    </div>
                    <div class="description">
                        Un lujoso palacio con jardines históricos y salones decorados con obras de arte originales. Ideal para bodas y eventos de gala con un toque de elegancia real.
                    </div>
                    <div class="price-info">
                        <span class="price">Desde 150€</span>
                        <span class="price-range">100 - 350</span>
                        <span class="promotions">1 promoción</span>
                    </div>
                    <button class="cta-button">Presupuesto Gratis</button>
                </div>
            </div>
            
            <div class="property-card" data-category="salon" data-price="price2" data-rating="rating4">
                <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Salón Diamante" class="property-image">
                <div class="property-info">
                    <div class="property-name">Salón Diamante</div>
                    <div class="rating">
                        <span class="rating-score">4.6</span>
                        <span class="review-count">(28)</span>
                          <span class="location">· Barcelona</span>
                    </div>
                    <div class="description">
                        Moderno salón de eventos con tecnología de última generación, iluminación LED personalizable y capacidad para hasta 500 invitados. Ofrecemos paquetes completos para bodas y eventos corporativos.
                    </div>
                    <div class="price-info">
                        <span class="price">Desde 90€</span>
                        <span class="price-range">70 - 200</span>
                        <span class="promotions">3 promociones</span>
                        <span class="discount">10%</span>
                    </div>
                    <button class="cta-button">Presupuesto Gratis</button>
                </div>
            </div>
            
            <div class="property-card" data-category="hacienda" data-price="price3" data-rating="rating4">
                <img src="https://images.unsplash.com/photo-1519643225200-94e79e383724?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Hacienda Andalucía" class="property-image">
                <div class="property-info">
                    <div class="property-name">Hacienda Andalucía</div>
                    <div class="rating">
                        <span class="rating-score">4.9</span>
                        <span class="review-count">(56)</span>
                        <span class="location">· Sevilla</span>
                    </div>
                    <div class="description">
                        Antigua hacienda andaluza restaurada con patios llenos de flores, fuentes y árboles centenarios. Especializados en bodas con encanto rural y catering con productos locales.
                    </div>
                    <div class="price-info">
                        <span class="price">Desde 120€</span>
                        <span class="price-range">90 - 250</span>
                    </div>
                    <button class="cta-button">Presupuesto Gratis</button>
                </div>
            </div>
            
            <div class="property-card" data-category="recepcion" data-price="price4" data-rating="rating5">
                <img src="https://images.unsplash.com/photo-1537047902294-62a40c20a6ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Castillo Medieval" class="property-image">
                <div class="property-info">
                    <div class="property-name">Castillo Medieval</div>
                    <div class="rating">
                        <span class="rating-score">5.0</span>
                        <span class="review-count">(42)</span>
                        <span class="location">· Toledo</span>
                    </div>
                    <div class="description">
                        Auténtico castillo del siglo XII completamente restaurado. Ofrece una experiencia única para bodas temáticas medievales con torneos, banquetes y espectáculos de cetrería.
                    </div>
                    <div class="price-info">
                        <span class="price">Desde 200€</span>
                        <span class="price-range">150 - 500</span>
                        <span class="promotions">Paquete exclusivo</span>
                    </div>
                    <button class="cta-button">Presupuesto Gratis</button>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Datos de las propiedades para búsqueda
        const properties = [
            {
                id: 1,
                name: "Villa Maravi",
                categories: ["recepcion", "salon"],
                price: "price2",
                rating: "rating4"
            },
            {
                id: 2,
                name: "Villa Vittoria",
                categories: ["hacienda"],
                price: "price2",
                rating: "rating4"
            },
            {
                id: 3,
                name: "Palacio Real",
                categories: ["recepcion"],
                price: "price2",
                rating: "rating4"
            },
            {
                id: 4,
                name: "Salón Diamante",
                categories: ["salon"],
                price: "price2",
                rating: "rating4"
            },
            {
                id: 5,
                name: "Hacienda Andalucía",
                categories: ["hacienda"],
                price: "price3",
                rating: "rating4"
            },
            {
                id: 6,
                name: "Castillo Medieval",
                categories: ["recepcion"],
                price: "price4",
                rating: "rating5"
            }
        ];

        // Función para filtrar propiedades
        function filterProperties() {
            // Obtener categorías seleccionadas
            const selectedCategories = [];
            document.querySelectorAll('.filter-section:nth-child(1) input[type="checkbox"]:checked').forEach(checkbox => {
                selectedCategories.push(checkbox.value);
            });
            
            // Obtener precios seleccionados
            const selectedPrices = [];
            document.querySelectorAll('.filter-section:nth-child(2) input[type="checkbox"]:checked').forEach(checkbox => {
                selectedPrices.push(checkbox.value);
            });
            
            // Obtener valoraciones seleccionadas
            const selectedRatings = [];
            document.querySelectorAll('.filter-section:nth-child(3) input[type="checkbox"]:checked').forEach(checkbox => {
                selectedRatings.push(checkbox.value);
            });
            
            // Obtener texto de búsqueda
            const searchText = document.getElementById('searchInput').value.toLowerCase();
            
            // Filtrar propiedades
            const filteredProperties = properties.filter(property => {
                // Verificar categorías
                const hasCategory = selectedCategories.some(cat => 
                    property.categories.includes(cat)
                );
                
                // Verificar precios
                const hasPrice = selectedPrices.includes(property.price);
                
                // Verificar valoraciones
                const hasRating = selectedRatings.includes(property.rating);
                
                // Verificar búsqueda por texto
                const matchesSearch = property.name.toLowerCase().includes(searchText);
                
                return hasCategory && hasPrice && hasRating && matchesSearch;
            });
            
            // Mostrar/ocultar propiedades según el filtro
            const propertyCards = document.querySelectorAll('.property-card');
            let visibleCount = 0;
            
            propertyCards.forEach(card => {
                const cardId = parseInt(card.dataset.id || Array.from(card.parentNode.children).indexOf(card) - 1);
                const property = properties.find(p => p.id === cardId);
                
                if (filteredProperties.some(p => p.id === cardId)) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Actualizar contador de resultados
            document.getElementById('resultsCount').textContent = `${visibleCount} RESULTADOS`;
            
            // Mostrar mensaje si no hay resultados
            const noResults = document.getElementById('noResults');
            if (visibleCount === 0) {
                noResults.style.display = 'block';
            } else {
                noResults.style.display = 'none';
            }
        }
        
        // Función para reiniciar filtros
        function resetFilters() {
            // Marcar todos los checkboxes como no seleccionados
            document.querySelectorAll('.filters-sidebar input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = false;
            });
            
            // Marcar los checkboxes por defecto como seleccionados
            document.querySelector('input[value="recepcion"]').checked = true;
            document.querySelector('input[value="hacienda"]').checked = true;
            document.querySelector('input[value="salon"]').checked = true;
            document.querySelector('input[value="price2"]').checked = true;
            document.querySelector('input[value="rating4"]').checked = true;
            
            // Limpiar búsqueda
            document.getElementById('searchInput').value = '';
            
            // Aplicar filtros
            filterProperties();
        }
        
        // Asignar IDs a las propiedades y eventos
        document.addEventListener('DOMContentLoaded', function() {
            // Asignar IDs a las tarjetas de propiedades
            const propertyCards = document.querySelectorAll('.property-card');
            propertyCards.forEach((card, index) => {
                properties[index].id = index + 1;
                card.dataset.id = index + 1;
            });
            
            // Evento para búsqueda por texto
            document.getElementById('searchInput').addEventListener('input', filterProperties);
            
            // Inicializar filtros
            resetFilters();
        });
    </script>
</body>
</html>