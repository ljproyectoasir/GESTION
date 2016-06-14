<html>
<head><title>Formularios PHP</title></head>
<body>
<?php 
 echo "$_SERVER[SERVER_NAME] <br>";
 echo "$_SERVER[SERVER_SOFTWARE] <br>";
 echo "$_SERVER[DOCUMENT_ROOT] <br>";
 echo "$_SERVER[REMOTE_ADDR] <br>";
 echo "$_SERVER[PHP_SELF] <br>";
 echo PHP_VERSION;
 echo "<br>";
 echo __FILE__ ;
 echo "<br>";
 echo PHP_OS ;
 ?> 
</body>
</html>