<?php 
//remove duplicates from array
$duplicate_array = array(1,2,4,6,3,5,2,4,5,7,6,1,2);
print_r(array_unique($duplicate_array),SORT_REGULAR);