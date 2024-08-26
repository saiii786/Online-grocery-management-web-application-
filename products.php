<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grocery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$products = [];
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="styledesign.css">
</head>
<body>
    <?php require('insert/header.php'); ?>
    <section id="products">
        <h2>Products</h2>
        <table class="product-list">
            <thead>
                <tr>
                    <th class="head-title">Product</th>
                    <th class="head-price">Price</th>
                    <th class="head-description">Description</th>
                    <th class="head-action">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                <tr class="product-item">
                    <td><h4 class="title"><?php echo $product['name']; ?></h4></td>
                    <td class="price"><?php echo $product['price']; ?></td>
                    <td class="description"><?php echo $product['description']; ?></td>
                    <td class="action">
                        <form method="post" action="cart.php">
                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>
</html>
