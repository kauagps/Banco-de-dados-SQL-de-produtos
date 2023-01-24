<?php

$conexao = mysqli_connect('127.0.0.1','root','','kauagab',3306);

if(!$conexao)
{
	die('Problemas com a conexão!');
}
$sql = "SELECT * FROM produtos;";

$resultado = mysqli_query($conexao,$sql);
echo "<head>";
	echo "<style>";
		echo "body {
			background-color: black;
		}";
		echo "p, h1, h2 {
			color: white;
		}";

		echo "#titulo{
            width: 530px;
            margin-left: auto;
            margin-right: auto; 
        }";

		echo "#fild{
            width: 530px;
            margin-left: auto;
            margin-right: auto;
        }";

        echo "td_edit {
        	width: 60px;
        }";

		echo "a{
            text-decoration: none;
            color: white;
        }";

	echo "</style>";
echo "</head>";
echo "<body>";
echo "<table border = solid gray><td><p><a href='formulario.html'>Cadastro de Produtos</a></td></table>";

echo '<h1 id="titulo">Listagem de Produtos</h1>';

if (mysqli_num_rows($resultado) > 0)
{
	echo '<table id="fild" border=1 style="background-color: gray">';
	echo '<tr><th>Nome</th><th>codigo</th><th>tipo</th><th>quantidade</th><th>preco</th><th>data</th><th>Ediçoes</th></tr>';
	$c = 0;
	while ($linha = mysqli_fetch_assoc($resultado))
	{
		$c++;
		$corlinha = ($c % 2 != 0) ? '<tr style="background-color:Lightgray">' : '<tr style="background-color:gray">';

		echo $corlinha . '<td id="td_edit">' . $linha['nome'] . '</td><td>' . $linha['codigo'] . '</td><td>' . $linha['tipo'] . '</td><td>' . $linha['quantidade'] . '</td><td>' . $linha['preco'] . '</td><td id="td_edit">' . $linha['validade'] . '</td><td>' . '<a href="apaga_prod.php?codigo=' . $linha['codigo'] . '"><img style="hegth: 28px; width: 28px;" src="lixinhoClose.-export.png"></a>' . '<a href="update.php?codigo=' . $linha['codigo'] . '&nome=' . $linha['nome'] . '&tipo=' . $linha['tipo'] . '&quantidade=' . $linha['quantidade'] . '&preco=' . $linha['preco'] . '&validade=' . $linha['validade'] . '"><img style="hegth: 28px; width: 28px;" src="lapis-cliparts.png"></a>' . '</td></tr>'; 
	}
	echo '</table>';
	echo '<h2 id="titulo">Numero de produtos: ' . mysqli_num_rows($resultado) . '</h2>';

}
else
{
	// Não tem registros em $resultados!
	echo 'Não tem registro!';
}
echo "</body>";
?>