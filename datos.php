<?php

include("conexion.php");

if (isset($_POST['registros'])){
    if(
        strlen($_POST['nombre'])>= 1&&
        strlen($_POST['alias'])>= 1&&
        strlen($_POST['rut'])>= 1&&
        strlen($_POST['email'])>= 1&&
        strlen($_POST['region'])>= 1&&
        strlen($_POST['comuna'])>= 1&&
        strlen($_POST['candidato'])>= 1&&
        strlen($_POST['nosotros'])>= 1
    ){
        $nombre = trim($_POST['nombre']);
        $alias = trim($_POST['alias']);
        $rut = trim($_POST['rut']);
        $email = trim($_POST['email']);
        $region = trim($_POST['region']);
        $comuna = trim($_POST['comuna']);
        $candidato = trim($_POST['candidato']);
        $nosotros = trim($_POST['nosotros']);
        $consulta = "INSERT INTO usuarios(nombre, alias, rut, email, region, comuna, candidato, nosotros)
        values ('$nombre' , '$alias','$rut','$email','$region','$comuna','$candidato','$nosotros')";
        $respuesta = mysqli_query($conex, $consulta);
    }   
}
?>