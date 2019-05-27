<?php 



	class porukeClick{
		public function unesiKomentar(){
			if(!empty($_POST['name']) and (!empty($_POST['email'])) and (!empty($_POST['comment'])))
			{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$url = $_POST['url'];
			$comment = $_POST['comment'];
			$datum = date('Y-m-d H:i:s');
			$vreme = time();
			//$design = 1;
			//$fame = 2;
			//$madihat = 3;
			//$news = 4;
			//$costOfLiving = 5;
			$top10 = 6;
			$upit = DB::getInstance()->prepare("INSERT INTO komentari VALUES(null,?,?,?,?,?,?,?)");
			$upit->bindValue(1,$name);
			$upit->bindValue(2,$datum);
			$upit->bindValue(3,$vreme);
			$upit->bindValue(4,$email);
			$upit->bindValue(5,$url);
			$upit->bindValue(6,$comment);
			$upit->bindValue(7,$top10);
			$upit->execute();
	
	}
	
	header("Location: {$_SERVER['HTTP_REFERER']}");
	}
	
}


?>