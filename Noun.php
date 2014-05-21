<?php
class Noun
{
	
	//properties defined here
	public $noun;
	

	//methods defined here
	public function setNoun()
	{
		//load file
		$xml = simplexml_load_file('nouns.xml');
		
		//get count of nouns in xml file, then decrement because array count in simplexml starts at 0
		$count_of_nouns = $xml->noun->count();
		$count_of_nouns = $count_of_nouns - 1;
		
		$random_number = rand(0,$count_of_nouns);
		
		//test xml load
		//print_r($xml);
		
		//set the noun to a random noun from the xml file
		$this->noun = $xml->noun[$random_number];
		
	}
	
	public function getNoun()
	{		
    	return $this->noun;
	}

}
