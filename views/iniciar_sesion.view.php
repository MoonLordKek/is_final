<!DOCTYPE html>
<html lang="es">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- tipografia -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500&display=swap" rel="stylesheet">
    
    <!-- iconos -->
    <script src="https://kit.fontawesome.com/69e2fb8eaa.js" crossorigin="anonymous"></script>
    
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./build/css/app.css">
    <link rel="stylesheet" href="./build/css/estilos.css">
	
</head>  
<body>
    <header>
        <div class="contenedormenu contenedor">
            <div class="logo">
                <img src="./src/img/logot.png" alt="logo">
            </div>
            <div class="menu">
                <i class="fa-solid fa-bars" id="btn-menu"></i>
                <div id="backmenu"></div>
                <nav id="nav" class="nav">
                    <img src="./src/img/logot.png" alt="logo">
                    <ul>
                        <li><a href="./index.html">Inicio</a></li>
                        <li><a href="#">Tests</a></li>
                        <li><a href="./instituciones.html">Instituciones</a></li>
                        <li><a href="./yomecuido.html">Tecnicas</a></li>
                        <li><a href="./evaluacion.html">Evaluación</a></li>
                        <li class="ubic"><a href="./iniciar-sesion.html">Log in</a></li>
                        <li><a href="./registro.html">Sign up</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <form class="formulario">
    
        <h1>Bienvenido de vuelta</h1>
         <div class="contenedor">
         
         
             
             <div class="input-contenedor">
             <i class="fas fa-envelope icon"></i>
             <input type="text" placeholder="Correo Electronico">
             
             </div>
             
             <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
             <input type="password" placeholder="Contraseña">
             
             </div>
             <input type="submit" value="Login" class="button">
             <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
             <p>¿No tienes una cuenta? <a class="link" href="./registro.html">Registrate </a></p>
             <p><a class="link" href="#">¿Olvidaste la contraseña?</a></p>
         </div>
        </form>
    <footer class="contenedor">
        <div class="logo">
            <img src="./src/img/logot.png" alt="logo" style="width: 3rem;">
        </div>
        <div class="about">
            <a href="#">About</a>
        </div>
    </footer>
        <!-- js animaciones -->
        <script src="./src/js/gsap.js"></script>
        <!-- mi js -->
        <script src="./src/js/app.js"></script>
</body>
</html>
