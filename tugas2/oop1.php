<?php 
   class  tanah{
   	public $luas,
   	       $jenis_tanah,
   	       $harga;
   	    public function __construct($luas='',$jenis_tanah='',$harga='')    
    { 
		$this->luas=$luas;
		$this->jenis_tanah=$jenis_tanah;
		$this->harga=$harga;
	}
	protected function tampilkan_luas()
	{
		return $this->luas;
	}
	protected function tampilkan_jenis_tanah()
	{
		return $this->jenis_tanah;
	}
	protected function tampilkan_harga()
	{
		return $this->harga;
	}	   
   }

       class andosol extends tanah
    {
    	public function tampilkan_andosol()
        {
        	echo "tanah ini seleluas".$this->luas.'<br>
        	dan berjenis:' .$this->jenis_tanah;
        }
    }
   class uluvial extends tanah
   {
   	public function tampilkan_uluvial()
   	{
   		echo "tanah ini seharga:".$this->harga. '<br>
   		dan luasnya:'.$this->luas;
   	}
   }


 	$andosol=new andosol ('satu hektar','tanah liat','');
 	$andosol->tampilkan_andosol();
 	echo '<br><br>';
	$uluvial=new uluvial ('1 kilo', '', 'gedee');
 	$uluvial->tampilkan_uluvial();
 ?>