<?php
class introduction {
	//property

	private $nama;
	private $alamat;	

	//method

	public function alamat($nrh)
	{
		$this->norumah =$nrh;
	}
	//method

	public function nama($nm)
	{
		$this->anak =$nm;
		}	

	public function output (){
	 	echo "nama saya  ".$this->anak ." alamat rumah saya no " .$this->norumah. " di BTN regency" ;
	  }


}

$manusia = new introduction ();	
$manusia ->alamat("4.");
$manusia ->timezone_name_from_abbr(abbr)("FAHMI,");

$manusia ->output();