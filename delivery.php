<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store</title>
    <link rel="stylesheet" href="styledesign.css">
    <?php require('insert/links.php'); ?> 
</head>
<body>
    <section id="categories">
    <?php require('insert/header.php'); ?> 
        <div class="categories-heading">
            <h2>Address</h2>
        </div> 
        <div class="row justify-content-evenly px-lg-0">
            <div class="col-lg-6 text-center bg-white rounded shadow py-3 my-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3808.838721717075!2d78.53078607855967!3d17.323328941145412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcba26e59b5a44b%3A0xf9ceea7ddab4a12c!2sTKR%20College%20of%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sin!4v1719227434612!5m2!1sen!2sin" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="address-box">
            <form action="address_handler.php" method="post">
                <label>Name</label>
                <input type="text" name="name" required>
                <label>Mobile Number</label>
                <input type="text" name="mobile_number" maxlength="10" required>
                <label>Street no/House no</label>
                <input type="text" name="street" required>
                <label>Colony name</label>
                <input type="text" name="colony" required>
                <label>Mandal</label>
                <input type="text" name="mandal" required>
                <label>State</label>
                <input type="text" name="state" required>
                <label>Pincode</label>
                <input type="text" name="pincode" maxlength="6" required>
                <button type="submit">Confirm</button>
            </form>
        </div>
    </section>
</body>
</html>