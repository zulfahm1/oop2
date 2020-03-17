<?php 
   class buah{
   	public  $jumlah,
   	        $warna,	
   	        $ukuran;
	   
	   public function __construct($jumlah=0,$warna='',$ukuran='')
	{ 
		$this->jumlah=$jumlah;
		$this->warna=$warna;
		$this->ukuran=$ukuran;
	}
	protected function tampilkan_jumlah()
	{
		return $this->jumlah;
	}
	protected function tampilkan_warna()
	{
		return $this->warna;
	}
	protected function tampilkan_ukuran()
	{
		return $this->ukuran;
	}
}
    class pisang extends buah
    {
    	public function tampilkan_pisang()
        {
        	echo "pisang ini berjumlah:".$this->jumlah.'<br>
        	dan warnanya:' .$this->warna;
        }
    }
   class apel extends buah
   {
   	public function tampilkan_apel()
   	{
   		echo "apel ini sangat:".$this->ukuran. '<br>
   		dan berjumlah:'.$this->jumlah;
   	}
   }


 	$pisang=new pisang ('banyak','pink');
 	$pisang->tampilkan_pisang();
 	echo '<br><br>';
	$apel=new apel ('1 kilo', '', 'gedee');
 	$apel->tampilkan_apel();
 ?>
