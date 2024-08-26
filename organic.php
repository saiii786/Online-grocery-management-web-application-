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
                <h2>Fresh & Organic</h2>
            </div>
            <div class="categories-container">
                <a class="categories-box">
                    <img src="images/img 3.jpg" alt="img">
                    <button class="btn active" onclick="filterSelection('all')"><span>Organic</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/img 3.jpg" alt="img">
                    <button class="btn " onclick="filterSelection('fruits')"><span>Fruits</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/img 4.jpg" alt="img">
                    <button class="btn" onclick="filterSelection('vegetables')"><span>Vegetables</span></button>
                </a>
            </div>
        </section>
        <section id="popular">
            <div class="product-container">
                <div class="filterDiv fruits">
                <div class="productbox">
                    <img src="images/apple.jpg" alt="img">
                    <strong>Apple</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹120</del></span>
                    <span class="price">₹100</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv fruits">
                <div class="productbox">
                    <img src="images/kiwi.jpeg" alt="img">
                    <strong>Kiwi green</strong>
                    <span class="quality">3 pieces(250-350g)</span>
                    <span class="delprice"><del>₹144</del></span>
                    <span class="price">₹115</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv fruits">
                <div class="productbox">
                    <img src="images/strawberry.webp" alt="img">
                    <strong>Strawberry</strong>
                    <span class="quality">1 pack(175-200g)</span>
                    <span class="delprice"><del>₹107</del></span>
                    <span class="price">₹70</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv fruits">
                <div class="productbox">
                    <img src="images/redgrapes.jpg" alt="img">
                    <strong>Red Flame Grapes</strong>
                    <span class="quality">250 g</span>
                    <span class="delprice"><del>₹89</del></span>
                    <span class="price">₹69</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv fruits">
                <div class="productbox">
                    <img src="images/banana.jpeg" alt="img">
                    <strong>Banana</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹38</del></span>
                    <span class="price">₹30</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv fruits">
                <div class="productbox">
                    <img src="images/black&green.jpeg" alt="img">
                    <strong>Black & Green Grapes(seedless)</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹106</del></span>
                    <span class="price">₹79</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv fruits">
                <div class="productbox">
                    <img src="images/sweetlime.jpeg" alt="img">
                    <strong>Sweet Lime</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹124</del></span>
                    <span class="price">₹92</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv fruits">
                <div class="productbox">
                    <img src="images/papaya.jpeg" alt="img">
                    <strong>Papaya</strong>
                    <span class="quality">1 piece(800-1200g)</span>
                    <span class="delprice"><del>₹114</del></span>
                    <span class="price">₹84</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv fruits">
                <div class="productbox">
                    <img src="images/plum.jpeg" alt="img">
                    <strong>Plum</strong>
                    <span class="quality">250 g</span>
                    <span class="delprice"><del>₹148</del></span>
                    <span class="price">₹118</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv fruits">
                <div class="productbox">
                    <img src="images/pomegranate.jpeg" alt="img">
                    <strong>Pomegranate</strong>
                    <span class="quality">3 pieces(500-700g)</span>
                    <span class="delprice"><del>₹149</del></span>
                    <span class="price">₹119</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/carrot.jpeg" alt="img">
                        <strong>Carrot</strong>
                        <span class="quality">500 g</span>
                        <span class="delprice"><del>₹53</del></span>
                        <span class="price">₹45</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div> 
                    </div>
                    <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/greenpeas.jpeg" alt="img">
                        <strong>Green Peas</strong>
                        <span class="quality">500 g</span>
                        <span class="delprice"><del>₹57</del></span>
                        <span class="price">₹39</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div>
                    </div> 
                    <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/sweetpotato.jpeg" alt="img">
                        <strong>Sweet Potato</strong>
                        <span class="quality">500 g</span>
                        <span class="delprice"><del>₹60</del></span>
                        <span class="price">₹48</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div> 
                    </div>
                    <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/lady finger.webp" alt="img">
                        <strong>Lady's Finger</strong>
                        <span class="quality">500 g</span>
                        <span class="delprice"><del>₹50</del></span>
                        <span class="price">₹37</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div> 
                    </div>
                    <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/grrencapsicum.jpeg" alt="img">
                        <strong>Green Capsicum</strong>
                        <span class="quality">500 g</span>
                        <span class="delprice"><del>₹66</del></span>
                        <span class="price">₹45</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div> 
                    </div>
                    <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/broccoli.jpeg" alt="img">
                        <strong>Broccoli</strong>
                        <span class="quality">1 piece(200-350g)</span>
                        <span class="delprice"><del>₹52</del></span>
                        <span class="price">₹35</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div>
                    </div> 
                    <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/cabbage.jpeg" alt="img">
                        <strong>Caddage</strong>
                        <span class="quality">i piece(450-650g)</span>
                        <span class="delprice"><del>₹38</del></span>
                        <span class="price">₹30</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div> 
                    </div>
                    <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/frenchbeans.jpeg" alt="img">
                        <strong>French Beans</strong>
                        <span class="quality">250 g</span>
                        <span class="delprice"><del>₹21</del></span>
                        <span class="price">₹17</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div>
                    </div>
                    <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/localbeans.jpeg" alt="img">
                        <strong>Local Beans</strong>
                        <span class="quality">250 g</span>
                        <span class="delprice"><del>₹28</del></span>
                        <span class="price">₹22</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div>
                    </div>
                    <div class="filterDiv vegetables"> 
                    <div class="productbox">
                        <img src="images/greencucumber.webp" alt="img">
                        <strong>Green Cucumber</strong>
                        <span class="quality">2 pieces(400-600g)</span>
                        <span class="delprice"><del>₹24</del></span>
                        <span class="price">₹19</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div> 
                    </div>
                    <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/brinjal.jpeg" alt="img">
                        <strong>Brinjal</strong>
                        <span class="quality">250 g</span>
                        <span class="delprice"><del>₹36</del></span>
                        <span class="price">₹27</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div> 
                    </div>
                    <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/bottlegourd.jpeg" alt="img">
                        <strong>Bottle Gourd</strong>
                        <span class="quality">1 pieces(350-500 g)</span>
                        <span class="delprice"><del>₹41</del></span>
                        <span class="price">₹30</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div> 
                    </div>
                    <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/bittergourd.jpeg" alt="img">
                        <strong>Bitter Goud</strong>
                        <span class="quality">500 g</span>
                        <span class="delprice"><del>₹72</del></span>
                        <span class="price">₹55</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div>
                    </div>
                    <div class="filterDiv vegetables">
                    <div class="productbox">
                        <img src="images/ridgegourd.jpg" alt="img">
                        <strong>Ridge Gourd</strong>
                        <span class="quality">2 piece(400-650g)</span>
                        <span class="delprice"><del>₹85</del></span>
                        <span class="price">₹68</span>
                        <a href="cart.php" class="cart-button">Add</a>
                    </div>
                    </div>
            </div>
        </section>

        <script src="script.js"></script>
    </body>
</html>    