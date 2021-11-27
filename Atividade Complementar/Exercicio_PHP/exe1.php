<?php
$val = -69;
$resultado = "";
if($val >0){
    $resultado = "valor positivo";
}elseif($val <0){
    $resultado = "valor negativo";
}else{
    $resultado="Igual a zero";
}
?>
<h1><?=$resultado;?></h1>