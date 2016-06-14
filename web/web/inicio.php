<html>
<head><title>Proyecto-ASIR</title>
 <script>

	</script>


</head>
	<body background="imagenes/fondoinicio.jpg">
		<blockquote bgcolor=white>
		<br><br><br>
		<center>
			<h1>PROYECTO ASIR 2016</h1><br>
			<h2>Laura Merlo y Javier Rodriguez</h2><br><br>
			<font face="comic sans ms">
			<table border=5 width=800 height=400 bordercolor=black bgcolor=#BBCCFF>
<!--
				<tr align=center>	
					<td colspan=4  height=95>
						<a href=""><font size=6><b></b></font></a>
					</td>
				</tr>
-->
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
<!--				
				<tr align=center>
					<td height=80>
						<font size=4><b> </font></b>
					</td>
					<td width=20%>
						<a href=""> </a>
					</td>
					<td width=20%>
						<a href=""> </a>
					</td>
					<td width=20%>
						<a href=""> </a>
					</td>
				</tr> 
				<tr align=center>
					</tr>
				<tr align=center>
					<tr align=center>
					<td height=80>
						<font size=4><b> </font></b>
					</td>
					<td>
						<a href=""> </a>
					</td>
					<td>
						<a href=""> </a>
					</td>
					<td>
						<a href=""> </a>
					</td>
				</tr>
				<tr align=center>
					<td height=80>
						<font size=4><b></font></b>
					</td>
					<td>
						<?php
							session_start();
							$count = isset($_SESSION['count']) ? $_SESSION['count'] : 1;
							echo "Session = ".$count;
							$_SESSION['count'] = ++$count;
						?>

					</td>
					<td>
						<a href=""> </a>
					</td>
				</tr> 
-->
			</table>
			</font>
		</center>
		</blockquote>
	</body>
</html>




