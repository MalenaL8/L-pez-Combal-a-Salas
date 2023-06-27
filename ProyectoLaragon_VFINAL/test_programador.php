<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
    <title>LeMaEl Tests</title>
    <link rel="icon" type="image" href="assets/iconopag.ico" />
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
  <header>
    <h1>LeMaEl Tests</h1>
  </header>

  <nav>
    <ul>
      <li><a href="index.html">Inicio</a></li>
    </ul>
  </nav>

<h3 style="text-align:center;" class="titulo1">¿Qué Tipo de Programador Eres o Podrías Ser?</h3>
<h5 style="text-align:center;" class="titulo2"> ¡IMPORTANTE! </h5>
<h6 style="text-align:center;" class="titulo3"> NO DEJES CAMPOS VACIOS O SIN SELECCIONAR</h6>

<form method="POST" action="resultado1.php">
  <div class="todoslosdiv">
          <h2><u> 1. A la hora de programar, prefieres:</u></h2>
          <div class="pregunta1">

          <input type="radio" name="opcion1" id="opcion1" value="1" required>
          <label for="opcion1">Centrarte en los estilos </label> 
 
          <input type="radio" name="opcion1" id="opcion2" value="2" required>
          <label for="opcion2">Desarrollar funciones / juegos </label>
          
          <input type="radio" name="opcion1" id="opcion3" value="3" required>
          <label for="opcion3"> Probar los programas de los demás </label>

          <input type="radio" name="opcion1" id="opcion4" value="4" required>
          <label for="opcion4">Hacer todo lo posible o lo que esté a tú alcance</label>

          </div>

          <h2> <u>2. ¿Cuál de estas opciones describe más tú forma de ser?</u> </h2>
          <div class="pregunta2">
          <input type="radio" name="opcion2" id="opcion5" value="3" required>
          <label for="opcion5"> Atento, investigador, curioso</label>

          <input type="radio" name="opcion2" id="opcion6" value="0" required>
          <label for="opcion6"> Creativo, imaginativo, ingenioso </label>
          
          <input type="radio" name="opcion2" id="opcion7" value="2" required>
          <label for="opcion7"> Astuto, pensador, centrado </label>

          <input type="radio" name="opcion2" id="opcion8" value="4" required>
          <label for="opcion8"> Considero que tengo un poco de cada opción </label>
          </div>

          <h2> <u> 3. Elige la opción que mas te atrae:</u> </h2>
          <div class="pregunta3">
          <input type="radio" name="opcion3" id="opcion9" value="3" required>
          <label for="opcion9"> Priorizo tener muchos códigos para probar y comprobar su funcionamiento </label>

          <input type="radio" name="opcion3" id="opcion10" value="4" required>
          <label for="opcion10">Me gusta ayudar a compañeros para solucionar problemas en sus códigos sea cuál sea el problema</label>

          <input type="radio" name="opcion3" id="opcion11" value="2" required>
          <label for="opcion11">Prefiero centrarme en lo mío y hacer mí código sin interrupciones </label>
          
          <input type="radio" name="opcion3" id="opcion12" value="1" required>
          <label for="opcion12">Elijo y pienso detalladamente todo lo que quiero en mí página</label>
          </div>

          <h2><u>4. ¿Qué prefieres?</u>  </h2>
          <div class="pregunta3">
          <input type="radio" name="opcion4" id="opcion13" value="2" required>
          <label for="opcion13"> Hacer Backends </label>

          <input type="radio" name="opcion4" id="opcion14" value="0" required>
          <label for="opcion14">Hacer Frontends</label>

          <input type="radio" name="opcion4" id="opcion15" value="4" required>
          <label for="opcion15">Hacer ambos</label>
          
          <input type="radio" name="opcion4" id="opcion16" value="3" required>
          <label for="opcion16">Me da igual</label>
          </div>

          <h2><u>5. Elige alguna de estas palabras randoms de programación:</u>  </h2>
          <div class="pregunta5">
          <input type="radio" name="opcion5" id="opcion17" value="9" required>
          <label for="opcion17"> LocalHost, Xampp, Laragon </label>

          <input type="radio" name="opcion5" id="opcion18" value="1" required>
          <label for="opcion18">CSS, IMG, Responsive</label>

          <input type="radio" name="opcion5" id="opcion19" value="2" required>
          <label for="opcion19">HTML, JS, PHP </label>
          
          <input type="radio" name="opcion5" id="opcion20" value="3" required>
          <label for="opcion20">Javascript, Phyton, C++</label>
          </div>

          <br><br>
          <input type="submit" value="Enviar Respuestas" class="botonenviar">
  </div>
          
      </form>

    
      </div>
    </form>
    <?php
    

?>

<?php
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        $opcion1 = $_POST["opcion1"];
        $opcion2 = $_POST["opcion2"];
        $opcion3 = $_POST["opcion3"];
        $opcion4 = $_POST["opcion4"];
        $opcion5 = $_POST["opcion5"];

        $resultado = $opcion1 + $opcion2 + $opcion3 + $opcion4 + $opcion5;

  
        echo "<h2>Has Obtenido: $resultado puntos.</h2>";
    }
    ?>






</body>




<footer>
       <div >
          <div class="loscreditos">

               <div class="loscreditos2">
                  <h4>LeMaEl Test</h4>
                  <p> Página de Tests.</p>
               </div>

               <div class="loscreditos2">
                  <h4>Copyright</h4>
                  <p> Todos los derechos están reservados. </p>
               </div>

               <div class="loscreditos2">
                  <h4>Creadores</h4>
                  <p> Malena López, Elías Combalía y Leandro Salas.</p>
               </div>
               
           </div>
        </div>
   </footer>
</body>
</html>

















