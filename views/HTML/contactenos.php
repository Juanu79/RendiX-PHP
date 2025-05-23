<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos | Rendix</title>
    <link rel="stylesheet" href="../CSS/contac.css">
</head>
<body>
    <header class="animate__animated animate__fadeIn">
        <div class="header-content">
            <h1>Contáctenos</h1>
            <img src="../IMAGENES/RENDIXblanco.png" alt="rendix" class="imgr">
        </div>
    </header>
    
    <main>
        <h2 class="section-title animate__animated animate__fadeInUp">Nuestro Equipo</h2>
        <div id="Nosotros" class="animate__animated animate__fadeInUp">
            <div class="informacion">
                <div class="nombre">
                    <div class="profile-header">
                        <img src="../IMAGENES/juan.jpg" alt="Juan" class="fotodenosotros">
                        <h3>Juan Esteban Urriago</h3>
                    </div>
                    <p>Me llamo Juan Esteban Calderón, soy estudiante de la universidad Uniagustiniana. Estoy estudiando un tecnólogo de desarrollo de software. Puedo decir que trabajar en la página de Rendix es muy innovador e interesante para el público.</p>
                    <button class="contact-btn" onclick="contacta()">Contacta con el asesor</button>
                </div>
                
                <div class="nombre">
                    <div class="profile-header">
                        <img src="../IMAGENES/carlos.png" alt="Carlos" class="fotodenosotros">
                        <h3>Carlos Fernando Riaño</h3>
                    </div>
                    <p>Me llamo Carlos Fernando Riaño, soy estudiante de la universidad Uniagustiniana. Estoy estudiando un tecnólogo de desarrollo de software.</p>
                    <button class="contact-btn" onclick="contacta()">Contacta con el asesor</button>
                </div>
                
                <div class="nombre">
                    <div class="profile-header">
                        <img src="../IMAGENES/santiago.jpg" alt="Santiago" class="fotodenosotros">
                        <h3>Santiago Guzman</h3>
                    </div>
                    <p>Me llamo Santiago Guzmán Suarez, soy estudiante de la universidad Uniagustiniana. Estoy estudiando tecnólogo de desarrollo de software. Para mi Rendix es algo innovador y nuevo que puede llegar muy lejos.</p>
                    <button class="contact-btn" onclick="contacta()">Contacta con el asesor</button>
                </div>
            </div>
        </div>
        
        <div class="back-button-container">
            <button class="back-btn" onclick="devolver()">Volver a la página inicial</button>
        </div>
    </main>

    <footer id="contacto" class="animate__animated animate__fadeIn">
        <div class="footer-content">
            <div class="contact-info">
                <h3>Información de Contacto</h3>
                <p><strong>Email:</strong> rendix@hotmail.com</p>
            </div>
            
            <div class="social-links">
                <h3>Redes Sociales</h3>
                <div class="social-icons">
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <img src="../imagenes/linkedin.png" alt="LinkedIn" class="social-icon">
                    </a>
                    <a href="#" class="social-link" aria-label="GitHub">
                        <img src="../imagenes/github.png" alt="GitHub" class="social-icon">
                    </a>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2025 Rendix. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="../JS/contactanos.js"></script>
</body>
</html>