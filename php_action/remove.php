<?php
require_once 'db_connect.php';

if ($_GET) {
    $id_pessoafisica = $_GET["id_pessoafisica"];
    $sql = "delete from pessoa WHERE id_pessoafisica = $id_pessoafisica";


    if ($connect->query($sql) === TRUE) {
        echo "Deletado com sucesso!<br>";

    } else {
        echo "Erro ao deletar!<br>";
    }

    $connect->close();
}
header("Refresh: 1; url=../index.php");

?>