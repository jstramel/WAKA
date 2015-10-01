<?php
/**
 * Function to swap two variables without using a temporary variable
 */

function swap_variables(&$a,&$b){
  list($a,$b) = array($b, $a);
}
?>
