
<?php

$pokemons = array('Charmander' => array(
    'tipo' => 'fuego',
    'genero' => 'masculino',
    'ataque' => 'llamarada',
    'imagen'=>"img/charmander.png"
),
'Picachu' => array(
    'tipo' => 'electrico',
    'genero' => 'masculino',
    'ataque' => 'trueno',
    'imagen'=>"img/pikachu.png"
),
'Rattata' => array(
    'tipo' => 'Raton',
    'genero' => 'masculino',
    'ataque' => 'Fuga',
    'imagen'=>"img/rattata.png"
));


if(isset($_GET['whoisthatpokemon'])) {

        $buscado = $_GET['whoisthatpokemon'];

        foreach($pokemons as $pokemon => $charmander ) {
                  if( $pokemon == $buscado)

                           {   
                               echo "El pokemon es :  $buscado";
                               echo '<br><br>';
                               echo " Tipo  :". $pokemons[$buscado]['tipo'];
                               echo '<br><br>';
                               echo " Genero:".$pokemons[$buscado]['genero'];
                               echo '<br><br>';
                               echo "Ataque:".$pokemons[$buscado]['ataque'];
                               echo '<br><br>';
                               echo "<img src=".$pokemons[$buscado]['imagen'].">";  
                                echo '<br><br>';
                                   
                     }
 
        }
    }   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Tarjetas Pokemon</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
     <link rel="stylesheet" href="css/bootstrap-theme.min.css" >
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
</head>
<body>
<div class="contenedor">

<a  href="index.php" class="btn btn-primary btn-lg " role="button">Volver a la pagina anterior</a>

</div>
</body>

</html>
