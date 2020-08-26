<?php
require_once(__DIR__ . '/user.php');

$users = [
  [
    'id' => 1,
    'nome' => 'Mick',
    'cognome'=> 'Jagger',
    'eta' => 77,
    'email' => 'jagger@mail.it',
    'commento' => 'Ai Rolling Stones dò al massimo altri due anni'

  ],
  [
    'id' => 2,
    'nome' => 'Keith',
    'cognome'=> 'Richard',
    'eta' => 76,
    'email' => 'richard@mail.it',
    'commento' => 'Prima di Elvis il mondo era in bianco e nero. Poi è arrivato... ed ecco un grandioso technicolor.'

  ],
  [
    'id' => 3,
    'nome' => 'David',
    'cognome'=> 'Bowie',
    'eta' => 54,
    'email' => 'bowie@mail.it',
    'commento' => 'Non so dove sto andando da qui ma vi prometto che non sarà noioso'
  ]
];

foreach ($users as $key => $user) {
  $utente = new User($user['id'], $user['nome'],$user['cognome'],$user['email'],$user['eta'], $user['commento']);
    echo 'Id Utente: ' . $user['id'] . '<br>';
    echo 'Nome: ' . $user['nome'] . '<br>';
    echo 'Cognome: ' . $user['cognome'] . '<br>';
    echo 'Email: ' . $user['email'] . '<br>';
    echo 'Età: ' . $user['eta'] . '<br>';
    echo 'Commento: ' . $user['commento'] . '<br>' . '<br>';
}

?>
