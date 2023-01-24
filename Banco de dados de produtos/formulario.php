<?php 
// recuperação de dados do HTML//

$nome = $_POST["nome_produto"];
$data = $_POST["data_produto"];
$preco = $_POST["preco_produto"];
$quantidade = $_POST["quantidade_produto"];
$tipo = $_POST["tipo_produto"];

//coneção com banco de dados//

$conexao = mysqli_connect('127.0.0.1','root','','kauagab',3306);

if(!$conexao)
{
	die('Problema!');
}

$sql = "INSERT INTO produtos VALUES('$nome',null, '$tipo', $quantidade, $preco, '$data');";

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
	echo "<table border = 1>";
		echo "<td>";
			echo "<p><a href='formulario.html'>Realiza mais um cadastro</a>";
		echo "</td>";
		echo "<td>";
			echo "<a href='negociodoPP.php'>Lista de produtos</a></p>";
		echo "</td>";
	echo "</table>";
	echo '<h1 id="titulo">Registro inserido!</h1>';
}
else
{
	echo 'Problema na inserção!';
}

echo "</body>";

mysqli_close($conexao);


?>