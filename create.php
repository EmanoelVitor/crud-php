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

	<div class="container p-5">

		<h1 class="text-center">CADASTRO</h1>
		<form action="php_action/create.php" method="post">

			<div class="mb-3">
				<label for="nome" class="form-label">Nome</label>
				<input type="text" class="form-control" name="nome" id="nome" />
			</div>

			<div class="mb-3">
				<label for="genero" class="form-label">Gênero</label>
				<input type="text" class="form-control" name="genero" id="genero" />
			</div>

			<div class="row mb-3">
				<div class="col-8">
				<label for="cpf" class="form-label">CPF</label>
				<input type="text" class="form-control" name="cpf" id="cpf" />
				</div>
				
				<div class="col-4">
				<label for="dn" class="form-label">Data de nascimento</label>
				<input type="date" class="form-control" name="dtanasc" id="dn" />
				</div>
			</div>


			<div class="mb-3">
				<label for="tel" class="form-label">Telefone</label>
				<input type="text" class="form-control" name="fone" id="tel" />
			</div>

			<div class="mb-3">
				<label for="email" class="form-label">E-mail</label>
				<input type="text" class="form-control" name="email" id="email" />
			</div>

			<button type="submit" class="btn btn-primary">Salvar dados</button>
			<a href="index.php"><button type="button" class="btn btn-secondary">Voltar</button></a>

		</form>

	</div>

</body>

</html>