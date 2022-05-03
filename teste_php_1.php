<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.verde {
			color: green;
		}
	</style>

</head>

<body>

	<h4>
1 - Função SeculoAno($ano)
Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.<br/><br/>


Exemplos para teste:<br/>

Ano 1905 = século 20<br/>
Ano 1700 = século 17<br/>
	</h4>

<h2 class="verde">

	<?php
		function SeculoAno($ano) 
		{

		$seculo = ceil($ano/ 100);
		return $seculo;
		}

		$resultado = SeculoAno($ano = 37);
		echo "Ano 37 = Seculo ";
		echo $resultado; 


		$resultado = SeculoAno($ano = 159);
		echo "<br />Ano 159 = Seculo ";
		echo $resultado;

	?>
</h2>



</body>
</html>