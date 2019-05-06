<?php

$a = null;

print $a ?? 'b';
print "\n";

print $a ?: 'b';
print "\n";

print $c ?? 'a';
print "\n";

print $c ?: 'a';
print "\n";

$b = array('a' => null);

print $b['a'] ?? 'd';
print "\n";

print $b['a'] ?: 'd';
print "\n";

print $b['c'] ?? 'e';
print "\n";

print $b['c'] ?: 'e';
print "\n";


/*
output -----------------------------------
b
b
a

Notice: Undefined variable: c in /in/apAIb on line 14
a
d
d
e

Notice: Undefined index: c in /in/apAIb on line 33
e
*/
