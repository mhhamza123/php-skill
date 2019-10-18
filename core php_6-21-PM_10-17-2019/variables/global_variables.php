<?php
/**
 * dd
 * understanding of different variables with php 7.1
 * global and local scope of variables
 *
 */

 $x = 'variable<br>';

 function sub_scope_style_1(){
    /**
     *
     * $x of global scope will never accessible unless we declare to get it from global
     *
     */
    global $x;
    return $x;
 }

 /**
  * getting global with different style
  */
 function sub_scope_style_2(){
    return $GLOBALS['x'];
 }

 /**
  * calling function to check sub scope of variable
  */
 echo sub_scope_style_1();
 echo sub_scope_style_2();
?>
