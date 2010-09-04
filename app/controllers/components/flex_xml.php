<?php 

class FlexXmlComponent extends Object {
	
	//returns data array based on model info
	function toArray($data = array()){
		uses('Xml');
		$data = Set::reverse(new Xml($data));
		$data = $this->removeEmpties($data);	
		return $data;	
	}
	
	private function removeEmpties($ar = array()){
		foreach($ar as $key=>&$child){
			if(empty($child)){
				unset($ar[$key]);
			}else{
				if(is_array($child)){
					$child = $this->removeEmpties($child);
				}
			}
		}
		return $ar;
	}
}
?>