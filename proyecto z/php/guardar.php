<?php

include("abre.php");
$sexo     = $_POST['sexo'];
$edad  = $_POST ['edad'];
$pais     = $_POST['pais'];
$idioma      = $_POST['idioma'];
$apartado    = $_POST['apartado'];
$experiencia         = $_POST['experiencia'];
$aporte      = $_POST['aporte'];



$consulta = "INSERT INTO encuesta(sexo,edad,pais,idioma,apartado,experiencia,aporte) VALUES
('$sexo','$edad','$pais','$idioma','$apartado','$experiencia','$aporte')";

/*$consulta = "INSERT INTO Encuesta(Nombre) VALUES ('$Nombre')";*/

if($conexion->query($consulta) === TRUE){
/*    header("Location: index.php"); */
}else{
    echo "Error:".$consulta."<br>".$conexion->error;
}

$conexion->close();

?>