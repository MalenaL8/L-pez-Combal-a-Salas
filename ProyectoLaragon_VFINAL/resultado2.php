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

        $resultado = $opcion1 + $opcion2 + $opcion3 + $opcion4 + $opcion5;

        if ($resultado<=8) {echo "<h2>Has Obtenido: $resultado puntos.</h2>";
        echo "<h2> Si obtuviste de 3 a 8 puntos: </h2>" . "<h2>Sinceramente la programación no es para tí. Pero no te desanimes, 
        si es lo que verdaderamente te gusta, inténtalo hasta que lo consigas. 
        De igual manera, puedes probar distinas especializaciones relacionadas
        a la programción y tal vez en alguna de esas ramas te sientas más cómodo. </h2>";
        } 

        if ($resultado<=14 && $resultado>=9) {echo "<h2>Has Obtenido: $resultado puntos.</h2>";
          echo "<h2>Si obtuviste de 9 a 14 puntos: </h2>" . "<h2>Estas en un punto medio. Es como que te iría bien, pero hay cosas que 
          posiblente mucho no te gustarían. De igual manera, si te esfuerzas podrás
          ser un gran programador, solo tienes que ponerle ganas y seguir con eso que te gusta. </h2>";
        } 
        
        if ($resultado<=20 && $resultado>=15) {echo "<h2>Has Obtenido: $resultado puntos.</h2>";
            echo "<h2>Si obtuviste de 15 a 20 puntos: </h2>" . "<h2> Definitivamente la programación es tu profesión. Tienes todas las características
            necesarias u óptimas para sobrevivir en un entorno de programadores. 
            Aprovecha al máximo tus cualidades y disfruta de lo que más te gusta.</h2>";
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







