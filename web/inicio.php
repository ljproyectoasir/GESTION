<html>
<head><title>Proyecto-ASIR</title>
 <script>

	</script>


</head>
	<body background="imagenes/fondoinicio.jpg">
		<blockquote bgcolor=white>
		<br>
		<center>
			<h1>PROYECTO ASIR 2016</h1><br>
			<h2>Laura Merlo y Javier Rodriguez</h2><br>
			<font face="comic sans ms">
			<table border=5 width=800 height=400 bordercolor=black bgcolor=#BBCCFF>
				<tr align=center>	
					<td colspan=6 height=125>
						<h1>Bienvenido al servidor<br> 
							<?php 
								$salida = shell_exec('cat "/etc/hostname"');
								echo "<pre>$salida</pre>"; 
                                                        	echo "<br>";
								session_start();
                                                        	//echo "Session = ".$_COOKIE["PHPSESSID"];

							?> 
						</h1> 
					</td>
				</tr>
				<tr align=center>
					<td height=30>
						<font size=4><b> </font></b>
					</td>
					<td width=20%>
						<a href="presentacion/static.html"> STATIC </a>
					</td>
					<td width=20%>
						<a href="presentacion/dynamic-good.html"> DYNAMIX-GOOD </a>
					</td>
					<td width=20%>
						<a href="presentacion/dynamic-bad.php"> DYNAMIC-BAD </a>
					</td>
					<td width=20%>
						<a href="presentacion/session.php"> SESSION </a>
					</td>
					<td width=20%>
						<a href="presentacion/mysql.html"> PERCONA </a>
					</td>
					</td>

				</tr>
			</table>
			</font>
		</center>
		</blockquote>
	</body>
</html>




