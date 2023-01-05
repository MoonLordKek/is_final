<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionarios</title>
    <!-- tipografia -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500&display=swap" rel="stylesheet">
    
    <!-- iconos -->
    <script src="https://kit.fontawesome.com/69e2fb8eaa.js" crossorigin="anonymous"></script>
    
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./views/build/css/app.css">
    
    <!-- jQuery & Ajax -->
    <script type="text/javascript" src="views/js/funciones.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                    <img src="./src/img/logot.png" alt="logo">
                    <ul>
                        <li><a href="./index.php">Inicio</a></li>
                        <li class="ubic"><a href="./tests.php">Tests</a></li>
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

    <div class="titulo-institucion contenedor">
        <h1>Tests</h1>
    </div>

    <div class="trastornos contenedor">
        <input type="text" id="noPreguntas" value="5" hidden>
        <div class="informacion">
            <div class="texto">
                <h1>Disclaimer</h1>
                <p>Los siguientes tests son utilizados como herramientas para realizar diagnósticos, sin embargo, los resultados que estos dan no son un diagnostico en sí mismo y no deben de ser considerados como tal, si en algún momento te sientes preocupado por tu salud mental recomendamos que veas a un especialista. </p>
            </div>
        </div>
        <div class="opciones contenedor" id="opciones-trastornos">
            <label for="trastornos">Trastornos</label>
            <select name="trastornos" id="idCuestionario">
                <?php
                $conexion = conexion();
                $statement = $conexion->prepare('SELECT id_cuestionario, nombre_cuestionario FROM cuestionarios');
                $statement ->execute();
                while($result = $statement->fetch())
                    echo "<option value=".$result[0].">".$result[1]."</option>";
                ?>
            </select>
            <button id="boton-mostrar-info" onclick="pruebas()">Mostrar test</button>
        </div>
        <br>
        <div class="tests-opciones" id="tests">
            <table style="text-align: center" width="90%">
                <tbody> 
                    <tr>
                        <th></th>
                        <th>Nunca</th>
                        <th>Casi nunca</th>
                        <th>Algunas veces</th>
                        <th>Casi siempre</th>
                        <th>Siempre</th>
                    </tr>
                    <tr>
                        <td>Me satisface la ayuda que recibo de mi familia cuando tengo algún problema y/o necesidad</td>
                        <td><span class="spanQ1" id="spanQ11" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ11" type="radio" name="question1" value="0" hidden=""></td>
                        <td><span class="spanQ1" id="spanQ12" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ12" type="radio" name="question1" value="1" hidden=""></td>
                        <td><span class="spanQ1" id="spanQ13" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ13" type="radio" name="question1" value="2" hidden=""></td>
                        <td><span class="spanQ1" id="spanQ14" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ14" type="radio" name="question1" value="3" hidden=""></td>
                        <td><span class="spanQ1" id="spanQ15" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ15" type="radio" name="question1" value="4" hidden=""></td>
                    </tr>
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Me satisface la participación que mi familia brinda y permite</td>
                        <td><span class="spanQ2" id="spanQ21" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ21" type="radio" name="question2" value="0" hidden=""></td>
                        <td><span class="spanQ2" id="spanQ22" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ22" type="radio" name="question2" value="1" hidden=""></td>
                        <td><span class="spanQ2" id="spanQ23" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ23" type="radio" name="question2" value="2" hidden=""></td>
                        <td><span class="spanQ2" id="spanQ24" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ24" type="radio" name="question2" value="3" hidden=""></td>
                        <td><span class="spanQ2" id="spanQ25" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ25" type="radio" name="question2" value="4" hidden=""></td>
                    </tr>
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Me satisface como mi familia acpeta y apoya mis deseos de emrpender nuevas actividades</td>
                        <td><span class="spanQ3" id="spanQ31" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ31" type="radio" name="question3" value="0" hidden=""></td>
                        <td><span class="spanQ3" id="spanQ32" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ32" type="radio" name="question3" value="1" hidden=""></td>
                        <td><span class="spanQ3" id="spanQ33" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ33" type="radio" name="question3" value="2" hidden=""></td>
                        <td><span class="spanQ3" id="spanQ34" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ34" type="radio" name="question3" value="3" hidden=""></td>
                        <td><span class="spanQ3" id="spanQ35" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ35" type="radio" name="question3" value="4" hidden=""></td>
                    </tr>
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Me satisface como mi familia expresa afectos y responde a mis emociones como rabia, tristeza, amor</td>
                        <td><span class="spanQ4" id="spanQ41" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ41" type="radio" name="question4" value="0" hidden=""></td>
                        <td><span class="spanQ4" id="spanQ42" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ42" type="radio" name="question4" value="1" hidden=""></td>
                        <td><span class="spanQ4" id="spanQ43" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ43" type="radio" name="question4" value="2" hidden=""></td>
                        <td><span class="spanQ4" id="spanQ44" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ44" type="radio" name="question4" value="3" hidden=""></td>
                        <td><span class="spanQ4" id="spanQ45" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ45" type="radio" name="question4" value="4" hidden=""></td>
                    </tr>
                    <tr>
                        <th></th>
                        
                    </tr>
                    <tr>
                        <td>Me satisface como compartimos en familia: \na)El tiempo para estar juntos\nb)Los espacios en casa\nc)El dinero</td>
                        <td><span class="spanQ5" id="spanQ51" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ51" type="radio" name="question5" value="0" hidden=""></td>
                        <td><span class="spanQ5" id="spanQ52" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ52" type="radio" name="question5" value="1" hidden=""></td>
                        <td><span class="spanQ5" id="spanQ53" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ53" type="radio" name="question5" value="2" hidden=""></td>
                        <td><span class="spanQ5" id="spanQ54" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ54" type="radio" name="question5" value="3" hidden=""></td>
                        <td><span class="spanQ5" id="spanQ55" onclick="buttonChecked(this)"><i class="fa-regular fa-circle radioQ1"></i></span><input id="ipQ55" type="radio" name="question5" value="4" hidden=""></td>
                    </tr>
                </tbody>
            </table>
            <div class="opciones ">
                <button onclick="evaluar()">Enviar</button>
            </div>
            
        </div>
        <div id="mensaje" class="contenedor texto">
            
            
        </div>
    </div>

    <footer class="contenedor opciones">
        <div class="logo">
            <img src="./views/src/img/logot.png" alt="logo" style="width: 3rem;">
        </div>
        <div class="about">
            <a href="#">About</a>
        </div>
    </footer>

    <!-- js animaciones -->
    <script src="./src/js/gsap.js"></script>
    <!-- mi js -->
    <script src="./js/funciones.js"></script>
</body>
</html>