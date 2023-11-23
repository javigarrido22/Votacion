<?php
$mysqli = mysqli_connect("localhost","root","admin","formulario");
if($mysqli)
    echo"Conectado";
else
    echo "Sin conexión";
?>