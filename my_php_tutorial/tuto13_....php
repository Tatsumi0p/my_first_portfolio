<?php

  // 1. Basic Function with Default Parameters
  function sayHello($name = 'mario', $time = 'morning'){
    echo "Good $time, $name!";
  }

  // Calling the function with different arguments
  // sayHello();              // Outputs: Good morning, mario!
  // sayHello('shaun');       // Outputs: Good morning, shaun!
  sayHello('yoshi', 'night'); // Outputs: Good night, yoshi!
  echo '<br />';

  // 2. Returning Values from Functions
  function formatProduct($product){
    // echo "{$product['name']} costs £{$product['price']} to buy <br />";
    // Returns a formatted string using string interpolation
    return "{$product['name']} costs £{$product['price']} to buy <br />";
  }

  // Storing returned data in a variable and printing
  // $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
  // echo $formatted;

?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>

</body>
</html>