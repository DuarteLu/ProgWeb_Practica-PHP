<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM pokemon WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="tipo" class="col-sm-2 control-label">Tipo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tipo" name="tipo" placeholder="tipo" value="<?php echo $row['tipo']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="genero" class="col-sm-2 control-label">Genero</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="genero" name="genero" placeholder="genero" value="<?php echo $row['genero']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="ataque" class="col-sm-2 control-label">Ataque</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ataque" name="ataque" placeholder="Ataque" value="<?php echo $row['ataque']; ?>" >
					</div>
				</div>
			
		
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="welcome.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>