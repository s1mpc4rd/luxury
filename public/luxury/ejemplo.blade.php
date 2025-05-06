2<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Villa Belvedere</title>
  <link rel="stylesheet" href="https://www.matrimonio.com/builds/desktop/css/symfnw-IT73-1-20250417-002_www_m_/WebBundleResponsiveMarketplaceStorefrontBodas.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f5f5f5;
     
    }

    .container {
      display: flex;
      max-width: 3000px;
      background: #fff;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }

    .gallery {
      flex: 2;
      display: grid;
      grid-template-columns: 2fr 1fr;
      grid-template-rows: repeat(2, 1fr);
      gap: 5px;
      height: 500px;
    }

    .gallery img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 5px;
    }

    .gallery img:first-child {
      grid-row: span 2;
    }

    .info {
        width: 300px;
      position: sticky;
      z-index: 99999999999999999999;
      top: 20px;
      align-self: left;
      padding: 20px;
      margin: 20px;
      /*height: fit-content;*/
    }

    .info h2 {
      margin: 0;
      font-size: 22px;
    }

    .stars {
      color: #fbbf24;
      font-size: 16px;
    }

    .location, .price, .capacity {
      margin: 10px 0;
      font-size: 14px;
      color: #555;
    }

    .tag {
      background-color: #fef3c7;
      padding: 6px 10px;
      font-size: 12px;
      border-radius: 6px;
      display: inline-block;
      margin-bottom: 10px;
    }

    .button {
      background-color: #d0a933;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      font-size: 14px;
      cursor: pointer;
      margin-top: 15px;
    }

    .features {
      font-size: 13px;
      color: #444;
      margin-top: 20px;
    }

    .features li {
      margin-bottom: 5px;
    }

    .tabs button:hover {
      background-color: #ddd;
    }
 .section {
      max-width: 10000px;
      margin: auto;
    }

    h3 {
      font-size: 18px;
      margin-top: 40px;
      margin-bottom: 15px;
    }

    .icon-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 15px;
    }

    .icon-item {
      display: flex;
      align-items: center;
      font-size: 14px;
      color: #444;
    }

    .icon-item i {
      font-size: 18px;
      margin-right: 10px;
      color: #444;
    }

    .btn-servicios {
      margin-top: 10px;
      background-color: #f1f1f1;
      border: none;
      padding: 10px 16px;
      border-radius: 8px;
      font-size: 13px;
      cursor: pointer;
    }

    .info-text {
      font-size: 14px;
      line-height: 1.6;
      margin-top: 15px;
      color: #333;
    }

    .subsection {
      margin-top: 20px;
    }

    ul.checklist {
      margin-top: 10px;
      padding-left: 20px;
    }

    ul.checklist li {
      list-style: none;
      position: relative;
      margin-bottom: 6px;
    }

    ul.checklist li::before {
      content: "•";
      color: #d0a933;
      font-weight: bold;
      display: inline-block;
      width: 1em;
      margin-left: -1em;
    }

    .meta {
      font-size: 12px;
      color: #888;
      margin-top: 5px;
    }

    .leer-mas {
      display: block;
      margin-top: 12px;
      font-size: 13px;
      color: #111;
      font-weight: bold;
      text-decoration: underline;
      cursor: pointer;
    }
    
    .faq-section {
      max-width: 1000px;
      margin: auto;
    }

    h3 {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .faq-block {
      margin-bottom: 30px;
    }

    .faq-block h4 {
      font-size: 16px;
      margin-bottom: 8px;
    }

    .faq-list {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
      gap: 10px;
      font-size: 14px;
    }

    .faq-item::before {
      content: "✓";
      color: #10b981;
      margin-right: 6px;
      font-weight: bold;
    }

    .faq-item {
      display: flex;
      align-items: center;
      color: #444;
    }

    .button-ver-todo {
      background-color: #f1f1f1;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 8px 14px;
      font-size: 13px;
      cursor: pointer;
    }

    .contact-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border: 1px solid #eee;
      border-radius: 12px;
      padding: 16px 20px;
      margin-top: 40px;
      background-color: #fafafa;
    }

    .contact-text {
      display: flex;
      align-items: center;
      font-size: 14px;
    }

    .contact-text i {
      font-size: 20px;
      margin-right: 10px;
      color: #555;
    }

    .btn-contactar {
      background-color: #fef2f2;
      border: 1px solid #ffd761;
      color: #d0a933;
      border-radius: 8px;
      padding: 10px 16px;
      font-weight: bold;
      font-size: 13px;
      cursor: pointer;
    }
    h2 {
      font-size: 22px;
      margin-bottom: 10px;
    }

    .resumen {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 16px;
      margin-bottom: 4px;
    }

    .resumen .estrella {
      color: #facc15;
      font-size: 20px;
    }

    .boton-resena {
      background-color: #d0a933;
      color: white;
      padding: 8px 16px;
      border: none;
      border-radius: 8px;
      font-size: 13px;
      float: right;
      cursor: pointer;
    }

    .galeria {
      display: flex;
      gap: 12px;
      margin: 30px 0;
    }

    .galeria img {
      width: 180px;
      height: 130px;
      object-fit: cover;
      border-radius: 10px;
    }

    .tarjetas {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
    }

    .tarjeta {
      border: 1px solid #eee;
      padding: 15px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      background-color: #fff;
    }

    .tarjeta h4 {
      margin: 6px 0;
      font-size: 14px;
      color: #444;
    }

    .tarjeta .estrellas {
      color: #facc15;
    }

    .tarjeta .texto {
      font-size: 13px;
      color: #333;
      margin-top: 10px;
    }

    .tarjeta small {
      color: #888;
      font-size: 12px;
    }
    
    .faq-section {
      max-width: 1000px;
      margin: auto;
    }

    h3 {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .faq-block {
      margin-bottom: 30px;
    }

    .faq-block h4 {
      font-size: 16px;
      margin-bottom: 8px;
    }

    .faq-list {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
      gap: 10px;
      font-size: 14px;
    }

    .faq-item::before {
      content: "✓";
      color: #10b981;
      margin-right: 6px;
      font-weight: bold;
    }

    .faq-item {
      display: flex;
      align-items: center;
      color: #444;
    }

    .button-ver-todo {
      background-color: #f1f1f1;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 8px 14px;
      font-size: 13px;
      cursor: pointer;
    }

    .contact-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border: 1px solid #eee;
      border-radius: 12px;
      padding: 16px 20px;
      margin-top: 40px;
      background-color: #fafafa;
    }

    .contact-text {
      display: flex;
      align-items: center;
      font-size: 14px;
    }

    .contact-text i {
      font-size: 20px;
      margin-right: 10px;
      color: #555;
    }

    .btn-contactar {
      background-color: #fef2f2;
      border: 1px solid #ffd761;
      color: #d0a933;
      border-radius: 8px;
      padding: 10px 16px;
      font-weight: bold;
      font-size: 13px;
      cursor: pointer;
    }
    .sticky-tabs {
      position: sticky;
      top: 0;
      z-index: 1000;
      background: white;
      padding: 10px 40px;
      border-bottom: 1px solid #ddd;
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-family: 'Segoe UI', sans-serif;
    }
  
    .tab-buttons {
      display: flex;
      gap: 10px;
    }
  
    .tab-buttons button {
      padding: 8px 14px;
      border: 1px solid #ccc;
      background: white;
      border-radius: 10px;
      cursor: pointer;
      font-size: 14px;
      transition: all 0.2s ease;
    }
  
    .tab-buttons button.active {
      border: 2px solid #2563eb;
      color: #2563eb;
      font-weight: bold;
    }
  
    .tab-actions {
      display: flex;
      gap: 20px;
      font-size: 14px;
    }
  
    .tab-actions span {
      display: flex;
      align-items: center;
      gap: 5px;
      color: #333;
      cursor: pointer;
    }
    .extra-text {
      display: none;
      margin-top: 10px;
    }
    .toggle-btn {
      color: #007BFF;
      cursor: pointer;
      display: inline-block;
      margin-top: 10px;
    }
  </style>
</head>
<body>
    <header style="display: flex; align-items: center; justify-content: space-between; padding: 10px 40px; background-color: white; border-bottom: 1px solid #eee; font-family: 'Segoe UI', sans-serif;">
        <div style="display: flex; align-items: center; gap: 10px;">
          <span style="font-size: 28px; color: #f43f5e;">♡</span>
          <span style="font-size: 22px; font-weight: bold; color: #444;">luxury</span>
        </div>
      
        <nav style="display: flex; gap: 20px; font-size: 13px; text-transform: uppercase; font-weight: 500;">
          <a href="#" style="text-decoration: none; color: #111;">Mi boda</a>
          <a href="#" style="text-decoration: none; color: #111;">Recibo</a>
          <a href="#" style="text-decoration: none; color: #111;">Proveedores</a>
          <a href="#" style="text-decoration: none; color: #111;">Esposa</a>
          <a href="#" style="text-decoration: none; color: #111;">Acicalar</a>
          <a href="#" style="text-decoration: none; color: #111;">Ropa</a>
          <a href="#" style="text-decoration: none; color: #111;">Ideas para bodas</a>
          <a href="#" style="text-decoration: none; color: #111;">Comunidad</a>
        </nav>
      
        <div style="display: flex; gap: 20px;">
          <a href="#"><img src="https://img.icons8.com/material-outlined/24/000000/new-post.png" alt="Mensajes" /></a>
          <a href="#"><img src="https://img.icons8.com/material-outlined/24/000000/briefcase.png" alt="Perfil" /></a>
        </div>
      </header>
      <table width="100%" height="200px" border="1">
        <tr>
            <td valign="top" width="70%" style="border: none;">
                <div class="container">
                    <div class="gallery">
                      <img src="https://via.placeholder.com/600x500?text=Foto+1" alt="">
                      <img src="https://via.placeholder.com/300x245?text=Foto+2" alt="">
                      <img src="https://via.placeholder.com/300x245?text=Foto+3" alt="">
                      <img src="https://via.placeholder.com/300x245?text=Foto+4" alt="">
                      <img src="https://via.placeholder.com/300x245?text=Foto+5" alt="">
                    </div>
                </div>
                <!-- Sticky Tabs -->
<div class="sticky-tabs">
    <div class="tab-buttons">
      <button class="active">Información</button>
      <button>Preguntas frecuentes</button>
      <button>Reseñas <sup>147</sup></button>
      <button>Boda real <sup>65</sup></button>
      <button>Mapa</button>
    </div>
  
    <div class="tab-actions">
      <span>🛡️ ¿Reservado?</span>
      <span>🤍 Ahorrar</span>
    </div>
  </div>
  
<div class="section">
  <h3>Información importante</h3>

  <div class="icon-grid">
    <div class="icon-item"><i>🌿</i>En el campo</div>
    <div class="icon-item"><i>🌅</i>Terraza, jardines</div>
    <div class="icon-item"><i>🛏️</i>Posibilidad de pernoctar</div>
    <div class="icon-item"><i>🕑</i>Hasta las 02:00</div>
    <div class="icon-item"><i>📅</i>Sólo un evento por día</div>
    <div class="icon-item"><i>🚗</i>Aparcamiento privado</div>
  </div>

  <button class="btn-servicios">Ver todos los servicios</button>

  <div class="subsection">
    <h3>Información</h3>
    <div class="meta">📌 En Luxury desde 2009 · Última actualización: abril de 2025</div>
    
    <p class="info-text">
      Esta espléndida villa contiene interiores elegantes y refinados y exteriores visualmente impactantes.
      Cada detalle de vuestra recepción será cuidado con gran pasión para que, según vuestros gustos, 
      podáis disfrutar de un día único e inolvidable.
    </p>

    <h4>Espacios y capacidad</h4>
    <p class="info-text">
      El lugar ofrece espacios diferentes y sugerentes, cada uno adecuado para albergar un momento diferente
      de la recepción, en función de las estaciones del año:
    </p>

    <ul class="checklist">
      <li>Habitaciones interiores</li>
      <li>Parque</li>
      <li>Piscina</li>
      <li>Terraza y patio</li>
    </ul>

<div class="section">
    <h3>Información importante</h3>
  
    <div class="icon-grid">
      <div class="icon-item"><i>🌿</i>En el campo</div>
      <div class="icon-item"><i>🌅</i>Terraza, jardines</div>
      <div class="icon-item"><i>🛏️</i>Posibilidad de pernoctar</div>
      <div class="icon-item"><i>🕑</i>Hasta las 02:00</div>
      <div class="icon-item"><i>📅</i>Sólo un evento por día</div>
      <div class="icon-item"><i>🚗</i>Aparcamiento privado</div>
    </div>
  
    <button class="btn-servicios">Ver todos los servicios</button>
  
    <div class="subsection">
      <h3>Información</h3>
      <div class="meta">📌 En Luxury desde 2009 · Última actualización: abril de 2025</div>
      
      <p class="info-text">
        Esta espléndida villa contiene interiores elegantes y refinados y exteriores visualmente impactantes.
        Cada detalle de vuestra recepción será cuidado con gran pasión para que, según vuestros gustos, 
        podáis disfrutar de un día único e inolvidable.
      </p>
  
      <h4>Espacios y capacidad</h4>
      <p class="info-text">
        El lugar ofrece espacios diferentes y sugerentes, cada uno adecuado para albergar un momento diferente
        de la recepción, en función de las estaciones del año:
      </p>
  
      <ul class="checklist">
        <li>Habitaciones interiores</li>
        <li>Parque</li>
        <li>Piscina</li>
        <li>Terraza y patio</li>
      </ul>
    </div>
  </div>
  
  <!-- NUEVA SECCIÓN: Sobre el Hotel Costa Brisa -->
  <div class="section">
    <h3>Sobre el Hotel Costa Brisa</h3>
    <p>
      Hotel Costa Brisa está ubicado frente al mar y ofrece una experiencia inigualable para quienes buscan relajación y lujo en un solo lugar.
      Rodeado de palmeras y con acceso directo a la playa, este resort se destaca por su arquitectura moderna y sus servicios de primer nivel.
    </p>
  
    <div id="extraText" class="extra-text">
      <p>
        Entre sus principales atracciones se encuentran el spa de tratamientos naturales, una piscina infinita con vista al océano y restaurantes con gastronomía internacional.
        Además, cada habitación está equipada con terraza privada, minibar, y servicio a la habitación las 24 horas.
      </p>
      <p>
        El hotel también organiza actividades recreativas como yoga al amanecer, excursiones ecológicas, y noches temáticas para los huéspedes. 
        Su equipo de atención al cliente está disponible en todo momento para asegurar que cada detalle de tu estadía sea perfecto.
      </p>
    </div>
    <span class="toggle-btn" onclick="toggleExtra()">Leer más</span>
  </div>

  <section style="margin-top: 40px;">
    <h3>Mapa</h3>
    <div style="border-radius: 12px; overflow: hidden; border: 1px solid #ddd; max-width: 700px;">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.961276828565!2d9.54021681573852!3d45.415979679100736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47811fbc6b9e52c9%3A0xd5114ec3b52fa3aa!2sHotel%20Villa%20Belvedere%201849!5e0!3m2!1ses!2sit!4v1713289583542!5m2!1ses!2sit" 
        width="100%" 
        height="300" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  
    <div style="margin-top: 10px; font-size: 14px; display: flex; align-items: center; gap: 6px;">
      <img src="https://img.icons8.com/ios-filled/20/marker.png" alt="Ubicación">
      <span>Santísima Virgen, 1 24040 Misano di Gera d’Adda (Bérgamo)</span>
    </div>
  </section>
  
            </td>
            <td valign="top" width="30%" style="border: none;">
                
                <div class="info" style="position:sticky;top:0px;width:400px;height:400px;">
                    <div>
                      <div class="tag">🏆 x7 Premios de eventos</div>
                      <h2>Villa Belvedere 1849 en el Santuario de Caravaggio</h2>
                      <div class="stars">★★★★★ 4.8 Excelente - <a href="#">147 reseñas</a></div>
                      <div class="location">📍 Misano, Bérgamo</div>
                      <div class="price">🍽️ Menú desde 63€</div>
                      <div class="capacity">👥 2 - 250 invitados</div>
                    </div>
                
                    <div>
                      <button class="button">Cotización gratuita</button>
                      <ul class="features">
                        <li>✓ Entre los más populares de Bérgamo</li>
                        <li>✓ Más de 475 parejas confían en nosotros</li>
                        <li>✓ Entre los más recomendados en Bérgamo</li>
                      </ul>
                    </div>
                </div>
            </td>
      </table>
      <script>
        function toggleExtra() {
          const extra = document.getElementById("extraText");
          const toggleBtn = document.querySelector(".toggle-btn");
          if (extra.style.display === "none" || extra.style.display === "") {
            extra.style.display = "block";
            toggleBtn.textContent = "Leer menos";
          } else {
            extra.style.display = "none";
            toggleBtn.textContent = "Leer más";
          }
        }
      </script>
</body>
</html>