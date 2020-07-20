<?php

class robot{
	public $nama_robot;

		function beri_nama($nama)
		{
		$this->nama_robot=$nama;
		}
		function tampilkan(){
			return $this->nama_robot;
		}
	}
class fungsi extends robot{
	public $fungsi_robot;

		function __construct($fungsi)
		{
			$this->fungsi_robot=$fungsi;
		} 
		function munculkan(){
			return $this->fungsi_robot;
		}

}
	$cek = new robot();
	$cek->beri_nama('cosmos');
	echo $cek->tampilkan();

	echo "<br>";

	$test = new fungsi('penyapu');
	echo $test->munculkan();


















// buatlah contoh OOP dengan requirement berikut:
//- 2 Class
//- Masing2 Class mempunyai method dan property
//- Terapkan konsep inheritance dan overriding


?>