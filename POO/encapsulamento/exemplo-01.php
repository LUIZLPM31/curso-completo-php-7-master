<?php

class Pessoa {

	public $nome = "Luiz Paulo";
	protected $idade = 35;
	private $senha = "12345";

	public function verDados(){

		echo $this->nome. "<br/>";
		echo $this->idade. "<br/>";
		echo $this->senha. "<br/>";

	}

}

$objeto = new Pessoa();

 //echo $objeto->senha . "<br/>";

$objeto->verDados();

?>