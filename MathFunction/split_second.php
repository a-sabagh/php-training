<?php
function split_second ($Value_s){
	$hours = round($Value_s/3600);
	$miniutes = round(($Value_s - ($hours*3600))/60);
	$secondes = $Value_s - ($hours*3600) - ($miniutes * 60);
	echo "{$hours} : {$miniutes} : {$secondes}";
}
split_second(19631);
