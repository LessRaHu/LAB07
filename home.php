<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['nombre'])) {

 ?>

<!DOCTYPE html>
<html lang="es">

<?php
  include "db_conn.php";

  $sql_video = "SELECT * FROM video";
  $res_video = mysqli_query($enlace , $sql_video);

  $sql_letrero = "SELECT * FROM letrero";
  $res_letrero = mysqli_query($enlace , $sql_letrero);

  $sql_img_left = "SELECT * FROM images";
  $res_img_left = mysqli_query($enlace , $sql_img_left);

  $sql_img_right = "SELECT * FROM images";
  $res_img_right = mysqli_query($enlace , $sql_img_right);


?>


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab 02 - Team One</title>
	
  
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <link rel="stylesheet" href="Estilo/footer.css">
  <link rel="stylesheet" href="Estilo/bloq.css">
  

</head>

<body>
  

  <div class="mosaico">
    <div id = "container">
        <section>
            <div class = "box-1">
                <img src ="Pictures\Nintendo_logo_PNG6.png" width="180px" height="80px" class="logo_nintendo">
                <a href="cuenta.php" class="box-1-right">
    <i class="fa-solid fa-user"></i>
    <h1 style="font-size:23px">Cuenta</h1>
</a>
            </div>  
            <img src="Pictures\Wallpaper.png" width="85%" height="86%" class="first_background">
            <div class="singboard">     
                <h1><?php
                    while($filas = mysqli_fetch_array($res_letrero)){
                      echo $filas['letrero_titulo'];
                    }


                  ?></h1>    
                <img src="Pictures\Letrero.png" width="550px" height="250px" class="Letrero">
            </div>

            <div class = "introduction">
                <img <?php
                      while($filas = mysqli_fetch_array($res_img_left)){
                        print_r($filas['image_left']);}
                  ?>
                   width="300px" height="380px" class="Tunel" id="Tunel">
                <div class="SSV">
                  <?php
                    while($filas = mysqli_fetch_array($res_video)){
                      print_r($filas['video']);
                    }


                  ?>
                </div>
                <img <?php
                      while($filas = mysqli_fetch_array($res_img_right)){
                        print_r($filas['image_right']);}
                  ?>
                   width="700px" height="740px" class="Mario" id="Mario">

            </div>
        </section>
    </div>
  </div>


  <div class="contenedor">
    <?php
      include("db_conn.php"); 
      $elementos = "select * from carousel";
      $elementos_1 = "select * from carousel_1";
    ?>
      <div class="carousel">
        <div class="carousel_contenedor1">
          <h2 class="center-align titulo" style="padding: 10px 0px 10px 15px;">
            ¡JUEGOS EXCELENTES!
          </h2>
          <button aria-label="Anterior" class="carousel__anterior"> <i class="fas fa-chevron-left"></i></button>
          <div class="lista"> <!-- Ingreso de datos dinámicos  -->
            <?php
                $resultado = mysqli_query($enlace,$elementos);
                while($row=mysqli_fetch_assoc($resultado)) {
            ?>

            <div class="carousel__elemento">
              <img src="<?php echo $row["imagen"]?>" alt="">
                          <h3  class="juegos"><?php echo $row["juego"]?></h3>
                          <div class="linea-division"></div>
                          <p class="desc"><?php echo $row["precio"]?><br><?php echo $row["consola"]?></p>
            </div>
            <?php } ?>
          </div>
          <button aria-label="Siguiente" class="carousel__siguiente"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div role="tablist" class="carousel__indicadores"></div>
      </div>

      <div class="carousel1">
        <div class="carousel_contenedor1">
          <h2 class="consolas" >
            NUEVAS CONSOLAS
          </h2>
          <div class="lista1"><!-- Ingreso de datos dinámicos  -->
            <?php
                $resultado_1 = mysqli_query($enlace,$elementos_1);
                while($row=mysqli_fetch_assoc($resultado_1)) {
            ?>
            <div class="carousel__elemento1">
              <div class="img"><img src="<?php echo $row["imagen"]?>" alt=""></div>
                          
                          <div class="linea-division1"></div>
                          <p class="desc"><?php echo $row["precio"]?><br><?php echo $row["consola"]?></p>
            </div>
            <?php } ?>
          </div>
        </div>
        <div role="tablist" class="carousel__indicadores1"></div>
      </div>      
  </div>

  	



  <div style="display: flex;justify-content: center;">
    <div class="column middle" style=""> 
      <h1 id="h1">Novedades</h1> <!-- Ingreso de datos dinámicos  -->
        <!-- ----------------------------------------------------------------------------------------------------  -->
        <?php
        $elementos_2 = "select * from noticias";
                $resultado_2 = mysqli_query($enlace,$elementos_2);
                while($row=mysqli_fetch_assoc($resultado_2)) {
        ?>
        <div class="responsive">
          <div class="gallery">
            <a target= "blank" href="<?php echo $row["url_ref"]?>">
              <img src="Imagenes/<?php echo $row["imagen"]?>">
            </a>
            <div class="desc"><?php echo $row["descripcion"]?><br></br><a><strong>Leer más</strong></a></div>
          </div>
        </div>
        <?php } ?>
      <!-- ----------------------------------------------------------------------------------------------------  -->       
    </div>
  </div>




    

  <div class="bg-img" >
    <!--
     <div class="titulo">Queremos conocerte!</h1></div>-->
    
    <form action="/action_page.php" class="container">

      <h1 style="font-size:22.2px;">¡Dejanos tú opinión!</h1>


      <label for="name"><b>Nombre o Apodo</b></label>
      <input type="text"  name="name" required class="col-12 form-control"> 


      	<label for="name"><b>Continente</b></label>
            <select id="country" name="country" onclick="muestraselect(this.value)">
              <?php
                  include "db_conn.php"; //elimina esto si ya llamaste a la conexion anteriormente

                  if(!$enlace /*Nombre de la variable de la conexion*/){
                    echo"Error en la conexion con el servidor";
                  }

                  $consulta = "SELECT * FROM continentes";
                  $ejecutarConsulta = mysqli_query($enlace /*Nombre de la variable de la conexion*/, $consulta);
                  while($fila = mysqli_fetch_array($ejecutarConsulta)){
                    echo"<option value='".$fila['id']."'>".$fila['nombre']."</option>";
                  }
                ?> 

            </select>

      	<label for="name"><b>País</b></label>
            <div id="div">
              <select id="country" name="country">

                <option value="">Seleccione</option>
              </select>
            </div>

        <label for="comentario"><b>Opinión</b></label>
        <input type="textarea" placeholder="Excelente!" name="comentario" required>

        <button type="submit" class="btn">Enviar</button>

    </form>
  </div>


  <?php 
    include "db_conn.php";


    $sql = "SELECT * FROM cabeza";
    $res = mysqli_query($enlace , $sql);

    $sql_P = "SELECT * FROM P";
    $res_P = mysqli_query($enlace , $sql_P);

    $sql_2 = "SELECT * FROM cabeza2";
    $res_2 = mysqli_query($enlace , $sql_2);

    $sql_rs = "SELECT * FROM rs";
    $res_rs = mysqli_query($enlace , $sql_rs);

    $sql_3 = "SELECT * FROM cabeza3";
    $res_3 = mysqli_query($enlace, $sql_3);

    $sql_ic = "SELECT * FROM ic";
    $res_ic = mysqli_query($enlace , $sql_ic);

    $sql_copy = "SELECT * FROM cop";
    $res_copy = mysqli_query($enlace , $sql_copy);

    $sql_info = "SELECT * FROM info";
    $res_info = mysqli_query($enlace , $sql_info);
  ?>


  <footer>
       
       <div class="contenedor-footer-all">
        
            <div class="contenedor-body">

                <div class="Mas-informacion">
                    <h1><?php
                    while($filas = mysqli_fetch_array($res)){
                        echo $filas['contenido'];
                    }
                    ?></h1>
                    
                    <?php 
                    while($filas_P = mysqli_fetch_array($res_P)){
                        echo '<p>' .$filas_P['contenido'].'</p>';
                    }
                    ?>

                </div>

                <div class="Redes-Sociales">
                    
                    <h1><?php 
                    while($filas_2 = mysqli_fetch_array($res_2)){
                        echo $filas_2['contenido'];
                    }
                    ?></h1>

                    <?php 
                    while($filas_rs = mysqli_fetch_array($res_rs)){
                        echo "<div class='row'><label><img src=".$filas_rs['imagen'].">" .$filas_rs['contenido']."<label></div>";
                    }
                    ?>


                </div>

                <div class="Informacion-contacto">

                    <h1><?php 
                    while($filas_3 = mysqli_fetch_array($res_3)){
                        echo $filas_3['contenido'];
                    }
                    ?></h1>

                    <?php 
                    while($filas_ic = mysqli_fetch_array($res_ic)){
                        echo "<div class='row2'><label><img src=".$filas_ic['imagen'].">" .$filas_ic['contenido']."<label></div>";
                    }
                    ?>

                </div>

            </div>
        
        </div>
        
        <div class="contenedor-footer">
            <div class="footer">
                    <?php
                    while($filas_copy = mysqli_fetch_array($res_copy)){
                        echo '© 2017 Todos los Derechos Reservados |<div class="copyright"><a href="'.$filas_copy['link'].'">' .$filas_copy['contenido'].'</a></div>';
                    }
                    ?>

                    <?php
                    while($filas_info = mysqli_fetch_array($res_info)){
                        echo '<div class="informacion"><a href="'.$filas_info['link'].'">' .$filas_info['contenido'].'</a></div>';
                    }
                    ?>

                    <!--<div class="copyright">
                        © 2017 Todos los Derechos Reservados | <a href="">Empresa</a>
                    </div>

                    <div class="informacion">
                        <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                    </div>-->
            </div>

        </div>
        
  </footer>



	<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="JS/bloq.js"></script>
  <script type="text/javascript">
    function muestraselect(str){
      var conexion;
      if(str==""){
        document.getElementById("txtHint").innerHTML="";
        return;
      }

      if(window.XMLHttpRequest){
        conexion = new XMLHttpRequest();
      }

      conexion.onreadystatechange = function(){
        if(conexion.readyState == 4 && conexion.status == 200){
          document.getElementById("div").innerHTML = conexion.responseText;
        }
      }

      conexion.open("GET", "pais.php?c="+str, true);
      conexion.send();

    };
  </script>



</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

