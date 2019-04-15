<?php 
function cadastrarBanco($nome, $senha){

	$connection = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	$statement = $connection->prepare("INSERT INTO usuarioscadastro (nome, senha) VALUES (?, ?)");

	$statement->execute(array($nome, $senha));

	echo "<br>Dados cadastrados com sucesso!";
}