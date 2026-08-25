<?php

$wan = ['wan', 'harith', 'dam'];

//for ($i = 0; $i < count($wan); $i++) {
//    echo $harith[$i] . '<br>';
//}

//foreach ($wan as $name) {
//    echo $name . '<br>';
//}

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'great shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

//foreach ($products as $product) {
//    echo $product['name'] . ' - ' . $product['price'];
//    echo '<br />';
//}

//$i = 0;

//while ($i < count($wan)) {
//    echo $wan[$i]['name'];
//    echo '<br>';
//    $i++;
//}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

    <h1>Product</h1>
    <ul>
        <?php foreach ($products as $product) { ?>

            <h3><?php echo $product['name']; ?></h3>
            <p>£ <?php echo $product['price']; ?></p>

        <?php  } ?>
    </ul>


</body>

</html>