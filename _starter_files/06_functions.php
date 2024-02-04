<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/


// function registerUser($email) {
//   echo 'The email "' . $email . '" was registered<br>';
// }

// registerUser('Inge@email.com');

// function sum($n1, $n2){
//   return $n1 + $n2;
// }

// $number = sum(3, 8);
// echo $number;

// function with default values

// function sum_default_values($n1 = 1, $n2 = 2) {
//   return $n1 + $n2;
// }
// echo sum_default_values();

// Andere syntax functies
$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(9,9);


?>
