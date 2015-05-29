<?php
class Animals
{
	private $species = '';
	private $speak = '';	
	private $age = 0;
	private $birthdate = '';

	public function __construct($species)
	{
		if ($species)
		{
			$this->species = $species;
		}
	}
	public function dna($speak,$age,$birthdate)
	{
		if ($speak)
		{
			$this->speak = $speak;
		}
		if ($age)
		{
			$this->age = $age;
		}
		if ($birthdate)
		{
			$this->birthdate = date('M d Y',$birthdate);
		}
		
		$output .= 'My '.$this->species.' Speaks: '.$this->speak.' <br />';
		$output .= 'My '.$this->species.'\'s Age: '.$this->age.' <br />';
		$output .= 'My '.$this->species.'\'s Birth Date: '.$this->birthdate.'<br />';
		return $output;
	}
}

// My dog speaks chinese, age 10, and was born two days ago.
$dog = new Animals('Dog');
echo $dog->dna('Chinese','10',time()-(2*24*60*60));

// My cat speaks english, age 5, and was born today.
$cat = new Animals('Cat');
echo $cat->dna('English','5',time());

?>
