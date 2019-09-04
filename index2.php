<?php 
		session_start();
		include('conexion.php');
		/*
		error_reporting(0);
		$varsesion= $_SESSION['usuario'];
		
		if ($varsesion == null || $varsesion='') {
			echo '<script>alert("NO TINE AUTORIACION"); </script>';
			echo '<script>window.location="index.php"; </script>';
			die();

		}
		*/
 
//si la sesion esta iniciada muestra esto    
if(isset($_SESSION['usuario'])){
    
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>MUSICA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" href="js/bootstrap.js">

  	<style type="text/css">@import url('https://fonts.googleapis.com/css?family=Amatic+SC');

body {
	margin: 0;
	height: 100%;
	background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%);
	background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
.button_container {
	position: fixed;
  left: 53%;
  right: 0;
  top: 22%;

}


.btn {
  border: none;
  display: block;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
  outline: none;
  overflow: hidden;
  position: relative;
  color: #fff;
  font-weight: 700;
  font-size: 15px;
  
  padding: 20px 140px;
  margin: 0 auto;
  box-shadow: 0 5px 15px rgba(0,0,0,0.20);

}

.btn span {
  position: relative; 
  z-index: 1;

}

.btn:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 850%;
  width: 135%;
  background: #55E6C1;

  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
  transform: translateX(-98%) translateY(-25%) rotate(45deg);
}

.btn:hover:after {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
  transform: translateX(-9%) translateY(-25%) rotate(45deg);

}

/*----*/
.btn1 {
  border: none;
  display: block;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
  outline: none;
  overflow: hidden;
  position: relative;
  color: #fff;
  font-weight: 700;
  font-size: 15px;
  background-color: #222;
  padding: 20px 140px;
  margin: 0 auto;
  box-shadow: 0 5px 15px rgba(0,0,0,0.20);

}

.btn1 span {
  position: relative; 
  z-index: 1;

}

.btn1:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 850%;
  width: 135%;
  background: #78c7d2;

  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
  transform: translateX(-98%) translateY(-25%) rotate(45deg);
}

.btn1:hover:after {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
  transform: translateX(-9%) translateY(-25%) rotate(45deg);

}

</style>
</head>
<body>



		<div class="container"style="top: 10%;">
			<div class="row" style="top: 10%;">
				<div class="col-md-10" >
					<h1 style="top: 10%;">  BIENVENIDO:    
            <?php
    echo $_SESSION['usuario'];
    

?> 
<button  class="btn" style="margin:0;">

		<span><a href="cerrar.php" style="text-decoration: none;color: black;">Cerrar</a>
			
		
	</span>
	</button>


	
</h1>
				</div>
				
			</div>
		</div>

	



<br>



	<div class="container"">
			<div class="row" >
				<div class="col-md-12" >

	<button class="btn">

		<span><a href="index4.html" style="text-decoration: none;color: black;">Reggueton</a>
			
		
	</span>
	</button><br>
	<button class="btn">
		<a href="index4.html" style="text-decoration: none;color: black;"></a>

		<span><a href="index4.html" style="text-decoration: none;color: black;">Reggueton</a>
			
		
	</span>
	</button><br>
	<button class="btn">

		<span><a href="index4.html" style="text-decoration: none;color: black;">Reggueton</a>
			
		
	</span>
	</button><br>
	<button class="btn">

		<span><a href="index4.html" style="text-decoration: none;color: black;">Reggueton</a>
			
		
	</span>
	</button><br>
	<button class="btn">

		<span><a href="index4.html" style="text-decoration: none;color: black;">Reggueton</a>
			
		
	</span>
	</button><br>
	<button class="btn">

		<span><a href="index4.html" style="text-decoration: none;color: black;">Reggueton</a>
			
		
	</span>
	</button><br>
  


</div></div></div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php
//pero si la sesion no esta iniciada y quiere abrirla por el url, no se va poder y mandara al index
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>

 