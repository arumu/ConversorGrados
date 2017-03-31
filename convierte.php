<?php

//Definición variables
@$celsius=$_POST["celsius"];
@$fahrenheit=$_POST["fahrenheit"];
$numero=$_POST["numero"];
$vminimo=-500; // Permite variar el limite inferior de temperatura
$vmaximo=10000;// Permite variar el limite superior de temperatura

//Control de errores
try{
    if (empty($numero)&& ($numero!=='0'))
        throw new Exception("Debe introducir un valor a convertir") ;
} catch (Exception $ex) {
    echo $ex->getMessage();
    exit();
}
try { 
    if(!is_numeric($numero))
    throw new Exception("El valor debe ser numérico");
}
 catch (Exception $en){
     echo $en->getMessage();
     exit();
 }

try{
    if(($numero<$vminimo) || ($numero>$vmaximo))
    throw new Exception("El valor a convertir debe estar comprendido entre ".$vminimo." y ".$vmaximo );
}
 catch (Exception $ev){     
    echo $ev->getMessage();
    exit();
 }


//Conversión
if ($celsius){
    $resultado=($numero-32)*0.556;
    echo $numero." grados Farenheit son ".$resultado." grados Celsius";
	}
if ($fahrenheit){
    $resultado=($numero*1.8)+32;
echo $numero." grados Celsius son ".$resultado." grados Farenheit";
	
}
?>


