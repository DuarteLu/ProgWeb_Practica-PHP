<?PHP

require 'conexion.php';

session_start();

$user = $_POST["usuario"];


	$sql = "SELECT * FROM usuario WHERE nombre='$user'";
	$resultado = $mysqli->query($sql);

	while($row = $resultado->fetch_array(MYSQLI_ASSOC)){

	if($row['nombre']==$user )
	{
			$_SESSION['nombre'] = $user;
 			header('Location: welcome.php');
			exit;
	}
	else
	{
		header('Location: logout.php');
		exit;
	}
}	
?>





