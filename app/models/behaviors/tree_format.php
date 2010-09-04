<?php 
App::import('Behavior','Tree'); 
class TreeFormatBehavior extends TreeBehavior {
    
    function nestedArray(&$Model, $params = array()){
    	$params = array_merge(array('order'=>'lft'),$params);
    	$nested = $Model->find('threaded',$params);
    	$ar = $this->formatNested($nested);
    	
    	/*
    	 * we use the inflector to wrap the tags in a pluralized tag
    	 * for Flex usability
    	 */
    	
    	return array(Inflector::pluralize($Model->name)=>$ar);
    	
    }
    
    private function formatNested($nested = array()){
    	$xmlTree = array();
   		foreach($nested as $keyId => $treeChildren){
   			$keys = array_keys($treeChildren);		
   			//$keys[0] is the modelName always
   			//$keys[1] is children always, even if empty;
   			if(!empty($treeChildren[$keys[1]])){
   				$newChildren = $this->formatNested($treeChildren[$keys[1]]);
   				//$array['ModelName'] = array($treeChildren['ModelName'], array('{n}'=>$newChildrenValues	);
   				$xmlTree[$keys[0]][] = array_merge($treeChildren[$keys[0]], $newChildren);
   			}else{
   				$xmlTree[$keys[0]][] = $treeChildren[$keys[0]];
   			}
 
   		}
   			
    	return $xmlTree;
    }
    
}
?> 