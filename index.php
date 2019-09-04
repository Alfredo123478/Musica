<?php
//Inicio de una sesion
session_start();
//Incluir el archivo de conexion conexion.php
include ('conexion.php');
//si
if(isset($_SESSION['usuario'])){
  echo '<script> window.location="index2.php"; </script>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cantantes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link type="text/css" href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="js/bootstrap.js">
  

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"> 


  </script>
<!--/http://placehold.it/570x360/-->

  <!--/ Estilos de letras/-->
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Patua+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:700&display=swap" rel="stylesheet">


<style type="text/css">
/*estilo par el login*/
  .txtb span::before{
    content: attr(data-placeholder);
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
   
    transition: .5s;
}
.txtb span::after{
  content: '';
  position: absolute;
  width: 0%;
  height: 3px;
  background: linear-gradient(120deg,#e74c3c,#f1c40f); 
  transition: .5s
}

.focus + span::before{
  top: -5px;
}
.focus + span::after{
  width: 100%;
}
/*----------------------------------------------*/
/*estilo par el registro*/
  
/*----------------------------------------------*/
.logbtn1{
  display: block;
  width: 100%;
  height: 50px;
  border: none;
  background: linear-gradient(120deg,#e67e22,#ff214f);
   background-size: 200%;
   outline: pointer;
   transition: .5s;
}
.logbtn1:hover{
  background-position: right;
}

.form-control:hover{
  border: 2px solid #ff214f;
}


.middle{
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
.card{
  cursor: pointer;
  width: 340px;
  height: 480px;
}
.front,.back{
  width: 100%;
  height: 100%;
  overflow: hidden;
  backface-visibility: hidden;
  position: absolute;
  transition: transform .6s linear;
}
.front img{
  height: 100%;
   width: 100%;
}
.front{
  transform: perspective(600px) rotateY(0deg);
}
.back{
  background: #f1f1f1;
  transform: perspective(600px) rotateY(-180deg);
}
.back-content{
  color: #2c3e50;
  text-align: center;
  width: 100%;
}
.sm{
  margin: 20px 0;
}
.sm a{
  display: inline-flex;
  width: 40px;
  height: 40px;
  justify-content: center;
  align-items: center;
  color: #2c3e50;
  font-size: 18px;
  transition: 0.4s;
  border-radius: 50%
}
.sm a:hover{
  background: #2c3e50;
  color: white;
}
.card:hover > .front{
  transform: perspective(600px) rotateY(-180deg);
}
.card:hover > .back{
  transform: perspective(600px) rotateY(-360deg);
}
body::-webkit-scrollbar {
    width: 7px;
}
body::-webkit-scrollbar-thumb {
    background: orange;
    opacity: 0.1;
    border-radius: 50px;




}
</style>
</head>
<body>
  <audio src="audio/Khea-veteLyrics.mp3" loop="true" autoplay="true"></audio>


  <!--/ Barra de navegacion/-->
  <nav class="navbar navbar-b navbar-expand-md fixed-top navbar-trans" id="mainNav">
    <div class="container">
      <div class="card-img-overlay">
    <h5 class="card-title" style="font-family: 'Bree Serif', serif;
font-family: 'Patua One', cursive; text-align: justify-all; color: black;">CANTANTES</h5>
  </div>
   
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll " href="#Inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#Biografia">Biografia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#Galeria">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#Registrate">Registrate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#exampleModal" data-toggle="modal">Iniciar Sesion</a>

          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-------------------Modal------------------------>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border: 1px solid #fff;">
      <div class="modal-body">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div id="iniciar-sesion">
            <form action="iniciar.php" method="POST">
                <p class="h4 mb-4 text-center"><strong>Iniciar Sesión</strong> </p>

                <div class="txtb" style="border-bottom: 3px solid #adadad;
  position: relative;
  margin: 30px 0;">

                  <input type="text"  name="usuario" required="" style="font-size: 15px;
  color:  #333;
  border: none; 
  width: 100%;
  outline: none;
  background: none;
  padding: 0 5px;
  height: 40px;">
                  <span data-placeholder="USUARIO" ></span>
                </div>
                

                <div class="txtb" style="border-bottom: 3px solid #adadad;
  position: relative;
  margin: 30px 0;">

                  <input type="password"   name="clave" required="" style="font-size: 15px;
  color:  #333;
  border: none; 
  width: 100%;
  outline: none;
  background: none;
  padding: 0 5px;
  height: 40px;">
                  <span data-placeholder="CONTRASEÑA"></span>
              </div>
                

               <input class="logbtn" type="submit" name="submit" style=""><br>
                 

                  ¿No eres miembro?
                </p>
                <center class="tab tab-primera"><a type="" class="btn logbtn btn-rounded btn-block my-4 waves-effect z-depth-0" href="#Registrate">Regístrate</a> 
                 </center>
            </form>

            <script type="text/javascript">
              $(".txtb input").on("focus", function(){
                $(this).addClass("focus");
              });

              $(".txtb input").on("blur", function(){
                if($(this).val() == "")
                $(this).removeClass("focus");
              });
            </script>

            </div>


      </div>
    </div>
  </div>
</div>
  
<!--/ PORTADA GENERAL /-->

<section id="Inicio">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner " style="font-family: 'Bree Serif', serif;">
    <div class="carousel-item active">
        <img src="img/portada/Khea1.jpg" class="d-block w-100" alt="..." style="width: 1920px; height: 657px;">
        
        <div class="carousel-caption d-none d-md-block">
          <h1 style="color: #ff0000;">Khea</h1>
          <h4>Cantante Argentino</h4>
        </div>
    </div>
    <div class="carousel-item">
      <img src="img/portada/Cazzu1.jpg" class="d-block w-100" alt="..." style="width: 1920px; height: 657px;">
      <div class="carousel-caption d-none d-md-block">
          <h1 style="color: #ff0000;">Cazzu</h1>
         <h4>Cantante Argentino</h4>
        </div>
    </div>
    <div class="carousel-item">
      <img src="img/portada/Lit Killah.jpg" class="d-block w-100" alt="..." style="width: 1920px; height: 657px;">
      <div class="carousel-caption d-none d-md-block">
          <h1 style="color: #ff0000;">Lit Killah</h1>
          <h4>Cantante Argentino</h4>
        </div>
    </div>
  </div>
</div>

 </section><br>



<section id="Biografia">
<!--/ BIOGRAFIA /-->
<div class="spinner-grow text-warning" role="status" style="width: 100%; height: 100%;">
   <span class="sr-only">Loading...</span>
  <h1 style="color: black;font-family: 'Bree Serif', serif;" align="center">BIOGRAFIA</h1>
  </div>
<br><br>
<div class="container">
  

<div class="efecto-sombra1 mb-3" style="max-width: 100%; max-height: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <div class="card middle">
      <div class="front">
        <img src="img/biografia/bio_khea.jpg" alt="">
      </div>
      <div class="back">
        <div class="back-content middle">
          <h2 style="font-family: 'Anton', sans-serif;">KHEA</h2>
          <span style="font-family: 'Noto Sans SC', sans-serif;">Redes Sociales</span>
          <div class="sm">
           
            <a href="https://www.youtube.com/channel/UCLbGdCqw-hfCrWlqRwOM2-Q" target="_BLANK"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/khea.yf/?hl=es-la" target="_BLANK"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" align="center">Biografia Khea</h5>
        <p class="card-text" align="center">Ivo Alfredo Tomas nació en el año 2000 en Buenos Aires y a sus 18 años ya suma una carrera espectacular. En muy poco tiempo, Khea se ha convertido en uno de los traperos indispensables del trap argentino. Empezó como muchos otros jóvenes de Argentina, forjando su carrera en las calles, creciendo para darse una identidad..<br>

KHEA ES UNO DE LOS ARTISTAS MÁS JÓVENES Y CON MÁS TALENTO DEL TRAP EN ARGENTINA. REVOLUCIONÓ LA ESCENA DESDE MUY JOVEN. HA PUESTO PUNTO Y A PARTE EN EL PANORAMA GRACIAS A SU ESTILO ÍNTIMO Y A SU FLOW LATINO. ESTE ARTISTA YA HA COLABORADO CON CANTANTES COMO BAD BUNNY, CAZZU O DUKI.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
     
    </div>
  </div>
</div>

<br>

<div class="efecto-sombra2 mb-3" style="max-width: 100%; max-height: 100%;">
  <div class="row no-gutters">  
     <div class="col-md-4">
      <div class="card middle">
      <div class="front">
        <img src="img/biografia/bio_khea.jpg" alt="">
      </div>
      <div class="back">
        <div class="back-content middle">
          <h2 style="font-family: 'Anton', sans-serif;">CAZZU</h2>
          <span style="font-family: 'Noto Sans SC', sans-serif;">Redes Sociales</span>
          <div class="sm">
           
            <a href="https://www.youtube.com/channel/UCLbGdCqw-hfCrWlqRwOM2-Q" target="_BLANK"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/khea.yf/?hl=es-la" target="_BLANK"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" align="center">Biografia Cazzu</h5>
        <p class="card-text" align="center">Ivo Alfredo Tomas nació en el año 2000 en Buenos Aires y a sus 18 años ya suma una carrera espectacular. En muy poco tiempo, Khea se ha convertido en uno de los traperos indispensables del trap argentino. Empezó como muchos otros jóvenes de Argentina, forjando su carrera en las calles, creciendo para darse una identidad..<br>

KHEA ES UNO DE LOS ARTISTAS MÁS JÓVENES Y CON MÁS TALENTO DEL TRAP EN ARGENTINA. REVOLUCIONÓ LA ESCENA DESDE MUY JOVEN. HA PUESTO PUNTO Y A PARTE EN EL PANORAMA GRACIAS A SU ESTILO ÍNTIMO Y A SU FLOW LATINO. ESTE ARTISTA YA HA COLABORADO CON CANTANTES COMO BAD BUNNY, CAZZU O DUKI.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
      
    </div>
   
  </div>
</div>

<br>

<div class="efecto-sombra3 mb-3" style="max-width: 100%; max-height: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <div class="card middle">
      <div class="front">
        <img src="img/biografia/bio_Lit Killah.jpg" alt="">
      </div>
      <div class="back">
        <div class="back-content middle">
          <h2 style="font-family: 'Anton', sans-serif;">Lit Killah</h2>
          <span style="font-family: 'Noto Sans SC', sans-serif;">Redes Sociales</span>
          <div class="sm">
           
            <a href="https://www.youtube.com/channel/UCExVswmCLmkkoBkjBp3Ta9Q" target="_BLANK"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/litkillah/?hl=es-la" target="_BLANK"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" align="center">Biografia Lit Killah</h5>
        <p class="card-text" align="center">Mauro Román Monzón (González Catán, Provincia de Buenos Aires; 4 de octubre de 1999), más conocido por su nombre artistico Lit Killah, es un cantante y freestyler argentino, conocido como una de las revelaciones más jóvenes del rap y trap en su país. El argentino destaca por su fluidez y alta velocidad al improvisar.
<br>

KHEA ES UNO DE LOS ARTISTAS MÁS JÓVENES Y CON MÁS TALENTO DEL TRAP EN ARGENTINA. REVOLUCIONÓ LA ESCENA DESDE MUY JOVEN. HA PUESTO PUNTO Y A PARTE EN EL PANORAMA GRACIAS A SU ESTILO ÍNTIMO Y A SU FLOW LATINO. ESTE ARTISTA YA HA COLABORADO CON CANTANTES COMO BAD BUNNY, CAZZU O DUKI.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
      
    </div>
  </div>
</div>


</div>
</section>
<br>


<section id="Galeria">
    <div class="spinner-grow text-warning" role="status" style="width: 100%; height: 100%;">
   <span class="sr-only">Loading...</span>
  <h1 style="color: black;font-family: 'Bree Serif', serif;" align="center">GALERIA</h1>
  </div><br><br>

  <!--/ GALERIA /-->
    <div class="container">
        <div class="row">

          <div class="col-md-4">
                <a  href="img/bio_Li Killah.jpg"  data-toggle="modal" data-target="#exampleModalScrollable">
                    <div>
                      <img src="img/bio_Lit Killah.jpg" alt="Mascotas 1" class="card-img">
                    </div>
                </a >
                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content" >
                      
                      <div class="modal-body">
                        <div class="work-box work-img">
                        <img src="img/galeria/Lit Killah.jpg" alt="Mascotas 1" class="card-img" >
                      </div>
                      </div>
                    </div>
                  </div>
                </div>     
         </div>

        <div class="col-md-4">
            <a  href="img/bio_Lit Killah.jpg"  data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="work-box work-img">
                <img src="img/bio_Lit Killah.jpg" alt="Mascotas 1" class="card-img">
                </div>
            </a >
            <!-- Modal -->
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content" >
                  <div class="modal-body">
                      <img src="img/bio_Lit Killah.jpg" alt="Mascotas 1" class="card-img">
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-md-4">
              <a  href="img/bio_Lit Killah.jpg"  data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="work-box work-img">
                  <img src="img/bio_Lit Killah.jpg" alt="Mascotas 1" class="card-img">
                </div>
              </a >
            <!-- Modal -->
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content" >
                  <div class="modal-body">
                    <img src="img/galeria/Lit Killah.jpg" alt="Mascotas 1" class="card-img" >
                  </div>
                </div>
              </div>
            </div>
        </div>

    </div>
  </div>

  
  <div class="container"> 
        <div class="row">

            <div class="col-md-4">
                <a  href="img/bio_Lit Killah.jpg"  data-toggle="modal" data-target="#exampleModalScrollable">
                  <div class="work-box work-img">
                    <img src="img/bio_Lit Killah.jpg" alt="Mascotas 1" class="card-img">
                  </div>
                </a >
                  <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content" >
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <img src="img/galeria/Lit Killah.jpg" alt="Mascotas 1" class="card-img" >
                          </div>
                        </div>
                      </div>
                    </div>     
            </div>


            <div class="col-md-4">
                <a  href="img/bio_Lit Killah.jpg"  data-toggle="modal" data-target="#exampleModalScrollable">
                  <div class="work-box work-img">
                    <img src="img/bio_Lit Killah.jpg" alt="Mascotas 1" class="card-img">
                  </div>
                </a >
                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <img src="img/galeria/Lit Killah.jpg" alt="Mascotas 1" class="card-img" >
                      </div>
                    </div>
                  </div>
                </div>  
            </div>

            <div class="col-md-4">
                <a  href="img/bio_Lit Killah.jpg"  data-toggle="modal" data-target="#exampleModalScrollable">
                  <div class="work-box work-img">
                    <img src="img/bio_Lit Killah.jpg" alt="Mascotas 1" class="card-img">
                  </div>
                </a >
              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content" >
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="img/galeria/Lit Killah.jpg" alt="Mascotas 1" class="card-img" >
                    </div>
                  </div>
                </div>
              </div>   
        </div>

    </div>  
  </div>

  <div class="container">  
        <div class="row">

              <div class="col-md-4">
                  <a  href="img/bio_Lit Killah.jpg"  data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="work-box work-img">
                      <img src="img/bio_Lit Killah.jpg" alt="Mascotas 1" class="card-img">
                    </div>
                  </a >
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                      <div class="modal-content" >
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img src="img/galeria/Lit Killah.jpg" alt="Mascotas 1" class="card-img" >
                        </div>
                      </div>
                    </div>
                  </div>     
              </div>


        <div class="col-md-4">
                <a  href="img/bio_Lit Killah.jpg"  data-toggle="modal" data-target="#exampleModalScrollable">
                  <div class="work-box work-img">
                   <img src="img/bio_Lit Killah.jpg" alt="Mascotas 1" class="card-img">
                  </div>
                </a >
                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <img src="img/galeria/Lit Killah.jpg" alt="Mascotas 1" class="card-img" >
                      </div>
                    </div>
                  </div>
                </div>
        </div>

        <div class="col-md-4">
                <a  href="img/bio_Lit Killah.jpg"  data-toggle="modal" data-target="#exampleModalScrollable">
                  <div class="work-box work-img">
                    <img src="img/bio_Lit Killah.jpg" alt="Mascotas 1" class="card-img">
                  </div>
                </a >
                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <img src="img/galeria/Lit Killah.jpg" alt="Mascotas 1" class="card-img" >
                      </div>
                    </div>
                  </div>
                </div>
        </div>

    </div>
  </div>
</section>


<section id="Registrate" style="background-color: #41228e;">
  <div class="spinner-grow text-warning" role="status" style="width: 100%; height: 100%;">
   <span class="sr-only">Loading...</span>
  <h1 style="color: black;font-family: 'Bree Serif', serif;" align="center">Registrate</h1>
  </div><br><br>

  <div class="container" >
      <div class="row">
            <div class="col-md-12">
<form action="registro.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress" style="color: #fff;">Usuario</label>
      <input type="text" class="form-control" id="inputAddress" name="usuario" placeholder="Usuario" required="" style="background-color: transparent;color: #fff;">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"style="color: #fff;">Clave</label>
      <input type="password" class="form-control" id="inputPassword4" name="clave" placeholder="Password" required="" style="background-color: transparent; color: #fff;">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" style="color: #fff;">Nombre</label>
    <input type="text" class="form-control" id="inputAddress" name="nombre" placeholder="Nombre" required="" style="background-color: transparent; color: #fff;">
  </div>
  <div class="form-group">
    <label for="inputAddress" style="color: #fff;">Apellido </label>
    <input type="text" class="form-control" id="inputAddress" name="apellido" placeholder="Apellido" required="" style="background-color: transparent; color: #fff;">
  </div>
  
  <div class="form-group">
    <label for="inputAddress" style="color: #fff;">Correo </label>
    <input type="email" class="form-control" id="inputAddress" name="correo" placeholder="Correo" required="" style="background-color: transparent;color: #fff;">
  </div>
  <script type="text/javascript">
    <?php echo $var ?>
  </script>
  <button type="submit" class="btn logbtn1 btn-rounded btn-block my-4 waves-effect z-depth-0" >Registrar</button><br>
</form>

            </div>        
      </div>
  </div>

</section>
















<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <script type="text/javascript">
   
 </script>

</body>
</html>