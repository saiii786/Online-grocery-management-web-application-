<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grocery Store</title>
        <link rel="stylesheet" href="styledesign.css">
        <?php require('insert/links.php');?> 
    </head>
    <body>
        <section id="categories">
        <?php require('insert/header.php'); ?> 
            <div class="categories-heading">
                <h2>Dairy ,Bread & Eggs</h2>
            </div>
            <div class="categories-container">
                <a class="categories-box">
                    <img src="images/img 5.jpg" alt="img">
                    <button class="btn active" onclick="filterSelection('all')"><span>All</button>
                </a>
                <a class="categories-box">
                    <img src="images/fullcream.jpeg" alt="img">
                    <button class="btn " onclick="filterSelection('Dairy')"><span>Dairy</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/brownbread.jpeg" alt="img">
                    <button class="btn" onclick="filterSelection('Bread')"><span>Bread</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/white egg.jpeg" alt="img">
                    <button class="btn" onclick="filterSelection('Eggs')"><span>Eggs</span></button>
                </a>
            </div>
        </section>
        <section id="popular">
            <div class="product-container">
                <div class="filterDiv Dairy">
                <div class="productbox">
                    <img src="images/daily milk.webp" alt="img">
                    <strong>Daily Health Toned Milk</strong>
                    <span class="quality">500 ml</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹30</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Dairy">
                <div class="productbox">
                    <img src="images/jersey milk.jpeg" alt="img">
                    <strong>Homogenised Toned Milk</strong>
                    <span class="quality">500 ml</span>
                    <span class="delprice"><del>₹30</del></span>
                    <span class="price">₹29</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Dairy">
                <div class="productbox">
                    <img src="images/fullcream.jpeg" alt="img">
                    <strong>Happy Full Cream Milk</strong>
                    <span class="quality">500 ml</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹40</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Dairy">
                <div class="productbox">
                    <img src="images/special milk.jpeg" alt="img">
                    <strong>Special Milk</strong>
                    <span class="quality">500 ml</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹33</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Dairy">
                <div class="productbox">
                    <img src="images/goodlife.jpg" alt="img">
                    <strong>GoodLife Toned Milk</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹67</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Bread">
                <div class="productbox">
                    <img src="images/premium white bread.jpeg" alt="img">
                    <strong>Premium Milk Slice White Bread</strong>
                    <span class="quality">450 g</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹50</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Bread">
                <div class="productbox">
                    <img src="images/premium milk bread.jpeg" alt="img">
                    <strong>Premium Milk Bread</strong>
                    <span class="quality">400 g</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹50</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Dairy">
                <div class="productbox">
                    <img src="images/tasty curd.jpeg" alt="img">
                    <strong>Thick & Tasty Curd</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹48</del></span>
                    <span class="price">₹45</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Dairy">
                <div class="productbox">
                    <img src="images/pouch curd.jpeg" alt="img">
                    <strong>Pouch Curd</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹48</del></span>
                    <span class="price">₹47</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Eggs">
                <div class="productbox">
                    <img src="images/white egg.jpeg" alt="img">
                    <strong>Premium Fresh 6pc</strong>
                    <span class="quality">6 piece</span>
                    <span class="delprice"><del>₹66</del></span>
                    <span class="price">₹50</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Eggs">
                <div class="productbox">
                    <img src="images/whiteegg.jpeg" alt="img">
                    <strong>Premium Fresh White Eggs</strong>
                    <span class="quality">30 piece</span>
                    <span class="delprice"><del>₹390</del></span>
                    <span class="price">₹279</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Eggs">
                <div class="productbox">
                    <img src="images/brownegg.jpeg" alt="img">
                    <strong>Healthy Eggs Brown Pack</strong>
                    <span class="quality">6 piece</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹99</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Bread">
                <div class="productbox">
                    <img src="images/brownbread.jpeg" alt="img">
                    <strong>Brown Bread</strong>
                    <span class="quality">400g</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹50</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
            </div>
        </section>

        <script src="script.js"></script>
    </body>
</html>