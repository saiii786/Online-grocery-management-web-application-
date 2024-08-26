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
                <h2>Cleaning Essentials</h2>
            </div>
            <div class="categories-container">
                <a class="categories-box">
                    <img src="images/img 16.jpg" alt="img">
                    <button class="btn active" onclick="filterSelection('all')"><span>Show All</button>
                </a>
                <a class="categories-box">
                    <img src="images/surfexcelpowder.jpg" alt="img">
                    <button class="btn " onclick="filterSelection('detergent')"><span>Detergents</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/lizol.jpg" alt="img">
                    <button class="btn" onclick="filterSelection('home')"><span>Home Cleaners</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/harpic.jpg" alt="img">
                    <button class="btn" onclick="filterSelection('toilet')"><span>Toilet Cleaners</span></button>
                </a>
            </div>
        </section>
        <section id="popular">
            <div class="product-container">
                <div class="filterDiv detergent">
                <div class="productbox">
                    <img src="images/surfexcelliquid.jpg" alt="img">
                    <strong>Surf Excel Matic Liquid Detergent Front Load Pouch</strong>
                    <span class="quality">3.2 L</span>
                    <span class="delprice"><del>₹574</del></span>
                    <span class="price">₹765</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv detergent">
                <div class="productbox">
                    <img src="images/surfexcelpowder.jpg" alt="img">
                    <strong>Surf Excel Matic Front Load Washing Powder</strong>
                    <span class="quality">6 kg</span>
                    <span class="delprice"><del>₹1475</del></span>
                    <span class="price">₹1209</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv detergent">
                <div class="productbox">
                    <img src="images/arielpowder.jpg" alt="img">
                    <strong>Ariel Matic Front Load Detergent Powder</strong>
                    <span class="quality">2 kg</span>
                    <span class="delprice"><del>₹660</del></span>
                    <span class="price">₹488</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv detergent">
                <div class="productbox">
                    <img src="images/surfexcelpowder1.jpg" alt="img">
                    <strong>Surf Excel Matic Top Load Washing Powder</strong>
                    <span class="quality">6 kg</span>
                    <span class="delprice"><del>₹1375</del></span>
                    <span class="price">₹1100</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv detergent">
                <div class="productbox">
                    <img src="images/surfexcelliquid2.jpg" alt="img">
                    <strong>Surf Excel Matic Top Load Detergent Powder</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹69</del></span>
                    <span class="price">₹45</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv detergent">
                <div class="productbox">
                    <img src="images/tide.jpg" alt="img">
                    <strong>Double Power Lemon & Mint Detergent Power</strong>
                    <span class="quality">5 kg</span>
                    <span class="delprice"><del>₹635</del></span>
                    <span class="price">₹476</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv detergent">
                <div class="productbox">
                    <img src="images/rin.jpg" alt="img">
                    <strong>Rin Detergent Powder</strong>
                    <span class="quality">2 kg/span>
                    <span class="price">₹224</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv toilet">
                <div class="productbox">
                    <img src="images/redharpic.jpg" alt="img">
                    <strong>Harpic Floral Disinfectant Bathroom Cleaner</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹199</del></span>
                    <span class="price">₹177</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv toilet">
                <div class="productbox">
                    <img src="images/harpic1.jpg" alt="img">
                    <strong>Harpic Flushmatic Aquamarine Toilet Cleaner</strong>
                    <span class="quality">150 g x 2</span>
                    <span class="delprice"><del>₹472</del></span>
                    <span class="price">₹330</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv toilet">
                <div class="productbox">
                    <img src="images/domex.jpg" alt="img">
                    <strong>Domex Fresh Guard Disinfectant Toilet Cleaner</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹169</del></span>
                    <span class="price">₹235</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv toilet">
                <div class="productbox">
                    <img src="images/harpic.jpg" alt="img">
                    <strong>Harpic Disinfectant Toilet Cleaner Liquid</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹230</del></span>
                    <span class="price">₹202</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv toilet">
                <div class="productbox">
                    <img src="images/dettol.jpg" alt="img">
                    <strong>Dettol Disinfectant Sanitizer Spray</strong>
                    <span class="quality">225 ml</span>
                    <span class="delprice"><del>₹165</del></span>
                    <span class="price">₹148</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv home">
                <div class="productbox">
                    <img src="images/vim.jpg" alt="img">
                    <strong>Vim Dishwash Anti Bac Liquid Neem</strong>
                    <span class="quality">2 L x 2</span>
                    <span class="delprice"><del>₹1050</del></span>
                    <span class="price">₹756</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv home"> 
                <div class="productbox">
                    <img src="images/pril.jpg" alt="img">
                    <strong>Pril Tamarind Shine Specialist Dishwash</strong>
                    <span class="quality">750 ml</span>
                    <span class="delprice"><del>₹209</del></span>
                    <span class="price">₹140</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv home">
                <div class="productbox">
                    <img src="images/exo.jpg" alt="img">
                    <strong>Exo Round Touch & Shine Dishwash Bar</strong>
                    <span class="quality">1.4 kg</span>
                    <span class="delprice"><del>₹172</del></span>
                    <span class="price">₹146</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv home">
                <div class="productbox">
                    <img src="images/vim1.jpg" alt="img">
                    <strong>Vim Dishwash Bar Lemon</strong>
                    <span class="quality">135 g</span>
                    <span class="price">₹10</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv home">
                <div class="productbox">
                    <img src="images/lizol.jpg" alt="img">
                    <strong>Lizol Floral Disinfectant Surface Cleaner</strong>
                    <span class="quality">2 L</span>
                    <span class="delprice"><del>₹440</del></span>
                    <span class="price">₹387</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv home">
                <div class="productbox">
                    <img src="images/lizol1.jpg" alt="img">
                    <strong>Lizol Floral Disinfectant Surface Cleaner</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹220</del></span>
                    <span class="price">₹202</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv home">
                <div class="productbox">
                    <img src="images/dettol1.jpg" alt="img">
                    <strong>Dettol Disinfectant Floor Cleaner</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹381</del></span>
                    <span class="price">₹305</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv home">
                <div class="productbox">
                    <img src="images/colin.jpg" alt="img">
                    <strong>Colin Glass Cleaner Bottle</strong>
                    <span class="quality">500 ml</span>
                    <span class="delprice"><del>₹96</del></span>
                    <span class="price">₹59</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv home">
                <div class="productbox">
                    <img src="images/nimyle.jpg" alt="img">
                    <strong>Nimyle Herbal Floor Cleaner</strong>
                    <span class="quality">500 ml</span>
                    <span class="delprice"><del>₹95</del></span>
                    <span class="price">₹90</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv home">
                <div class="productbox">
                    <img src="images/lizol2.jpg" alt="img">
                    <strong>Lizal Orange Burst Kitchen Power Cleaner</strong>
                    <span class="quality">450 ml</span>
                    <span class="delprice"><del>₹149</del></span>
                    <span class="price">₹127</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv home">
                <div class="productbox">
                    <img src="images/savlon.jpg" alt="img">
                    <strong>Savlon Surface Disinfectant Spray</strong>
                    <span class="quality">170 g</span>
                    <span class="delprice"><del>₹175</del></span>
                    <span class="price">₹131</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv home">
                <div class="productbox">
                    <img src="images/dettol2.jpg" alt="img">
                    <strong>Dettol Skincare Handwash</strong>
                    <span class="quality">675 ml</span>
                    <span class="delprice"><del>₹99</del></span>
                    <span class="price">₹92</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
            </div>
        </section>

        <script src="script.js"></script>
    </body>
</html>