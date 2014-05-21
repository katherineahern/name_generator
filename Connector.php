<?php
class Connector
{
	
	//properties defined here
	public $connector;
	

	//methods defined here
	public function setConnector()
	{
		//echo "Testing";
		//load file
		//$preposition_xml = simplexml_load_file('prepositions.xml');
		
		//get count of adjectives in xml file, then decrement because array count in simplexml starts at 0
		//$count_of_prepositions = $xml->preposition->count();
		//$count_of_prepositions = $count_of_prepositions - 1;
		
		//$random_number = rand(0,$count_of_prepositions);
		
		//test xml load
		//print_r($preposition_xml);
		
		//set the adjective to a random noun from the xml file
		//$this->connector = $preposition_xml->preposition;
		$this->connector = "of the";
		
	}
	
	public function getConnector()
	{		
    	//return $this->connector;
		return $this->connector;
	}

}
