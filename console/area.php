<?php

print("Enter first Number: \n");
fscanf(STDIN,"%d",$a);
print("Enter second Number: \n");
fscanf(STDIN,"%d",$b);
$c = $a*$b;
fprintf(STDOUT,"Result is: %d",$c);