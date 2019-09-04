<?php
	include "conexion.php";

		$usuario=mysqli_real_escape_string($conexion,$_POST['usuario']);
	$clave=md5(mysqli_real_escape_string($conexion,$_POST['clave']));
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];


	if (buscaRepetido($usuario,$clave,$conexion)== 1){
		echo '<script>alert("EL USUARIO YA EXISTE"); </script>';
		echo '<script>window.location="index.php"; </script>';
	}else{
		$insertar ="INSERT INTO usuario(nombre,apellido,correo,usuario,clave) VALUES ('$nombre','$apellido','$correo','$usuario','$clave')";
		 $resultado = mysqli_query($conexion,$insertar);;
		echo '<script>alert("REGISTRADO"); </script>';
		echo '<script>window.location="index.php"; </script>';
	}
	

	function buscaRepetido($user,$pass,$conexion){
		$insertar="SELECT * FROM usuario WHERE usuario='$user'and 
				clave='$pass'";
		$resultado = mysqli_query($conexion,$insertar);
		if (mysqli_num_rows($resultado) > 0) {
			return 1;
		}else{
			return 0;
		}
	}		

?>