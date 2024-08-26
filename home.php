<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grocery Store</title>
        <link rel="stylesheet" href="stylesheet.css">
        <?php require('insert/links.php');?> 
    </head>
     <body>
     <?php require('insert/header.php');?> 
        <section id="search-banner">
            <img src="images/img 9.jpg" class="img-1" alt="img-1">
            <div class="search-banner-text">    
                <h1>Order your daily groceries</h1>
                <strong>#Free Delivery</strong>
                <form action="#" class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" class="search-input" placeholder="search your daily groceries" name="search" required>
                    <input type="submit" class="search-btn" value="search">
                </form>
            </div>
        </section>
        <section id="features">
            <div class="features-heading">
                <h1>Our Features</h1>
            </div>
            <div class="features-container">
                
                <div class="features-box">
                    <img src="images/img 2.jpg" class="img-2"alt="img-1">
                    <h3>Fresh and Organic</h3>
                    <p>Organic foods don't contain preservatives to give it a longer shelf life.</p>
                </div>
                <div class="features-box">
                    <img src="images/ima 10.jpg" class="img-2"alt="img-1">
                    <h3>Free Delivery</h3>
                    <p>Pay ₹0 to delivery the items your first order.</p>
                </div>
                <div class="features-box">
                    <img src="images/img 1.jpg" class="img-2"alt="img-1">
                    <h3>Easy Payments</h3>
                    <p>Easy to pay money by using online payment apps.</p>
                </div>
            </div>
        </section>
        <section id="category">
            <div class="category-heading">
                <h2>Categories</h2>
            </div>
            <div class="category-container">
                <a href="fruits.php" class="category-box">
                    <img src="images/img 3.jpg" alt="img">
                    <span>Fruits</span>
                </a>
                <a href="vegetables.php" class="category-box">
                    <img src="images/img 4.jpg" alt="img">
                    <span>Vegetables</span>
                </a>
                <a href="dairy.php" class="category-box">
                    <img src="images/img 5.jpg" alt="img">
                    <span>Dairy,Bread and Eggs</span>
                </a>
                <a href="rice.php" class="category-box">
                    <img src="images/img 7.jpg" alt="img">
                    <span>Rice,Atta and Dals</span>
                </a>
                <a href="masalas.php" class="category-box">
                    <img src="images/img 8.jpg" alt="img">
                    <span>Masalas,Ghee and oils</span>
                </a>
                </div>
                <div class="category-container">
                <a href="colddrinks.php" class="category-box">
                    <img src="images/img 10.jpg" alt="img">
                    <span>Sweet Tooth & Cold Drinks</span>
                </a>
                <a href="cereals.php" class="category-box">
                    <img src="images/img 11.jpg" alt="img">
                    <span>Cereals & Biscuits</span>
                </a>
                <a href="instant.php" class="category-box">
                    <img src="images/img 13.jpg" alt="img">
                    <span>Munchies & Instant</span>
                </a>
                <a href="cleaning.php" class="category-box">
                    <img src="images/img 16.jpg" alt="img">
                    <span>Cleaning Essentials</span>
                </a>
                <a href="pharma.php" class="category-box">
                    <img src="images/img 17.jpg" alt="img">
                    <span>Baby Care & Pharma</span>
                </a>
                </div>
            </div> 
        </section>
        <section id="popular" class="Products">
            <div class="product-heading">
                <h3>Popular Products</h3>
            </div>
            <div class="product-container">
                <div class="productbox">
                    <img src="images/apple.jpg" alt="img">
                    <strong>Apple</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹120</del></span>
                    <span class="price">₹100</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/onion.jpeg" alt="img">
                    <strong>Onion</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹55</del></span>
                    <span class="price">₹44</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/daily milk.webp" alt="img">
                    <strong>Daily Health Toned Milk</strong>
                    <span class="quality">500 ml</span>
                    <span class="delprice"><del>₹35</del></span>
                    <span class="price">₹30</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/little-hearts.jpg" alt="img">
                    <strong>Classic Little Hearts</strong>
                    <span class="quality">75 g</span>
                    <span class="delprice"><del>₹30</del></span>
                    <span class="price">₹28</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/maggi family pack.webp" alt="img">
                    <strong>Masala Instant Noodles</strong>
                    <span class="quality">240 g x 4</span>
                    <span class="delprice"><del>₹245</del></span>
                    <span class="price">₹224</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/chocolate cone.jpeg" alt="img">
                    <strong>Cornetto Double Chocolate Cone</strong>
                    <span class="quality">105 ml</span>
                    <span class="price">₹40</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/basmati rice.jpg" alt="img">
                    <strong>Basmati Rice-Rozana Super</strong>
                    <span class="quality">1kg</span>
                    <span class="delprice"><del>₹95</del></span>
                    <span class="price">₹86</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/lady finger.webp" alt="img">
                    <strong>Lady's Finger</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹50</del></span>
                    <span class="price">₹44</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/butterscotch.jpeg" alt="img">
                    <strong>Butterscotch Tub</strong>
                    <span class="quality">700 ml</span>
                    <span class="delprice"><del>₹170</del></span>
                    <span class="price">₹158</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/green chilli.jpeg" alt="img">
                    <strong>Green Chilli</strong>
                    <span class="quality">100 g</span>
                    <span class="delprice"><del>₹18</del></span>
                    <span class="price">₹13</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                <div class="productbox">
                    <img src="images/daily milk oreo.jpeg" alt="img">
                    <strong>Dairy Milk Silk Oreo Chocolate Bar</strong>
                    <span class="quality">60 g</span>
                    <span class="price">₹85</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                <div class="productbox">
                    <img src="images/sunflower oil.jpg" alt="img">
                    <strong>Refined Sunflower Oil</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹125</del></span>
                    <span class="price">₹117</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
            </div>
         </section>
         <section id="contact" class="contactus">
    <div class="contact-heading">
        <h3>Contact us</h3>
    </div>
    <div class="contant-container">
        <div class="contactbox1">
            <h1>Send a message</h1>
            <form action="contact_form_handler.php" method="post">
                <label>Name</label>
                <input type="text" name="name" required>
                <label>Email</label>
                <input type="email" name="email" required>
                <label>Subject</label>
                <input type="text" name="subject" required>
                <label>Message</label>
                <input type="text" name="message" required>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</section>

     </body>
</html>