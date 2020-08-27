<?php
require_once(__DIR__ . '/Employee.php');
require_once(__DIR__ . '/User.php');

$utenti = [
  [
    'id' => 1,
    'nome' => 'Mick',
    'cognome'=> 'Jagger',
    'eta' => 77,
    'email' => 'jagger@mail.it',
    'citazione' => 'Ai Rolling Stones dò al massimo altri due anni (1964).',

  ],
  [
    'id' => 2,
    'nome' => 'Keith',
    'cognome'=> 'Richard',
    'eta' => 76,
    'email' => 'richard@mail.it',
    'citazione' => 'Prima di Elvis il mondo era in bianco e nero. Poi è arrivato... ed ecco un grandioso technicolor.'

  ],
  [
    'id' => 3,
    'nome' => 'David',
    'cognome'=> 'Bowie',
    'eta' => 54,
    'email' => 'bowie@mail.it',
    'citazione' => 'Non so dove sto andando da qui ma vi prometto che non sarà noioso (Epitaffio).'
  ]
];

foreach ($utenti as $utente) {
	$user = new User($utente['id'], $utente['nome'], $utente['cognome'],$utente['email'],$utente['citazione']);
  $user->eta = $utente['eta'];
  $user->canComment();
	$user_data = $user->getUserData();

	?>
		<div>
			<ul>
        <li>ID: <?php echo $user_data['id']; ?></li>
				<li>Nome: <?php echo $user_data['nome']; ?></li>
				<li>Cognome: <?php echo $user_data['cognome']; ?></li>
				<li>Email: <?php echo $user_data['email']; ?></li>
				<li>Età: <?php echo $user_data['eta']; ?></li>
        <li>Citazione: <?php echo $user_data['citazione']; ?></li>
				<li>Può commentare: <?php echo $user_data['commento']; ?></li>
			</ul>
		</div>
	<?php
}

?>
