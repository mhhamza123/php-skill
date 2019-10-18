<?php
/**
 * analyzing of var_dump
 */
$var = 'Hello';
var_dump($var);
//...................................
/**
 * double quote string
 */
$var1 = "Hello";
var_dump($var1);
//....................................
/**
 * int length 
 */
$var2 = 12222;
var_dump($var2);
//....................................
/**
 * other way to get type of variable
 */
echo gettype($var2);
/**
 * changing type using buidin function
 */
settype($var2, 'string');
echo gettype($var2);
//......................................
/**
 * using conditions to check type of var
 * 
 */
$var3 = 1;
echo is_string($var2) ? 'yes' : 'no';
echo is_string($var3) ? 'yes' : 'no';
echo is_int($var1) ? 'yes' : 'no';

$var4 = 2.3334344545454545;
echo is_double($var4) ? 'YES' :'NO';
echo is_float($var4) ? 'YES' :'NO';

/**
 * TYPE CASTING
 */
// way 1
$temp = '23s';
echo gettype($temp);
$temp = (integer) $temp;
echo gettype($temp);
// way 2
$temp = '23s';
settype($temp, 'integer');
echo gettype($temp);
echo $temp;