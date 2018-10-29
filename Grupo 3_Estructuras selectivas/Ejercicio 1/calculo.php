
<?php

			
     $x=$_POST["x"];
     $b=$_POST["b"];

      echo "x es  $x";
      echo "<br>";
      echo "b es  $b";
      echo "<br>";

      $primera= $x*$x;
      $segunda=2*$x;

      $ecuacion= $primera + $segunda + $b;
      echo "<br>";
      echo "El resultado de x*2+2x+b es  : " . $ecuacion;


  


?>