<?php

$servidor = "localhost";
$user = "root";
$password = "";
$dbname = "crud-php";

$connect = new mysqli($servidor,$user, $password,$dbname);

if($connect->connect_error){
	die ("conexao falhou:" . $connect->connect_error);

}
else{
	
}
?>