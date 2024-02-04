<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

  $fruits = ['apple', 'orange', 'pear'];

  // Get length of array
  // echo count($fruits);

  //Search array
  //var_dump(in_array('apple', $fruits));

  //echo in_array('apple', $fruits);

  if(in_array('apple', $fruits) == 1) {
    echo 'True!';
  } else {
    echo 'False!';
  }

?>
