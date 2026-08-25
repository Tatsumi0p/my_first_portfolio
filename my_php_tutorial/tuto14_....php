// Local variables exist ONLY inside the function where they are declared.

function myFunc(){
$price = 50; // $price is local to myFunc()
echo $price; // Executed inside the function: outputs 50
}

myFunc(); // Calling function outputs: 50

// echo $price;
// ERROR / WARNING: Undefined variable $price.
// Local variables cannot be accessed outside their parent function.



// Global variables declared outside functions are NOT automatically accessible inside functions.

$name = 'mario'; // Global variable

function sayHello(){
// echo "hello $name";
// WARNING: Undefined variable $name.
// Unlike JavaScript, PHP functions create an isolated scope that cannot read global variables by default.
}

sayHello();



// Use the 'global' keyword inside a function to pull a global variable into local scope.

$name = 'mario'; // Initial global variable

function Nyahallo(){
global $name; // Grants function access to the outer $name variable
$name = 'yoshi'; // Modifies the original global variable
echo "hello $name";
}

Nyahallo(); // Outputs: hello yoshi
echo $name; // Outputs: yoshi (the global variable value was permanently reassigned inside the function)



Pass by Reference

<?php

// Placing an ampersand (&) before a parameter passes the variable by reference instead of creating a local copy.

$name = 'mario'; // Initial variable

function sayBye(&$name)
{ // &$name targets the exact memory location of the passed variable
  $name = 'wario';     // Overwrites the variable in the original scope
  echo "bye $name";
}

sayBye($name); // Passes $name by reference; outputs: bye wario
echo $name;    // Outputs: wario (original variable reassigned without using the 'global' keyword)

?>

<!DOCTYPE html>
<html>

<head>
  <title>PHP Turo</title>
</head>

<body>
</body>

</html>