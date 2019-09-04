<?php
	// inicia la sesion
    session_start();
    
    // destruye la sesion
    session_destroy();
    echo '<script>alert("Cerrando sesión"); </script>';    
    echo '<script>window.location="index.php"; </script>';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Saliendo....</title>
    <meta charset="utf-8">
</head>
<body>
    <script language="javascript">location.href="index.php"</script>
</body>
</html>
