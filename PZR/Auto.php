<?php
Class Auto {
	
	private $automobili = array(
		1 => 'Mercedes 300',  
		2 => 'Audi Q4',  
		3 => 'Peugeot 306',  			
		4 => 'Golf 4',  			
		5 => 'Passat B5',  
		6 => 'BMW X6');

	public function sviAutomobili(){
		return $this->automobili;
	}
	
	public function jedanAuto($id){
		if($id==0 || $id>sizeof($this->automobili))
		{
			echo "Netacan id";
		}
		else{
		$auto = array($id => ($this->automobili[$id]) ? $this->automobili[$id] : $this->automobili[1]);
		return $auto;
		}
	}	
	public function izbrisiAuto($id){
		unset($this->automobili[$id]);
	}	
	public function updateAuto($id){
		$this->automobili[$id]="Porsche Panamera";
	}	
}
?>