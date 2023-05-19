<?php

$conexion = new mysqli("localhost", "id20192024_juan", "69Kanade69?", "id20192024_personas");
    if($conexion){
        echo "la gestion fue exitosa !!";
         
    }else{
        echo "Fallo la gestion";
    }
?>