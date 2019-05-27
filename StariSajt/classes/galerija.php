<?php 
include('conect.php');
class galerija{
    
    public function ispisGalerija(){
        $q=DB::getInstance()->query("SELECT * FROM galerija ");
		while($rez = $q->fetch(PDO::FETCH_OBJ)){
        var_dump($rez);
    }}
    
}


?>