<html>
	<head>
		<meta content="text/html" charset="UTF-8">
		<title>Login</title>
	</head>
	<body>
		<?php
			session_start();
			$nombreFichero="usuariosRegistrados.txt";
			$email = $_POST["usuario"];
			$passwd = $_POST["contra"];
			if(isset($_POST["sub"])) {
				if (file_exists($nombreFichero)){
					$oFichero=fopen($nombreFichero,"r") or die ("No se puede leer el fichero");
					while (!feof($oFichero)){
						$usuario=explode(";",fgets($oFichero));
						if(($usuario[0] == $email) && ($usuario[1] == $passwd)){
							$_SESSION["login"] = true;
							$_SESSION["usuario"] = $email;
							header('Location: tienda.php');
						}
					}	
					fclose($oFichero);
					echo "El usuario o la contraseña son incorrectos.<br>";
					echo "Porfavor, vuelve a intentarlo";
					header('refresh: 3; url=./login.html');
				}				
			}
		?>

	</body>
</html>