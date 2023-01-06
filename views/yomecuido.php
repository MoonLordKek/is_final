<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yo me cuido</title>
    <!-- tipografia -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500&display=swap" rel="stylesheet">
    
    <!-- iconos -->
    <script src="https://kit.fontawesome.com/69e2fb8eaa.js" crossorigin="anonymous"></script>
    
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./views/build/css/app.css">
    <!-- jqery & ajax -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                    <img src="./src/img/logot.png" alt="logo">
                    <ul>
                        <li><a href="./index.php">Inicio</a></li>
                        <li><a href="./cuestionario.php">Tests</a></li>
                        <li><a href="./instituciones.php">Instituciones</a></li>
                        <li class="ubic"><a href="./yomecuido.php">Tecnicas</a></li>
                        <li><a href="./evaluacion.php">Evaluación</a></li>
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

    <div class="hero">
        <div class="contenedor">
            <div class="texto">
                <h1>Tecnicas de autocuidado</h1>
                <p>Las tecnicas de autocuidado conjunto de acciones intencionadas que realiza o realizaría la persona para controlar los factores internos o externos, que pueden comprometer su vida y desarrollo posterior. Se trata de hacer lo que se siente bien para ti, de realizar y disfrutar esas actividades saludables o benéficas fundamentales para cada uno. el autocuidado es escucharse, darse una respuesta honesta y hacer lo que está bien para ti en el momento en que te estás preguntando, ¿cómo puedo ser bueno conmigo mismo? </p>
            </div>
            <div class="hero-imagen">
                <img src="./views/src/img/imageherocuidate.svg" alt="imagen-hero">
            </div>
        </div>
    </div>

    <div class="hero-tablet">
        <div class="contenedor">
            <div class="texto">
                <h1>Tecnicas de autocuidado</h1>
                <p>Las tecnicas de autocuidado conjunto de acciones intencionadas que realiza o realizaría la persona para controlar los factores internos o externos, que pueden comprometer su vida y desarrollo posterior. Se trata de hacer lo que se siente bien para ti, de realizar y disfrutar esas actividades saludables o benéficas fundamentales para cada uno. el autocuidado es escucharse, darse una respuesta honesta y hacer lo que está bien para ti en el momento en que te estás preguntando, ¿cómo puedo ser bueno conmigo mismo? </p>
            </div>
        </div>
    </div>

    <div class="hero-telefono">
        <div class="contenedor">
            <div class="texto">
                <h1>Tecnicas de autocuidado</h1>
                <p>Las tecnicas de autocuidado conjunto de acciones intencionadas que realiza o realizaría la persona para controlar los factores internos o externos, que pueden comprometer su vida y desarrollo posterior. Se trata de hacer lo que se siente bien para ti, de realizar y disfrutar esas actividades saludables o benéficas fundamentales para cada uno. el autocuidado es escucharse, darse una respuesta honesta y hacer lo que está bien para ti en el momento en que te estás preguntando, ¿cómo puedo ser bueno conmigo mismo? </p>
            </div>
        </div>
    </div>

    <div class="trastornos">

        <div class="opciones contenedor" id="opciones-trastornos">
            <label for="trastornos">Trastornos</label>
            <select name="trastornos" id="trastornos">
                <option value="estres">Estres</option>
                <option value="ansiedad">Ansiedad</option>
                <option value="depresion">Depresión</option>
                <option value="autoestima">Autoestima</option>
            </select>
            <button id="boton-mostrar-info">Mostrar Tecnicas</button>
        </div>


        <div class="trastorno trastorno-estres contenedor" id="trastorno-estres">

            <div class="titulo">
                <img src="./views/src/img/estres1.svg" alt="imagenestres" style="width: 70rem">
                <h1>Técnicas de relajación</h1>
            </div>  
            <div class="informacion">
                <p> Las técnicas de relajación son una serie de herramientas que ayudan en la regulación emocional. Se trata de diversos ejercicios prácticos que permiten disminuir el nivel de activación fisiológica, reduciendo la intensidad de emociones negativas como el miedo, la rabia y la ansiedad.
                </p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/tecnicasContraEstres1.rar" download="./views/video/tecnicasContraEstres1.rar">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video>
                </div>
                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="1" onclick="addTecUsu(this)" disabled> Realizado ❤</button>';
                ?>
                
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

            <div class="titulo">
                <img src="./views/src/img/modohacer-removebg-preview.png" alt="imagenestres" style="width: 60rem">
                <h1>Pasar del modo hacer al modo ser.</h1>
            </div>  
            <div class="informacion">
                <p> La acción se pone en marcha de manera automática cuando se detecta una diferencia entre lo que tenemos y lo que queremos. Nos centramos exclusivamente en nuestros objetivos y perdemos de vista el presente, que empieza a desdibujarse. El modo ser es, especialmente al principio, intencional y no automático.
                </p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video18.mp4" download="./views/video/video18.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>Encuentra el equilibrio el modo hacer y el modo ser de la mente</h3>
                    <video src="./views/video/video18.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="2" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

            <div class="titulo">
                <img src="./views/src/img/estableser-removebg-preview.png" alt="imagenestres" style="width: 60rem">
                <h1>Establecimiento de prioridades</h1>
            </div>  
            <div class="informacion">
                <p>El establecimiento de prioridades es un proceso de actividades de clasificación y, por lo tanto, de elección que conduce a la asignación de los recursos a los programas elegidos. Por lo tanto, incluye los valores, precedencias, motivos y limitaciones en que se basan en tales decisiones.</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video19.mp4" download="./views/video/video19.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>Tener claras las prioridades</h3>
                    <video src="./views/video/video19.mp4" controls style="width:50rem;"></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="3" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

            <div class="titulo">
                <img src="./views/src/img/problemas-removebg-preview.png" alt="imagenestres" style="width: 60rem">
                <h1>Resolución de problemas</h1>
            </div>  
            <div class="informacion">
                <p>La resolución de problemas consiste en un enfoque sistemático para solucionar un problema. El objetivo de la resolución de problemas es determinar por qué algo no funciona como se esperaba y cómo resolver el problema. Algunas técnicas comunes pueden ayudar con la tarea de la resolución de problemas.</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video20.mp4" download="./views/video/video20.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>Técnica en solución de problemas</h3>
                    <video src="./views/video/video20.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="4" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

        </div>

        <div class="trastorno trastorno-ansiedad contenedor" id="trastorno-ansiedad">

            <div class="titulo">
                <img src="./views/src/img/ejercicio-removebg-preview.png" alt="imagenestres" style="width: 60rem">
                <h1>Ejercicio y ansiedad</h1>
            </div>  
            <div class="informacion">
                <p>Hacer ejercicio durante 30 minutos o más al día de tres a cinco días a la semana puede mejorar significativamente los síntomas de depresión o ansiedad. Pero las pequeñas cantidades de actividad física, de tan solo 10 a 15 minutos a la vez, pueden marcar la diferencia.</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video21.mp4" download="./views/video/video21.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>Ansiedad y ejercicio</h3>
                    <video src="./views/video/video21.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="5" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

            <div class="titulo">
                <img src="./views/src/img/habilidades.png" alt="imagenestres" style="width: 40rem">
                <h1>Habilidades QUE</h1>
            </div>  
            <div class="informacion">
                <p>Habilidades son poderes que un agente tiene para realizar varias acciones. Incluyen habilidades comunes, como caminar, y habilidades raras, como hacer un salto doble hacia atrás.</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video22.mp4" download="./views/video/video22.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>Habilidades QUÉ</h3>
                    <video src="./views/video/video22.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="6" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

            <div class="titulo">
                <img src="./views/src/img/como-removebg-preview.png" alt="imagenestres" style="width: 40rem">
                <h1>Habilidades Cómo</h1>
            </div>  
            <div class="informacion">
                <p>Habilidades son poderes que un agente tiene para realizar varias acciones. Incluyen habilidades comunes, como caminar, y habilidades raras, como hacer un salto doble hacia atrás.</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video23.mp4" download="./views/video/video23.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>Habilidades CÓMO</h3>
                    <video src="./views/video/video23.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="7" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>
        </div>

        <div class="trastorno trastorno-depresion contenedor" id="trastorno-depresion">

            <div class="titulo">
                <img src="./views/src/img/pensamientosTrampa-removebg-preview.png" alt="imagenestres" style="width: 60rem">
                <h1>Pensamientos trampa</h1>
            </div>  
            <div class="informacion">
                <p>Los pensamientos trampa son patrones de razonamiento negativos. Podríamos visualizarlos como laberintos en los que queda atrapado el sentido común, la habilidad de ver las cosas con perspectiva, de manera lógica y sosegada.</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video24.mp4" download="./views/video/video24.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>Como eliminar los pensamiento trampa</h3>
                    <video src="./views/video/video24.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="8" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>
            
            
            <div class="titulo">
                <img src="./views/src/img/conductal.jpg" alt="imagenestres" style="width: 60rem">
                <h1>Activación conductual</h1>
            </div>  
            <div class="informacion">
                <p>La activación conductual es un tipo de terapia psicológica que alienta a una persona a emprender o volver a realizar actividades que le resulten significativas. Ademas la activación conductual aborda la depresión como una situación negativa en la que la persona se encuentra y de la que puede salir. Para ello busca conseguir un cambio comportamental mediante la exposición a situaciones que ofrecen un refuerzo positivo.</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video25.mp4" download="./views/video/video25.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>Activación Conductual</h3>
                    <video src="./views/video/video25.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="9" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

            <div class="titulo">
                <img src="./views/src/img/redesApoyo.png" alt="imagenestres" style="width: 35rem">
                <h1>Redes de apoyo</h1>
            </div>  
            <div class="informacion">
                <p>Las redes de apoyo social son: “el conjunto de relaciones que integran a una persona con su entorno social, o con personas con las que establecen vínculos solidarios y de comunicación para resolver necesidades específicas.</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video26.mp4" download="./views/video/video26.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>Fortaleciendo mi red de apoyo</h3>
                    <video src="./views/video/video26.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="10" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

            <div class="titulo">
                <img src="./views/src/img/autoCompasion.png" alt="imagenestres" style="width: 55rem">
                <h1>Autocompasión</h1>
            </div>  
            <div class="informacion">
                <p>La autocompasión consiste en extender la compasión a uno mismo en casos de insuficiencia, fracaso o sufrimiento general. Kristin Neff ha definido la autocompasión como compuesta de tres elementos principales: bondad hacia uno mismo, humanidad común y atención plena. ​</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video27.mp4" download="./views/video/video27.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>Un ejercicio de autocompasión genuina</h3>
                    <video src="./views/video/video27.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="11" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

        </div>

        <div class="trastorno trastorno-autoestima contenedor" id="trastorno-autoestima">

            <div class="titulo">
                <img src="./views/src/img/autoConocimiento.png" alt="imagenestres" style="width: 35rem">
                <h1>Autoconocimiento</h1>
            </div>  
            <div class="informacion">
                <p>El conocimiento de sí mismo o el autoconocimiento, es el saber que una persona adquiere sobre ella misma, en términos psicológicos y espirituales, durante el curso de toda la vida, y sobre la base de sus propias experiencias y a la introspección.</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video28.mp4" download="./views/video/video28.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>La Escalera De Mi Autoconocimiento</h3>
                    <video src="./views/video/video28.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="12" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

            <div class="titulo">
                <img src="./views/src/img/autoimagen.png" alt="imagenestres" style="width: 35rem">
                <h1>Autoimagen</h1>
            </div>  
            <div class="informacion">
                <p>La autoimagen (conocida en inglés como self-image) es la imagen o representación mental que se obtiene de uno mismo, generalmente resistente al cambio, y que no representa solamente los detalles que pueden estar disponibles a la investigación u observación objetiva de otros (como la altura, peso, color del cabello, género, cociente intelectual, etc.), sino también los elementos propios que se han aprendido acerca de sí mismo, ya sea por experiencias personales o por la internalización de los juicios de los demás. Una definición simple de lo que representa la auto-imagen de una persona es la respuesta a esta pregunta - "¿Qué es lo que cree o piensa la gente de usted?".</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video29.mp4" download="./views/video/video29.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>La Autoeficiencia</h3>
                    <video src="./views/video/video29.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="13" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

            <div class="titulo">
                <img src="./views/src/img/autoConcepto.webp" alt="imagenestres" style="width: 45rem">
                <h1>Autoconcepto</h1>
            </div>  
            <div class="informacion">
                <p>El autoconcepto es la opinión que una persona tiene sobre sí misma, que lleva asociado un juicio de valor, y la capacidad de autorreconocerse.</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video30.mp4" download="./views/video/video30.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>Como mejorar mi autoconcepto</h3>
                    <video src="./views/video/video30.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="14" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

            <div class="titulo">
                <img src="./views/src/img/autoeficiencia.png" alt="imagenestres" style="width: 55rem">
                <h1>Autoeficacia</h1>
            </div>  
            <div class="informacion">
                <p>La autoeficacia (o también la percepción de la eficacia), es la confianza en la propia capacidad para lograr los resultados pretendidos. Los psicólogos han estudiado la autoeficacia, desde varias perspectivas, señalan diversas rutas de acceso en el desarrollo de la autoeficacia; la dinámica de la autoeficacia, y la falta de los mismos, en muchos lugares diferentes; las interacciones entre la autoeficacia y autoconcepto; y los hábitos de la atribución que contribuyen o perjudican a la autoeficacia.</p>
            </div>

            <div class="yo-me-informo">
                <h1>Ejecución</h1>

                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>

                <button><a href="./views/video/video31.mp4" download="./views/video/video31.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>La Autoeficiencia</h3>
                    <video src="./views/video/video31.mp4" controls></video>
                </div>

                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="15" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

        </div>

        <h1 class="contenedor" style="font-family: 'Roboto', sans-serif; margin-top: 10rem; text-align: center;">Aqui tienes otras tecnicas que te pueden interesar</h1>
        
        <div class="trastorno contenedor">
            <div class="titulo">
                <img src="./views/src/img/communicationAsertiva.png" alt="imagenestres" style="width: 35rem">
                <h1>Comunicación asertiva</h1>
            </div>  
            <div class="informacion">
                <p>Esta técnica consiste en frenar y disipar la tensión de la conversación, al mismo tiempo que se da parte de la razón a la otra parte, pero sin perder tu postura. Se trata de una buena manera de afrontar las críticas o de evitar el conflicto directo.</p>
            </div>
    
            <div class="yo-me-informo">
                <h1>Ejecución</h1>
    
                <p>A continuación ve los siguientes videos, y realiza las actividades.</p>
    
                <button><a href="./views/video/video32.mp4" download="./views/video/video32.mp4">DESCARGUE EL VIDEO AQUI</a></button>
    
                <div class="video">
                    <!-- <h3>Respiración diafragmática</h3>
                    <video src="./views/video/video14.mp4" controls></video>
                    <video src="./views/video/video15.mp4" controls></video>
                    <h3>Escaneo Corporal</h3>
                    <video src="./views/video/video16.mp4" controls></video>
                    <h3>Relajación Muscular</h3>
                    <video src="./views/video/video17.mp4" controls></video> -->
                    <h3>11 Técnicas de comunicación asertiva y efectiva con ejemplos y pasos</h3>
                    <video src="./views/video/video32.mp4" controls></video>
                </div>
    
                <?php
                    if(isset($_SESSION['usuario']))
                        echo '<button style="margin-top: 5rem;" id="16" onclick="addTecUsu(this)"> Realizado ❤</button>';
                ?>
                <button style="margin-top: 2rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
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
    <script src="./views/js/funciones.js"></script>
</body>

</html>