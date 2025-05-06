<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sube fotos de calidad - Luxury</title>
  <style>
    :root {
      --primary-color: #d0a933;
      --secondary-color: #000;
      --accent-color: #e04e4e;
      --light-gray: #f8f8f8;
      --medium-gray: #ddd;
      --dark-gray: #666;
      --white: #fff;
      --black: #222;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      background-color: var(--light-gray);
      color: var(--black);
      line-height: 1.6;
    }

    /* Header Estilo Consistente */
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
      color: #d0a933;
    }

    .logo sup {
      color: #fff;
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

    /* Contenido Principal */
    main {
      padding: 20px 5%;
      max-width: 1200px;
      margin: 0 auto;
    }

    .back-link {
      display: inline-block;
      margin-bottom: 20px;
      color: var(--secondary-color);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.2s;
      font-size: 0.95rem;
    }

    .back-link:hover {
      color: var(--primary-color);
    }

    .container {
      background: var(--white);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.05);
      margin-bottom: 30px;
    }

    h2 {
      margin: 0 0 15px 0;
      color: var(--secondary-color);
      font-size: 1.8rem;
      font-weight: 600;
    }

    .info-box {
      background-color: #f2f9ff;
      padding: 20px;
      border-radius: 8px;
      font-size: 0.95rem;
      line-height: 1.6;
      margin-bottom: 25px;
      border-left: 4px solid var(--primary-color);
      display: flex;
      align-items: flex-start;
    }

    .info-box::before {
      content: "📷";
      font-size: 1.5rem;
      margin-right: 15px;
      color: var(--primary-color);
    }

    .info-box-content {
      flex: 1;
    }

    .info-box strong {
      display: block;
      margin-bottom: 8px;
      color: var(--secondary-color);
    }

    /* Área de Subida */
    .upload-box {
      border: 2px dashed var(--medium-gray);
      padding: 40px 20px;
      text-align: center;
      border-radius: 10px;
      background-color: #fafafa;
      position: relative;
      transition: all 0.3s ease;
      margin-bottom: 20px;
    }

    .upload-box:hover {
      border-color: var(--primary-color);
      background-color: #f5f5f5;
    }

    .upload-box img {
      width: 60px;
      margin-bottom: 15px;
      opacity: 0.8;
    }

    .upload-box p {
      margin: 5px 0;
      font-size: 0.95rem;
    }

    .upload-box .formats {
      color: var(--dark-gray);
      font-size: 0.85rem;
      margin-bottom: 20px;
    }

    .upload-box input[type="file"] {
      display: none;
    }

    .upload-box label {
      display: inline-block;
      padding: 12px 25px;
      background-color: var(--primary-color);
      color: var(--white);
      font-weight: 500;
      border-radius: 6px;
      cursor: pointer;
      font-size: 0.95rem;
      transition: all 0.3s ease;
    }

    .upload-box label:hover {
      background-color: #b38f2c;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .upload-note {
      font-size: 0.8rem;
      color: var(--dark-gray);
      margin-top: 15px;
    }

    /* Galería de Imágenes */
    .card-container {
      display: none;
      flex-wrap: wrap;
      gap: 1.5rem;
      justify-content: flex-start;
      margin-top: 30px;
    }

    .card {
      width: calc(33.333% - 1rem);
      background-color: var(--white);
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-body {
      padding: 1.2rem;
    }

    .card-body h4 {
      font-size: 0.95rem;
      font-weight: 600;
      margin: 0 0 0.5rem;
      color: var(--secondary-color);
    }

    .card-body p {
      font-size: 0.85rem;
      color: var(--dark-gray);
      margin: 0 0 1rem;
    }

    .card-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .card-actions select {
      padding: 0.5rem;
      border-radius: 6px;
      border: 1px solid var(--medium-gray);
      background-color: var(--white);
      font-size: 0.85rem;
      width: 70%;
    }

    .delete-btn {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 1.2rem;
      color: var(--dark-gray);
      transition: all 0.2s;
    }

    .delete-btn:hover {
      color: var(--accent-color);
      transform: scale(1.1);
    }

    /* Botones */
    .save-container {
      display: none;
      text-align: center;
      margin-top: 2.5rem;
    }

    .save-btn {
      padding: 0.8rem 2rem;
      background-color: var(--primary-color);
      color: var(--white);
      font-size: 1rem;
      font-weight: 500;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .save-btn:hover {
      background-color: #b38f2c;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    }

    /* Footer */
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
      font-size: 0.9rem;
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
      font-size: 0.85rem;
      opacity: 0.7;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .card {
        width: calc(50% - 1rem);
      }
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 15px;
        padding: 15px;
      }
      
      .top-actions {
        flex-wrap: wrap;
        justify-content: center;
      }
      
      .card {
        width: 100%;
      }
      
      .container {
        padding: 20px;
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
    <div class="logo">Luxury<sup>Premium</sup></div>
    <div class="top-actions">
      <span class="package-tag">PAQUETE DE INICIO</span>
      <span>Mejora tus resultados</span>
      <span class="highlight">HAZTE PREMIUM</span>
      <span>📞 Atención al cliente: 02 82 94 23 60</span>
    </div>
  </header>

  <main>
    <a href="escaparate.html" class="back-link">← Volver</a>
    
    <div class="container">
      <h2>Sube 8 fotos de calidad</h2>

      <div class="info-box">
        <div class="info-box-content">
          <strong>Para captar la atención de los clientes</strong>
          Sube imágenes nítidas y bien iluminadas que muestren tus mejores trabajos. Las primeras imágenes son las más importantes, ya que serán las que los clientes verán primero.
        </div>
      </div>

      <div class="upload-box">
        <img src="https://www.svgrepo.com/show/365915/photo-gallery.svg" alt="Icono imagen">
        <p><strong>Añadir foto</strong></p>
        <p class="formats">Formatos aceptados: GIF, JPG o PNG<br>Tamaño máximo: 20 MB | Resolución mínima: 720x540 píxeles</p>
        <label for="upload">Seleccionar fotos</label>
        <input type="file" id="upload" multiple accept="image/*">
        <p class="upload-note">También puedes arrastrar y soltar tus fotos aquí</p>
      </div>
    </div>

    <div class="card-container" id="cardContainer">
      <!-- Las tarjetas se insertarán aquí dinámicamente -->
    </div>

    <div class="save-container" id="finalSave">
      <button class="save-btn">Guardar cambios</button>
    </div>
  </main>

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

  <script>
    const uploadInput = document.getElementById("upload");
    const cardContainer = document.getElementById("cardContainer");
    const finalSave = document.getElementById("finalSave");

    // Manejar la subida de archivos
    uploadInput.addEventListener("change", function() {
      const files = Array.from(this.files);
      cardContainer.innerHTML = ""; // Limpiar tarjetas anteriores

      if (files.length > 0) {
        cardContainer.style.display = "flex";
        finalSave.style.display = "block";
        
        // Validar número máximo de fotos
        if (files.length > 8) {
          alert("Puedes subir un máximo de 8 fotos. Se mostrarán las primeras 8.");
        }
      }

      // Mostrar hasta 8 imágenes (límite)
      const filesToShow = files.slice(0, 8);
      
      filesToShow.forEach((file, index) => {
        // Validar tipo de archivo
        if (!file.type.match('image.*')) {
          return;
        }

        const reader = new FileReader();
        
        reader.onload = function(e) {
          const card = document.createElement("div");
          card.className = "card";

          card.innerHTML = `
            <img src="${e.target.result}" alt="Imagen ${index + 1}" />
            <div class="card-body">
              <h4>Imagen ${index + 1}</h4>
              <p contenteditable="true">Añade una descripción...</p>
              <div class="card-actions">
                <select>
                  <option value="">Seleccionar categoría</option>
                  <option value="banquet">Banquete</option>
                  <option value="cocktail">Cóctel</option>
                  <option value="ceremony">Ceremonia</option>
                  <option value="decoration">Decoración</option>
                </select>
                <button class="delete-btn" title="Eliminar imagen">🗑️</button>
              </div>
            </div>
          `;

          // Evento para eliminar la tarjeta
          card.querySelector(".delete-btn").addEventListener("click", () => {
            if (confirm("¿Estás seguro de que quieres eliminar esta imagen?")) {
              card.remove();
              
              // Ocultar contenedores si no hay imágenes
              if (cardContainer.children.length === 0) {
                cardContainer.style.display = "none";
                finalSave.style.display = "none";
              }
            }
          });

          cardContainer.appendChild(card);
        };
        
        reader.readAsDataURL(file);
      });
    });

    // Manejar arrastrar y soltar
    const uploadBox = document.querySelector('.upload-box');
    
    uploadBox.addEventListener('dragover', (e) => {
      e.preventDefault();
      uploadBox.style.borderColor = 'var(--primary-color)';
      uploadBox.style.backgroundColor = '#f0f0f0';
    });
    
    uploadBox.addEventListener('dragleave', () => {
      uploadBox.style.borderColor = 'var(--medium-gray)';
      uploadBox.style.backgroundColor = '#fafafa';
    });
    
    uploadBox.addEventListener('drop', (e) => {
      e.preventDefault();
      uploadBox.style.borderColor = 'var(--medium-gray)';
      uploadBox.style.backgroundColor = '#fafafa';
      
      if (e.dataTransfer.files.length) {
        uploadInput.files = e.dataTransfer.files;
        const event = new Event('change');
        uploadInput.dispatchEvent(event);
      }
    });
  </script>
</body>
</html>