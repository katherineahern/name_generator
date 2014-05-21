<?php
class Adjective
{
	
	//properties defined here
	public $adjective;
	

	//methods defined here
	public function setAdjective()
	{
		//load file
		$xml = simplexml_load_file('adjectives.xml');
		
		//get count of adjectives in xml file, then decrement because array count in simplexml starts at 0
		$count_of_adjectives = $xml->adjective->count();
		$count_of_adjectives = $count_of_adjectives - 1;
		
		$random_number = rand(0,$count_of_adjectives);
		
		//test xml load
		//print_r($xml);
		
		//set the adjective to a random noun from the xml file
		$this->adjective = $xml->adjective[$random_number];
		
	}
	
	public function getAdjective()
	{		
    	return $this->adjective;
	}

}
