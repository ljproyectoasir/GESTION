<HTML>
 <?php
session_cache_limiter('nocache,private');
session_start();
?>
	<HEAD><TITLE></TITLE></HEAD>
	<BODY>

<?php
    echo session_id()."<BR>";
	echo session_name()."<BR>";
	echo $_COOKIE['PHPSESSID']."<BR>";
	echo $_SESSION['hora']  ;
?>
	</BODY>
</HTML>