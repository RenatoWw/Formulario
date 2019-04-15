<html>
	<head>
		<style>
			.obrigatório{
				color: red;
			}
		</style>
	</head>
</html>
<?php

require_once("pdoConnect.php");
require_once ("class.php");

/*$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confSenha = $_POST['confirmaçãosenha'];*/

$cadastro = new Cadastro;

//$cadastro->setNome($_POST['nome']);
//$cadastro->setSenha($_POST['senha']);

$cadastro->verificacaoCadastro($_POST['nome'], $_POST['senha'], $_POST['email'], $_POST['confirmaçãosenha']);


