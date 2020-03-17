<?php 
require_DIR_. '/Kendaraan/Mobil/Toyota.php';
require_DIR_. '/Kendaraan/Mobil/Bmw.php';

use Kendaraan\Mobil\Toyota;
use Kendaraan\Mobil\Bmw;

$b = new Bmw;
$b->setNamaMerek('BMW');
$b->setWarna('Pink');
$->output();
 ?>