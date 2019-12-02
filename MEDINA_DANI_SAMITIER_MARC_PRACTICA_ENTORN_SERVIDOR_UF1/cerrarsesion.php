<html>
	<head>
		<meta content="text/html" charset="UTF-8">
		<title>Cerrar Sesión</title>
	</head>
	<body>
		<?php
			session_start();
			$_SESSION["login"]=false;
			session_destroy();
			echo "Has salido de la página\n";
			header('Location: ./login.html');
		?>
	</body>
</html>	
