<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Methods</title>
    <link rel="stylesheet">
</head>
<body>
<?php require('insert/header.php');?> 
    <div class="payment-container">
        <h2>Payment Methods</h2>
        <form action="payment_handler.php" method="post">
            <div class="form-group">
                <label for="cardholder_name">Cardholder Name</label>
                <input type="text" id="cardholder_name" placeholder="Enter cardholder name" name="cardholder_name" required>
            </div>
            <div class="form-group">
                <label for="card_number">Card Number</label>
                <input type="text" id="card_number" name="card_number" placeholder="Enter card number" maxlength="16" required>
            </div>
            <div class="form-group">
                <label for="expiry_date">Expiry Date</label>
                <input type="month" id="expiry_date" name="expiry_date" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" maxlength="3" required>
            </div>
            <div class="form-group">
                <label for="payment_method">Select Payment Method</label>
                <select id="payment_method" name="payment_method" required>
                    <option value="credit_card">Credit Card</option>
                    <option value="debit_card">Debit Card</option>
                    <option value="net_banking">Net Banking</option>
                    <option value="upi">UPI</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Pay Now</button>
            </div>
        </form>
    </div>
</body>
<style>
    body {
    font-family: 'Roboto Mono', monospace;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}
.payment-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    margin: 50px auto;
    max-width: 500px;
}
.payment-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #333;
    margin-left:10px;
}

.form-group input,
.form-group select {
    width: 400px;
    padding: 7px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
    margin-right:50px;
}

.form-group button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    margin-left: 50px;
}

.form-group button:hover {
    background-color: #218838;
}
</style>
</html>
