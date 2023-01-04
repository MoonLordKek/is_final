<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituciones</title>
    <!-- tipografia -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500&display=swap" rel="stylesheet">
    
    <!-- iconos -->
    <script src="https://kit.fontawesome.com/69e2fb8eaa.js" crossorigin="anonymous"></script>
    
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./views/build/css/app.css">
</head>
<body class="body-instiruciones">
    <header>
        <div class="contenedormenu contenedor">
            <div class="logo">
                <img src="./views/src/img/logot.png" alt="logo">
            </div>
            <div class="menu">
                <i class="fa-solid fa-bars" id="btn-menu"></i>
                <div id="backmenu"></div>
                <nav id="nav" class="nav">
                    <img src="./views/src/img/logot.png" alt="logo">
                    <ul>
                        <li><a href="./index.php">Inicio</a></li>
                        <li><a href="./tests.php">Tests</a></li>
                        <li class="ubic"><a href="./instituciones.php">Instituciones</a></li>
                        <li><a href="./yomecuido.php">Tecnicas</a></li>
                        <li><a href="./evaluacion.php">Evaluación</a></li>
                        <li><a href="#">Log in</a></li>
                        <li><a href="#">Sign up</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="titulo-institucion contenedor">
        <h1>Instituciones</h1>
    </div>


    
    <div class="instituciones">

        <div class="institucion contenedor">

            <div class="imagen">
                <img src="./views/src/img/cemepi.png" alt="institucion" style="width: 40rem;">
            </div>
            
            <div class="texto">
                <h1>CEMEPI</h1>
                <p>CEMEPI Terapias Psicológicas Sede Reforma', 'Av. Paseo de la Reforma 300, Juárez, Cuauhtémoc, 06600 Ciudad de México, CDMX', '+525529028389', '06600CDMX'</p>
            </div>

        </div>

        <div class="institucion contenedor">

            <div class="imagen">
                <img src="./views/src/img/neurowave.png" alt="institucion" style="width: 40rem;">
            </div>
            
            <div class="texto">
                <h1>Neurowave</h1>
                <p>Psiquiatra', 'Calle Montes Urales 749 Interior 5 Col, Lomas de Chapultepec, 11000 Ciudad de México, CDMX', '+525590011976', '11000CDMX'</p>
            </div>

        </div>

        <div class="institucion contenedor">

            <div class="imagen">
                <img src="./views/src/img/psychomex.png" alt="institucion" style="width: 30rem;">
            </div>
            
            <div class="texto">
                <h1>Psychomex</h1>
                <p>Servicios Psicológicos y Nutrición', 'Guanajuato 78-int 203, Roma Nte., Cuauhtémoc, 06700 Ciudad de México, CDMX', '+525563867083', '06700CDMX</p>
            </div>

        </div>

    </div>

    <footer class="contenedor">
        <div class="logo">
            <img src="./views/src/img/logot.png" alt="logo" style="width: 3rem;">
        </div>
        <div class="about">
            <a href="#">About</a>
        </div>
    </footer>

    <!-- js animaciones -->
    <script src="./views/src/js/gsap.js"></script>
    <!-- mi js -->
    <script src="./views/src/js/app.js"></script>
</body>
</html>