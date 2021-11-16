<?php 

require_once 'php_action/db_connect.php';

if($_GET['id_pessoafisica']) {
	$id_pessoafisica = $_GET['id_pessoafisica'];

	$sql = "SELECT * FROM clientes_cadastro WHERE id_pessoafisica = {$id_pessoafisica}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <link rel="shortcut icon" href="https://images-americanas.b2w.io/catalog-statics/favicon-americanas.ico" sizes="16x16">

    <style type='text/css'>
*{
  box-sizing: border-box;
}

body{
    font-family: Arial;
}

.cabecalho{
    border: 1px solid #F80032;
    background-color:#F80032;
        
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0.5em;
    padding-left: 0px;
    padding: 60px;
  
}
h2{
    font-family: Arial, sans-serif;
    color: #fff;
   
    
}
.cabecalhoh2{
    
    border-top: 4px solid #fff;
    border-bottom: 4px solid #fff;
    font-width: 96px;
    font-height: 20px;
    position: absolute;   
}

   input{
    font-family: Arial;
    outline: none;
    color: rgb(51, 51, 51);
    text-overflow: ellipsis;
    overflow: hidden;
    width: 100%;
    cursor: text;
    font-size: 1rem;
    border: 1px solid rgb(153, 153, 153);
    border-radius: 8px;
    height: 48px;
    padding: 16px 15px;
    box-sizing: border-box;
} 
th{
    font-family: Arial;
}



button{
    text-align: center;
    color: rgb(255, 255, 255);
    font-weight: bold;
    background-color: rgb(235, 0, 20);
    border: 1px solid rgb(235, 0, 20);
    border-radius: 3px;
    width: 200px;
    height: 48px;
    cursor: pointer;
}
button{
    font-family: sans-serif;
    font-size: 100%;
    line-height: 1.15;
    margin: 0;
}
button{
    text-transform: none;
    overflow: visible;
    overflow-x: visible;
    overflow-y: visible;
}

.td-mude{
    padding-right: 10px;
    padding-top: 10px;
    text-align: center;
}
    </style>

</head>
<body>

<div class="cabecalho">
<a href="http://trabalho-php.epizy.com/home.php"><h2 class="cabecalhoh2">americanas</h2></a>
</div>

<center>
	<h1>Editar</h1>

	<form action="php_action/update.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Nome</th>
				<td><input type="text" name="nome" value="<?php echo $data['nome'] ?>" /></td>
			</tr>		
			<tr>
				<th>Gênero</th>
				<td><input type="text" name="genero" value="<?php echo $data['genero'] ?>" /></td>
			</tr>
            <tr>
				<th>Data de Nascimento</th>
				<td><input type="date" name="dtanasc" value="<?php echo $data['dtanasc'] ?>" /></td>
			</tr>
            <tr>
				<th>CPF</th>
				<td><input type="text" name="cpf" value="<?php echo $data['cpf'] ?>" /></td>
			</tr>
            <tr>
				<th>Fone</th>
				<td><input type="text" name="fone" value="<?php echo $data['fone'] ?>" /></td>
			</tr>
            <tr>
				<th>E-mail</th>
				<td><input type="email" name="email" value="<?php echo $data['email'] ?>" /></td>
			</tr>
			<tr>
				<input type="hidden" name="id_pessoafisica" value="<?php echo $data['id_pessoafisica']?>" />
				<td class='td-mude'><button type="submit" class="btn btn-outline-primary"><i class="bi bi-save"></i> Salvar</button></td>
				<td class='td-mude'><a href="index.php"><button type="button" class="btn btn-outline-primary"><i class="bi bi-arrow-return-left"></i> Voltar</button></a></td>
			</tr>
		</table>
	</form>
</center>


</body>
</html>

<?php
}
?>