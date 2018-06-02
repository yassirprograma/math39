<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width", user-scalable=no initial-scale=1.0 , maximum-scale=1.0 , minimum-scale=1.0 >

<title>Curiosidades</title>

<link rel="icon" href="img/hola.ico">

<link rel="stylesheet" href="css/index_style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>


<body>
  <?php
    include_once("cargasecciones.php"); /*  CARGA LA PLANTILLA DE TODAS LAS DEMÁS SECCIONS */
   ?>



   <div class="princisecc">
     <article class="articulo">
       <form name="formulario"
action="mailto:dragonballgtgokuyvegetairvin@gmail.com?subjet="mail"
method="post" enctype=text/plain>
          <p> <h1>
              <img src="img/cursiosin.png" width="150px"  alt=""/>

          </h1>
          <h3>
<font color="#9D6F34">
            ¿Tienes alguna curiosidad por saber?
          </font>
        </h3>
          <form role="form">
            <div class="form-group">
              <label for="exampleInputEmail1">Inserta su correo electronico</label>
              <input type="email" class="form-control" id="Email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="Password">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              <font size="1px">
 <p style="color:#CD5C5C">
                <b>
              despues de enviar la informacion, se te enviará un mail donde escribirás cual es su curiosidad
                que quiere saber.
</p>
              </b>
     </font>

            </div>
            <div class="form-group">
            </div>
            <div class="checkbox">
              <font size="1px">
    <b>¿Eres estudiante o profesor?
  &nbsp;&nbsp;&nbsp;&nbsp;
</b>
      <input type="radio" id="1"
       name="alumno" value="email"><b>Estudiante </b>
    &nbsp;    &nbsp;
      <input type="radio" id="2"
       name="profe" value="phone"><b>Profesor </b>
              <p>
<br>
                <b>
                ¿Que área de matematicas estas buscando más? </b>
                &nbsp;
                <select name="math">
              <option value="1"selected>Álgebra</option>
              <option value="2"selected>Geometria</option>
              <option value="3"selected>Cálculo Diferencial</option>
              <option value="4"selected>Cálculo integral</option>
              <option value="5"selected>Probabilidad y estadística</option>
              <option value="6"selected>Otras</option>
              </select>
              </p>
              <label>
                <b>¿Ha sido de mucha ayuda esta pagina web?
</b>
<br>
                <input type="checkbox">Si
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox">No
  <br>
  <br>
  <b>
  En caso de no haber sido de mucha ayuda para usted, escribe su motivo acerca de esto: </b>
<br>
<textarea name="opinion">
</textarea>
              </label>
            </div>
<button type="submit" class="send">Enviar</button>
    &nbsp;&nbsp;
            <button type="reset" class="eliminate">Borrar</button>
   </p>
   <font size="2px">
     <i>
Estas preguntas son con el fin de que se mejore el contenido de la pagina para satisfacer las preferencias del usuario.
</i>
</font>

    </form>
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
