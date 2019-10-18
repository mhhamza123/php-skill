<?php
/**
 * static variable never delete even function ends
 * and provide ability to reuse previous value of variable
 * 
 * exeperiencing static vaiables
 */
function tester(){
 static $var = 1;
 $var++;
 return $var.'<br>';  
}

/**
 * calling test
 */
echo tester();
echo tester();
echo tester();
echo tester();
?>