<?php
declare(strict_types=1);

$products = [
    "Laptop" => [
        "stock" => 12,
        "reorder" => 5,
        "price" => 35000
    ],
    "Headphones" => [
        "stock" => 25,
        "reorder" => 10,
        "price" => 1500
    ],
    "Keyboard" => [
        "stock" => 18,
        "reorder" => 8,
        "price" => 900
    ],
    "Mouse" => [
        "stock" => 30,
        "reorder" => 10,
        "price" => 600
    ],
    "Smartwatch" => [
        "stock" => 7,
        "reorder" => 4,
        "price" => 2800
    ],
    "Portable Speaker" => [
        "stock" => 4,
        "reorder" => 5,
        "price" => 1200
    ],
    "Webcam" => [
        "stock" => 9,
        "reorder" => 5,
        "price" => 1100
    ],
];

$taxRate = 0.12;

function reorderMessage(int $stock, int $reorder): string {
    return ($stock <= $reorder) ? "⚠️ Reorder Now" : "✔️ Sufficient";
}

function totalValue(int $stock, int $price): float {
    return $stock * $price;
}

function taxDue(float $amount, float $taxRate): float {
    return $amount * $taxRate;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stock Monitoring</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f7;
        }
        table {
            width: 75%;
            margin: 30px auto;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            padding: 12px;
            border: 1px solid #999;
            text-align: center;
        }
        th {
            background: #d0d7e1;
        }
        h2 {
            text-align: center;
            margin-top: 25px;
        }
        a {
            text-decoration: none;
            padding: 10px 18px;
            background: #4a5c77;
            color: white;
            border-radius: 4px;
            margin-left: 30px;
        }
    </style>
</head>
<body>

<br><a href="store.php">Back to Store</a>

<h2>Product Stock Monitoring</h2>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Reorder Level</th>
        <th>Price (₱)</th>
        <th>Inventory Value (₱)</th>
        <th>Tax Due (₱)</th>
        <th>Status</th>
    </tr>

    <?php foreach ($products as $name => $info): 
        $value = totalValue($info["stock"], $info["price"]);
        $tax = taxDue($value, $taxRate);
    ?>
    <tr>
        <td><?= $name ?></td>
        <td><?= $info["stock"] ?></td>
        <td><?= $info["reorder"] ?></td>
        <td><?= number_format($info["price"], 2) ?></td>
        <td><?= number_format($value, 2) ?></td>
        <td><?= number_format($tax, 2) ?></td>
        <td><?= reorderMessage($info["stock"], $info["reorder"]) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
