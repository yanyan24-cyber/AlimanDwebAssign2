<?php
// Made by: Iyan Lucky Aliman - Block WD 202

?>

<!DOCTYPE html>
<html>
<head>
    <title>Iyan's Little PHP Store</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>

<div class="container">

<?php

$storeName = "Iyan's Gadget Store";


$products = [
    "USB Flash Drive" => 250,
    "Gaming Mouse" => 750,
    "Laptop Stand" => 499,
    "Mechanical Keyboard" => 1599
];

// Discountt
$discount = 0.10; 

echo "<div class='title'>$storeName</div>";
echo "Hi! Here are the items available today.<br>";
echo "All items have a " . ($discount * 100) . "% discount.<br><br>";
?>

<table>
    <tr>
        <th>Item</th>
        <th>Price</th>
        <th>Discounted</th>
    </tr>

<?php

foreach ($products as $name => $price) {

    $finalPrice = $price - ($price * $discount);

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>₱$price</td>";
    echo "<td>₱" . number_format($finalPrice, 2) . "</td>";
    echo "</tr>";
}
?>
</table>

</div>

</body>
</html>
