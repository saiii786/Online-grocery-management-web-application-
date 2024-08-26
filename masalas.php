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
                <h2>Masalas,Ghee and oils</h2>
            </div>
            <div class="categories-container">
                <a class="categories-box">
                    <img src="images/img 8.jpg" alt="img">
                    <button class="btn active" onclick="filterSelection('all')"><span>Show All</button>
                </a>
                <a class="categories-box">
                    <img src="images/biriyanimasala.jpg" alt="img">
                    <button class="btn " onclick="filterSelection('Masalas')"><span>Masalas</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/amulghee.jpg" alt="img">
                    <button class="btn" onclick="filterSelection('Ghee')"><span>Ghee</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/freedomoil.jpg" alt="img">
                    <button class="btn" onclick="filterSelection('oils')"><span>oils</span></button>
                </a>
            </div>
        </section>
        <section id="popular">
            <div class="product-container">
                <div class="filterDiv Masalas">
                <div class="productbox">
                    <img src="images/redchillipowder.jpg" alt="img">
                    <strong>Everest Red Chilli Powder</strong>
                    <span class="quality">100 g</span>
                    <span class="delprice"><del>₹91</del></span>
                    <span class="price">₹70</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Masalas">
                <div class="productbox">
                    <img src="images/methiwhole.jpg" alt="img">
                    <strong>Aachi Methi Whole Spice</strong>
                    <span class="quality">100 g</span>
                    <span class="delprice"><del>₹46</del></span>
                    <span class="price">₹25</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Masalas">
                <div class="productbox">
                    <img src="images/cuminpowder.jpg" alt="img">
                    <strong>Aachi Cumin Powder</strong>
                    <span class="quality">100 g x 2</span>
                    <span class="delprice"><del>₹256</del></span>
                    <span class="price">₹219</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Masalas">
                <div class="productbox">
                    <img src="images/corianderpowder.jpg" alt="img">
                    <strong>MTR Coriander/Dhaniya Powder</strong>
                    <span class="quality">100 g</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹35</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Masalas">
                <div class="productbox">
                    <img src="images/chaatmasala.jpg" alt="img">
                    <strong>Tata Sampann Chaat Masala</strong>
                    <span class="quality">100 g</span>
                    <span class="delprice"><del>₹87</del></span>
                    <span class="price">₹82</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Masalas">
                <div class="productbox">
                    <img src="images/garammasala.jpg" alt="img">
                    <strong>Everest Garam Masala Powder</strong>
                    <span class="quality">50 g</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹52</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Masalas">
                <div class="productbox">
                    <img src="images/tumericpowder.jpg" alt="img">
                    <strong>Everest Tumeric Powder</strong>
                    <span class="quality">100 g</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹35</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Masalas">
                <div class="productbox">
                    <img src="images/chickenmasala.jpg" alt="img">
                    <strong>Aachi Chicken Masala</strong>
                    <span class="quality">100 g x 2</span>
                    <span class="delprice"><del>₹118</del></span>
                    <span class="price">₹106</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Masalas">
                <div class="productbox">
                    <img src="images/maggimasala.jpg" alt="img">
                    <strong>Maggi Masala-ae-Magic</strong>
                    <span class="quality">72 g x 2</span>
                    <span class="delprice"><del>₹120</del></span>
                    <span class="price">₹119</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Masalas">
                <div class="productbox">
                    <img src="images/mtrredchillipowder.jpg" alt="img">
                    <strong>MTR Red Chilli Powder</strong>
                    <span class="quality">100 g</span>
                    <span class="delprice"><del>₹140</del></span>
                    <span class="price">₹112</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Masalas">
                <div class="productbox">
                    <img src="images/sambarmasala.jpg" alt="img">
                    <strong>MTR Sambar Masala Powder</strong>
                    <span class="quality">200 g</span>
                    <span class="delprice"><del>₹150</del></span>
                    <span class="price">₹135</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Masala">
                <div class="productbox">
                    <img src="images/biriyanimasala.jpg" alt="img">
                    <strong>Aachi Biriyani Masala</strong>
                    <span class="quality">50 g x 2</span>
                    <span class="delprice"><del>₹90</del></span>
                    <span class="price">₹81</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv oils">
                <div class="productbox">
                    <img src="images/freedomsunflower.jpg" alt="img">
                    <strong>Freedom Refined Sunflower Oil</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹138</del></span>
                    <span class="price">₹118</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv oils"> 
                <div class="productbox">
                    <img src="images/fortuneoil.jpg" alt="img">
                    <strong>Fortune Health Rice Bran Refined Oil Pouch</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹149</del></span>
                    <span class="price">₹125</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv oils">
                <div class="productbox">
                    <img src="images/fortunemustardoil.jpg" alt="img">
                    <strong>Fortune Kachi Ghani Pure Mustard Oil</strong>
                    <span class="quality">1 L x 2</span>
                    <span class="delprice"><del>₹370</del></span>
                    <span class="price">₹303</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv oils">
                <div class="productbox">
                    <img src="images/fortunesunflower.jpg" alt="img">
                    <strong>Fortune Sunlite Refined Snflower oil</strong>
                    <span class="quality">1 L x 2</span>
                    <span class="delprice"><del>₹350</del></span>
                    <span class="price">₹243</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv oils">
                <div class="productbox">
                    <img src="images/freedomoil.jpg" alt="img">
                    <strong>freedom Refined Sunflower Oil</strong>
                    <span class="quality">5 L</span>
                    <span class="delprice"><del>₹720</del></span>
                    <span class="price">₹603</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv oils">
                <div class="productbox">
                    <img src="images/saffola.jpg" alt="img">
                    <strong>Saffola Active Refined Cooking Oil </strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹160</del></span>
                    <span class="price">₹136</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Ghee">
                <div class="productbox">
                    <img src="images/jerseycowghee.jpg" alt="img">
                    <strong>Jersey Cow Ghee</strong>
                    <span class="quality">500 ml</span>
                    <span class="delprice"><del>₹399</del></span>
                    <span class="price">₹381</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Ghee">
                <div class="productbox">
                    <img src="images/amulghee.jpg" alt="img">
                    <strong>Amul Pure Ghee</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹635</del></span>
                    <span class="price">₹616</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Ghee">
                <div class="productbox">
                    <img src="images/durgaghee.jpg" alt="img">
                    <strong>Durga Desi Ghee</strong>
                    <span class="quality">500 L x 2</span>
                    <span class="delprice"><del>₹816</del></span>
                    <span class="price">₹789</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Ghee">
                <div class="productbox">
                    <img src="images/grbcowghee.jpg" alt="img">
                    <strong>GRB Cow Ghee</strong>
                    <span class="quality">500 L x 2</span>
                    <span class="delprice"><del>₹850</del></span>
                    <span class="price">₹805</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Ghee">
                <div class="productbox">
                    <img src="images/heritagecowghee.jpg" alt="img">
                    <strong>Heritage Cow Ghee</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹685</del></span>
                    <span class="price">₹571</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Ghee">
                <div class="productbox">
                    <img src="images/amulcowghee.jpg" alt="img">
                    <strong>Amul Cow Ghee</strong>
                    <span class="quality">500 ml</span>
                    <span class="delprice"><del>₹365</del></span>
                    <span class="price">₹354</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
            </div>
        </section>

        <script src="script.js"></script>
    </body>
</html>