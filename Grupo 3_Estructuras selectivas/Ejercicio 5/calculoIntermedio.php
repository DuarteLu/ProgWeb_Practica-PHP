
<?php
     
			
     $numero1=$_POST["numero1"];
     $numero2=$_POST["numero2"];
     $numero3=$_POST["numero3"];
     
 
   $intermedio=0;

  if($numero1< $numero2 )
         {
              if($numero2 <$numero3)
                   $intermedio= $numero2;
                  else
                    $intermedio=$numero3;
                 
         }

  else
      {
            if($numero1 <$numero3)
                    $intermedio= $numero2;
                    else
                    $intermedio=$numero3;
                  
         }

echo " El numero intermedio es :$intermedio";
?>