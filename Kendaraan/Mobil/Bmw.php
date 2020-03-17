<?php

namaspace Kendaraan\Mobil;

class Bmw;
{
	public $merek;
	public $warna;

	public function setNamaMerek($nm)
	{
		$this->merek =$nm;
	}
	public function setWarna($wr)
	{
		$this->warna =$wr;

	public function output()

	echo "saya punya mobil merek " .$this->merek." dan berwarna" .$this->warna;
   }
}