<?php

include("bootstrap.html");
require_once 'php_action/db_connect.php';
include("footer.html");

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
        <div class="container p-5">
            <h1 class="text-center">Editar</h1>

            <form action="php_action/update.php" method="post">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" value="<?php echo $data['nome'] ?>" />
                </div>

                <div class="mb-3">
                    <label for="gen" class="form-label">Gênero</label>
                    <input type="text" class="form-control" id="gen" name="genero" value="<?php echo $data['genero'] ?>" />
                </div>

                <div class="row mb-3">
                    <div class="col-8">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $data['cpf'] ?>" />
                    </div>
                    <div class="col-4">
                        <label for="dn" class="form-label">Data de nascimento</label>
                        <input type="date" class="form-control" id="dn" name="dtanasc"
                            value="<?php echo $data['dtanasc'] ?>" />
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tel" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="tel" name="fone" value="<?php echo $data['fone'] ?>" />
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email'] ?>" />
                </div>

                <input type="hidden" name="id_pessoafisica" value="<?php echo $data['id_pessoafisica'] ?>" />
                <td><button type="submit" class="btn btn-primary">Salvar</button></td>
                <td><a href="index.php"><button type="button" class="btn btn-secondary">Voltar</button></a></td>


            </form>
        </div>

    </body>

    </html>

    <?php
}
?>