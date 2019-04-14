<?php
require_once("pdoConnect.php");
require_once("cadastro.php");

class Cadastro {
	public $nome;
	public $senha;
	public $email;
	public $confSenha;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setSenha($senha)
    {
        $this->nome = $senha;
    }
    public function getSenha()
    {
        return $this->senha;
    }
	public static function verificacaoCadastro($nome, $senha, $email, $confSenha){
		if(strlen($nome)<3){
			echo "<span class='obrigatório'><center>O campo 'Nome' precisa ter mais de 3 caractéres.</center></span><br>";
			require_once("form.php");
			return false;
		}

		if(!strstr($email, "@")){
			echo "<span class='obrigatório'><center>Preencha o campo 'E-mail' corretamente.</center></span><br>";
			require_once("form.php");
			return false;
		}
		if(strlen($senha)<8){
			echo "<span class='obrigatório'><center>A senha precisa ter mais de 8 caractéres.</center></span><br>";
			require_once("form.php");
			return false;
		}
		if($senha != $confSenha){
			echo "<span class='obrigatório'><center>Senhas não coincidem.</center></span><br>";
			require_once("form.php");
			return false;
		}
			cadastrarBanco($nome, $senha);
			return true;
		}
		public function exibirDados(){
			echo $this->getNome." ".$this->getSenha;
		}
	}
