<?php

include("bootstrap.html");
require_once 'php_action/db_connect.php';

if ($_GET['id_pessoafisica']) {
    $id_pessoafisica = $_GET['id_pessoafisica'];

    $sql = "SELECT * FROM pessoa WHERE id_pessoafisica = {$id_pessoafisica}";
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Editar</title>
        <meta charset='utf-8'>

    </head>

    <body>

            <h1 class="text-center">Editar</h1>

            <form action="php_action/update.php" method="post" class="form-group mx-auto d-flex justify-content-center">
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
                        <input type="hidden" name="id_pessoafisica" value="<?php echo $data['id_pessoafisica'] ?>" />
                        <td><button type="submit" class="btn btn-primary">Salvar</button></td>
                        <td><a href="index.php"><button type="button" class="btn btn-secondary">Voltar</button></a></td>
                    </tr>
                </table>
            </form>
    </body>

    </html>

    <?php
}
?>