
<html>
	<head>
		<title>Nombre de libros segun autor</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
				
	</head>
	
	<body>
		    <div class="container">
                             <h2>Los autores a buscar pueden ser:</h2>
                             (ingresar solo apellido)
                               <ol>
		    	               <li>Jorge Luis Borges</li>
                               <li>Gabriel Garcia Marquez</li>
                               <li>Eduardo Galeano</li>
                               <li>J. R. R. Tolkien</li>
                               <li>Edgar Alan Poe</li>
                               <li>J.K. Rowling</li>
                               <li>George R. R. Martin </li>
                               </ol>
		    	            
		    	                
		    	<br>
					
					<form method ="POST" action="buscar.php" >
					<div >
					Ingrese  el autor:
					<input  type ="text" id="autor" name="autor"  >	
                    </div>
                    <br>
                  
                  <input type="submit" name="submit" class="btn btn-primary" value="Buscar"><br>
                
                   </div>
    

</form>


	
			</div>		
				<script src="js/bootstrap.min.js" ></script>
				</body>
</html>						