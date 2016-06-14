<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
	for ($i=1000;$i<10000;$i++) 
		{
			$i=settype($i,"string");
			
		if ((substr($i,0) != substr($i,1)) && (substr($i,0) != substr($i,2)) &&
			(substr($i,0) != substr($i,3)) && (substr($i,1) != substr($i,2))&&
			(substr($i,1) != substr($i,3)) && (substr($i,2) != substr($i,3)))
			{
			$num[0]=substr($i,0);
			$num[1]=substr($i,1);
			$num[2]=substr($i,2);
			$num[3]=substr($i,3);
					
			$num1=sort($num);
			$num[0]=substr($num1,0);
			$num[1]=substr($num1,1);
			$num[2]=substr($num1,2);
			$num[3]=substr($num1,3);
			$num2=rsort($num);
			$num[0]=substr($num2,0);
			$num[1]=substr($num2,1);
			$num[2]=substr($num2,2);
			$num[3]=substr($num2,3);

			$num3=$num2-$num1;
			
			if ($num3==6174)
				$i=10000;
			}
		}		
	
 ?>

</center>			
</body>
</html>