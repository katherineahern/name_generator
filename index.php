<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Random Improv Troupe Name Generator</title>
</head>

<body>

<center><h1>Random Improv Troupe Name Generator</h1></center><br/>

<center><h2>
<?php

require_once('Noun.php');
require_once('Adjective.php');
require_once('Connector.php');


	//create all nouns,adjectives,etc you might need
	$adjective = new Adjective();
	$noun = new Noun();
	$noun->setNoun();
	$adjective->setAdjective();
	$connector = new Connector();
	$connector->setConnector();
	$noun2 = new Noun();
	$noun2->setNoun();

	//get random number for what kind of combination
	$random_number = rand(1,4);
	
	//echo "<br/>Random number: " . $random_number . "<br/>";
	if(isset($_POST["optional_word"])){
		$word = ucfirst($_POST["optional_word"]);
		echo $adjective->getAdjective() . " ";
		echo $word . " ";
				echo $noun->getNoun();
				echo "<br/>";
		
	} else {
		switch ($random_number) {
			case 1:
				echo $adjective->getAdjective();
				echo " ";
				echo $noun->getNoun();
				echo "<br/>";
				break;
			case 2:
				echo $noun->getNoun();
				echo " ";
				echo $noun2->getNoun();
				echo "<br/>";
				break;
			case 3:
				echo $adjective->getAdjective();
				echo " ";
				echo $noun->getNoun();
				echo " ";
				echo $connector->getConnector();
				echo " ";
				echo $noun2->getNoun();
				echo "<br/>";
				break; 
			case 4:
				echo $noun->getNoun();
				echo " ";
				echo $connector->getConnector();
				echo " ";
				echo $noun2->getNoun();
				echo "<br/>";
				break;
		}
	}

	echo"<br/>";
	
	
	
?>
</h2></center>

</body>
</html>
