<?php
session_start();
//si quiere cerrar por el url pero si la sesion esta iniciaa te mande al index2

?>
<html>
	<head>
		<title>BIENVENIDOS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body >
		<?php
			include('conexion.php');
				if(isset($_POST['submit'])){
                    
					$usuario=mysqli_real_escape_string($conexion,$_POST['usuario']);
					$clave=md5(mysqli_real_escape_string($conexion,$_POST['clave']));
					

                    $registros =mysqli_query( $conexion,"SELECT usuario,clave FROM usuario WHERE usuario ='$usuario' AND clave='$clave'");
                    if(mysqli_num_rows($registros)>0) {  
                       
                      $row = mysqli_fetch_array($registros);
						$_SESSION["usuario"] = $row['usuario'];
						echo '<script>alert("Usuario correcto"); </script>';
					echo '<script>window.location="index2.php"; </script>';	
                    }
                   
                    else{
                        echo '<script>alert("Usuario incorrecto"); </script>';
						echo '<script>window.location="index.php"; </script>';	
                    }
				}
		
		?>
</body>
</html>
