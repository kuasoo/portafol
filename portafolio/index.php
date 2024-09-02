<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio de Jesus Lopez</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-content">
            <h1>¡Hola! Soy Jesus Lopez</h1>
            <p>Estudiante de Ingeniería en Sistemas Computacionales con especialización en Ciberseguridad</p>
        </div>
    </header>

    <!-- Sección Sobre Mí -->
    <section id="about">
        <h2>Sobre Mí</h2>
        <div class="about-content">
            <img src="img/tu-foto.jpg" alt="Foto de Jesus Lopez">
            <div class="about-text">
                <p>Hola, soy Jesus Leonel Lopez Granados, estudiante de Ingeniería en Sistemas en el Instituto Tecnologico Superior de Guanajuato, apasionado por la ciberseguridad. He desarrollado habilidades en análisis de vulnerabilidades, pentesting, y gestión de la seguridad de redes. A través de proyectos autodidactas, he adquirido conocimientos prácticos en herramientas y técnicas de ciberseguridad.</p>
            </div>
        </div>
    </section>

    <!-- Sección Proyectos -->
    <section id="projects">
        <h2>Proyectos</h2>
        <div class="projects-container">
            <div class="project">
                <img src="img/proyecto1.jpg" alt="Proyecto 1">
                <h3>Proyecto 1: [Nombre del Proyecto]</h3>
                <p>Descripción breve del proyecto. Tecnologías utilizadas: [Tecnologías].</p>
                <a href="https://github.com/tuusuario/proyecto1" target="_blank" class="btn">Ver en GitHub</a>
            </div>
            <div class="project">
                <img src="img/proyecto2.jpg" alt="Proyecto 2">
                <h3>Proyecto 2: [Nombre del Proyecto]</h3>
                <p>Descripción breve del proyecto. Tecnologías utilizadas: [Tecnologías].</p>
                <a href="https://github.com/tuusuario/proyecto2" target="_blank" class="btn">Ver en GitHub</a>
            </div>
            <!-- Añade más proyectos según sea necesario -->
        </div>
    </section>



    <!-- seccion de logros --->

    <section id="logros">
        <h2>Logros</h2>
        <div class="about-content">





        </div>

    <!-- Sección Habilidades -->
<section id="skills">
    <h2>Habilidades</h2>
    <div class="skills-container">
        <div class="skill">
            <h3>Red Team</h3>
            <p>Conocimientos en pentesting, explotación de vulnerabilidades, uso de herramientas como Metasploit y Burp Suite, resolucion de maquinas CTF.</p>

                <a href="maquinasctf.php" target="_blank" class="btn">Ver Documentacion</a>
        
        </div>
        
       
        <div class="skill">
            <h3>Seguridad en Redes</h3>
            <p>Implementación de políticas de seguridad, segmentación de redes.</p>
        </div>
        <!-- Añade más habilidades según sea necesario -->
    </div>
</section>


    <!-- Sección Certificados -->
<section id="certificates">
    <h2>Certificados</h2>
    <div class="certificates-container">
        <div class="certificate">
            <img src="img/certificadogoogleciberseg.png" alt="Certificado 1">
            <h3>Ciberseguridad de Google</h3>
            <p>Emitido por: Google</p>
            <a href="https://coursera.org/share/6f6dab33b120e8d215645367d5d0fc82" target="_blank" class="btn">Ver Certificado</a>
        </div>
        <div class="certificate">
            <img src="img/linuxcisco.png" alt="Certificado 1">
            <h3>NDG Linux Unhatched</h3>
            <p>Emitido por: Cisco Networking Academy</p>
            <a href="https://www.netacad.com/es/certificates?issuanceId=c3f9cc2d-8399-4c73-8499-10f27dfeeb29" target="_blank" class="btn">Ver Certificado</a>
        </div>
        <div class="certificate">
            <img src="img/ciscoredes.png" alt="Certificado 1">
            <h3>CCNAv7: Switching, Routing, and Wireless Essentials</h3>
            <p>Emitido por: Cisco Networking Academy</p>
            <a href="https://www.netacad.com/es/certificates?issuanceId=90cd730d-dfe4-43c5-b06f-14a2f0a1f17f" target="_blank" class="btn">Ver Certificado</a>
        </div>
        <!-- Añade más certificados según sea necesario -->
    </div>
</section>


    <!-- Sección Contacto -->
    <section id="contact">
        <h2>Contacto</h2>
        <form action="https://formspree.io/f/tu-formspree-id" method="POST">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="_replyto" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn">Enviar</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Jesus Lopez. Todos los derechos reservados.</p>
        <div class="social-links">
            <a href="https://github.com/tuusuario" target="_blank">GitHub</a>
            <a href="https://linkedin.com/in/tuusuario" target="_blank">LinkedIn</a>
            <!-- Añade más enlaces a redes sociales si lo deseas -->
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>
