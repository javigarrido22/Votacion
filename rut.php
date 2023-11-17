<?php
$rut = $_POST['rut'];
$largo =strlen ('$rut');
$contar=2;
while ($rut<>0){
    $contaruno =($rut % 10)*contar;
    $acumulador=$acumulador + $contaruno;
    $rut = $rut / 10;
    $contar = $contar +1;
    if ($contar ==8){
        $contar =2;
    }
}

$division = $acumulador %11;
if($division ==0){
    $division =11;
}
$dig = 11 - $division;
$dig2 = strval ($dig);
if ($dig2 == 10) {
    $dig2 ="k"
}

?>