<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<br><br>
			<form action="" method="POST">
			<?php
				if(isset($_REQUEST["n1"])&&isset($_REQUEST["n2"])){
					$n1 = $_REQUEST["n1"];
					$n2 = $_REQUEST["n2"];
					$resultado = floatval($n1) + floatval($n2);
					echo("&nbsp;&nbsp;&nbsp;&nbsp;Ingrese un numero: <input type='text' id='n1' name='n1' value=".$n1.">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>");
					echo("&nbsp;&nbsp;&nbsp;&nbsp;Ingrese un numero: <input type='text' id='n2' name='n2' value=".$n2.">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>");
					echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='sumar'>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>");
					echo("&nbsp;&nbsp;&nbsp;&nbsp;La suma es: <input type='text' id='resultado' value=".$resultado.">&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>");
				}
				else{
					echo("&nbsp;&nbsp;&nbsp;&nbsp;Ingrese un numero: <input type='text' id='n1' name='n1'>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>");
					echo("&nbsp;&nbsp;&nbsp;&nbsp;Ingrese un numero: <input type='text' id='n2' name='n2'>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>");
					echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='sumar'>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>");
					echo("&nbsp;&nbsp;&nbsp;&nbsp;La suma es: <input type='text' id='resultado'>&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>");
				}
			?>
			</form>
		</center>
	</body>
</html>

