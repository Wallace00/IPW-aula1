<?php
	class Usuario{
	private $id, $nome, $email, $login, $senha, $dataCadastros, $ativo;

	public function getid(){
		return $this->id;
	}
	public function getnome(){
		return $this->nome;
	}
	public function getemail(){
		return $this->email;
	}
	public function getlogin(){
		return $this->login;
	}
	public function getdataCadastro(){
		return $this->dataCadastro;
	}
	public function getativo(){
		return $this->ativo;
	}
	public function renovarSenha(){
		$this->senha = "123456";
	}
	public function addUsuario($nome,$email,$login,$senha){
		$this->nome = $nome;
		$this->email = $email;
		$this->login = $login;
		$this->senha = $senha;
		$this->dataCadastro = date("Y-m-d");
		$this->ativo = 0;

	}
}
