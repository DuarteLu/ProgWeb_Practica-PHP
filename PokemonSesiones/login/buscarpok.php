
<?php
  require 'conexion.php';
  
  $where = "";

  
  if(!empty($_GET))
     {
         $valor = $_GET['whoisthatpokemon'];
             if(!empty($valor)){
                 $where = "WHERE nombre ='$valor'";
                   }
     }
          $sql = "SELECT * FROM pokemon $where";

          $resultado = $mysqli->query($sql);
        

       
  
?>

<html>
  <head>
    <title>Busqueda de Pokemon</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" >
        
  </head>
  
  <body>
     
      <div class="container"  >
      <div class="row table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Tipo</th>
              <th>Genero</th>
              <th>Ataque</th>
              <th> </th>
              <th></th>
            </tr>
          </thead>
          
          <tbody>
            
                 <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
              <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['tipo']; ?></td>
                <td><?php echo $row['genero']; ?></td>
                <td><?php echo $row['ataque']; ?></td>
          
                <?php echo "<img src=".$row['imagen'];">" ?>
            

            <?php } ?>

          </tbody>
        </table>
      </div>
     </div>
           
            <a  href="index.php" class="btn btn-primary btn-lg " role="button">Volver a la pagina anterior</a>
      </div>    
        <script src="js/bootstrap.min.js" ></script>
        </body>
</html>           



