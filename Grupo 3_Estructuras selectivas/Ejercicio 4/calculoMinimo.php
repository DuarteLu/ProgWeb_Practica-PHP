
<?php

			
     $numero1=$_POST["numero1"];
     $numero2=$_POST["numero2"];
     $numero3=$_POST["numero3"];
     
     //$valor = min($numero1,$numero2,$numero3);

    //echo "el Minimo valor es : $valor";

  


  $minimo= 0;

  if($numero1< $numero2)
  	     {
  	  	  $minimo= $numero1;
  	  	      if($minimo >$numero3)
  	  	      	    $minimo= $numero3;
  	     }

  else
      {
         $minimo=$numero2;
            if($minimo >$numero3)
  	  	      	    $minimo= $numero3;
         }

         echo "el minimo valor es: $minimo";
?>