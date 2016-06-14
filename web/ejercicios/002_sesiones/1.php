<HTML>
<?php
session_cache_limiter('nocache,private');
session_start();
$_SESSION['hora' ] =date("H : i: s");
?>
	<HEAD><TITLE></TITLE></HEAD>
	<BODY>

<?php
    echo session_id()."<BR>";
	echo session_name()."<BR>";
	echo $_COOKIE['PHPSESSID']."<BR>";
	echo $_SESSION['hora']."<BR>";
?>
	<a href="1.1.php"> Propagar sesion </a>
	</BODY>
</HTML>