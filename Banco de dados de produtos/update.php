<!DOCTYPE html>
<html>
<head>
	<title>Atualizção De Dados</title>
	<style>
        body {
            background-color: black;
        }
        p, h1, h2, h3{
            color: white;
        }
        #titulo{
            width: 410px;
            margin-left: auto;
            margin-right: auto; 
        }
        #fild{
            width: 410px;
            margin-left: auto;
            margin-right: auto;
        }
        #campesquerda{
            position: relative;
            left: 40px;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
	<table border = solid gray>
		<td>
			<a href='formulario.html'>Realiza mais um cadastro</a>
		</td>
		<td>
			<a href='negociodoPP.php'>Lista de produtos</a>
		</td>
	</table>

	<h1 id="titulo">Atualização De Dados!</h1>

	<?php
		$nome = $_GET['nome'];
		$codigo = $_GET['codigo'];
		$tipo = $_GET['tipo'];
		$preco = $_GET['preco'];
		$validade = $_GET['validade'];
		$quantidade = $_GET['quantidade'];

		echo "<table border = 1 id='fild'>";
			echo "<tr style='background-color:Lightgray'>";
				echo "<td>nome</td>";
				echo "<td>codigo</td>";
				echo "<td>tipo</td>";
				echo "<td>preco</td>";
				echo "<td>validade</td>";
				echo "<td>quantidade</td>";
			echo "</tr>";
			echo "<tr style='background-color:gray'>";
				echo "<td>$nome</td>";
				echo "<td>$codigo</td>";
				echo "<td>$tipo</td>";
				echo "<td>$preco</td>";
				echo "<td>$validade</td>";
				echo "<td>$quantidade</td>";
			echo "</tr>";
		echo "</table>";

	?>
	<h3 id="titulo">Digite as informações que deseja mudar</h3>
	<fieldset id="fild"><legend><p style = "font-size: 30px">Atualizacao</p></legend>
		<form action="updateBD.php" method="get" id="fild">
			<table>
				<tr>
					<td>
				      	<div>
				      	    <p>Nome do produto: </p><input name="nome"  value='<?php echo "$nome"; ?>' type="texte" required>
				      	</div>
				    </td>
				    <td>
				      	<div id="campesquerda">
				      	   	<p>Validade: </p><input name="validade" value='<?php echo "$validade"; ?>' type="texte" required>
				      	</div>
				    </td>
				</tr>
				<tr>
					<td>
				      	<div>
				      	    <p>Preco: </p><input name="preco" value='<?php echo "$preco"; ?>' type="texte" step="0.1" required>
				      	</div>
				    </td>
				    <td>
				      	<div id="campesquerda">
				      	    <p>Codigo: </p><input name="codigo" value='<?php echo "$codigo"; ?>' type="texte" readonly>
				      	</div>
				    </td>
				</tr>
				<tr>
					<td>
				      	<div>
				      	   	<p>Quantidade do produto: </p><input name="quantidade" value='<?php echo "$quantidade"; ?>' type="texte" required>
				      	</div>
				    </td>
				    <td>
				      	<div id="campesquerda">
				      	    <p>Tipo do produto: </p><input name="tipo" value='<?php echo "$tipo"; ?>' type="texte" required><br>
				      	</div>
				    </td>
				</tr>
		    </table>
		    <br>
	        <input type="submit" value="Inserir">
	    </form>
	</fieldset>

</body>
</html>