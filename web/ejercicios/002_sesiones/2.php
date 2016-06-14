<HTML>
 <?php
session_start();
if (isset ($_SESSION["numpag"]))
	$_SESSION["numpag"]++;
	else
		$_SESSION["numpag"]=1;
?>
	<HEAD><TITLE></TITLE></HEAD>
	<BODY>
<?php
	if (isset ($_SESSION["numpag"]))
		echo $_SESSION["numpag"]."<br>";
?>
	<a href="2.1.php"> Propagar sesion </a>

	</BODY>
</HTML>