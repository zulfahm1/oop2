<?php 
   class manusia{
   	public  $umur,
   	        $kelamin,	
   	        $pekerjaan;
	   
	   public function __construct($umur=0,$kelamin='',$pekerjaan='')
	{ 
		$this->umur=$umur;
		$this->kelamin=$kelamin;
		$this->pekerjaan=$pekerjaan;
	}
	protected function tampilkan_umur()
	{
		return $this->umur;
	}
	protected function tampilkan_kelamin()
	{
		return $this->kelamin;
	}
	protected function tampilkan_pekerjaan()
	{
		return $this->pekerjaan;
	}
}
    class kakek extends manusia
    {
    	public function tampilkan_kakek()
        {
        	echo "nenek itu berumur:".$this->umur.'<br>
        	dia adalah seorang:' .$this->kelamin;
        }
    }
   class nenek extends manusia
   {
   	public function tampilkan_nenek()
   	{
   		echo "kakak saya bekerja:".$this->pekerjaan. '<br>
   		dan berumur:'.$this->umur;
   	}
   }


 	$kakek=new kakek ('77',"gadis");
 	$kakek->tampilkan_kakek();
 	echo '<br><br>';
	$nenek=new nenek ( 12,31);
 	$nenek->tampilkan_nenek();
 ?>
