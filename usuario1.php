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
	//public function addUsuario($nome,$email,$login,$senha,$dataCadastro,$ativo){//estes dois campos, vc não esta recebendo, eles nascem aqui nesta função $dataCadastro,$ativo
	public function addUsuario($nome,$email,$login,$senha){
		$this->nome = $nome;//faltou o $ e o ;
		$this->email = $email;//faltou o $ e o ;
		$this->login = $login;//faltou o $ e o ;
		$this->senha = $senha;//faltou o $ e o ;
		$this->dataCadastro = date("Y-m-d");// o Y aqui, é caixa alta para que ele pegue ano com 4 digitos.
		$this->ativo = 0;//faltou o $

	}
}
