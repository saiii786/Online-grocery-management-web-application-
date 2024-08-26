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
                <h2>Munchies & Instant</h2>
            </div>
            <div class="categories-container">
                <a class="categories-box">
                    <img src="images/img 13.jpg" alt="img">
                    <button class="btn active" onclick="filterSelection('all')"><span>Show All</button>
                </a>
                <a class="categories-box">
                    <img src="images/lays2.jpg" alt="img">
                    <button class="btn " onclick="filterSelection('Munchies')"><span>Munchies</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/yippee.jpg" alt="img">
                    <button class="btn" onclick="filterSelection('Instant')"><span>Instant</span></button>
                </a>
            </div>
        </section>
        <section id="popular">
            <div class="product-container">
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/lays1.jpg" alt="img">
                    <strong>Lay's India's Magic Masala Chips lay</strong>
                    <span class="quality">90 g</span>
                    <span class="delprice"><del>₹50</del></span>
                    <span class="price">₹45</span>Lay's India's Magic Masala Chips
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/lays2.jpg" alt="img">
                    <strong>Lay's Hot N Sweet Chilli</strong>
                    <span class="quality">50 g</span>
                    <span class="price">₹20</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/aloobhujia.jpg" alt="img">
                    <strong>Haldiram Nagpur Aloo Bhujia</strong>
                    <span class="quality">400 g</span>
                    <span class="price">₹90</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/bhujiasev.jpg" alt="img">
                    <strong>Haldiram Nagpur Bhujia Sev</strong>
                    <span class="quality">1 kg</span>
                    <span class="price">₹260</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/khattameetha.jpg" alt="img">
                    <strong>Haldiram Nagpur Khatta Meetha</strong>
                    <span class="quality">400 g</span>
                    <span class="price">₹75</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/allinone.jpg" alt="img">
                    <strong>Haldiram Nagpur All In One</strong>
                    <span class="quality">400 g</span>
                    <span class="price">₹100</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/creamyherb.jpg" alt="img">
                    <strong>Kurkure Chaat Fills PaPdi Chaat Twist</strong>
                    <span class="quality">40 g</span>
                    <span class="delprice"><del>₹20</del></span>
                    <span class="price">₹14</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/puffcone.jpg" alt="img">
                    <strong>Kurkure Playz Yummy Cheese Puffcorn</strong>
                    <span class="quality">84 g</span>
                    <span class="delprice"><del>₹50</del></span>
                    <span class="price">₹40</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/creamyherb.jpg" alt="img">
                    <strong>Kurkure Playz Creamy Herb</strong>
                    <span class="quality">55 g</span>
                    <span class="price">₹20</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/sizzlinghot.jpg" alt="img">
                    <strong>Kurkure Sizzling Hot</strong>
                    <span class="quality">78 g</span>
                    <span class="delprice"><del>₹20</del></span>
                    <span class="price">₹17</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/originalstyle.jpg" alt="img">
                    <strong>Bingo Original style Chilli</strong>
                    <span class="quality">90 g x 3</span>
                    <span class="delprice"><del>₹150</del></span>
                    <span class="price">₹100</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/hashtags.jpg" alt="img">
                    <strong>Bingo B2G1 Hashtags Cream and Onion</strong>
                    <span class="quality">58 g x 3</span>
                    <span class="delprice"><del>₹90</del></span>
                    <span class="price">₹60</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Munchies">
                <div class="productbox">
                    <img src="images/classicsalted.jpg" alt="img">
                    <strong>Too Yumm Potato chips classic Salted</strong>
                    <span class="quality">90 g</span>
                    <span class="delprice"><del>₹50</del></span>
                    <span class="price">₹42</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Instant"> 
                <div class="productbox">
                    <img src="images/maggi family pack.webp" alt="img">
                    <strong>Maggi 2-Minute Instant Noodles</strong>
                    <span class="quality">560 g</span>
                    <span class="delprice"><del>₹112</del></span>
                    <span class="price">₹106</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Instant">
                <div class="productbox">
                    <img src="images/ramenspicy.jpg" alt="img">
                    <strong>Knorr Korean Ramen Spicy </strong>
                    <span class="quality">110 g</span>
                    <span class="delprice"><del>₹60</del></span>
                    <span class="price">₹54</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Instant">
                <div class="productbox">
                    <img src="images/yippee.jpg" alt="img">
                    <strong>Sunfeast Yippee Mood Masala noodles</strong>
                    <span class="quality">260 g x 2</span>
                    <span class="delprice"><del>₹120</del></span>
                    <span class="price">₹84</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Instant">
                <div class="productbox">
                    <img src="images/veggienoodles.jpg" alt="img">
                    <strong>Maggi Veggie Masala Noodles</strong>
                    <span class="quality">248 g</span>
                    <span class="price">₹60</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Instant">
                <div class="productbox">
                    <img src="images/tomatosoup.jpg" alt="img">
                    <strong>Knorr Classic Thick Tomato Soup</strong>
                    <span class="quality">51 g</span>
                    <span class="delprice"><del>₹60</del></span>
                    <span class="price">₹64</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Instant">
                <div class="productbox">
                    <img src="images/sourvegsoup.jpg" alt="img">
                    <strong>Knorr Classic Hot & Sour veg Soup</strong>
                    <span class="quality">41 g</span>
                    <span class="delprice"><del>₹60</del></span>
                    <span class="price">₹54</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Instant">
                <div class="productbox">
                    <img src="images/malabarparota.jpg" alt="img">
                    <strong>iD Fresh Malabar Parota</strong>
                    <span class="quality">400 g</span>
                    <span class="price">₹90</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Instant">
                <div class="productbox">
                    <img src="images/bru.jpg" alt="img">
                    <strong>Bru Instant Coffee</strong>
                    <span class="quality">200 g</span>
                    <span class="delprice"><del>₹460</del></span>
                    <span class="price">₹345</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Instant">
                <div class="productbox">
                    <img src="images/idcoffee.jpg" alt="img">
                    <strong>iD Fresh Instant Coffee Powder</strong>
                    <span class="quality">200 g</span>
                    <span class="delprice"><del>₹420</del></span>
                    <span class="price">₹378</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Instant">
                <div class="productbox">
                    <img src="images/bournvita.jpg" alt="img">
                    <strong>Bourn Vita Chocolate Nutrition</strong>
                    <span class="quality">750 g</span>
                    <span class="delprice"><del>₹370</del></span>
                    <span class="price">₹314</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Instant">
                <div class="productbox">
                    <img src="images/lipton.jpg" alt="img">
                    <strong>Lipton Honey Lemon Green Tea</strong>
                    <span class="quality">25 bags</span>
                    <span class="delprice"><del>₹170</del></span>
                    <span class="price">₹156</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
            </div>
        </section>

        <script src="script.js"></script>
    </body>
</html>