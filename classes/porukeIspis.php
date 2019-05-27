<?php
	include"conect.php";
	
	class poruke{
	public $i;
	public function ispisiPoruku()
	{
		$q = "SELECT * FROM komentari";
		$rez = DB::getInstance()->query($q);
		$rw = $rez->fetch(PDO::FETCH_OBJ);
			//var_dump($rw);
				$duzina = count((array)$rw);
			echo($duzina);			
		}	
	}
		$rr = new poruke();
		$rr->ispisiPoruku();
		
?>