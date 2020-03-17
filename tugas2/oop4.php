<?php 
   class pesantren{
   	public  $santri,
   	        $asrama,	
   	        $ustad;
	   
	   public function __construct($santri=0,$asrama='',$ustad='')
	{ 
		$this->santri=$santri;
		$this->asrama=$asrama;
		$this->ustad=$ustad;
	}
	protected function tampilkan_santri()
	{
		return $this->santri;
	}
	protected function tampilkan_asrama()
	{
		return $this->asrama;
	}
	protected function tampilkan_ustad()
	{
		return $this->ustad;
	}
}
    class lonceng extends pesantren
    {
    	public function tampilkan_lonceng()
        {
        	echo "murid di sekolah saya berjumlah:".$this->santri.'<br>
        	dan guru sebanyak:' .$this->ustad;
        }
    }
   class dapur extends pesantren
   {
   	public function tampilkan_dapur()
   	{
   		echo "jumlah pesantren saya:".$this->asrama. '<br>
   		dan dan di asrama saya ada santri:'.$this->santri;
   	}
   }


 	$lonceng=new lonceng ('sedkit',8);
 	$lonceng->tampilkan_lonceng();
 	echo '<br><br>';
	$dapur=new dapur ( 12,31);
 	$dapur->tampilkan_dapur();
 ?>
