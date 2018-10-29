
<?php

			
     $numero=$_POST["numero"];
      
    //$potencia = pow($numero,$numero);

   // echo "la potencia es $potencia";


      $potencia=1; 

      for( $i=0;$i< $numero;$i++){ 
         $potencia*=$numero; 
      }
     
    echo "la potencia es $potencia";
    echo "<br>";
    echo "<br>";

  for($a=1; $a<= $potencia; $a++)
         {
              $numero2 =$numero *$a;
              echo "$numero2";
              echo "<br>";
         }  
?>