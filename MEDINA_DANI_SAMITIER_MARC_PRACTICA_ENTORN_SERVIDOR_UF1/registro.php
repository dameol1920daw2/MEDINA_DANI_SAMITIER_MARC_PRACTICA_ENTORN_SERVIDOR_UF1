<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title>Registro</title>
	</head>
	<body>
		<?php
			$nombreFichero="usuariosregistrados.txt";
			$email = $_POST["usuario"];
			$passwd = $_POST["contra"];
			if(isset($_POST["sub"])) {
				$usuario=$email.";".$passwd.";"."\r\n";
				if (file_exists($nombreFichero)){
					$oFichero=fopen($nombreFichero,"a") or die ("No se ha podido añadir un nuevo usuario");
					fwrite($oFichero,$usuario);
					fclose($oFichero);
					echo "Nuevo usuario: <b>".$email."</b><br>";
					echo "Serás reedirigido a la página para loguearte";
					header('refresh: 3; url=./login.html');
				}
			}
		?>
	</body>
</html>