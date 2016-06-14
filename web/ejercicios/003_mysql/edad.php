<?php
//fecha actual

$dia=date("j");
$mes=date("n");
$ano=date("Y");

//fecha de nacimiento

$fecha="1982-03-17";
$var = explode("-", $fecha);


$diaz=$var[2];
$mesz=$var[1];
$anoz=$var[0];

//si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual

if (($mesz == $mes) && ($diaz > $dia)) {
$ano=($ano-1); }

//si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual

if ($mesz > $mes) {
$ano=($ano-1);}

//ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad

$edad=($ano-$anoz);

print $edad;

?>