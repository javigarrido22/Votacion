<!DOCTYPE html>
<html leng="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORMULARIO DE VOTACIÓN:</title>
	<meta charset="utf-8">
</head>
<body>
<!-- Creación formulario-->
<form action="votacion.php" method="post">
	<p>Nombre y Apellido<input type="text" name="nombrecompleto"/></p>
	<p>Alias<input type="text" name="alias"/></p>
	<p>Rut<input type="text"name="rut"/></p>
	<p>Email<input type="text"name="email"/></p>
<!--desplegables-->
  <select name="region">
  <option value="0"> Seleccione</option>
<?php
    include("conexion.php");
    $region="select * from regiones";
    $resultado=mysqli_query($conexion,$region);
    while($valores=mysqli_fetch_array($resultado)){
        echo '<option value="'.$valores[region].'">'.$valores[region].'</option>';
    }
    ?>
    </select>
    <select name="Comuna">
    <option value="0"> Seleccione</option>
<?php
    include("conexion.php");
    $comuna="select * from comunas";
    $resultado=mysqli_query($conexion,$comuna);
    while($valores=mysqli_fetch_array($resultado)){
        echo '<option value="'.$valores[comuna].'">'.$valores[comuna].'</option>';
    }
    ?>
    </select>
    </select>
    <select name="Candidato">
    <option value="0"> Seleccione</option>
<?php
    include("conexion.php");
    $candidato="select * from candidato";
    $resultado=mysqli_query($conexion,$candidato);
    while($valores=mysqli_fetch_array($resultado)){
        echo '<option value="'.$valores[candidato].'">'.$valores[candidato].'</option>';
    }
    ?>
    </select>
    <!--Seleccion de cuadros-->
	<form method="post" action="/send/">
	 <p>Como se enteró de nosotros <input type="radio" name="nosotros">Web
     <input type="radio" name="nosotros">TV
     <input type="radio" name="nosotros">Redes sociales
     <input type="radio" name="nosotros">Amigos
    <p>
	</form>
    <!--Boton de envio-->
	<p><input type="submit" name="enviar" class="btn" value="Votar"></p>
</form>
</body>
</html>