
<html>
	<head>
		<title>Busqueda de Pokemon</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
				
	</head>
	
	<body>
		    <div class="container">
                             <h2>Los Pokemones a buscar pueden ser :</h2>
                               <ol>
		    	               <li>Picachu</li>
                               <li>Rattata</li>
                               <li>Charmander</li>
                               </ol>
		    	            
		    	                
		    	<br>
					
					<form method ="GET" action="buscar.php" >
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