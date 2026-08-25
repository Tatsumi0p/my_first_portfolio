<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials</title>
</head>
<body>

    <h1>Products</h1>
    <ul>
<?php

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];
    
    foreach($products as $product){
            
                if($product['name'] === 'lighting bolt'){
                    continue;
                }

                if($product['price'] > 15){
                    continue;
                }

        echo $product['name'] . '<br />';

}

?>

    </ul>

</body>
</html>