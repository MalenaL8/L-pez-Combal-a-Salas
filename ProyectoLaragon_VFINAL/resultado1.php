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

      if ($resultado<=8 ){echo "<h2>Has Obtenido: $resultado puntos.</h2>";
      echo "<h2> Si obtuviste de 3 a 8 puntos tu personalidad se relaciona con la de un
       Programador de Diseños Web.   </h2>" .  "<h2>  Los Programadores de Diseños Web se encargan de crear y diseñar sitios web visualmente atractivos, 
       funcionales y accesibles. Su objetivo principal es combinar aspectos técnicos y creativos para 
       producir una experiencia de usuario satisfactoria al cliente. </h2>";
      }
      if ($resultado<=14 && $resultado>9){echo "<h2>Has Obtenido: $resultado puntos.</h2>";
        echo "<h2>Si obtuviste de 9 a 14 puntos tu personalidad se relaciona con la de un Programador de Desarrollo. </h2>" .
         "<h2>Los Programadores de Desarrollo se dedican a la creación de software utilizando lenguajes de programación 
        y herramientas especializadas. Su principal objetivo es escribir código y desarrollar algoritmos para 
        construir aplicaciones informáticas que cumplan con ciertos requisitos y funcionalidades. </h2> " ;
      }
      if ($resultado<=19 && $resultado>14){echo "<h2>Has Obtenido: $resultado puntos.</h2>";
      echo "<h2>Si obtuviste de 15 a 19 puntos tu personalidad se relaciona con la de un Programador Especializado en Testing. </h2>" 
      . "<h2> Los Programadores Testers combinan habilidades de programación y conocimientos en pruebas de software para 
      garantizar la calidad y el funcionamiento correcto de las aplicaciones informáticas.
       </h2>";
      }
      if ($resultado<=25 && $resultado>19){echo "<h2>Has Obtenido: $resultado puntos.</h2>";
      echo "<h2>Si obtuviste de 20 a 25 puntos tu personalidad se relaciona con la de un Programador General. </h2>" 
      . "<h2>Los Programadores Generales se dedican a escribir, desarrollar y mantener software en diferentes áreas 
      y aplicaciones. A diferencia de los programadores especializados en áreas específicas, como juegos, 
      sistemas o pruebas, los programadores generales tienen conocimientos y habilidades amplias que les 
      permiten trabajar en una variedad de proyectos y contextos.
       </h2>";
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







