<?php
$array_value = array("3" => "Linio", "5" => "IT", "15" => "Linianos");
	$final_array = [];
	for($i=1;$i<=100;$i++){
		$final_array[$i] = $i;
		foreach($array_value as $key => $value){
			if($i % $key  == 0){
				$final_array[$i] = $value;
			}	
		}
	}
	print "<pre>";print_r($final_array);
?>
