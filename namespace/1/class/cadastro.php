<?php 

class Cadastro {

	private $nome;
	private $email;
	private $senha;

	public function getNome(): string
	{
		return $this->nome; // Corrigido $this->$nome para $this->nome
	}

	public function getEmail(): string
	{
		return $this->email; // Corrigido $this->$email para $this->email
	}

	public function getSenha(): string
	{
		return $this->senha; // Corrigido $this->$senha para $this->senha
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function setSenha($senha) {
		$this->senha = $senha;
	}

	public function __toString() {
		// Corrigido a sintaxe do array
		return json_encode([
			"nome" => $this->getNome(),
			"email" => $this->getEmail(),
			"senha" => $this->getSenha()
		]);
	}

}

?>
