<?php
$array = [
  'first_name' => 'Abolfazl',
  'last_name' => 'Sabagh',
  'age' => 30,
  'job' => 'Software Engineer',
];
$keys = ['last_name','age'];
array_intersect_key($array,array_flip($keys));
