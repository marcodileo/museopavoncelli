<?php
include("../res/x5engine.php");
$nameList = array("wv8","tcm","pl5","4z8","eh5","2zf","j53","z5n","z2m","g48");
$charList = array("2","L","V","H","Z","3","G","S","3","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
