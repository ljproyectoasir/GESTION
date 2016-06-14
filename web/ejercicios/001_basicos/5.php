<HTML>
<HEAD><TITLE> Conversión de tipos en PHP</TITLE></HEAD>
<BODY>
<?php
  $UnaCadena="65";
  $UnNumero= 25;
  settype($UnaCadena, 'integer') ;
  echo "conversión de cadena a número:",gettype($UnaCadena);
  echo "<BR>\n  <BR>";
  settype($UnNumero , 'string') ;
  echo "Conversión de número a cadena :",  gettype( $UnNumero),"\n";
  ?>
 </BODY>
 </HTML>
