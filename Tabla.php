<?php

/**
 ***************************************************************************
 *
 *  Author Code: DiegoPino, diegopino@gmail.com
 *  Basado en mis estudios de GD-Library. is a code library for the dynamic creation of images
 *  Website: http://www.we11.net
 *  License: Creative Commons http://creativecommons.org/licenses/by/4.0/legalcode
 *
 *  Tabla de Posiciones Creada con GD Graphics Library, para generar una Tabla en Formato de Imagen
 *  Football Clubs / Leagues and Tournaments
 *
 ***************************************************************************​/
 */

header("Content-type: image/gif");

$imagen = imagecreate(340,250);

$bg = imagecolorallocate($imagen,230,230,230);
$negro = imagecolorallocate($imagen,0,0,0);
$amarillo = imagecolorallocate($imagen,255,163,79);
$rojo = imagecolorallocate($imagen,247,49,49);
$azul = imagecolorallocate($imagen,0,102,153);



$txt_izq = "Pos|
1
2
3
4
5
6
";


$txt_der = "Nombre
Chelsea
Manchester-City
Arsenal
Manchester-United
Liverpool
Tottenham
";

$txt_der4 = "Total
77
67
67
65
58
58
";


$arr_izq = split(" ",$txt_izq);

$arr_der = split(" ",$txt_der);

$arr_der4 = split(" ",$txt_der4);

$fuente = "timesi.ttf";
$fuente2 = "timesi.ttf";
$fuente3 = "timesi.ttf";





foreach($arr_izq as $key => $palabra){
    $x = 5;
    $y = (15*$key)+14;
    imagettftext($imagen,18,0,$x,$y,$amarillo, $fuente,$palabra);
    }

foreach($arr_der as $key => $palabra){
    $bbox = imagettfbbox(3,0,$fuente,$palabra);
    $x = 80-$bbox[2];
    $y = (15*$key)+14;
    imagettftext($imagen,18,0,$x,$y,$negro,     $fuente,$palabra);
    }
	
	
foreach($arr_der4 as $key => $palabra){
    $bbox = imagettfbbox(10,0,$fuente,$palabra);
    $x = 280-$bbox[2];
    $y = (15*$key)+14;
    imagettftext($imagen,18,0,$x,$y,$rojo,  $fuente2,$palabra);
    }

//Abajo
$textoabajo = "We11.Net |Codebase: DiegoPino";

imagettftext($imagen,14,0,0,235,$azul ,$fuente3, $textoabajo);


imagegif($imagen);

imagedestroy($imagen);

?>
