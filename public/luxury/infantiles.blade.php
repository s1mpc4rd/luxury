<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salones lujosos</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <img class="logo" src="img/favicon.png" alt="luxury" />
                <ul class="menu">
                    <li><a href="index.html" style="color: #d0a933;">Inicio</a></li>
                    <li><a href="index.html #categorias" style="color: #d0a933;">Categorias</a></li>
                    <li><a href="#" onclick="openLoginModal()" style="color: #d0a933;">Inicio de sesion</a></li>
                    <li><a href="#" onclick="mostrarLogin()" style="color: #d0a933;">Área de empresas</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="main-content">
        <!-- Filtros a la izquierda -->
        <aside class="filters-sidebar">
            <div class="filter-section">
                <h3>Tipo de establecimiento</h3>
                <label>
                    <input type="checkbox" checked>
                    <span>Recepciones</span>
                </label>
                <label>
                    <input type="checkbox" checked>
                    <span>Haciendas matrimonio</span>
                </label>
                <label>
                    <input type="checkbox">
                    <span>Hoteles matrimonios</span>
                </label>
                <label>
                    <input type="checkbox">
                    <span>Restaurantes matrimonios</span>
                </label>
                <label>
                    <input type="checkbox" checked>
                    <span>Salones de fiestas</span>
                </label>
                <label>
                    <input type="checkbox">
                    <span>Clubs</span>
                </label>
                <label>
                    <input type="checkbox">
                    <span>Centros eventos</span>
                </label>
            </div>

            <div class="filter-section">
                <h3>Precio por persona</h3>
                <label>
                    <input type="checkbox">
                    <span>Menos de 50€</span>
                </label>
                <label>
                    <input type="checkbox" checked>
                    <span>50€ - 100€</span>
                </label>
                <label>
                    <input type="checkbox">
                    <span>100€ - 150€</span>
                </label>
                <label>
                    <input type="checkbox">
                    <span>Más de 150€</span>
                </label>
            </div>

            <div class="filter-section">
                <h3>Valoración</h3>
                <label>
                    <input type="checkbox">
                    <span>★★★★★ (5.0)</span>
                </label>
                <label>
                    <input type="checkbox" checked>
                    <span>★★★★☆ (4.0+)</span>
                </label>
                <label>
                    <input type="checkbox">
                    <span>★★★☆☆ (3.0+)</span>
                </label>
            </div>
        </aside>

        <!-- Resultados a la derecha -->
        <main class="results-content">
            <div class="property-card">
                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Villa Maravi" class="property-image">
                <div class="property-info">
                    <div class="property-name">Villa Maravi</div>
                    <div class="rating">
                        <span class="rating-score">4.9</span>
                        <span class="review-count">(14)</span>
                        <span class="location">· Sorrento, Napoli</span>
                    </div>
                    <div class="description">
                        Villa Maravi è una location unica, moderna, avvolgente, luminosa, ritmica. La location si contraddistingue gli spazi ampi e luminosi e vi offre le tecnologie, le professionalità, le sensibilità giuste per interpretare l'evento della vostra vita secondo il vostro desiderio. L'architettura è fresca e...
                    </div>
                    <div class="price-info">
                        <span class="price">Da 130€</span>
                        <span class="price-range">80 - 300</span>
                        <span class="promotions">2 promozioni</span>
                        <span class="discount">5%</span>
                    </div>
                    <button class="cta-button">Preventivo Gratis</button>
                </div>
            </div>
            
            <div class="property-card">
                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Villa Vittoria" class="property-image">
                <div class="property-info">
                    <div class="property-name">Villa Vittoria</div>
                    <div class="rating">
                        <span class="rating-score">4.8</span>
                        <span class="review-count">(45)</span>
                        <span class="location">· Carmignano, Prato</span>
                    </div>
                    <div class="description">
                        Questa splendida villa d'epoca rinascimentale domina con la sua grande terrazza naturale tutta la vallata del Montalbano. Le sue incantevoli sale affrescate, che accolgono antiche opere d'arte, sono il luogo ideale per onorare la magia del vostro grande giorno. L'antica e prestigiosa storia di...
                    </div>
                    <div style="margin-top: 12px;">
                        <button class="cta-button">Preventivo Gratis</button>
                        <span class="response-time">Risponde in 24 ore</span>
                    </div>
                </div>
            </div>
            <!-- Resultados a la derecha -->
       
            <div class="property-card">
                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Villa Maravi" class="property-image">
                <div class="property-info">
                    <div class="property-name">Villa Maravi</div>
                    <div class="rating">
                        <span class="rating-score">4.9</span>
                        <span class="review-count">(14)</span>
                        <span class="location">· Sorrento, Napoli</span>
                    </div>
                    <div class="description">
                        Villa Maravi è una location unica, moderna, avvolgente, luminosa, ritmica. La location si contraddistingue gli spazi ampi e luminosi e vi offre le tecnologie, le professionalità, le sensibilità giuste per interpretare l'evento della vostra vita secondo il vostro desiderio. L'architettura è fresca e...
                    </div>
                    <div class="price-info">
                        <span class="price">Da 130€</span>
                        <span class="price-range">80 - 300</span>
                        <span class="promotions">2 promozioni</span>
                        <span class="discount">5%</span>
                    </div>
                    <button class="cta-button">Preventivo Gratis</button>
                </div>
            </div>
            
            <div class="property-card">
                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Villa Vittoria" class="property-image">
                <div class="property-info">
                    <div class="property-name">Villa Vittoria</div>
                    <div class="rating">
                        <span class="rating-score">4.8</span>
                        <span class="review-count">(45)</span>
                        <span class="location">· Carmignano, Prato</span>
                    </div>
                    <div class="description">
                        Questa splendida villa d'epoca rinascimentale domina con la sua grande terrazza naturale tutta la vallata del Montalbano. Le sue incantevoli sale affrescate, che accolgono antiche opere d'arte, sono il luogo ideale per onorare la magia del vostro grande giorno. L'antica e prestigiosa storia di...
                    </div>
                    <div style="margin-top: 12px;">
                        <button class="cta-button">Preventivo Gratis</button>
                        <span class="response-time">Risponde in 24 ore</span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>