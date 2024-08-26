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
                <h2>Rice,Atta and Dals</h2>
            </div>
            <div class="categories-container">
                <a class="categories-box">
                    <img src="images/img 7.jpg" alt="img">
                    <button class="btn active" onclick="filterSelection('all')"><span>Show All</button>
                </a>
                <a class="categories-box">
                    <img src="images/basmati rice.jpg" alt="img">
                    <button class="btn " onclick="filterSelection('Rice')"><span>Rice</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/Aashirvaadatta.jpg" alt="img">
                    <button class="btn" onclick="filterSelection('Atta')"><span>Atta</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/masoordal.jpg" alt="img">
                    <button class="btn" onclick="filterSelection('Dals')"><span>Dals</span></button>
                </a>
            </div>
        </section>
        <section id="popular">
            <div class="product-container">
                <div class="filterDiv Rice">
                <div class="productbox">
                    <img src="images/srilalithasone.jpg" alt="img">
                    <strong>Sri Lalitha Sone Masoori Rice</strong>
                    <span class="quality">5 kg</span>
                    <span class="delprice"><del>₹440</del></span>
                    <span class="price">₹404</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Rice">
                <div class="productbox">
                    <img src="images/fortunerawrice.jpg" alt="img">
                    <strong>Fortune Sona Masoori Raw Rice</strong>
                    <span class="quality">5 kg</span>
                    <span class="delprice"><del>₹520</del></span>
                    <span class="price">₹349</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Rice">
                <div class="productbox">
                    <img src="images/fortunerawrice.jpg" alt="img">
                    <strong>Fortune Sona Masoori Raw Rice</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹105</del></span>
                    <span class="price">₹101</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Rice">
                <div class="productbox">
                    <img src="images/basmati rice.jpg" alt="img">
                    <strong>Daawat Basmati Rice-Rozana Super</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹115</del></span>
                    <span class="price">₹99</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Rice">
                <div class="productbox">
                    <img src="images/DaawatBasmati.jpg" alt="img">
                    <strong>Daawat Basmati Rice-Dubar</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹167</del></span>
                    <span class="price">₹165</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Rice">
                <div class="productbox">
                    <img src="images/fortunebasmati.jpg" alt="img">
                    <strong>Fortune Everyday Basmati Rice</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹169</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Rice">
                <div class="productbox">
                    <img src="images/indiagate.webp" alt="img">
                    <strong>India Gate Regular Choice Basmati Rice Medium</strong>
                    <span class="quality">5 kg</span>
                    <span class="delprice"><del>₹520</del></span>
                    <span class="price">₹437</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Atta">
                <div class="productbox">
                    <img src="images/fortuneatta.jpg" alt="img">
                    <strong>Fortune Chakki Fresh Atta</strong>
                    <span class="quality">5 kg</span>
                    <span class="delprice"><del>₹315</del></span>
                    <span class="price">₹270</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Atta">
                <div class="productbox">
                    <img src="images/Aashirvaadatta.jpg" alt="img">
                    <strong>Aashirvaad Superior MP Atta</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹69</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Atta">
                <div class="productbox">
                    <img src="images/Pillsburyatta.jpg" alt="img">
                    <strong>Pillsbury Chakki Fresh Atta</strong>
                    <span class="quality">5 kg</span>
                    <span class="delprice"><del>₹329</del></span>
                    <span class="price">₹278</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Atta">
                <div class="productbox">
                    <img src="images/Aashirvaadatta.jpg" alt="img">
                    <strong>Aashirvaad Superior MP Atta</strong>
                    <span class="quality">5 kg</span>
                    <span class="delprice"><del>₹329</del></span>
                    <span class="price">₹293</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Atta">
                <div class="productbox">
                    <img src="images/Pillsburyatta.jpg" alt="img">
                    <strong>Pillsbury Chakki Fresh Atta</strong>
                    <span class="quality">1 kg</span>
                    <span class="price">₹69</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Atta">
                <div class="productbox">
                    <img src="images/dragonfruit.jpeg" alt="img">
                    <strong>Aashirvaad Multigrain Atta</strong>
                    <span class="quality">5 kg</span>
                    <span class="delprice"><del>₹378</del></span>
                    <span class="price">₹301</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Atta"> 
                <div class="productbox">
                    <img src="images/multigrain.jpg" alt="img">
                    <strong>Aashirvaad Multigrains Atta</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del></del></span>
                    <span class="price">₹78</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Dals">
                <div class="productbox">
                    <img src="images/toordal.jpg" alt="img">
                    <strong>Tata Sampann Unpolished Toor Dal</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹264</del></span>
                    <span class="price">₹237</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Dals">
                <div class="productbox">
                    <img src="images/uraddal.jpg" alt="img">
                    <strong>Tata Sampann Unpolished Urad Dal</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹95</del></span>
                    <span class="price">₹83</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Dals">
                <div class="productbox">
                    <img src="images/moongdal.jpg" alt="img">
                    <strong>Tata Sampann Unpolished Moong dal</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹220</del></span>
                    <span class="price">₹192</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Dals">
                <div class="productbox">
                    <img src="images/chanadal.jpg" alt="img">
                    <strong>Tata Sampann Unpolished Chana Dal</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹193</del></span>
                    <span class="price">₹132</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Dals">
                <div class="productbox">
                    <img src="images/moongdal.jpg" alt="img">
                    <strong>Tata Sampann Unpolished Moong Whole</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹198</del></span>
                    <span class="price">₹188</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Dals">
                <div class="productbox">
                    <img src="images/masoordal.jpg" alt="img">
                    <strong>Tata Sampann Unpolished Masoor Dal</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹86</del></span>
                    <span class="price">₹83</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Dals">
                <div class="productbox">
                    <img src="images/kabulichana.jpg" alt="img">
                    <strong>Tata Sampann Unpolished Kabuli Chana</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹319</del></span>
                    <span class="price">₹309</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Dals">
                <div class="productbox">
                    <img src="images/groundnut.jpg" alt="img">
                    <strong>Safe Harvest Groundnuts</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>132</del></span>
                    <span class="price">₹92</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Dals">
                <div class="productbox">
                    <img src="images/soyachunks.jpg" alt="img">
                    <strong>Fortune Soya Chunks</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹200</del></span>
                    <span class="price">₹58</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Atta">
                <div class="productbox">
                    <img src="images/ragiatta.jpg" alt="img">
                    <strong>24 Mantra Ragi Atta</strong>
                    <span class="quality">500 g x 4</span>
                    <span class="delprice"><del>₹260</del></span>
                    <span class="price">₹221</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
            </div>
        </section>

        <script src="script.js"></script>
    </body>
</html>