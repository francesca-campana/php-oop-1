<?php
require_once(__DIR__ . '/user.php');

$users = [
  [
    'id' => 1,
    'nome' => 'Mick',
    'cognome'=> 'Jagger',
    'eta' => 77,
    'email' => 'jagger@mail.it',
    'commento' => 'Ai Rolling Stones dò al massimo altri due anni (1964).'

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
    'commento' => 'Non so dove sto andando da qui ma vi prometto che non sarà noioso (Epitaffio).'
  ]
];

foreach ($users as $user) {
	$utente = new User($user['id'], $user['nome'],$user['cognome'],$user['email'],$user['eta'], $user['commento']);
	$user_data = $utente->getUserData();

	?>
		<div>
			<ul>
				<li>Nome: <?php echo $user_data['nome']; ?></li>
				<li>Cognome: <?php echo $user_data['cognome']; ?></li>
				<li>Email: <?php echo $user_data['email']; ?></li>
				<li>Età: <?php echo $user_data['eta']; ?></li>
				<li>Può commentare: <?php echo $user_data['commento']; ?></li>
			</ul>
		</div>
	<?php
}

?>
