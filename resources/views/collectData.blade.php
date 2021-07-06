<?php
use App\Http\Controllers\GreetingController;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Coletando dados</title>
</head>
<body>
	<div style="display: block">
		<h1>Conversor de $alário (de mês para horas)</h1>
		<p>Estamos supondo que você trabalha 44 horas semanais</p>
		<form style="display: grid" action={{ action([GreetingController::class, 'salaryConverter']) }}>
			<input
				type="text"
				name="salary"
				title="Informe o seu salário"
				placeholder="Salário em R$"
				style="border-radius: 3.5px; border: 1px solid gray">
			
			<input type="submit" value="Converter"/>
		</form>
	</div>
</body>
</html>