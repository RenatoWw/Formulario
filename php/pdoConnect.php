<?php 
function cadastrarBanco($nome, $email, $senha){

	$connection = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	$statement = $connection->prepare("INSERT INTO usuarioscadastro (nome, email, senha) VALUES (?, ?, ?)");

	$statement->execute(array($nome, $email, $senha));

	echo "<br>Dados cadastrados com sucesso!";
}