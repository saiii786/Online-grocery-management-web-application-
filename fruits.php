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
                <h2>Fruits</h2>
            </div>
            <div class="categories-container">
                <a class="categories-box">
                    <img src="images/img 3.jpg" alt="img">
                    <button class="btn active" onclick="filterSelection('all')"><span>Fruits</button>
                </a>
                <a class="categories-box">
                    <img src="images/apple.jpg" alt="img">
                    <button class="btn " onclick="filterSelection('Exotic')"><span>Exotic Fruits</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/orange.jpeg" alt="img">
                    <button class="btn" onclick="filterSelection('Citrus')"><span>Citrus Fruits</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/banana.jpeg" alt="img">
                    <button class="btn" onclick="filterSelection('Tropical')"><span>Tropical Fruits</span></button>
                </a>
            </div>
        </section>
        <section id="popular">
            <div class="product-container">
                <div class="filterDiv Exotic">
                <div class="productbox">
                    <img src="images/apple.jpg" alt="img">
                    <strong>Apple</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹120</del></span>
                    <span class="price">₹100</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Exotic">
                <div class="productbox">
                    <img src="images/kiwi.jpeg" alt="img">
                    <strong>Kiwi green</strong>
                    <span class="quality">3 pieces(250-350g)</span>
                    <span class="delprice"><del>₹144</del></span>
                    <span class="price">₹115</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Exotic">
                <div class="productbox">
                    <img src="images/strawberry.webp" alt="img">
                    <strong>Strawberry</strong>
                    <span class="quality">1 pack(175-200g)</span>
                    <span class="delprice"><del>₹107</del></span>
                    <span class="price">₹70</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Citrus">
                <div class="productbox">
                    <img src="images/orange.jpeg" alt="img">
                    <strong>Orange</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹47</del></span>
                    <span class="price">₹35</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Citrus">
                <div class="productbox">
                    <img src="images/greengrapes.jpeg" alt="img">
                    <strong>Green grapes</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹69</del></span>
                    <span class="price">₹45</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Citrus">
                <div class="productbox">
                    <img src="images/redgrapes.jpg" alt="img">
                    <strong>Red Flame Grapes</strong>
                    <span class="quality">250 g</span>
                    <span class="delprice"><del>₹89</del></span>
                    <span class="price">₹69</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Tropical">
                <div class="productbox">
                    <img src="images/banana.jpeg" alt="img">
                    <strong>Banana</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹38</del></span>
                    <span class="price">₹30</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Citrus">
                <div class="productbox">
                    <img src="images/black&green.jpeg" alt="img">
                    <strong>Black & Green Grapes(seedless)</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹106</del></span>
                    <span class="price">₹79</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Citrus">
                <div class="productbox">
                    <img src="images/sweetlime.jpeg" alt="img">
                    <strong>Sweet Lime</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹124</del></span>
                    <span class="price">₹92</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Tropical">
                <div class="productbox">
                    <img src="images/papaya.jpeg" alt="img">
                    <strong>Papaya</strong>
                    <span class="quality">1 piece(800-1200g)</span>
                    <span class="delprice"><del>₹114</del></span>
                    <span class="price">₹84</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Exotic">
                <div class="productbox">
                    <img src="images/plum.jpeg" alt="img">
                    <strong>Plum</strong>
                    <span class="quality">250 g</span>
                    <span class="delprice"><del>₹148</del></span>
                    <span class="price">₹118</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Exotic">
                <div class="productbox">
                    <img src="images/pomegranate.jpeg" alt="img">
                    <strong>Pomegranate</strong>
                    <span class="quality">3 pieces(500-700g)</span>
                    <span class="delprice"><del>₹149</del></span>
                    <span class="price">₹119</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Tropical">
                <div class="productbox">
                    <img src="images/dragonfruit.jpeg" alt="img">
                    <strong>Dragon Fruit</strong>
                    <span class="quality">1 piece(300-500g)</span>
                    <span class="delprice"><del>₹111</del></span>
                    <span class="price">₹89</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Exotic"> 
                <div class="productbox">
                    <img src="images/greenpear.jpeg" alt="img">
                    <strong>Green Pear</strong>
                    <span class="quality">2 pieces(250-400g)</span>
                    <span class="delprice"><del>₹133</del></span>
                    <span class="price">₹106</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Citrus">
                <div class="productbox">
                    <img src="images/blueberries.jpeg" alt="img">
                    <strong>Blueberries</strong>
                    <span class="quality">120 g</span>
                    <span class="delprice"><del>₹436</del></span>
                    <span class="price">₹318</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Tropical">
                <div class="productbox">
                    <img src="images/passion.jpeg" alt="img">
                    <strong>Passion Fruits</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹44</del></span>
                    <span class="price">₹30</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Tropical">
                <div class="productbox">
                    <img src="images/watermelon.jpeg" alt="img">
                    <strong>Watermelon</strong>
                    <span class="quality">1 piece(2.5-3kg)</span>
                    <span class="delprice"><del>₹188</del></span>
                    <span class="price">₹150</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Exotic">
                <div class="productbox">
                    <img src="images/pineapple.jpeg" alt="img">
                    <strong>Pineapple</strong>
                    <span class="quality">1 piece(700-1200g)</span>
                    <span class="delprice"><del>₹94</del></span>
                    <span class="price">₹70</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Exotic">
                <div class="productbox">
                    <img src="images/chikoo.jpeg" alt="img">
                    <strong>Chikoo</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹66</del></span>
                    <span class="price">₹45</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Exotic">
                <div class="productbox">
                    <img src="images/dates.jpeg" alt="img">
                    <strong>Dates</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹281</del></span>
                    <span class="price">₹225</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Exotic">
                <div class="productbox">
                    <img src="images/avocado.jpeg" alt="img">
                    <strong>Avocado</strong>
                    <span class="quality">2 pieces</span>
                    <span class="delprice"><del>₹149</del></span>
                    <span class="price">₹119</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Tropical">
                <div class="productbox">
                    <img src="images/muskmelon.jpeg" alt="img">
                    <strong>Muskmelon</strong>
                    <span class="quality">2 pieces(1.2-1.6kg)</span>
                    <span class="delprice"><del>₹136</del></span>
                    <span class="price">₹105</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Exotic">
                <div class="productbox">
                    <img src="images/Green-Apple.jpg" alt="img">
                    <strong>Green Apple</strong>
                    <span class="quality">2 pieces(300-400g)</span>
                    <span class="delprice"><del>₹155</del></span>
                    <span class="price">₹124</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Exotic">
                <div class="productbox">
                    <img src="images/litchi.jpeg" alt="img">
                    <strong>Litchi</strong>
                    <span class="quality">100 g</span>
                    <span class="delprice"><del>₹55</del></span>
                    <span class="price">₹44</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
            </div>
        </section>

        <script src="script.js"></script>
    </body>
</html>