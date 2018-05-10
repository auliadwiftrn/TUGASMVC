<?php 

class FormModel{

	public function SeleksiBeswan(){
		$ran = array("14 Mei 2018","15 Mei 2018","16 Mei 2018","17 Mei 2018","18 Mei 2018");
		$randomElement = $ran[array_rand($ran,1)];
		return $randomElement;

	}

}



 ?>