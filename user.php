<?php
class User {
public $id;
public $nome;
public $cognome;
public $email;
public $eta;
public $commento;

function __construct($_id, $_nome, $_cognome, $_email, $_eta, $_commento) {
  $this->id = $_id;
  $this->nome = $_nome;
  $this->cognome = $_cognome;
  $this->email = $_email;
  $this->eta = $_eta;
  $this->commento = $_commento;

  }
  public function getUserData() {
			return [
			'nome' => $this->nome,
			'cognome' => $this->cognome,
			'email' => $this->email,
			'eta' => $this->eta,
			'comment0' => $this->$commento,
		];
	}
}

?>
