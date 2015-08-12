<html>
	<head>
		<title>Instalador</title>
		<!--Nos permite actualizar la pagina, cada determinado tiempo (1 seg)-->
		<!--<META HTTP-EQUIV="REFRESH" CONTENT="1">--> 
		
		<link type="text/css" href="http://localhost/CodeIgniter2/resources/bootstrap/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
	
		<link type="text/css" rel="stylesheet" href="CodeIgniter2/resources/bootstrap/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
			
	</head>
	
	<body>
	
		<h1>Instalador</h1>
		<h2><?php echo "Bienvenido ".$_POST['name']; ?></h2>
				
		<form method="post" action="http://localhost/CodeIgniterInstalador/index.php/Instalador/basedatos">
			<input type="submit" value="Instalar"/>
		</form>
		
	</body>
</html>
