<?php

			
     $variable1=$_POST["variable1"];
     $variable2=$_POST["variable2"];

      echo "Variable 1 es : $variable1";
      echo "<br>";
      echo "Variable 2 es : $variable2";
      echo "<br>";
      $variable3= $variable1;
      $variable1=$variable2;
      $variable2=$variable3;
      
      echo "<br>";

      echo "Despues del intercambio:";
      echo "<br>";
        echo "<br>";

        echo "Variable 1 es : $variable1";
         echo "<br>";
        echo "Variable 2 es : $variable2";

  


?>