<html>
<head>
	<title>Operadores Aritimetricos</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Aritmetica</h2>
	<?php
		$a = 10;
		$b = 2;
		$resultado = $a + $b;
		$resultadoSubtracao = $a - $b;
		$resultadoMultiplicacao = $a * $b;
		$resultadoDivisao = $a / $b;
		$resultadoModulo = $a % $b;

		

		print "Soma de A e B = ".$resultado."<br>";
		print "Subtracao de A - B = ".$resultadoSubtracao."<br>";
		print "Multiplicacao de A * B = ".$resultadoMultiplicacao."<br>";
		print "Divisao de A / B = ".$resultadoDivisao."<br>";
		print "Modulo de A % B = ".$resultadoModulo."<br>";

		//Aritmética mais complexa

		$a++;
		print "INCREMENTO = ".$a."<br>";

		$b--;
		print "DECREMENTO = ".$b."<br>";

		$a = $a + 2;
		print "A = ".$a;
		

	?>
	<br>
	<a href="index.php">Voltar</a>;


</body>
</html>