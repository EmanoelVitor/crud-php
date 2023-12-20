<?php
include("bootstrap.html");
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<object type="text/html" data="bootstrap.html"></object>
</head>

<body>
	<h1>criar seu cadastro</h1>
	<form action="php_action/create.php" method="post" class="form">
		<table>
			<tr>
				<th>Nome completo</th>
				<td><input type="text" name="nome" /></td>
			</tr>
			<tr>
				<th>Gênero</th>
				<td><input type="text" name="genero" /> </td>
			</tr>

			<tr>
				<th>Data de nascimento</th>
				<td><input type="date" name="dtanasc" /> </td>
			</tr>

			<tr>
				<th>CPF</th>
				<td><input type="text" name="cpf" /> </td>
			</tr>

			<tr>
				<th>Telefone</th>
				<td><input type="text" name="fone" /> </td>
			</tr>

			<tr>
				<th>E-mail</th>
				<td><input type="email" name="email" /> </td>
			</tr>

			<tr>
				<td><button type="submit" class="btn btn-primary">Salvar dados</button></td>
				<td><a href="index.php"><button type="button" class="btn btn-secondary">Voltar</button></a></td>
			</tr>
		</table>
	</form>
</body>

</html>