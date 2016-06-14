<html>
<head><title>Formularios PHP</title></head>
<body>
<?php
	
	/*function nombrefuncion(argumento)
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
	function imp($v)
		{
		$aux=0;
		$aux2;
		$div=2;
		$sw=true;
		$sw2=false;
		
		
		echo "<center><table border=3 bgcolor=green width=300 height=300>";
		for ($i=0;$i<10;$i++)
			{
		
			echo "<tr align=center> ";
			for ($j=0;$j<10;$j++)
				{
				while ($sw==true && $div<=($v[$aux]/2))
					{
					if ($v[$aux]%$div==0)
						$sw=false;
					$div++;
					}
				if ($sw==true)				
					{
					echo "<td>$v[$aux]</td>";
					}
									
					else
						{
						$aux2=$v[$aux];
						while ($sw2==false)
							{
							while ($sw==true && $div<=($aux2/2))
								{
								if ($aux2%$div==0)
									$sw=false;
								$div++;
								}
							if ($sw==false)
								{
								$aux2++;
								$div=2;
								$sw=true;
								}
								else
									$sw2=true;
							}
						echo "<td bgcolor=red>$aux2</td>";
						$sw2=false;
						}	
				
				$aux++;
				$div=2;
				$sw=true;
				}
				echo "</tr> ";	
			}
		echo "</table></center>";
		}
		
	$v1=array();
	$min=$_GET["num1"];
	$max=$_GET["num2"];
	
	cargar($v1,$min,$max);
	
	imp($v1);
	
?>
</body>
</html>