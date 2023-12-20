<?php 

require_once 'db_connect.php';

if($_POST) {
	$nome = $_POST['nome'];
	$genero = $_POST['genero'];
	$dtanasc = $_POST['dtanasc'];
	$cpf = $_POST['cpf'];
	$fone = $_POST['fone'];
	$email = $_POST['email'];
	
	$id_pessoafisica = $_POST['id_pessoafisica'];

	$sql  = "UPDATE pessoa SET nome = '$nome', genero = '$genero', dtanasc = '$dtanasc', cpf = '$cpf', fone = '$fone', email = '$email'  WHERE id_pessoafisica = {$id_pessoafisica}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Successo</p>";
		header("Refresh: 1; url=../index.php");
	} else {
		echo "Erro : ". $connect->error;
	}

	$connect->close();

}

?>