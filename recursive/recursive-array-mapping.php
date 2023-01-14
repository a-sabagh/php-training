<?php

$arr = [1,2,3,4,5];

function array_insert(&$array, $position, $insert){
    if (is_int($position)) {
        array_splice($array, $position, 0, $insert);
    } else {
        $pos   = array_search($position, array_keys($array));
        $array = array_merge(
            array_slice($array, 0, $pos),
            $insert,
            array_slice($array, $pos)
        );
    }
}


function recursive_increase(array &$output,int $start=0){
	foreach(array_slice($output,$start) as $key => $item){
		sleep(3);
		var_dump($output);
		if(2 == $item){
			$position = array_search($item,$output)+1;
			echo "position: {$position}\n";
			echo "start: {$start}\n";
			array_insert($output,$position,[6]);
			recursive_increase($output,$position);
		}elseif(6 == $item){
			$position = array_search($item,$output)+1;
			echo "position: {$position}\n";
			echo "start: {$start}\n";
			array_insert($output,$position,[11]);
			recursive_increase($output,$position);
		}
	}
}

recursive_increase($arr);
var_dump($arr);
