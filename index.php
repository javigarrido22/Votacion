<?php
include("conex.php");
$query=mysqli_query($mysqli,"Select * from region");
?>
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
<form action="" method="post">
<h1>Formulario Votación</h1>
<!-- Valida que campo Nombre no este vacío-->
	<p>Nombre Completo<input id="nombre" type="text" name="nombre" required/></p>
<!--campo acepta letras y numeros. debe tener mas de 5 caracteres-->
<script>
    function NroLetras(e)
    {
        key= e.keyCode || e.wich;
        tecla = String.fromCharCode(Key).toString();
        LNros = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyzáéíóúÁÉÍÓÚ0987654321";

        especiales =[];
        tecla_especial = false
        for (var i in especiales){
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
        }
        if(NroLetras.indexOf(tecla)== -1 && !tecla_especial){
            alert("Debes ingresar solo letras y números");
            return false;
        }
    }
</script>
<p>Alias<input id="alias" type="text" name="alias" minlength="5" onekeypress="return NroLetras(event);" required/></p>

	<p>Rut<input type="text"name="rut"/></p>

<!--Valida formato email-->
<script>
    function ValidaCorreo(correo){
        var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
        var EsValido=expReg.test(correo);
        if(esvalido==true){
            alert ('El Email ingresado es válido');
        }else{
            alert ('El Email ingresado NO es válido');
        }
        
    }
</script>

<p>Email<input id="email" class="form" type="text"name="email" required/></p>

<!--desplegables. Trae opciones desde base de datos-->
<div >
    <select name="region">
        <?php while($datos=mysqli_fetch_array($query))
            {?> 
                <option value="<?php echo $datos['proxied_user']?>"><?php echo $datos['grantor']?></option>
        <?php

            }
        ?>
    </select>
 </div>

    <!--Seleccion de cuadros-->
	<form method="post" action="/send/">
	 <p>Como se enteró de nosotros <input type="checkbox" name="nosotros">Web
     <input type="checkbox" name="nosotros">TV
     <input type="checkbox" name="nosotros">Redes sociales
     <input type="checkbox" name="nosotros">Amigos
    <p>
	</form>
    <!--Boton de envio-->
    
	<input type="submit" name="enviar" class="btn" value="Votar" onclick="ValidaCorreo(form.correo.value)">
</body>
</html>