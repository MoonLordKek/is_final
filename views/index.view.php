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
                <h1>Salud Mental</h1>
                <p>La salud mental es un estado de bienestar mental que permite a las personas hacer frente a los momentos de estrés de la vida, desarrollar todas sus habilidades, poder aprender y trabajar adecuadamente y contribuir a la mejora de su comunidad. Es parte fundamental de la salud y el bienestar que sustenta nuestras capacidades individuales y colectivas para tomar decisiones, establecer relaciones y dar forma al mundo en el que vivimos. La salud mental es, además, un derecho humano fundamental. Y un elemento esencial para el desarrollo personal, comunitario y socioeconómico.</p>
            </div>
            <div class="hero-imagen">
                <img src="./views/src/img/imagehero.svg" alt="imagen-hero">
            </div>
        </div>
    </div>

    <div class="hero-tablet">
        <div class="contenedor">
            <div class="texto">
                <h1>Salud Mental</h1>
                <p>La salud mental es un estado de bienestar mental que permite a las personas hacer frente a los momentos de estrés de la vida, desarrollar todas sus habilidades, poder aprender y trabajar adecuadamente y contribuir a la mejora de su comunidad. Es parte fundamental de la salud y el bienestar que sustenta nuestras capacidades individuales y colectivas para tomar decisiones, establecer relaciones y dar forma al mundo en el que vivimos. La salud mental es, además, un derecho humano fundamental. Y un elemento esencial para el desarrollo personal, comunitario y socioeconómico.</p>
            </div>
        </div>
    </div>

    <div class="hero-telefono">
        <div class="contenedor">
            <div class="texto">
                <h1>Salud Mental</h1>
                <p>La salud mental es un estado de bienestar mental que permite a las personas hacer frente a los momentos de estrés de la vida, desarrollar todas sus habilidades, poder aprender y trabajar adecuadamente y contribuir a la mejora de su comunidad. Es parte fundamental de la salud y el bienestar que sustenta nuestras capacidades individuales y colectivas para tomar decisiones, establecer relaciones y dar forma al mundo en el que vivimos. La salud mental es, además, un derecho humano fundamental. Y un elemento esencial para el desarrollo personal, comunitario y socioeconómico.</p>
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
            <button id="boton-mostrar-info">Mostrar información</button>
        </div>


        <div class="trastorno trastorno-estres contenedor" id="trastorno-estres">
            <div class="titulo">
                <img src="./views/src/img/estres.svg" alt="imagenestres" style="width: 70rem">
                <h1>Estres</h1>
            </div>  
            <div class="informacion">
                <p> El estrés es la respuesta física o mental a una causa externa, como tener muchas tareas o padecer una enfermedad. Un estresor o factor estresante puede ser algo que ocurre una sola vez o a corto plazo, o puede suceder repetidamente durante mucho tiempo. <br>
                Es un sentimiento de tensión física o emocional. Puede provenir de cualquier situación o pensamiento que lo haga sentir a uno frustrado, furioso o nervioso. El estrés es la reacción de su cuerpo a un desafío o demanda.
                </p>
            </div>

            <div class="yo-me-informo">
                <h1>Yo me informo</h1>

                <p>A continuación te mostramos algunas infografías que te daran más información acerca del tema.</p>
                
                <button><a href="./views/src/img/infografia1.jpg" download="./views/src/img/infografia1.jpg">DESCARGUE LA INFOGRAFIA AQUI</a></button>

                <div class="infografia">
                    <img src="./views/src/img/infografia1.jpg" alt="infografia-estres" style="width: 100rem;">
                </div>

                <p>A continuación te mostramos algunos videos que te daran más información acerca del tema.</p>
                
                <button><a href="./views/video/video1.mp4" download="./views/video/video1.mp4">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <video src="./views/video/video1.mp4" controls></video>
                </div>

                <button style="margin-top: 5rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

        </div>

        <div class="trastorno trastorno-ansiedad contenedor" id="trastorno-ansiedad">
            <div class="titulo">
                <img src="./views/src/img/ansiedad.svg" alt="imagenansiedad" style="width: 45rem">
                <h1>Ansiedad</h1>
            </div>
            
            <div class="informacion">
                <p> Preocupación y miedo intensos, excesivos y continuos ante situaciones cotidianas. Es posible que se produzca taquicardia, respiración agitada, sudoración y sensación de cansancio. <br>
                La ansiedad puede ser normal en situaciones estresantes, como hablar en público o realizar una prueba. La ansiedad es solo un indicador de una enfermedad subyacente cuando los sentimientos se vuelven excesivos, en todo momento e interfieren con la vida cotidiana.
                </p>
            </div>

            <div class="yo-me-informo">
                <h1>Yo me informo</h1>

                <p>A continuación te mostramos algunas infografías que te daran más información acerca del tema.</p>
                
                <button><a href="./views/src/img/infografiasAnsiedad.rar" download="./views/src/img/infografiasAnsiedad.rar">DESCARGUE LAs INFOGRAFIAs AQUI</a></button>

                <div class="infografia">
                    <img src="./views/src/img/infografia9.jpg" alt="infografia" style="width: 80rem;">
                    <img src="./views/src/img/infografia10.jpg" alt="infografia" style="width: 80rem;">
                </div>

                <p>A continuación te mostramos algunos videos que te daran más información acerca del tema.</p>
                
                <button><a href="./views/video/videosAnsiedad.rar" download="./views/video/videosAnsiedad.rar">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <video src="./views/video/video7.mp4" controls></video>
                    <video src="./views/video/video6.mp4" controls></video>
                </div>

                <div class="articulos">
                    <h1 style="margin-top: 5rem; margin-bottom: 3rem;">Articulos</h1>
                    <a href="https://www.nimh.nih.gov/sites/default/files/documents/health/publications/espanol/trastorno-de-ansiedad-generalizada-cuando-no-se-pueden-controlar-las-preocupaciones-new/trastorno_de_ansiedad_generalizada.pdf" target="_blank">Trastorno
                        de ansiedad generalizada</a>
                </div>

                <button style="margin-top: 5rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>


        </div>

        <div class="trastorno trastorno-depresion contenedor" id="trastorno-depresion">
            <div class="titulo">
                <img src="./views/src/img/depresion.svg" alt="imagendepresion" style="width: 60rem">
                <h1>Depresión</h1>
            </div>
            
            <div class="informacion">
                <p>La depresión es un trastorno mental caracterizado fundamentalmente por un bajo estado de ánimo y sentimientos de tristeza, asociados a alteraciones del comportamiento, del grado de actividad y del pensamiento. <br>
                La depresión clínica, es una enfermedad grave y común que nos afecta física y mentalmente en nuestro modo de sentir y de pensar. La depresión nos puede provocar deseos de alejarnos de nuestra familia, amigos, trabajo, y escuela. Puede además causarnos ansiedad, pérdida del sueño, del apetito, y falta de interés o placer en realizar diferentes actividades.
                “Juan y yo habíamos imaginado durante mucho tiempo planes maravillosos para visitar a nuestras familias y volver a ver a nuestros amigos. Sin embargo, en ese momento hacer un viaje, era la última cosa que yo quería hacer. ¡Me sentía tan cansada! Algunas mañanas ni siquiera podía levantarme de la cama”.
                </p>
            </div>

            <div class="yo-me-informo">
                <h1>Yo me informo</h1>

                <p>A continuación te mostramos algunas infografías que te daran más información acerca del tema.</p>
                
                <button><a href="./views/src/img/infografiasDepresion.rar" download="./views/src/img/infografiasDepresion.rar">DESCARGUE LAs INFOGRAFIAs AQUI</a></button>

                <div class="infografia">
                    <img src="./views/src/img/infografia2.jpg" alt="infografia" style="width: 80rem;">
                    <img src="./views/src/img/infografia3.jpg" alt="infografia" style="width: 80rem;">
                    <img src="./views/src/img/infografia4.jpg" alt="infografia" style="width: 80rem;">
                </div>

                <p>A continuación te mostramos algunos videos que te daran más información acerca del tema.</p>
                
                <button><a href="./views/video/videosDepresion.rar" download="./views/video/videosDepresion.rar">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <video src="./views/video/video2.mp4" controls></video>
                    <video src="./views/video/video3.mp4" controls></video>
                </div>

                <div class="articulos">
                    <h1 style="margin-top: 5rem; margin-bottom: 3rem;">Articulos</h1>
                    <a href="http://www.rethinkdepression.es/wp-content/uploads/2018/05/03.C0673-Back_to_Daily_life-2_CC03G01.pdf" target="_blank">Volver a la vida diaria</a>
                </div>

                <button style="margin-top: 5rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>
            
        </div>

        <div class="trastorno trastorno-autoestima contenedor" id="trastorno-autoestima">
            <div class="titulo">
                <img src="./views/src/img/autoestima.svg" alt="imagenautoestima" style="width: 50rem">
                <h1>Autoestima Baja</h1>
            </div>
            
            <div class="informacion">
                <p>La Autoestima Baja es la discordancia en la percepción que tienen los pacientes de sí mismos. Esta evaluación negativa impide a las personas considerarse valiosas, talentosas, merecedoras de amor y reconocimiento por lo demás. <br>
                La persona no se siente apta para desarrollar ningún tipo de actividad. Nunca llega a arriesgarse al tomar decisiones o enfrentarse a nuevos retos, prefiriendo estar siempre en un segundo plano. Se debe a la falta de seguridad y confianza sobre uno mismo.
                </p>
            </div>

            <div class="yo-me-informo">
                <h1>Yo me informo</h1>

                <p>A continuación te mostramos algunas infografías que te daran más información acerca del tema.</p>
                
                <button><a href="./views/src/img/infografiasAutoestima.rar" download="./views/src/img/infografiasAutoestima.rar">DESCARGUE LAs INFOGRAFIAs AQUI</a></button>

                <div class="infografia">
                    <img src="./views/src/img/infografia5.jpg" alt="infografia" style="width: 80rem;">
                    <img src="./views/src/img/infografia6.jpg" alt="infografia" style="width: 80rem;">
                    <img src="./views/src/img/infografia7.jpg" alt="infografia" style="width: 80rem;">
                    <img src="./views/src/img/infografia8.jpg" alt="infografia" style="width: 80rem;">
                </div>

                <p>A continuación te mostramos algunos videos que te daran más información acerca del tema.</p>
                
                <button><a href="./views/video/videosAutoestima.rar" download="./views/video/videosAutoestima.rar">DESCARGUE EL VIDEO AQUI</a></button>

                <div class="video">
                    <video src="./views/video/video5.mp4" controls></video>
                    <video src="./views/video/video4.mp4" controls></video>
                </div>

                <div class="articulos">
                    <h1 style="margin-top: 5rem; margin-bottom: 3rem;">Articulos</h1>
                    <a href="https://www.lantegibatuak.eus/wp-content/uploads/2020/05/Cuaderno-de-ejercicios-para-aumentar-la-autoestima.pdf" target="_blank">Cuaderno de ejercicios para aumentar la autoestima</a>
                </div>

                <button style="margin-top: 5rem;"> <a href="#opciones-trastornos">Regrasar arriba 👆</a> </button>
            </div>

        </div>

    </div>


    <h1 class="contenedor" style="margin-top: 5rem; font-family: 'Roboto', sans-serif;">A continuación te mostramos más temas que te podrian interesar</h1>

    <div class="yo-me-informo contenedor">
        <h3>Afrontamiento</h3>

        <p>A continuación te mostramos algunas infografías que te daran más información acerca del tema.</p>
        
        <button><a href="./views/src/img/infografiasAfrontamiento.rar" download="./views/src/img/infografiasAfrontamiento.rar">DESCARGUE LAs INFOGRAFIAs AQUI</a></button>

        <div class="infografia">
            <img src="./views/src/img/infografia11.jpg" alt="infografia" style="width: 80rem;">
            <img src="./views/src/img/infografia12.png" alt="infografia" style="width: 80rem;">
            <img src="./views/src/img/infografia13.jpg" alt="infografia" style="width: 80rem;">
        </div>

        <p>A continuación te mostramos algunos videos que te daran más información acerca del tema.</p>
        
        <button><a href="./views/video/videosAforntamiento.rar" download="./views/video/videosAforntamiento.rar">DESCARGUE EL VIDEO AQUI</a></button>

        <div class="video">
            <video src="./views/video/video8.mp4" controls></video>
            <video src="./views/video/video9.mp4" controls></video>
        </div>

        <div class="articulos">
            <h1 style="margin-top: 5rem; margin-bottom: 3rem;">Articulos</h1>
            <a href="https://www.mdmpsicologiaclinica.com/2020/06/02/estrategias-de-afrontamiento/" target="_blank">ESTRATEGIAS DE AFRONTAMIENTO: DEFINICIÓN Y CLASIFICACIÓN</a>
        </div>
    </div>

    <div class="yo-me-informo contenedor">
        <h3>Importancia del sueño en la salud mental</h3>

        <p>A continuación te mostramos algunas infografías que te daran más información acerca del tema.</p>
        
        <button><a href="./views/src/img/infografiasAfrontamiento.rar" download="./views/src/img/infografiasAfrontamiento.rar">DESCARGUE LAs INFOGRAFIAs AQUI</a></button>

        <div class="infografia">
            <img src="./views/src/img/infografia14.png" alt="infografia" style="width: 80rem;">
            <img src="./views/src/img/infografia15.jpg" alt="infografia" style="width: 80rem;">
            <img src="./views/src/img/infografia16.jpg" alt="infografia" style="width: 80rem;">
            <img src="./views/src/img/infografia17.png" alt="infografia" style="width: 80rem;">
        </div>

        <p>A continuación te mostramos algunos videos que te daran más información acerca del tema.</p>
        
        <button><a href="./views/video/video10.mp4" download="./views/video/video10.mp4">DESCARGUE EL VIDEO AQUI</a></button>

        <div class="video">
            <video src="./views/video/video10.mp4" controls></video>
        </div>

        <!-- <div class="articulos">
            <h1 style="margin-top: 5rem; margin-bottom: 3rem;">Articulos</h1>
            <a href="https://www.mdmpsicologiaclinica.com/2020/06/02/estrategias-de-afrontamiento/" target="_blank">ESTRATEGIAS DE AFRONTAMIENTO: DEFINICIÓN Y CLASIFICACIÓN</a>
        </div> -->
    </div>

    <div class="yo-me-informo contenedor">
        <h3>Importancia de la nutrición en la salud mental</h3>

        <p>A continuación te mostramos algunas infografías que te daran más información acerca del tema.</p>
        
        <button><a href="./views/src/img/infografiasAfrontamiento.rar" download="./views/src/img/infografiasAfrontamiento.rar">DESCARGUE LAs INFOGRAFIAs AQUI</a></button>

        <div class="infografia">
            <img src="./views/src/img/infografia18.jpg" alt="infografia" style="width: 80rem;">
            <img src="./views/src/img/infografia19.png" alt="infografia" style="width: 80rem;">
        </div>

        <p>A continuación te mostramos algunos videos que te daran más información acerca del tema.</p>
        
        <button><a href="./views/video/videosImportanciaNutricion.rar" download="./views/video/videosImportanciaNutricion.rar">DESCARGUE EL VIDEO AQUI</a></button>

        <div class="video">
            <video src="./views/video/video11.mp4" controls></video>
            <video src="./views/video/video12.mp4" controls></video>
        </div>

        <!-- <div class="articulos">
            <h1 style="margin-top: 5rem; margin-bottom: 3rem;">Articulos</h1>
            <a href="https://www.mdmpsicologiaclinica.com/2020/06/02/estrategias-de-afrontamiento/" target="_blank">ESTRATEGIAS DE AFRONTAMIENTO: DEFINICIÓN Y CLASIFICACIÓN</a>
        </div> -->
    </div>

    <div class="yo-me-informo contenedor">
        <h3>Redes de apoyo en salud mental</h3>

        <p>A continuación te mostramos algunas infografías que te daran más información acerca del tema.</p>
        
        <button><a href="./views/src/img/infografiasRedesDeApoyo.rar" download="./views/src/img/infografiasRedesDeApoyo.rar">DESCARGUE LAs INFOGRAFIAs AQUI</a></button>

        <div class="infografia">
            <img src="./views/src/img/infografia20.jpg" alt="infografia" style="width: 80rem;">
            <img src="./views/src/img/infografia21.jpg" alt="infografia" style="width: 80rem;">
            <img src="./views/src/img/infografia22.jpg" alt="infografia" style="width: 80rem;">
        </div>

        <p>A continuación te mostramos algunos videos que te daran más información acerca del tema.</p>
        
        <button><a href="./views/video/video13.mp4" download="./views/video/video13.mp4">DESCARGUE EL VIDEO AQUI</a></button>

        <div class="video">
            <video src="./views/video/video13.mp4" controls></video>
        </div>

        <!-- <div class="articulos">
            <h1 style="margin-top: 5rem; margin-bottom: 3rem;">Articulos</h1>
            <a href="https://www.mdmpsicologiaclinica.com/2020/06/02/estrategias-de-afrontamiento/" target="_blank">ESTRATEGIAS DE AFRONTAMIENTO: DEFINICIÓN Y CLASIFICACIÓN</a>
        </div> -->
    </div>

    <div class="yo-me-informo contenedor">
        <h3 style="margin-bottom: 5rem;">Aqui tienes otros sitios Web para informarte</h3>

        <div class="articulos">
            <a href="https://www.instagram.com/menteamentee/?igshid=OGQ2MjdiOTE%3D" target="_blank">@menteamentee</a>
            <a href="http://revistasaludmental.mx/index.php/salud_mental" target="_blank">Salud Mental</a>
            <a href="https://www.imss.gob.mx/salud-en-linea/salud-mental" target="_blank">Salud Mental IMMS</a>
            <a href="https://sapienlabs.org/mhq/" target="_blank">What is your Mental Wellbeing Score?</a>
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