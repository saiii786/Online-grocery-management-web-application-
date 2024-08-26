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
                <h2>Snacks</h2>
            </div>
        </section>
        <section id="popular">
            <div class="product-container">
                <div class="productbox">
                    <img src="images/lays1.jpg" alt="img">
                    <strong>Lay's India's Magic Masala Chips lay</strong>
                    <span class="quality">90 g</span>
                    <span class="delprice"><del>₹50</del></span>
                    <span class="price">₹45</span>Lay's India's Magic Masala Chips
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                <div class="productbox">
                    <img src="images/lays2.jpg" alt="img">
                    <strong>Lay's Hot N Sweet Chilli</strong>
                    <span class="quality">50 g</span>
                    <span class="price">₹20</span>
                    <a href="#" class="cart-button">
                        Add 
                    </a>
                    <a href="#" class="like-button">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
                <div class="productbox">
                    <img src="images/aloobhujia.jpg" alt="img">
                    <strong>Haldiram Nagpur Aloo Bhujia</strong>
                    <span class="quality">400 g</span>
                    <span class="price">₹90</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                <div class="productbox">
                    <img src="images/bhujiasev.jpg" alt="img">
                    <strong>Haldiram Nagpur Bhujia Sev</strong>
                    <span class="quality">1 kg</span>
                    <span class="price">₹260</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/khattameetha.jpg" alt="img">
                    <strong>Haldiram Nagpur Khatta Meetha</strong>
                    <span class="quality">400 g</span>
                    <span class="price">₹75</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/allinone.jpg" alt="img">
                    <strong>Haldiram Nagpur All In One</strong>
                    <span class="quality">400 g</span>
                    <span class="price">₹100</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                <div class="productbox">
                    <img src="images/creamyherb.jpg" alt="img">
                    <strong>Kurkure Chaat Fills PaPdi Chaat Twist</strong>
                    <span class="quality">40 g</span>
                    <span class="delprice"><del>₹20</del></span>
                    <span class="price">₹14</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/puffcone.jpg" alt="img">
                    <strong>Kurkure Playz Yummy Cheese Puffcorn</strong>
                    <span class="quality">84 g</span>
                    <span class="delprice"><del>₹50</del></span>
                    <span class="price">₹40</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/creamyherb.jpg" alt="img">
                    <strong>Kurkure Playz Creamy Herb</strong>
                    <span class="quality">55 g</span>
                    <span class="price">₹20</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/sizzlinghot.jpg" alt="img">
                    <strong>Kurkure Sizzling Hot</strong>
                    <span class="quality">78 g</span>
                    <span class="delprice"><del>₹20</del></span>
                    <span class="price">₹17</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                <div class="productbox">
                    <img src="images/originalstyle.jpg" alt="img">
                    <strong>Bingo Original style Chilli</strong>
                    <span class="quality">90 g x 3</span>
                    <span class="delprice"><del>₹150</del></span>
                    <span class="price">₹100</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
            </div>
        
            </section>
        
    </body>
</html>