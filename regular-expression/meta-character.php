<?php

// .
echo preg_match("/h.t/", "hot") . "<br>";    //1  
echo preg_match("/h.t/", "ht") . "<br>";     //0
echo preg_match("/h.t/", "hoppppt") . "<br>";//0
echo '<hr>';
//+
echo preg_match("/he+t/", "heeet") . "<br>";//1
echo preg_match("/he+t/", "het") . "<br>";  //1  
echo preg_match("/he+t/", "ht") . "<br>";   //0 
echo '<hr>';
//*
echo preg_match("/ho*t/", "hot") . "<br>";   //1    
echo preg_match("/ho*t/", "hoooot") . "<br>";//1 
echo preg_match("/ho*t/", "ht") . "<br>";    //1
echo '<hr>';
//?
echo preg_match("/ho?t/", "hot") . "<br>"; //1
echo preg_match("/ho?t/", "het") . "<br>"; //0
echo preg_match("/ho?t/", "ht") . "<br>";  //1
echo '<hr>';
//{}
echo preg_match("/h{1}t/", "hot") . "<br>";     //0
echo preg_match("/h{2}eet/", "hheet") . "<br>"; //1
echo preg_match("/h{1,}t/", "ht") . "<br>";     //1
echo preg_match("/h{2,}t/", "hhhot") . "<br>";  //0
echo preg_match("/h{2,}/", "hhoeeeet") . "<br>";//1  
echo preg_match("/h{1,5}t/", "hhht") . "<br>";  //1  
echo preg_match("/h{3,4}t/", "hht") . "<br>";   //0 
echo '<hr>';
//[]
echo preg_match("/h[aih*6rlk]t/", "h6t") . "<br>";  //1 
echo preg_match("/h[ihir()*&&]t/", "h(t") . "<br>"; //1
echo preg_match("/h[a-z]t/", "hoht") . "<br>";      //0
echo preg_match("/h[hur]t/", "hht") . "<br>";       //1
echo preg_match("/h[a-z][a-f]t/", "hect") . "<br>"; //1
echo preg_match("/h[a-z][b-f]t/", "hogt") . "<br>"; //0
echo preg_match("/h.t/", "hot") . "<br>";           //1
echo '<hr>';
