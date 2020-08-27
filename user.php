<?php
class User {
public $id;
public $nome;
public $cognome;
public $email;
public $eta;
public $citazione;
public $commento = false;

function __construct($_id, $_nome, $_cognome, $_email, $_citazione) {
  $this->id = $_id;
  $this->nome = $_nome;
  $this->cognome = $_cognome;
  $this->email = $_email;
  $this->citazione = $_citazione;

  }
  public function getUserData() {
    $puo_commentare = 'no';
    if ($this->commento === true) {
      $puo_commentare = 'si';
    }
			return [
      'id' => $this->id,
			'nome' => $this->nome,
			'cognome' => $this->cognome,
			'email' => $this->email,
			'eta' => $this->eta,
      'citazione' => $this->citazione,
			'commento' => $puo_commentare,
		];
	}
  public function canComment() {
    if ($this->eta > 60) {
      $this->commento = true;
    }
  }
}

?>
