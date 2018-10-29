<?php


     
  for($a=1; $a<= 20; $a++)
         {
              $numero = rand(25,30);

              echo "<br>";
              echo "<br>";
              echo "Numero aleatorio es $numero";
              echo "<br>";
              echo "Numero de 1 a 20 es: $a";
              echo "<br>";

              $numero2  =$numero * $a ;
              echo "El resultado de la multiplicacion es :";
              echo "$numero2";

              echo "<br>";
         }  
?>