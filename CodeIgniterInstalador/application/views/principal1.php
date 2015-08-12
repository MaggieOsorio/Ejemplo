
	<html>
		<head>
			<title> Instalador 1</title>
			<link type="text/css" href="http://localhost/CodeIgniter2/resources/bootstrap/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
	
			<link type="text/css" rel="stylesheet" href="CodeIgniter2/resources/bootstrap/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
			
		</head>
		
		<div class="row">
			<body>
				
				
				<div class="col-md-4 col-md-offset-4">
				<?php echo validation_errors(); ?>
				<?php echo form_open('instalador1/valida'); ?>
					<h1>Instalaci&oacute;n</h1>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<h3>Iniciar Sesi&oacute;n</h3>
				</div>
				
				
				<div class="col-md-4 col-md-offset-4">				
					<div class="form-group" >
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" />
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="form-group" >
						<label>Password</label>
						<input type="text" name="password" class="form-control" />
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="form-group"  >
						<input type="submit" value="Iniciar"/>
					</div>
				
				</form>
			</body>
		</div>
	</html>

