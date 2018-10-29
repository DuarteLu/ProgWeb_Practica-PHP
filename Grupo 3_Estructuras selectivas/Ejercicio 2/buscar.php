
<?php

			
     $autor=$_POST["autor"];
     
     $autores =array(array("Borges","El Aleph"),
                     array("Galeano","Las venas abiertas de America Latina"),
                     array("Garcia Marquez","Cien años de soledad"),
                     array("Poe","Los crimenes de la calle Morgue"),
                     array("Rowling","Harry Potter y la piedra filosofal"),
                     array("Martin","Juego de tronos"),
                     array("Tolkien","El señor de los añillos" ));




for($fila=0; $fila<count($autores);$fila++)
    {

    for($columna=0;$columna<count($autores[$fila]);$columna++)
    	{
         
    	
    		if($autor== $autores[$fila][$columna])
               {
                      echo" El libro se titula :";
                      echo $autores[$fila][1];
                    }

        }
    }
  
 

?>