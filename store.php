<?php
// Iyan Lucky Aliman - WD 202

require "items.php";

$storeName = "Iyan's Gadget Store";
$discount = 0.10;

$stock = [5, 0, 12, 3, 8];

// Include the header
require "header.php";
?>

<div class="container">
    <div class="welcome-section">
        <h1 class="store-title"><?php echo $storeName; ?></h1>
        <div class="welcome-message">
            <p>Welcome to my small PHP store. We're passionate about bringing you quality tech gadgets at affordable prices.</p>
            <div class="discount-banner">
                <span class="discount-icon">🎉</span>
                <span class="discount-text">Special Offer: <?php echo ($discount * 100); ?>% off today!</span>
            </div>
        </div>
    </div>

    <div class="products-section">
        <h2 class="section-title">Our Products</h2>
        <div class="products-table">
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Original Price</th>
                        <th>Discounted Price</th>
                        <th>Availability</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($products as $name => $price) {
                        $newPrice = $price - ($price * $discount);
                        
                        if ($stock[$i] > 0) {
                            $status = "Available (" . $stock[$i] . ")";
                            $statusClass = "in-stock";
                        } else {
                            $status = "Out of stock";
                            $statusClass = "out-of-stock";
                        }
                        
                        echo "<tr>";
                        echo "<td class='product-name'>$name</td>";
                        echo "<td class='original-price'>₱" . number_format($price, 2) . "</td>";
                        echo "<td class='discounted-price'>₱" . number_format($newPrice, 2) . "</td>";
                        echo "<td class='$statusClass'>$status</td>";
                        echo "</tr>";
                        
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="store-info">
        <?php
        $total = count($products);
        
        if ($total >= 5) {
            echo "<div class='availability-message positive'>Great news! We have plenty of items available today!</div>";
        } else {
            echo "<div class='availability-message negative'>Our store looks a bit empty today. Check back soon for new arrivals!</div>";
        }
        ?>
        
        <div class="contact-info">
            <h3>Need Help?</h3>
            <p>Our friendly support team is here to help you with any questions about our products.</p>
            <div class="contact-options">
                <div class="contact-option">
                    <span class="contact-icon">📞</span>
                    <span>Call us: (02) 1234-5678</span>
                </div>
                <div class="contact-option">
                    <span class="contact-icon">✉️</span>
                    <span>Email: support@iyangadgets.com</span>
                </div>
                <div class="contact-option">
                    <span class="contact-icon">🕒</span>
                    <span>Hours: Mon-Sat, 9AM-6PM</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer
require "footer.php";
?>
