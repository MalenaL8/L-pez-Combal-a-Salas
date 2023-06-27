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

<body>
  
<?php
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        $opcion1 = $_POST["opcion1"];
        $opcion2 = $_POST["opcion2"];
        $opcion3 = $_POST["opcion3"];
        $opcion4 = $_POST["opcion4"];
        $opcion5 = $_POST["opcion5"];
        $opcion6 = $_POST["opcion6"];
        $opcion7 = $_POST["opcion7"];
        $opcion8 = $_POST["opcion8"];
        $opcion9 = $_POST["opcion9"];
        $opcion10 = $_POST["opcion10"];

        $resultado = $opcion1 + $opcion2 + $opcion3 + $opcion4 + $opcion5 + $opcion6 + $opcion7 + $opcion8 + $opcion9 + $opcion10;

  
        if ($resultado<=5) {echo "<h2>Has Obtenido: $resultado/10 puntos posibles.</h2>";
          echo "<h2> Si obtuviste entre 0 a 5 puntos: </h2>" . "<h2>Deberías esforzarte más la próxima vez. 
          Sigue intentándolo hasta que lo consigas, así tendrás mayor conocimineto y aprenderás
          muchas cosas nuevas.</h2>";
          } 
  
          if ($resultado<=8 && $resultado>=6) {echo "<h2>Has Obtenido: $resultado/10 puntos posibles.</h2>";
            echo "<h2>Si obtuviste entre 6 a 8 puntos: </h2>" . "<h2>Sabes lo suficiente de programación básica.
            Solo fallaste en pocas respuestas, lo que indica que sabes bastante del tema, 
            sigue adelante para seguir mejorando y aprender más cada día.</h2>";
          } 
          
          if ($resultado<=10 && $resultado>=9) {echo "<h2>Has Obtenido: $resultado/10 puntos posibles.</h2>";
              echo "<h2>Si obtuviste 9 o 10 puntos: </h2>" . "<h2>¡FELICIDADES! Definitivamente estás aprobado
              y sabes mucho sobre el tema. Tienes un conocimento alto en programación básica. ¡Sigue así!</h2>";
          } 
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







