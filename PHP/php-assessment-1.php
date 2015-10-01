<?php
/**
 * Print numbers from 1-100. Multiples of 3 replaced with "foo", multiples
 * of 5 replaced with "bar", multiples of both 3 and 5 replaced with "foobar".
 */

// Loop to display numbers from 1 to 100
for ($i=1; $i <= 100; $i++){
  if ((($i % 3) == 0) && (($i % 5) == 0)){
    // If the current number is a multiple of both 3 and 5 print "foobar"
    print "foobar <br>";
  }else if (($i % 3) == 0){
    // If the current number is a multiple of 3 print "foo"
    print "foo <br>";
  } else if (($i % 5) == 0) {
    // If the current number is a multiple of 5 print "bar"
    print "bar <br>";
  }else{
    // Print the current number if not replaced above
    print $i . "<br>";
  }
}
?>
