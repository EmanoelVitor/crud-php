<?php

$servidor = "sql112.epizy.com";
$user = "epiz_30307070";
$password = "hC21p2ShXCH";
$dbname = "epiz_30307070_americanas";

$connect = new mysqli($servidor,$user, $password,$dbname);

if($connect->connect_error){
	die ("conexao falhou:" . $connect->connect_error);

}
else{
	
}
?>