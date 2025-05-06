<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>completa tu escaparate </title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
     body {
      font-family: 'Poppins', sans-serif;
      background-color: #fafafa;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
    }
     .step-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
        margin-top: 30px;
      }
  
      .step-box {
        border: 1px solid #eee;
        border-radius: 10px;
        padding: 25px 20px;
        background: #fafafa;
        text-align: center;
      }
  
      .step-box img {
        width: 40px;
        margin-bottom: 10px;
      }
  
      .step-box .icon {
        font-size: 28px;
        margin-bottom: 10px;
      }
  
      .step-box p {

        font-size: 14px;
        color: #d0a933;
      }
  
      .progress-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 6px solid #e0e0e0;
        border-top: 6px solid #4caf50;
        margin-right: 20px;
        position: relative;
      }
  
      .progress-circle::after {
        content: "30%";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 16px;
        font-weight: bold;
        color: #4caf50;
      }
  
      .top-progress {
        display: flex;
        align-items: center;
        margin: 30px 0 20px;
      }
  
      .step-number {
        display: none;
        background: #000;
        color: #fff;
        border-radius: 50%;
        font-size: 12px;
        padding: 2px 6px;
        margin-left: 5px;
      }
      header {
      background-color: #000;
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 20px;
        border-bottom: 1px solid #000;
        font-size: 14px;
      }
  
      header div {
        display: flex;
        flex-direction: column;
        align-items: center;
        cursor: pointer;
      }
  
      header div span {
        margin-top: 4px;
      }
      a{
        text-decoration: none;
      }
      .span{
        text-decoration: #000;
        
      }
      .logo {
	   width: 50px;
       height: 50px;
      }
</style>
<body>
    <div id="post-start-section"></div> 
    <header>
      <img class="logo" src="favicon.png" alt="">
     <a href="comenzar.html"><div><span>Comenzar</span></div></a>
      <a href="miescaparate.html"><div><span>Mi escaparate</span></div></a>
      <a href="peticiones.html"><div><span>Mis peticiones</span></div></a>
      <a href="reseñas.html"><div><span>Reseñas</span></div></a>
      <a href="mtdpago.html"><div><span>Facturación</span></div></a>
      <div><span>Mi cuenta</span></div>
      </header>
    <div class="container">
        <div class="top-progress">
          <div class="progress-circle"></div>
          <div>
            <div class="title">Completa tu escaparate</div>
            <div class="subtitle">Estás a 5 pasos de completar tu escaparate.<br>Con un perfil completo aumentas las posibilidades de que las personas te contacten para adquirir tus servicios.</div>
          </div>
        </div>
    
    <div class="step-grid">
        <div class="step-box">
          <div class="icon">🖼️<span class="step-number">8</span></div>
          <p>Tus fotos son de mala calidad</p>
        </div>
        <div class="step-box">
          <div class="icon">📷<span class="step-number">10</span></div>
          <p>Sube 10 fotos de calidad</p>
        </div>
        <div class="step-box">
          <div class="icon">⭐<span class="step-number">5</span></div>
          <p>Pide opiniones de 5 parejas</p>
        </div>
        <div class="step-box">
          <div class="icon">💬</div>
          <p>Responde todas las preguntas frecuentes</p>
        </div>
        <div class="step-box">
          <div class="icon">💯</div>
          <p>Publicar una promoción</p>
        </div>
        <div class="step-box">
          <div class="icon">💯</div>
          <p>Publicar una promoción</p>
        </div>
      </div>
    </div>
</body>
</html>