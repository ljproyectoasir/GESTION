<HTML>
<HEAD><TITLE> Conversión de tipos en PHP</TITLE></HEAD>
<BODY>
<?php
   $UnNumero= 3;
  $OtroNumero=(int)( $UnNumero /2);
  echo " El otro número es $OtroNumero <br>\n";
  $UnArray=(array)  $UnNumero  ;
  echo "El primer elemento del array es:",  $UnArray[0], "<br>\n" ;
  $UnObjeto= (object) $UnNumero;
 Echo " El atributo scalar del objeto es ",$UnObjeto ->scalar;
 ?>
 </BODY>
 </HTML>
