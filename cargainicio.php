

<!-- ESTE ARCHIVO ÚNICAMENTE MANIPULA Y DEBE MANIPULAR A LA PÁGINA DE INICIO (index.php)-->


<?php
 include_once("barralateral.php"); /* CARGA LO INTERACTIVO DE LA ISQUIERDA*/
 ?>

<!--CARGA MENSAJE MODAL DE BIENVENIDA-->
<?php
include_once("bienvenida.html");
 ?>


<div id="particles-js"></div> <!--  CARGA ÚNICAMENTE EL DIV DONDE IRÁ "cargascriptparticles" -->


<?php
  include_once("cabeza.html"); /*CARGA LA IMÁGEN PRINCIPAL DE HASTA ARRIBA*/

?>
<?php
  include_once("menu.html");   /*CAR*/
?>

  <?php
  include_once("cargascriptparticles.html");  /*CARGA LA ANIMACIÓN DE FONDO*/
   ?>
