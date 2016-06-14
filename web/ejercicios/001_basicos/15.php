decide si 2 vectores de numeros enteros comprendidos entre menor y mayor son disjuntos(no tienen ningun elemento comun)
<html>
<head><title>Formularios PHP</title></head>
<body>
<?php
	/*
	function nombrefuncion(argumento)
		{
		instrucciones;			
		[return valor;]
		}
	*/
	function cargar(&$v,$mini,$maxi)
		{
		for ($i=0;$i<100;$i++)
			$v[$i]=mt_rand($mini,$maxi);
		}
	function imp($v1)
		{
		for ($i=0;$i<100;$i++)
			echo "$v1[$i] ";
		}
	function disjuntos($v1,$v2)
		{
		$sw=true;
		$i=0;
		while ($i<50 && $sw==true)
		{
			$j=0;	
			while ($j<50 && $sw==true)
			{
				if ($v1[$i]==$v2[$j])
					$sw=false;
				$j++;
			}
			$i++;
		}
		}
	$v1=array();
	$v2=array();
	$min=$_GET["num1"];
	$max=$_GET["num2"];
	
	cargar($v1,$min,$max);
	cargar($v2,$min,$max);
	imp($v1);
	disjuntos($v1,$v2);
?>
</body>
</html>