<?php

require_once 'db_connect.php';

if($_POST){
	$nome = $_POST['nome'];
	$genero = $_POST['genero'];
	$dtanasc = $_POST['dtanasc'];
	$cpf = $_POST['cpf'];
	$fone = $_POST['fone'];
	$email = $_POST['email'];

	$sql = "INSERT INTO clientes_cadastro (nome, genero, dtanasc, cpf, fone, email) VALUES ('$nome', '$genero', '$dtanasc', '$cpf', '$fone', '$email')";

	if($connect->query($sql) === TRUE){
		echo "<p> Novo registro inserido</p>";
		
	}
	else {
		echo "Erro " . $sql . '  ' .$connect->connect_error; 
	}

	$connect->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remove</title>
</head>



<body>
	<a href='../index.php'><button type='button'>Voltar</button></a>
</body>
</html>