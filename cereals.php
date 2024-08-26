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
        <?php require('insert/header.php');?> 
            <div class="categories-heading">
                <h2>Cereals & Biscuits</h2>
            </div>
            <div class="categories-container">
                <a class="categories-box">
                    <img src="images/img 11.jpg" alt="img">
                    <button class="btn active" onclick="filterSelection('all')"><span>Show All</button>
                </a>
                <a class="categories-box">
                    <img src="images/chocos.jpg" alt="img">
                    <button class="btn " onclick="filterSelection('Cereals')"><span>Cereals</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/hide&sick.jpg" alt="img">
                    <button class="btn" onclick="filterSelection('Biscuits')"><span>Biscuits</span></button>
                </a>
            </div>
        </section>
        <section id="popular">
            <div class="product-container">
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/originalcornflakes.jpg" alt="img">
                    <strong>Kellogg's Original Corn Flakes</strong>
                    <span class="quality">475 g</span>
                    <span class="price">₹195</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/Almondcornflakes.jpg" alt="img">
                    <strong>Kellogg's Corn Flakes Real Almond Honey Pack</strong>
                    <span class="quality">170 g</span>
                    <span class="delprice"><del>₹99</del></span>
                    <span class="price">₹95</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/strawberrycornflakes.jpg" alt="img">
                    <strong>Kellogg's Corn Flakes With Real Strawbberry Puree</strong>
                    <span class="quality">275 g</span>
                    <span class="price">₹180</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/oats.jpg" alt="img">
                    <strong>Quaker Oats</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹199</del></span>
                    <span class="price">₹179</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/kelloggoats.jpg" alt="img">
                    <strong>Kellogg's Oats</strong>
                    <span class="quality">900 g</span>
                    <span class="delprice"><del>₹190</del></span>
                    <span class="price">₹161</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/quaker.jpg" alt="img">
                    <strong>Quaker Nutritious Breakfast Cereals</strong>
                    <span class="quality">400 g x 2</span>
                    <span class="delprice"><del>₹158</del></span>
                    <span class="price">₹142</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/saffola oats.jpg" alt="img">
                    <strong>Saffola Oats</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹95</del></span>
                    <span class="price">₹93</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/saffolaoats.jpg" alt="img">
                    <strong>Saffola Oats,Rolled Oats,100% Natural</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹185</del></span>
                    <span class="price">₹163</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/chocos.jpg" alt="img">
                    <strong>Chocos Variety Pack</strong>
                    <span class="quality">135 g</span>
                    <span class="delprice"><del>₹70</del></span>
                    <span class="price">₹65</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/chocos.jpg" alt="img">
                    <strong>Kellogg's Chocos</strong>
                    <span class="quality">675 g</span>
                    <span class="price">₹299</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/originalcornflakes.jpg" alt="img">
                    <strong>Kellogg's Corn Flakes Original Power</strong>
                    <span class="quality">60 g</span>
                    <span class="price">₹20</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/dadurhoney.jpg" alt="img">
                    <strong>Dabur Squeezy Honey(Buy1 Get1 Free)</strong>
                    <span class="quality">800 g</span>
                    <span class="delprice"><del>₹399</del></span>
                    <span class="price">₹299</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Cereals">
                <div class="productbox">
                    <img src="images/dabur honey.jpg" alt="img">
                    <strong>Dabur Honey</strong>
                    <span class="quality">250 g</span>
                    <span class="delprice"><del>₹120</del></span>
                    <span class="price">₹106</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Biscuits"> 
                <div class="productbox">
                    <img src="images/little-hearts.jpg" alt="img">
                    <strong>Classic Little Hearts</strong>
                    <span class="quality">75 g</span>
                    <span class="delprice"><del>₹30</del></span>
                    <span class="price">₹28</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Biscuits">
                <div class="productbox">
                    <img src="images/hide&sick.jpg" alt="img">
                    <strong>Hide & Seek Chocolate Chips</strong>
                    <span class="quality">100 g</span>
                    <span class="delprice"><del>₹30</del></span>
                    <span class="price">₹25</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Biscuits">
                <div class="productbox">
                    <img src="images/momsmagic.jpg" alt="img">
                    <strong>Mom's Magic Cashew & Almond Biscuits</strong>
                    <span class="quality">195 g</span>
                    <span class="delprice"><del>₹50</del></span>
                    <span class="price">₹45</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Biscuits">
                <div class="productbox">
                    <img src="images/osmaniabis.jpg" alt="img">
                    <strong>Osmania Biscuits</strong>
                    <span class="quality">500 g</span>
                    <span class="price">₹240</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Biscuits">
                <div class="productbox">
                    <img src="images/goodday.jpg" alt="img">
                    <strong>Britannia good day cashew cookies</strong>
                    <span class="quality">100 g x 4</span>
                    <span class="delprice"><del>₹100</del></span>
                    <span class="price">₹88</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Biscuits">
                <div class="productbox">
                    <img src="images/mariegold.jpg" alt="img">
                    <strong>Marie Gold Biscuits</strong>
                    <span class="quality">250 g</span>
                    <span class="delprice"><del>₹40</del></span>
                    <span class="price">₹38</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Biscuits">
                <div class="productbox">
                    <img src="images/nutrichoice.jpg" alt="img">
                    <strong>Nutrichoice Digestive Biscuits</strong>
                    <span class="quality">1 kg x 2</span>
                    <span class="delprice"><del>₹338</del></span>
                    <span class="price">₹294</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Biscuits">
                <div class="productbox">
                    <img src="images/tiger.jpg" alt="img">
                    <strong>Tiger Krunch Chocochip Biscuits</strong>
                    <span class="quality">400 g x2</span>
                    <span class="delprice"><del>₹280</del></span>
                    <span class="price">₹137</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Biscuits">
                <div class="productbox">
                    <img src="images/milkbikis.jpg" alt="img">
                    <strong>Milk Bikis Sandwich Biscuits</strong>
                    <span class="quality">200 g</span>
                    <span class="delprice"><del>₹50</del></span>
                    <span class="price">₹47</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Biscuits">
                <div class="productbox">
                    <img src="images/krackjack.jpg" alt="img">
                    <strong>Krack Jack Sweet & Salty Crackers</strong>
                    <span class="quality">200 g</span>
                    <span class="delprice"><del>₹40</del></span>
                    <span class="price">₹38</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Biscuits">
                <div class="productbox">
                    <img src="images/chocopie.jpg" alt="img">
                    <strong>Lotte Choco Pie</strong>
                    <span class="quality">6 pieces x 2</span>
                    <span class="delprice"><del>₹180</del></span>
                    <span class="price">₹162</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
            </div>
        </section>

        <script src="script.js"></script>
    </body>
</html>