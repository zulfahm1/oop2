<?php 
   class sekolah{
   	public  $murid,
   	        $kelas,	
   	        $guru;
	   
	   public function __construct($murid=0,$kelas='',$guru='')
	{ 
		$this->murid=$murid;
		$this->kelas=$kelas;
		$this->guru=$guru;
	}
	protected function tampilkan_murid()
	{
		return $this->murid;
	}
	protected function tampilkan_kelas()
	{
		return $this->kelas;
	}
	protected function tampilkan_guru()
	{
		return $this->guru;
	}
}
    class pintu extends sekolah
    {
    	public function tampilkan_pintu()
        {
        	echo "murid di sekolah saya berjumlah:".$this->murid.'<br>
        	dan guru sebanyak:' .$this->guru;
        }
    }
   class jendela extends sekolah
   {
   	public function tampilkan_jendela()
   	{
   		echo "jumlah sekola saya:".$this->kelas. '<br>
   		dan dan di kelas saya ada murid:'.$this->murid;
   	}
   }


 	$jendela=new jendela ('banyak',81);
 	$jendela->tampilkan_jendela();
 	echo '<br><br>';
	$pintu=new pintu ( 654, '',76);
 	$pintu->tampilkan_pintu();
 ?>
