<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
	$form->setField('Nome e cognome', @$_POST['imObjectForm_13_1'], '', false);
	$form->setField('Email', @$_POST['imObjectForm_13_2'], '', false);
	$form->setField('Telefono', @$_POST['imObjectForm_13_3'], '', false);
	$form->setField('Tipologia di pubblico', @$_POST['imObjectForm_13_4'], '', false);
	$form->setField('Numero indicativo di partecipanti', @$_POST['imObjectForm_13_5'], '', false);
	$form->setField('Data preferita della visita', @$_POST['imObjectForm_13_6'], '', false);
	$form->setField('Fascia oraria preferita', @$_POST['imObjectForm_13_7'], '', false);
	$form->setField('Note ed esigenze particolari', @$_POST['imObjectForm_13_8'], '', false);
	$form->setField('Acconsento al trattamento dei dati personali secondo l’informativa privacy', @$_POST['imObjectForm_13_9'], '', false);
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '4C33F57EB4CDC735769FF87D7B58ABA4' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			$errorMessage = "E' necessario attivare JavaScript!";
		$form->mailToOwner('info@museopavoncelli.it', '', 'info@museopavoncelli.it', 'Nuovo contatto', "Nuovi dati ricevuti dal sito web:", false);
		if ($errorMessage == '') {
			echo "{\"status\" : true}";
		}

		else {
			echo "{\"status\" : false, \"err\" : \"$errorMessage\"}";
		}
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file