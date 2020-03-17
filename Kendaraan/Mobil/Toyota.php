<?php
  
  namespace Kendaraan\Mobil;


class Toyota {
	//property

	private $setNamaMerek =4;
	private $jumlahKursi;

	//method

	public function setNamaMerek($jrd)
	{
		$this->setNamaMerek =$jrd;
	}
	//method
	public function setjumlahKursi($krs)
	{
		$this->jumlahKursi =$krs;
		}

	public function output (){
	 	echo "saya punya mobil dengan ".$this->NamaMerek ." buah roda dan " .$this->jumlahkursi. "buah kursi" ;
	  }
}

