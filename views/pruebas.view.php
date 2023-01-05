<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BananaWare</title>
    <meta name="description" content="Página web de blog de café">

    <link rel="stylesheet" href="views/css/normalize.css">
    <link rel="stylesheet" href="views/css/style.css">
    <script type="text/javascript" src="views/js/funciones.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

    <header class="header">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.php">
                    <h1 class="logo__nombre no-margin centrar-texto">Banana<span class="logo__bold">Ware</span></h1>
                </a>
                <nav class="navegacion">
                    <a href="sucursal.php" class="navegacion__enlace">Centros de Recoleccion</a>
                    <a href="rastreo.php" class="navegacion__enlace">Rastreo</a>
                    <a href="IS.php" class="navegacion__enlace">Iniciar Sesión</a>
                </nav>
            </div>
        </div>
    </header>
    <section class="form-login">
      <h5> Iniciar Sesión </h5>
      <input class="controls" type="text" name="Usuario" value="" placeholder="Correo Electrónico" id="email">
      <input class="controls" type="password" name="Contrasena" value="" placeholder="Contraseña" id="pass">
      <input type="text" value=0 id="noPreguntas" hidden>
      <select name="" id="idCuestionario">
        <?php
            $conexion = conexion();
            $statement = $conexion->prepare('SELECT id_cuestionario, nombre_cuestionario FROM cuestionarios');
            $statement ->execute();
            while($result = $statement->fetch())
                echo "<option value=".$result[0].">".$result[1]."</option>";
        ?>
      </select>
      <button onclick="pruebas()" id="pedirvan" class="boton--secundario boton--primario1">Iniciar Sesión</button>
      <p><a class="form-login__enlace" href="olvidar_c_email.php">¿Olvidaste tu Contraseña?</a></p>
    </section>
    <section id="video">
    
    </section>
    <section id="imgs">

    </section>
    <section id="articulo">

    </section>
    
    <section id="tests">
        <input type="text" id="idCuestionario" value=3 hidden>
        <?php
            for ($i=1; $i < 8; $i++) { 
                echo "<div>";
                for ($j=0; $j < 5; $j++) { 
                    echo "<input type='radio' name='question".$i."' value=".$j.">";
                }
                echo "</div>";
            }
        ?>
        <button onclick="evaluar()">kekw</button>
    </section> 
    <section id="mensaje">

    </section>


<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
    <footer class="footer">
        <div class="contenedor">
          <div class="barra">
              <a class="logo" href="index.php">
                  <h1 class="logo__nombre no-margin centrar-texto">Banana<span class="logo__bold">Ware</span></h1>
              </a>

              <nav class="navegacion">
                  <a href="soporte.php" class="navegacion__enlace">Soporte</a>
                  <a href="rastreo.php" class="navegacion__enlace">Rastreo</a>
                  <a href="sucursal.php" class="navegacion__enlace">Centros de Recoleccion</a>
              </nav>
          </div>
      </div>
  </footer>
  <div class="derechos">
      <center>
          <p class="no-margin">Todos los derechos reservados</p>
      </center>
  </div>
  <script src="views/js/modernizr.js"></script>
</body>

</html>


