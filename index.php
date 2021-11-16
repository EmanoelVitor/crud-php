<?php require_once 'php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP CRUD</title>
  <meta charset='utf-8'>
  
</head>
<body>

  <a href="http://trabalho-php.epizy.com/home.php"><h2>americanas</h2></a>




  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Gênero</th>
        <th>Data de nascimento</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>E-mail</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM clientes_cadastro";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>
          <td>".$row['id_pessoafisica']."</td>
          <td>".$row['nome']."</td>
          <td>".$row['genero']."</td>
          <td>".$row['dtanasc']."</td>
          <td>".$row['cpf']."</td>
          <td>".$row['fone']."</td>
          <td>".$row['email']."</td>
          <td>
          <a href='edit.php?id_pessoafisica=".$row['id_pessoafisica']."'>
          <button type='button'>button></a>
          </td>
          <td>
          <a href='php_action/remove.php?id_pessoafisica= ".$row['id_pessoafisica']."'> <button type='button'></button></a>
          </td>
          </tr>";
        }
      } else {
        echo "<tr><td colspan='5'><center>Nao existem dados</center></td></tr>";
      }
      ?>
    </tbody>
  </table>
  
</div>
<a href='home.php'><button type='button'>Home</button></a>

<a href="create.php"><button type="button">Adicionar</button></a>
</div>
</div>


</div>
</body>
</html>