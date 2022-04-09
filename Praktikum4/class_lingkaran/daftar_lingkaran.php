<?php
require_once "class_lingkaran.php";
echo "NILAI PHI ". Lingkaran::PHI;

$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(20);

echo "<br/>";
echo "<br/>";
echo "Luas Lingkaran I : ".$lingkar1->getLuas();
echo "<br/>";
echo "Luas Lingkaran II : ".$lingkar2->getLuas();

echo "<br/>";
echo "Keliling Lingkaran I : ".$lingkar1->getKeliling();
echo "<br/>";
echo "Keliling Lingkaran II : ".$lingkar2->getKeliling();
?>