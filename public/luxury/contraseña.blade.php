<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña | Luxury</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
            font-style: black;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .logo {
            display: block;
            margin: 0 auto 30px;
            width: 100px;
        }
        
        h1 {
            text-align: center;
            color: #d0a933;
            margin-bottom: 20px;
            font-size: 24px;
        }
        
        p {
            margin-bottom: 20px;
            text-align: center;
            color: #666;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border 0.3s;
        }
        
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #d0a933;
            outline: none;
        }
        
        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #d0a933;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .btn:hover {
            background-color: #b8972a;
        }
        
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #666;
            text-decoration: none;
        }
        
        .back-link:hover {
            color: #d0a933;
        }
        
        .message {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
        }
        
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .password-rules {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }
        
        @media (max-width: 600px) {
            .container {
                margin: 20px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Paso 1: Solicitud de restablecimiento -->
    <div class="container" id="request-reset">
        <div style="background-color: #000;">
        <img src="favicon.png" alt="Luxury" class="logo"></div>
        <h1>Restablecer contraseña</h1>
        <p>Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.</p>
        
        <div id="message" class="message" style="display: none;"></div>
        
        <form id="resetRequestForm">
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <button type="submit" class="btn">Enviar enlace</button>
        </form>
        
        <a href="registroempresa.html" class="back-link">Volver al inicio de sesión</a>
    </div>

    <!-- Paso 2: Confirmación de envío (oculto inicialmente) -->
    <div class="container" id="confirmation" style="display: none;">
        <img src="img/favicon.png" alt="Luxury" class="logo">
        <h1>Correo enviado</h1>
        <p>Hemos enviado un enlace de restablecimiento a <strong id="user-email"></strong>.</p>
        <p>Por favor revisa tu bandeja de entrada y sigue las instrucciones.</p>
        
        <div class="message info">
            <p>¿No recibiste el correo? Revisa tu carpeta de spam o <a href="#" id="resend-link">envíalo nuevamente</a>.</p>
        </div>
        
        <a href="registroempresa.html" class="back-link">Volver al inicio de sesión</a>
    </div>

    <!-- Paso 3: Formulario para nueva contraseña (oculto inicialmente) -->
    <div class="container" id="new-password" style="display: none;">
        <img src="favicon.png" alt="Luxury" class="logo">
        <h1>Crear nueva contraseña</h1>
        <p>Crea una nueva contraseña segura para tu cuenta.</p>
        
        <div id="password-message" class="message" style="display: none;"></div>
        
        <form id="newPasswordForm">
            <div class="form-group">
                <label for="new-password">Nueva contraseña</label>
                <input type="password" id="new-password" name="new-password" required minlength="8">
                <p class="password-rules">La contraseña debe tener al menos 8 caracteres.</p>
            </div>
            
            <div class="form-group">
                <label for="confirm-password">Confirmar contraseña</label>
                <input type="password" id="confirm-password" name="confirm-password" required minlength="8">
            </div>
            
            <button type="submit" class="btn">Restablecer contraseña</button>
        </form>
        
        <a href="registroempresa.html" class="back-link">Volver al inicio de sesión</a>
    </div>

    <script>
        // Simulación del proceso de restablecimiento
        document.addEventListener('DOMContentLoaded', function() {
            // Paso 1: Solicitud de restablecimiento
            const resetRequestForm = document.getElementById('resetRequestForm');
            const requestResetDiv = document.getElementById('request-reset');
            const confirmationDiv = document.getElementById('confirmation');
            const newPasswordDiv = document.getElementById('new-password');
            const messageDiv = document.getElementById('message');
            const passwordMessageDiv = document.getElementById('password-message');
            const userEmailSpan = document.getElementById('user-email');
            const resendLink = document.getElementById('resend-link');
            
            // Verificar si hay un token en la URL (simulando el enlace de restablecimiento)
            const urlParams = new URLSearchParams(window.location.search);
            const token = urlParams.get('token');
            
            if (token) {
                // Mostrar el formulario de nueva contraseña
                requestResetDiv.style.display = 'none';
                newPasswordDiv.style.display = 'block';
            }
            
            // Enviar solicitud de restablecimiento
            resetRequestForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const email = document.getElementById('email').value;
                
                // Validación simple
                if (!email.includes('@')) {
                    showMessage('Por favor ingresa un correo electrónico válido', 'error');
                    return;
                }
                
                // Simular envío de correo
                setTimeout(() => {
                    userEmailSpan.textContent = email;
                    requestResetDiv.style.display = 'none';
                    confirmationDiv.style.display = 'block';
                }, 1000);
            });
            
            // Reenviar correo
            resendLink.addEventListener('click', function(e) {
                e.preventDefault();
                showMessage('Enlace reenviado correctamente', 'success', confirmationDiv.querySelector('.message'));
            });
            
            // Establecer nueva contraseña
            const newPasswordForm = document.getElementById('newPasswordForm');
            newPasswordForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const newPassword = document.getElementById('new-password').value;
                const confirmPassword = document.getElementById('confirm-password').value;
                
                if (newPassword !== confirmPassword) {
                    showMessage('Las contraseñas no coinciden', 'error', passwordMessageDiv);
                    return;
                }
                
                if (newPassword.length < 8) {
                    showMessage('La contraseña debe tener al menos 8 caracteres', 'error', passwordMessageDiv);
                    return;
                }
                
                // Simular cambio de contraseña
                showMessage('Contraseña actualizada correctamente', 'success', passwordMessageDiv);
                
                // Redirigir después de 2 segundos
                setTimeout(() => {
                    window.location.href = 'registroempresa.html?passwordChanged=true';
                }, 2000);
            });
            
            // Función para mostrar mensajes
            function showMessage(text, type, element = messageDiv) {
                element.textContent = text;
                element.className = 'message ' + type;
                element.style.display = 'block';
                
                // Ocultar mensaje después de 5 segundos
                setTimeout(() => {
                    element.style.display = 'none';
                }, 5000);
            }
        });
    </script>
</body>
</html>