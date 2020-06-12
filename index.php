<?php
echo('Calcular');
echo('<br>');
$numero1 = 25;
$numero2 = 50;
$numero3 = 75;
$numero4 = 100;
$numero5 = 125;
$suma = $numero1 + $numero2;
$resta = $numero4 - $numero5;
$multiplicaion = $numero3 * $numero2;
$division = $numero5 / $numero1;
echo('La suma de: '.$numero1.' + '.$numero2.' = '.$suma);
echo('<br>');
echo('La resta de: '.$numero4.' - '.$numero5.' = '.$resta);
echo('<br>');
echo('La multicplicacion de: '.$numero3.' * '.$numero2.' = '.$multiplicaion);
echo('<br>');
echo('La división de: '.$numero5.' / '.$numero1.' = '.$division);
echo('<br>');
echo('<br>');

echo('BodyTech');
echo('<br>');
$peso = 75;
$altura = 1.70;
$imc = $peso / ($altura * $altura);
if ($imc <= 18.4) {
    echo('Su índice de masa corporal es de: '.$imc.' por lo tanto usted tiene una Insuficiencia de peso.');
} else if ($imc >= 18.5 && $imc <= 24.9) {
    echo('Su índice de masa corporal es de: '.$imc.' por lo tanto usted tiene un Peso normal.');
} else if ($imc >= 25 && $imc <= 29.9) {
    echo('Su índice de masa corporal es de: '.$imc.' por lo tanto usted tiene Sobrepeso.');
} else if ($imc >= 30 && $imc <= 34.9) {
    echo('Su índice de masa corporal es de: '.$imc.' por lo tanto usted tiene Obesidad grado 1.');
} else if ($imc >= 35 && $imc <= 39.9) {
    echo('Su índice de masa corporal es de: '.$imc.' por lo tanto usted tiene Obesidad grado 2.');
} else if ($imc >= 40) {
    echo('Su índice de masa corporal es de: '.$imc.' por lo tanto usted tiene Obesidad grado 3.');
} else {
    echo('Suministre su peso y su altura');
}
echo('<br>');
echo('<br>');

echo('Spring Step');
echo('<br>');
$precioZapatos = 150000;
$cantidadComprada = 5;
if ($cantidadComprada == 3 ) {
     $descuento = 0.1;
} else if ($cantidadComprada > 3 && $cantidadComprada <= 5 ) {
	$descuento = 0.2;
} else if ($cantidadComprada > 5 ) {
    $descuento = 0.4;
} 
$valorCompra = $cantidadComprada * $precioZapatos;
$valorDescuento = $valorCompra * $descuento;
$valorTotal = ($cantidadComprada * $precioZapatos ) - $valorDescuento ;
echo('Cantidad Vendida: '.$cantidadComprada. '<br>');
echo('Valor de la compra: $'.$valorCompra. '<br>');
echo('Tiene un descuento del: '.($descuento * 100). '% <br>' );
echo('Valor del Descuento: $' .$valorDescuento . '<br>');
echo('Valor a pagar: $'.$valorTotal);
echo('<br>');
echo('<br>');

echo('Postobón');
echo('<br>');
$horasTrabajadas = 36;
if ($horasTrabajadas <= 40){
    $valorHora = 20000;
} else {
    $valorHora = 25000;
}
$salario = $valorHora * $horasTrabajadas;
echo('Si trabaja: ' .$horasTrabajadas. ' horas, el valor de la hora es de: $' .$valorHora);
echo('<br> El salario que gana en una semana es de: $' .$salario);
echo('<br>');
echo('<br>');

echo('Bancolombia');
$usuario1 = 'Nombre: David Martinez, Teléfono: 3124536789, Direccion: cr 23 #10-12';
$salarioUsuario1 = 5000000;
$usuario2 = 'Nombre: Camila Arango, Teléfono: 3219873345, Direccion: cll 12 #45-23';
$salarioUsuario2 = 4000000;
$usuario3 = 'Nombre: Luis Flores, Teléfono: 3137651298, Direccion: cr 98 #78-23';
$salarioUsuario3 = 6000000;
$usuario4 = 'Nombre: Diana Suarez, Teléfono: 3208501038, Direccion: cr 73 #90-12';
$salarioUsuario4 = 5000000;
$usuario5 = 'Nombre: Andres Ramirez Teléfono: 3159024781 Direccion: cll 10 #45-87';
$salarioUsuario5 = 7000000;
$sumatoriaSalariosA = $salarioUsuario1 + $salarioUsuario2 + $salarioUsuario3 + $salarioUsuario4 + $salarioUsuario5;
$sumatoriaSalariosB = 20000000 ;
$sumatoriaSalariosC = 15000000 ;
echo ('<br> Los usuarios de la sucursal A son:');
echo ('<br>' .$usuario1);
echo ('<br>' .$usuario2);
echo ('<br>' .$usuario3);
echo ('<br>' .$usuario4);
echo ('<br>' .$usuario5);
if ($sumatoriaSalariosA > $sumatoriaSalariosB && $sumatoriaSalariosA > $sumatoriaSalariosC) {
    $mayorIngreso = 'El mayor ingreso de salarios la tiene la sucursal A';
} else  if ( $sumatoriaSalariosB > $sumatoriaA && $sumatoriaSalariosB > $sumatoriaSalariosC ) {
    $mayorIngreso = 'El mayor ingreso de salarios la tiene la sucursal B';
} else  if ( $sumatoriaSalariosC > $sumatoriaSalariosA && $sumatoriaSalariosC > $sumatoriaSalariosB ) {
    $mayorIngreso = 'El mayor ingreso de salarios la tiene la sucursal C';
}
echo ('<br>' .$mayorIngreso);
echo('<br>');
echo('<br>');

echo('La Jugosa SAS');
echo('<br>');
$Salpicon = array('dulce1' => 'Banano','dulce2' => 'Manzana','dulce3' => 'Durazno','acido1' => 'Piña','acido2' => 'Naranja','acido3' => 'Lulo');
foreach($Salpicon as $clave => $fruta){
    echo($clave);
    echo('<br>');
    echo($fruta);
    echo('<br>');
}

?>