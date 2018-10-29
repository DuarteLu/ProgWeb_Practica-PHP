
<?php

			
     $base=$_POST["base"];
       $base2=$_POST["base2"];
     $altura=$_POST["altura"];

      echo "Base $base";
      echo "<br>";
      echo "Altura $altura";
      echo "<br>";
      $area = ($base + $base2 )/2 *$altura ;
      echo "El resultado es : " . $area;


  


?>