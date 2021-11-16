
<?php 
require_once 'db_connect.php';

        if($_GET) {
            $id_pessoafisica = $_GET["id_pessoafisica"];
            $sql = "delete from clientes_cadastro WHERE id_pessoafisica = $id_pessoafisica";
            

            if($connect->query($sql) === TRUE){
                echo "Deletado com sucesso!<br>";

            }else{
                echo "Erro ao deletar!<br>";
            }

            $connect->close();
        }
            echo "<a href='../index.php'><button type='button'>Voltar</button></a>";

        ?>