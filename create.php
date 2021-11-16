	<!DOCTYPE html>
<html>
<head>
	<title>Crud Php ADICIONAR MEMBRO</title>

</head>
<body>


	<a href="home.php"><h2>americanas</h2></a>

	<br>
	
	<center>
		<h1>criar seu cadastro</h1>

		<form  action="php_action/create.php" method="post">
			<table >
				<tr>
					<th >Nome completo</th>
					<td><input type="text" name="nome"/></td>
				</tr>
				<tr>
					<th >Gênero</th>
					<td><input type="text" name="genero"/> </td>
				</tr>

				<tr>
					<th >Data de nascimento</th>
					<td><input type="date" name="dtanasc"/> </td>
				</tr>

				<tr>
					<th >CPF</th>
					<td><input type="text" name="cpf"/> </td>
				</tr>

				<tr>
					<th >Telefone</th>
					<td><input type="text" name="fone"/> </td>
				</tr>

				<tr>
					<th >E-mail</th>
					<td><input type="email" name="email"/> </td>
				</tr>

				<tr>
					<td><button  type="submit">Salvar dados</button></td>
					<td><a href="home.php"><button type="button">Voltar</button></a></td>
				</tr>
			</table>
		</form>
	</fieldset>
</center>
</body>
</html>