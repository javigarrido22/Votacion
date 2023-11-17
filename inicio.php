<!DOCTYPE html>
<html leng="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORMULARIO DE VOTACIÓN:</title>
    <script src="/scripts/validaciones.js"></script>
	<meta charset="utf-8">
</head>
<body>
<!-- Creación formulario-->
<form action="rut.php" method="post">
	<p>Nombre y Apellido<input id="nombrecompleto" type="text" name="nombrecompleto" onekeypress="validaVacio"/></p>
    <!--valida campo nombre-->
<script>
    function validaVacio(valor) {
        valor = valor.replace("&nbsp;", "");
        valor = valor == undefined ? "" : valor;
        if (!valor || 0 === valor.trim().length) {
            return true;
            }
        else {
            return false;
            }
        }

    function validarfor(){
    var nom = document.getElementsByName("nombrecompleto")[0].value;
    
    if ( validaVacio(nombrecompleto.value) ) {  //COMPRUEBA CAMPO VACIO
        alert("El campo nombre y apellido no puede quedar vacio");
        return false;
    }
    return true;
    }
</script>
<!--campo acepta letras y numeros. debe tener mas de 5 caracteres-->
	<p>Alias<input id="alias" type="text" name="alias" minlength="5" pattern="a-zA-Z09"/></p>
	<p>Rut<input type="text"name="rut"/></p>
	<p>Email<input id="email" class="form" type="text"name="email" onekeypress="validaemail"/></p>

    <!-- valida formato email-->
    <script>
        const exprecion = /[a-zA-Z0-9._-]+\@(hotmail|gmail|outlook)\.(es|com)/;
        function validaemail(){
            const email_form = document.getElementById ('email').value;
            const valida = exprecion.test(email_form);
            if (valida === true) {
                $('#email').removeClass (is-invalid).addClass('is-valid');
            }
            else {
                $('#email').addClass('is-invalid');
            }
        }
    </script>
    <script src="https://ajax.googleapiscom/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--desplegables. Trae opciones desde base de datos-->
  <select name="region">
  <option value="0"> Seleccione</option>
<?php
    include("conexion.php");
    $region="select * from regiones";
    $resultado=mysqli_query($conexion,$region);
    while($valores=mysqli_fetch_array($resultado)){
        echo '<option value="'.$valores[$region].'">'.$valores[$region].'</option>';
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
        echo '<option value="'.$valores[$comuna].'">'.$valores[$comuna].'</option>';
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
        echo '<option value="'.$valores[$candidato].'">'.$valores[$candidato].'</option>';
    }
    ?>
    </select>
    <!--Seleccion de cuadros-->
	<form method="post" action="/send/">
	 <p>Como se enteró de nosotros <input type="checkbox" name="nosotros">Web
     <input type="checkbox" name="nosotros">TV
     <input type="checkbox" name="nosotros">Redes sociales
     <input type="checkbox" name="nosotros">Amigos
    <p>
	</form>
    <!--Boton de envio-->
	<p><input type="submit" name="enviar" class="btn" value="Votar"></p>
</form>
</body>
</html>