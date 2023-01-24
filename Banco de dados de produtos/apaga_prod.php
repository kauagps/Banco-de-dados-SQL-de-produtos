<?php

$codigo = $_GET['codigo'];

$conexao = mysqli_connect('127.0.0.1','root','','kauagab',3306);
if(!$conexao)
{
	die('Problemas com a conexão!');
}

$sql = "DELETE FROM produtos WHERE codigo = $codigo";

if(mysqli_query($conexao,$sql))
{
	header('Location: negociodoPP.php');
	exit;
}
else
{
	echo 'Problemas com a exclusão do produto!';
}

?>