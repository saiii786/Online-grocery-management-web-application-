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
                <h2>Baby Care & Pharma</h2>
            </div>
            <div class="categories-container">
                <a class="categories-box">
                    <img src="images/img 17.jpg" alt="img">
                    <button class="btn active" onclick="filterSelection('all')"><span>Show All</button>
                </a>
                <a class="categories-box">
                    <img src="images/babycare.jpg" alt="img">
                    <button class="btn " onclick="filterSelection('baby')"><span>Baby care</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/whisper.jpg" alt="img">
                    <button class="btn" onclick="filterSelection('pharma')"><span>Pharma</span></button>
                </a>
            </div>
        </section>
        <section id="popular">
            <div class="product-container">
                <div class="filterDiv pharma">
                <div class="productbox">
                    <img src="images/veet.jpg" alt="img">
                    <strong>Veet Pure Hair Removal Cream</strong>
                    <span class="quality">100 g</span>
                    <span class="delprice"><del>₹290</del></span>
                    <span class="price">₹254</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv pharma">
                <div class="productbox">
                    <img src="images/whisper.jpg" alt="img">
                    <strong>Whisper Choice Ultra XLSanitary Pad</strong>
                    <span class="quality">6 pieces</span>
                    <span class="price">₹50</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv pharma">
                <div class="productbox">
                    <img src="images/stayfree.avif" alt="img">
                    <strong>Stayfree Secure Extra Large</strong>
                    <span class="quality">40 pieces</span>
                    <span class="delprice"><del>₹275</del></span>
                    <span class="price">₹247</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv pharma">
                <div class="productbox">
                    <img src="images/whisper1.jpg" alt="img">
                    <strong>Whisper Ultra Clean XL+ Sanitary Pad Pack</strong>
                    <span class="quality">15 pieces</span>
                    <span class="price">₹190</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv pharma">
                <div class="productbox">
                    <img src="images/img 17.jpg" alt="img">
                    <strong>Nua Ultra Safe 12 XL+ Sanitary Pads</strong>
                    <span class="quality">12 pieces</span>
                    <span class="delprice"><del>₹239</del></span>
                    <span class="price">₹191</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv pharma">
                <div class="productbox">
                    <img src="images/orsl.jpg" alt="img">
                    <strong>Orsl Apple Drink</strong>
                    <span class="quality">2oo ml x 2</span>
                    <span class="delprice"><del>₹84</del></span>
                    <span class="price">₹83</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv pharma">
                <div class="productbox">
                    <img src="images/moov.jpg" alt="img">
                    <strong>Moov Fast Pain Relief Spray</strong>
                    <span class="quality">50 g</span>
                    <span class="delprice"><del>₹186</del></span>
                    <span class="price">₹177</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv pharma">
                <div class="productbox">
                    <img src="images/dettol1.jpg" alt="img">
                    <strong>Dettol AntiSeptic Liquid for floor Cleaner</strong>
                    <span class="quality">1 L</span>
                    <span class="price">₹401</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv pharma">
                <div class="productbox">
                    <img src="images/colgate.jpg" alt="img">
                    <strong>Colgate Plax Peppermint Fresh Mouthwash</strong>
                    <span class="quality">250 ml</span>
                    <span class="delprice"><del>₹165</del></span>
                    <span class="price">₹137</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv pharma">
                <div class="productbox">
                    <img src="images/colgate1.jpg" alt="img">
                    <strong>Colgate MaxFresh Sicy Fresh Red Gel Toothpaste</strong>
                    <span class="quality">300 g</span>
                    <span class="delprice"><del>₹230</del></span>
                    <span class="price">₹154</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv pharma">
                <div class="productbox">
                    <img src="images/dubur.jpg" alt="img">
                    <strong>Dabur Red Toothpaste</strong>
                    <span class="quality">100 g x 2</span>
                    <span class="delprice"><del>₹140</del></span>
                    <span class="price">₹126</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv baby">
                <div class="productbox">
                    <img src="images/cereal.jpg" alt="img">
                    <strong>Nestle Ceregrow Growing Up Multigrain Cereal</strong>
                    <span class="quality">300 g</span>
                    <span class="delprice"><del>₹333</del></span
                    <span class="price">₹316</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv baby">
                <div class="productbox">
                    <img src="images/cerslac.jpg" alt="img">
                    <strong>Nestle Cerelac with Wheat & Rice Mixed Fruit</strong>
                    <span class="quality">300 g</span>>
                    <span class="price">₹314</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv baby"> 
                <div class="productbox">
                    <img src="images/cerelac.jpg" alt="img">
                    <strong>Nestle Cerelac Wheat,stage1</strong>
                    <span class="quality">300 g</span>
                    <span class="price">₹250</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv baby">
                <div class="productbox">
                    <img src="images/diaper.jpg" alt="img">
                    <strong>Pampers Premium Care L Size Diaper Pants</strong>
                    <span class="quality">44 pieces</span>
                    <span class="delprice"><del>₹1399</del></span>
                    <span class="price">₹1077</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv baby">
                <div class="productbox">
                    <img src="images/diaper1.jpg" alt="img">
                    <strong>Pampers Active Baby diapers Taped Large size</strong>
                    <span class="quality">1 pack</span>
                    <span class="delprice"><del>₹1749</del></span>
                    <span class="price">₹1679</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv baby">
                <div class="productbox">
                    <img src="images/watermelon.jpeg" alt="img">
                    <strong>Johnson's Blossoms Baby soap</strong>
                    <span class="quality">75 g</span>
                    <span class="delprice"><del>₹72</del></span>
                    <span class="price">₹69</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv baby">
                <div class="productbox">
                    <img src="images/babycare.jpg" alt="img">
                    <strong>Baby Care Collection with Organic Cotton</strong>
                    <span class="quality">1 box</span>
                    <span class="delprice"><del>₹610</del></span>
                    <span class="price">₹573</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv baby">
                <div class="productbox">
                    <img src="images/babyshampoo.jpg" alt="img">
                    <strong>Johnson Baby Shampoo</strong>
                    <span class="quality">150 g</span>
                    <span class="delprice"><del>₹125</del></span>
                    <span class="price">₹121</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv baby">
                <div class="productbox">
                    <img src="images/babylotion.jpg" alt="img">
                    <strong>Johnson Baby Lotion</strong>
                    <span class="quality">500 ml</span>
                    <span class="delprice"><del>₹385</del></span>
                    <span class="price">₹362</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv baby">
                <div class="productbox">
                    <img src="images/babylotion1.jpg" alt="img">
                    <strong>Himalaya Baby Lotion</strong>
                    <span class="quality">200 ml</span>
                    <span class="delprice"><del>₹195</del></span>
                    <span class="price">₹185</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv baby">
                <div class="productbox">
                    <img src="images/babypowder.jpg" alt="img">
                    <strong>Johnson Baby Powder Natural</strong>
                    <span class="quality">200 g</span>
                    <span class="delprice"><del>₹210</del></span>
                    <span class="price">₹199</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv baby">
                <div class="productbox">
                    <img src="images/vicks.jpg" alt="img">
                    <strong>Vicks Baby Rub</strong>
                    <span class="quality">50 ml</span>
                    <span class="price">₹185</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv baby">
                <div class="productbox">
                    <img src="images/cerelac1.jpg" alt="img">
                    <strong>Ceregrow Grain selection Ragi Mixed Fruits </strong>
                    <span class="quality">300 g</span>
                    <span class="price">₹350</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
            </div>
        </section>

        <script src="script.js"></script>
    </body>
</html>