<?php
require_once 'php_action/db_connect.php';
include("bootstrap.html");
?>

<!DOCTYPE html>
<html>

<head>
  <title>PHP CRUD</title>
  <meta charset='utf-8'>
  <object type="text/html" data="bootstrap.html"></object>

</head>

<body>
  <div class="container">
  <h1 class="text-center">DADOS CADASTRADOS</h1>
    <table class="table table-light table-sm">
      <div class="table-responsive">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Gênero</th>
            <th>Data de nascimento</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th colspan="2">Ações</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM pessoa";
          $result = $connect->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>
          <td>" . $row['id_pessoafisica'] . "</td>
          <td>" . $row['nome'] . "</td>
          <td>" . $row['genero'] . "</td>
          <td>" . $row['dtanasc'] . "</td>
          <td>" . $row['cpf'] . "</td>
          <td>" . $row['fone'] . "</td>
          <td>" . $row['email'] . "</td>
          <td>
          <a href='edit.php?id_pessoafisica=" . $row['id_pessoafisica'] . "'>
          <button type='button' class='btn btn-success'>Editar</button></a>
          </td>
          <td>
          <a href='php_action/remove.php?id_pessoafisica= " . $row['id_pessoafisica'] . "'> <button type='button' class='btn btn-danger'>Remover</button></a>
          </td>
          </tr>";
            }
          } else {
            echo "<tr><td colspan='5'><center>Nao existem dados</center></td></tr>";
          }
          ?>
        </tbody>
    </table>
    <a href="create.php"><button type="button" class="btn btn-primary">Adicionar</button></a>
  </div>
  </div>
</body>

</html>