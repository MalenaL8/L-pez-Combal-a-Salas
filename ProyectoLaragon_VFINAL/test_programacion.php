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

<h3 style="text-align:center;" class="titulo1">¿Es realmente la Programación para tí?</h3>
<h5 style="text-align:center;" class="titulo2"> ¡IMPORTANTE! </h5>
<h6 style="text-align:center;" class="titulo3"> NO DEJES CAMPOS VACIOS O SIN SELECCIONAR</h6>

        <form method="POST" action="resultado2.php">
        <div class="todoslosdiv">
          <h2> <u> 1. ¿Te consideras una persona curiosa?</u></h2>
          <div class="pregunta1">

          <input type="radio" name="opcion1" id="opcion1" value="3" required>
          <label for="opcion1">Sí, definitivamente</label> 
 
          <input type="radio" name="opcion1" id="opcion2" value="2" required>
          <label for="opcion2">Depende del tema</label>
          
          <input type="radio" name="opcion1" id="opcion3" value="1" required>
          <label for="opcion3">No, la verdad que no</label>

          </div>

          <h2> <u>2. ¿Te apaciona la tecnología?</u></h2>
          <div class="pregunta2">
          <input type="radio" name="opcion2" id="opcion4" value="3" required>
          <label for="opcion4"> Sí, me encanta la tecnología</label>

          <input type="radio" name="opcion2" id="opcion5" value="2" required>
          <label for="opcion5">Me gusta, pero no es para tanto</label>
          
          <input type="radio" name="opcion2" id="opcion6" value="0" required>
          <label for="opcion6"> No me termina de gustar</label>

          </div>

          <h2> <u>3. ¿Te gusta solucionar problemas?</u> </h2>
          <div class="pregunta3">
          <input type="radio" name="opcion3" id="opcion7" value="3" required>
          <label for="opcion7"> Sí, suele ser divertido </label>

          <input type="radio" name="opcion3" id="opcion8" value="2" required>
          <label for="opcion8">Sí, pero prefiero que no hayan problemas</label>

          <input type="radio" name="opcion3" id="opcion9" value="1" required>
          <label for="opcion9">No, no me gusta para nada </label>
          
          </div>

          <h2> <u>4. ¿Te esfuerzas en lograr lo que te propones?</u> </h2>
          <div class="pregunta4">
          <input type="radio" name="opcion4" id="opcion10" value="8" required>
          <label for="opcion10"> Sí, sea lo que sea doy lo mejor de mí </label>

          <input type="radio" name="opcion4" id="opcion11" value="2" required>
          <label for="opcion11">Intento hacerlo la mayoría de las veces</label>

          <input type="radio" name="opcion4" id="opcion12" value="0" required>
          <label for="opcion12">Si es fácil si me esfuerzo, si no, no vale la pena</label>

          </div>

          <h2> <u>5. ¿Te gusta trabajar en grupos?</u> </h2>
          <div class="pregunta5">
          <input type="radio" name="opcion5" id="opcion13" value="3" required>
          <label for="opcion13"> Sí, me gusta</label>

          <input type="radio" name="opcion5" id="opcion14" value="1" required>
          <label for="opcion14">Depende del grupo</label>

          <input type="radio" name="opcion5" id="opcion15" value="1" required>
          <label for="opcion15">Prefiero hacer todo solo </label>
          
          </div>


          <br><br>
          <input type="submit" value="Enviar Respuestas" class="botonenviar">
          </div>
      </form>

    
      </div>
    </form>
    <?php
    

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