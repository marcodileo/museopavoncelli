<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
	$form->setField('Nome', @$_POST['imObjectForm_13_1'], '', false);
	$form->setField('Cognome', @$_POST['imObjectForm_13_2'], '', false);
	$form->setField('Email', @$_POST['imObjectForm_13_3'], '', false);
	$form->setField('Telefono', @$_POST['imObjectForm_13_4'], '', false);
	$form->setField('Tipo di visitatore', @$_POST['imObjectForm_13_5'], '', false);
	$form->setField('Oggetto della richiesta', @$_POST['imObjectForm_13_6'], '', false);
	$form->setField('Messaggio', @$_POST['imObjectForm_13_7'], '', false);
	$form->setField('Data indicativa della visita', @$_POST['imObjectForm_13_8'], '', false);
	$form->setField('Consenso al trattamento dei dati personali', @$_POST['imObjectForm_13_9'], '', false);
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '136C6A1D85B2B44ECE05D32827B3CA59' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
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