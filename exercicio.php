<html>
<head>
	<title>Curso Basico de PHP</title>
	<meta charset="utf-8"
</head>
<body>
	<h2>Exercicio de PHP</h2>
	<h3>Faça um algoritimo que receba dois numeros e ao final mostre a soma, subtraçãoe, multiplicação e a divisão dos numeros lidos.</h3>
	<?php
		$a = 15;
		$b = 5;
		$resultado = $a + $b;
		$resultadoSubtracao = $a - $b;
		$resultadoMultiplicacao = $a * $b;
		$resultadoDivisao = $a / $b;
	
		print "Soma de A e B = ".$resultado."<br>";
		print "Subtracao de A - B = ".$resultadoSubtracao."<br>";
		print "Multiplicacao de A * B = ".$resultadoMultiplicacao."<br>";
		print "Divisao de A / B = ".$resultadoDivisao."<br>";
	?>

	<h3>Escreva um algoritimo para determinar o consumo médio de um automóvel sendo fornecida a distancia total percorrida pelo automovel e o total de conbustivel gasto.</h3>
	<?php
		$dist = 100;
		$gas = 20;
		$resultado = $dist / $gas;
		echo $resultado;"<br>"
	?>

	<h3>Escreva um algoritimo que leia o nome do aluno e as notas das três provas que ele obteve no semestre. No final informe o nome do aluno e sua média.</h3>
	<?php
		$nota1 = 9;
		$nota2 = 6;
		$nota3 = 8;
		$resultado = $nota1 + $nota2 + $nota3;
		echo $resultado;"<br>"
		?>

		<h3>Escreva um algoritimo que leia o nome de um vendedor, o seu salario fixo e o total de vendas efetuadas por ele no mês (em dinheiro). Sabendo que este vendedor ganha 15% de comisssão sobre suas vendas efetuada, informe o seu nome, o salariofixo e salario mensal.</h3>
	<?php
		$nota1 = 9;
		$nota2 = 6;
		$nota3 = 8;
		$resultado = $nota1 + $nota2 + $nota3;
		echo $resultado;"<br>"
		?>
</body>
</html>