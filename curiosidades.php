<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width", user-scalable=no initial-scale=1.0 , maximum-scale=1.0 , minimum-scale=1.0 >

<title>Curiosidades</title>

<?php include_once("head.php"); ?> <!-- CARGA LASLIBRERIAS JS Y CSS-->

</head>


<body>
  <?php
    include_once("cargasecciones.php"); /*  CARGA LA PLANTILLA DE TODAS LAS DEMÁS SECCIONS */
   ?>



   <div class="princisecc">
     <article class="articulo">
          <p> <h1>
              <img src="img/curiosidades.png"    class="imgsecc" />
              <?php
              include_once("formulario.html");
               ?>


          </h1> </p>


     </article>
     <article class="final" >
       <?php
          include_once("hastabajo.html");
        ?>

            <!--NO TOCAR NADA AQUÍ-->



     </article>


   </div>








    <script src="js/jquery-s3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

</body>

</html>
