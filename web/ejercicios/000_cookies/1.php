<?php
  setcookie("usr","Antonio Gomez",time()+40);
  setcookie("color","red",time()+40);
?>
<html>
<head>
<title>Ejemplo1 Cookei</title>
</head>
<body bgcolor="lavender">
<font face="verdana" size="+1">
<h2>$_COOKIE[] </h2>
<?php
  if(!empty($_COOKIE['color']))
	        {
		 echo"<pre>";
		 print_r($_COOKIE);
		 echo"</pre>";
		 }
?>						 
</font>
</body>
</html>
