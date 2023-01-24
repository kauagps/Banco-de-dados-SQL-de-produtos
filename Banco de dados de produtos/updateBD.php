<?php

$nome = $_GET['nome'];
$codigo = $_GET['codigo'];
$tipo = $_GET['tipo'];
$preco = $_GET['preco'];
$validade = $_GET['validade'];
$quantidade = $_GET['quantidade'];

$conexao = mysqli_connect('127.0.0.1','root','','kauagab',3306);

if(!$conexao)
{
	die('Problemas com a conexão!');
}

$sql = "UPDATE produtos SET nome='$nome', codigo=$codigo, tipo='$tipo', quantidade=$quantidade, preco=$preco, validade='$validade' WHERE (codigo = $codigo) ";

echo "<head>";
	echo "<style>";
		echo "body {
				background-color: black;
			}";
		echo "p, h1, h2 {
				color: white;
			}";
		echo "#titulo{
            width: 410px;
            margin-left: auto;
            margin-right: auto; 
        }";
		echo "a{
            text-decoration: none;
            color: white;
        }";
	echo "</style>";
echo "</head>";
echo "<body>";

if(mysqli_query($conexao,$sql)){
	echo "<table border = solid gray>";
		echo "<td>";
			echo "<p><a href='formulario.html'>Realiza mais um cadastro</a>";
		echo "</td>";
		echo "<td>";
			echo "<a href='negociodoPP.php'>Lista de produtos</a></p>";
		echo "</td>";
	echo "</table>";
	echo '<h1 id="titulo">Registro atualizado!</h1>';
}
else
{
	echo 'Problema na atualização!';
}

echo "</body>";
mysqli_close($conexao);
?>