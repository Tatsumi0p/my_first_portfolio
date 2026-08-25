<?php

  // --- INCLUDE METHOD ---
  // Imports code from 'ninjas.php' and executes it right here.
  include('ninjas.php');

  // --- REQUIRE METHOD ---
  // Does the exact same importing job as include.
  require('ninjas.php');

  // You can also use include/require without parentheses:
  // include 'ninjas.php';

  // Output text to show the script has reached the bottom
  echo 'end of php';

?>

<html>
<head>
    <title>PHP Tutorials</title>
</head>
<body>

    <?php include('content.php'); ?>

</body>
</html>