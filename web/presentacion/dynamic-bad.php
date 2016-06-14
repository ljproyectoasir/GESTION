<html>
<head><title>Proyecto-ASIR</title>
 <script>

	</script>


</head>
	<body background="fondoinicio.jpg">
		<blockquote bgcolor=white>
		<br>
		<center>
			<h1>PROYECTO ASIR 2016</h1><br>
			<h2>Laura Merlo y Javier Rodriguez</h2><br>
			<font face="comic sans ms">
			<table border=5 width=800 height=400 bordercolor=black bgcolor=#BBCCFF>
				<tr align=center>	
					<td colspan=4 height=125>
						<h1>Bienvenido al servidor<br> 
							<?php 
								$salida = shell_exec('cat "/etc/hostname"');
								echo "<pre>$salida</pre>"; 
                                                        	echo "<br>";
								session_start();
                                                        	echo "Session = ".$_COOKIE["PHPSESSID"];

							?> 
						</h1> 
					</td>
				</tr>
			</table>
			</font>
		</center>
		</blockquote>
	</body>
</html>




