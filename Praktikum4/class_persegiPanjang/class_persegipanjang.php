<?php

class PersegiPanjang{
	public $panjang;
	public $lebar;
	function __construct($panjang,$lebar){
		$this->panjang = $panjang;
		$this->lebar = $lebar;
	}
	function hitungLuas(){
		return $this->panjang * $this->lebar;
	}
	function hitungKeliling(){
		return 2 * ($this->panjang + $this->lebar);
	}
}


echo "Luas dan Keliling Persegi Panjang";
echo "<br/>";
echo "<br/>";

$pp1 = new PersegiPanjang(10,5);
$pp2 = new PersegiPanjang(20,5);

echo "Luas PersegiPanjang 1 : ".$pp1->hitungLuas();
echo "<br/>";
echo "Luas PersegiPanjang 2 : ".$pp2->hitungLuas();

echo "<br/>";

echo "Keliling PersegiPanjang 1 : ".$pp1->hitungKeliling();
echo "<br/>";
echo "Keliling PersegiPanjang 2 : ".$pp2->hitungKeliling();


?>