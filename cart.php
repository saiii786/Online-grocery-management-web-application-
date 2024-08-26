<?php
// Ensure connection to the database is established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grocery";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted for updating cart items
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["product_id"])) {
        $product_id = $_POST["product_id"];

        // Prepare the SQL query to insert or update cart_items
        $sql = "INSERT INTO cart_items (product_id, quantity)
                VALUES (?, 1)
                ON DUPLICATE KEY UPDATE quantity = quantity + 1";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind parameters (product_id)
        $stmt->bind_param("i", $product_id);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Product with ID $product_id added to cart_items successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: Product ID not provided.";
    }
}

// Fetch cart items from database to display in the cart table
$cart_items = [];
$sql_select = "SELECT products.name AS product_name, products.price, cart_items.quantity, cart_items.product_id
               FROM cart_items
               INNER JOIN products ON cart_items.product_id = products.id";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cart_items[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store</title>
    <link rel="stylesheet" href="styledesign.css">
    <?php require('insert/links.php');?> 
</head>
<body>
<?php require('insert/header.php');?> 
    <section id="cart">
        <h2>My Cart</h2>
        <table class="cart-list">
            <thead>
                <tr>
                    <th class="head-title">Product</th>
                    <th class="head-price">Price</th>
                    <th class="head-quantity">Quantity</th>
                    <th class="head-total">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cart_items as $item): ?>
                <tr class="cart-item">
                    <td><h4 class="title"><?php echo $item['product_name']; ?></h4></td>
                    <td class="price"><?php echo $item['price']; ?></td>
                    <td class="quantity">
                    <span class="qty-handler">
                            <span @click="add(item)">+</span><input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1" max="10"></form>
                            <span @click="sub(item)">-</span>
                        </span>
                    </td>
                    <td class="total"><?php echo $item['price'] * $item['quantity']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3"><h4 class="total-title">Total</h4></th>
                    <th>
                        <?php 
                        $total = array_reduce($cart_items, function($carry, $item) {
                            return $carry + ($item['price'] * $item['quantity']);
                        }, 0);
                        echo $total;
                        ?>
                    </th>
                </tr>
            </tfoot>
        </table>
        <?php if (empty($cart_items)): ?>
        <div class="empty-contents">
            <p class="no-items-text">Your cart is currently empty</p>
        </div>
        <?php endif; ?>
        <div class="form-group">
            <button type="submit" id="payNowBtn">Go To Pay</button>
        </div>
    </section>
    <script>
    document.getElementById("payNowBtn").addEventListener("click", function() {
        window.location.href = "delivery.php";
    });
</script>
</body>
</html>
