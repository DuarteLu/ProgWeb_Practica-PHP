
<?php

			
     $numero1=$_POST["numero1"];
     $numero2=$_POST["numero2"];
     $numero3=$_POST["numero3"];
     
    // $valor =max($numero1,$numero2,$numero3);

    // echo "el maximo es : $valor";

  


  $maximo= 0;

  if($numero1> $numero2)
  	     {
  	  	  $maximo= $numero1;
  	  	      if($maximo <$numero3)
  	  	      	    $maximo= $numero3;
  	     }

  else
       {
         $maximo=$numero2;
            if($maximo <$numero3)
  	  	      	    $maximo= $numero3;
         }

         echo "el maximo valor es: $maximo";
?>