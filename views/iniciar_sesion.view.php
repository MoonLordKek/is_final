<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    
    <!-- tipografia -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!-- iconos -->
    <script src="https://kit.fontawesome.com/69e2fb8eaa.js" crossorigin="anonymous"></script>

    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./views/build/css/app.css">
</head>

<body>

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
                        <li class="ubic"><a href="#">Inicio</a></li>
                        <li><a href="./cuestionario.php">Tests</a></li>
                        <li><a href="./instituciones.php">Instituciones</a></li>
                        <li><a href="./yomecuido.php">Tecnicas</a></li>
                        <li><a href="./evaluacion.php">Evaluación</a></li>
                        <li><a href="#">Log in</a></li>
                        <li><a href="#">Sign up</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="tabla contenedor">
        <div class="tabla">
            <input type="text" id="email" placeholder="correo electrónico">
        </div>
        <div class="tabla" >
            <input type="password" id="pass" placeholder="contraseña">    
        </div>
        <div class="tabla">
            <button class="button" onclick="iniciar_Ses()">Iniciar sesion</button>
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