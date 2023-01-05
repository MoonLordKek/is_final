<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion</title>
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
                        <li><a href="./cuestionario.php">Tests</a></li>
                        <li><a href="./instituciones.php">Instituciones</a></li>
                        <li><a href="./yomecuido.php">Tecnicas</a></li>
                        <li class="ubic"><a href="./evaluacion.php">Evaluación</a></li>
                        <?php
                        if(!isset($_SESSION['usuario']))                
                            echo '<li><a href="./iniciar_sesion.php">Log in</a></li><li><a href="./registro.php">Sign up</a></li>';
                        else    
                            echo '<li><a href="./CS.php">Cerrar sesión</a></li>'; 
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <form class="formulario">
        <div class="contenedor">
            <h1>Evaluación de tecnicas interactivas</h1>
            
            
            <h3>Técnicas de relajación</h3>
            <label for="tecnicas-relajacion">En una semana realicé mis técnicas de relajación:</label>
            <select name="tecnicas-relajacion" id="tecnicas-relajacion">
                <option value="1-2">De 1 a 2 veces</option>
                <option value="3-4">De 3 a 4 veces</option>
                <option value="5-7">De 5 a 7 veces</option>
            </select>
            <button>Enviar</button>

            <h3>Rutina de ejercicio</h3>
            <label for="tecnicas-ejercicio">En una semana realicé de: </label>
            <select name="tecnicas-ejercicio" id="tecnicas-ejercicio">
                <option value="30-60">De 30 a 60 minutos de ejercicio</option>
                <option value="61-100">De 61 a 100 minutos de ejercicio</option>
                <option value="100">Mas de 100 minutos de ejercicio</option>
            </select>
            <button>Enviar</button>

            <h3>Activación conductual</h3>
            <label for="tecnicas-conductual">Realicé: </label>
            <select name="tecnicas-conductual" id="tecnicas-conductual">
                <option value="Todas las actividades que me propuse">Todas las actividades que me propuse </option>
                <option value="Casi todas">Casi todas</option>
                <option value="Parcialmente">Parcialmente</option>
                <option value="Casi ninguna">Casi ninguna</option>
                <option value="Ninguna">Ninguna</option>
            </select>
            <button>Enviar</button>

            <h3>Rutina para dormir</h3>
            <label for="tecnicas-dormir">Realicé: </label>
            <select name="tecnicas-dormir" id="tecnicas-dormir">
                <option value="Todas las actividades para llevar una adecuada higiene del sueño">Todas las actividades para llevar una adecuada higiene del sueño </option>
                <option value="Casi todas">Casi todas</option>
                <option value="Parcialmente">Parcialmente</option>
                <option value="Casi ninguna">Casi ninguna</option>
                <option value="Ninguna">Ninguna</option>
            </select>
            <button>Enviar</button>

        </div>
    </form>
    <!-- js animaciones -->
    <script src="./views/src/js/gsap.js"></script>
    <!-- mi js -->
    <script src="./views/src/js/app.js"></script>
</body>
</body>
</html>