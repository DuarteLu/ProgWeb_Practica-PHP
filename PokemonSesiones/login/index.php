<?php

	
	session_start(); //Iniciar una nueva sesión o reanudar la existente
	
	if(isset($_SESSION["id_usuario"])){ //En caso de existir la sesión redireccionamos
		header("Location: welcome.php");
	}
	
	
	if(!empty($_POST))
	{
		$usuario = $mysqli->real_escape_string($_POST['usuario']);
			
	}
	
?>
<html>
	<head>
		<title>Login</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		
	</head>
	
	<body>
		
		<div class="container"> 

   
			<div id="loginbox" style="margin-top:20px;" class="mainbox col-md-3 col-md-offset-2 col-sm-4 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Iniciar Sesi&oacute;n</div>
						
					</div>     
				
				<div style="padding-top:30px" class="panel-body" >
					
					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-6"></div>
					
					<form id="loginform" class="form-horizontal" role="form" action="login.php" method="POST" autocomplete="off">
						
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="nombre" required>                                        
						</div>
						
						<div style="margin-top:10px" class="form-group">
							<div class="col-sm-12 controls">
								<button id="btn-login" type="submit" class="btn btn-primary">Iniciar Sesi&oacute;n</a>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-12 control">
							</div>

						</div>    
					</form>
				</div>                     
				</div>  
				</div>
				</div>

				 <div class="container">
                             <h2>Los Pokemones a buscar pueden ser :</h2>
                               <ol>
		    	               <li>Picachu</li>
                               <li>Rattata</li>
                               <li>Charmander</li>
                                <li>Bulbasaur</li>
                               </ol>
		    	            
		    	                
		    	<br>
					
					<form method ="GET" action="buscarpok.php" >
					<div >
					<input  type ="text" id="nombre" name="whoisthatpokemon" placeholder="Pokemon" required >	
                    </div>
                    <br>
                  
                    <input type="submit" name="submit" class="btn btn-primary" value="Buscar"><br>
                
                   </div>
   
                   </form>
                
			</div>		
				<script src="js/bootstrap.min.js" ></script>
				</body>
</html>						