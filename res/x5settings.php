<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => '8D68049338FD6DE48FF0539564C57DB5',
	'url' => 'http://localhost/',
	'homepage_url' => 'http://localhost/index.html',
	'icon' => '',
	'version' => '2026.1.7.1',
	'sitename' => 'Museo Pavoncelli - olio e agricoltura, storia della Puglia',
	'lang_code' => 'it-IT',
	'rtl' => false,
	'public_folder' => '',
	'salt' => 'nmfnx9hle292fl9hzmt9dey9okagh2e2lkrm5u59twv3qc49yqd3ifj8n5yd',
	'common_email_sender_addres' => 'info@museopavoncelli.it',
	'enable_sender_header' => true,
	'date_format' => 'dd/MM/yy',
	'date_format_ext' => 'dddd dd MMM yyyy',
	'date_format_no_day' => 'MM/yy',
	'date_format_no_day_ext' => 'MMM yyyy'
);
/*
|-------------------------------
|	BREAKPOINTS
|-------------------------------
*/

$imSettings['breakpoints'] = array(
	array("name" => "Desktop", "hash" => "ea2f0ee4d5cbb25e1ee6c7c4378fee7b", "start" => "max", "end" => 1150.0, "fluid" => false),
	array("name" => "Breakpoint 1", "hash" => "d2f9bff7f63c0d6b7c7d55510409c19b", "start" => 1149.9, "end" => 720.0, "fluid" => false),
	array("name" => "Mobile", "hash" => "72e5146e7d399bc2f8a12127e43469f1", "start" => 719.9, "end" => 480.0, "fluid" => false),
	array("name" => "Mobile Fluid", "hash" => "5ecdcca63de80fd3d4fbb36295d22b7d", "start" => 479.9, "end" => 0.0, "fluid" => true),
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"f80ipaa0-imCpt\">Parola di controllo:</label><br />
			<input type=\"text\" id=\"f80ipaa0-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_vratsjfj.png',
	'notification_public_key' => 'BN4n4sIENF7kRucX6owW1RPn34-bbmYLtRkHuJUuE8Mnpf5EQZohXEYTYjGD70G9P6sn5kRAX3JUSv75CRc1_Bg',
	'notification_private_key' => 'agobUaXVxwARN1A7SbZvwn8Sv51_Hat3b8tn9OiXqZE',
	'notification_dbprefix' => 'w5_kv78dqbp_notifications_',
	'enable_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'http://localhost/',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(23, 23, 23, 1); background-color: rgba(225, 212, 198, 1); padding: 10px 30px 10px 30px; border: solid; border-block-color: transparent transparent; border-inline-color: transparent transparent; border-width: 1px; border-radius: 5px; ',
	'email_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo ordine, le ricordiamo che siamo in attesa del pagamento.<br /><br />Qui di seguito può trovare l\'elenco dei prodotti ordinati, i dati di fatturazione e spedizione e le istruzioni per poter effettuare il pagamento.',
	'email_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale.',
	'email_payment_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo acquisto, le confermiamo che abbiamo ricevuto il suo pagamento e che l’ordine verrà evaso il prima possibile.<br /><br />Qui di seguito può trovare l\'elenco dei prodotti ordinati e i dati di fatturazione e spedizione.',
	'email_payment_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale',
	'email_digital_shipment_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo acquisto le inviamo l\'elenco dei download link relativo ai prodotti ordinati:',
	'email_digital_shipment_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale',
	'email_physical_shipment_opening' => 'Gentile Cliente,<br />ringraziandola per il Suo acquisto, le confermiamo che l’ordine è stato correttamente evaso e la merce è stata spedita.<br /><br />Qui di seguito può trovare l\'elenco dei prodotti ordinati:',
	'email_physical_shipment_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'info@museopavoncelli.it',
	'vat_type' => 'included',
	'availability_image' => ''
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '€',
	'currency_code' => 'EUR',
	'currency_name' => 'Euro',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array());
$ecommerce->setSlugToProductIdMap(array());
$ecommerce->setCategoriesData(array());
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_kv78dqbp_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Bonifico Bancario',
		'description' => 'Pagamento posticipato tramite Bonifico Bancario.',
		'email_text' => 'Qui di seguito sono riportati i dati necessari per effettuare il pagamento tramite Bonifico Bancario:

XXX YYY ZZZ

Le ricordiamo che, una volta effettuato il pagamento, è necessario inviare la copia contabile insieme al Numero di Ordine.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Posta',
		'description' => 'La merce verrà consegnata in 3-5 giorni lavorativi.',
		'email_text' => 'Spedizione tramite Posta.\\nLa merce verrà consegnata in 3-5 giorni lavorativi.',
		'tracking_type' => 'none'
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Corriere Espresso',
		'description' => 'La merce verrà consegnata in 1-2 giorni lavorativi.',
		'email_text' => 'Spedizione tramite Corriere Espresso.\\nLa merce verrà consegnata in 1-2 giorni lavorativi.',
		'tracking_type' => 'none'
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array(
	'x5gb622' => array(
		'id' => 'x5gb622',
		'objectnumber' => 22,
		'pagetitle' => 'Virtual tour',
		'celltitle' => '',
		'rating' => TRUE,
		'order' => 'asc', 
		'sendmode' => 'file',
		'folder' => '',
	)
);

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2026.1.7 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#171717" style="background-color: #171717;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px; border-collapse: separate;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; font: normal normal normal 12pt \'Open Sans\'; color: #4D515B; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; padding-top: 25px;  padding-bottom: 25px; padding-left: 25px; padding-right: 25px;  background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailIcons" style="background-color: #FFFFFF;border-left: 0px solid transparent; border-right: 0px solid transparent; border-bottom-style: solid; border-bottom-color: transparent; border-bottom-width: 0px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;  padding-top: 25px;  padding-bottom: 25px; padding-left: 15px; padding-right: 15px;  text-align: center;  min-height: 300px; " width="700"></td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 12pt \'Open Sans\'; color: #FFFFFF; background-color: #171717; text-decoration: none; text-align: center;  margin-top: 5px; padding-top: 25px;  padding-bottom: 25px; padding-left: 25px; padding-right: 25px; background-color: #171717">' . "\n\t\t" . 'Questo messaggio di posta elettronica contiene informazioni rivolte esclusivamente al destinatario sopra indicato.<br>Nel caso aveste ricevuto questo messaggio di posta elettronica per errore, siete pregati di segnalarlo immediatamente al mittente e distruggere quanto ricevuto senza farne copia.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#4D515B';
$ImMailer->bodySeparatorBorderColor = '#4D515B';
$ImMailer->emailBackground = '#171717';
$ImMailer->emailContentStyle = 'font: normal normal normal 12pt \'Open Sans\'; color: #4D515B; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Open Sans;';

// End of file x5settings.php