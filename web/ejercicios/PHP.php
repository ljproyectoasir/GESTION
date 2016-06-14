<html>

<head>
<title>Page title</title>
</head>
<body>
<?php
	
	echo PHP_VERSION . "<br>";
	echo $_SERVER["SERVER_NAME"] . "<br>";
	echo PHP_OS . "<br>";
	print_r($_COOKIE);
	echo "<br>";
	echo time();
	echo "<br>";
	echo date("Y/m/d",0);
	echo "<br>";
	echo date("h:m:s a");
	echo "<br>";
	echo date("h:m:s a",0);
	
	echo "<br>";
	
	
	echo date("j") . "<br>";
	echo date("n") . "<br>";
	echo date("Y") . "<br>";

	?> 
</body>
</html>