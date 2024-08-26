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
                <h2>Vegetables</h2>
            </div>
            <div class="categories-container">
                <a class="categories-box">
                    <img src="images/img 4.jpg" alt="img">
                    <button class="btn active" onclick="filterSelection('all')"><span>Vegetables</button>
                </a>
                <a class="categories-box">
                    <img src="images/spinach.jpeg" alt="img">
                    <button class="btn " onclick="filterSelection('Leafy')"><span>Leafy Vegetables</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/tomato.jpeg" alt="img">
                    <button class="btn" onclick="filterSelection('Cruciferous')"><span>Cruciferous Vegetables</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/potato.jpeg" alt="img">
                    <button class="btn" onclick="filterSelection('Nightshade')"><span>Nightshade Vegetables</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/carrot.jpeg" alt="img">
                    <button class="btn" onclick="filterSelection('Root')"><span>Root Vegetables</span></button>
                </a>
            </div>
        </section>
        <section id="popular">
            <div class="product-container">
                <div class="filterDiv Root">
                <div class="productbox">
                    <img src="images/onion.jpeg" alt="img">
                    <strong>Onion</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹55</del></span>
                    <span class="price">₹44</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Nightshade">
                <div class="productbox">
                    <img src="images/potato.jpeg" alt="img">
                    <strong>Potato</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹68</del></span>
                    <span class="price">₹54</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Nightshade">
                <div class="productbox">
                    <img src="images/tomato.jpeg" alt="img">
                    <strong>Tomato</strong>
                    <span class="quality">1 kg</span>
                    <span class="delprice"><del>₹50</del></span>
                    <span class="price">₹39</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Cruciferous">
                <div class="productbox">
                    <img src="images/cauliflower.jpeg" alt="img">
                    <strong>Cauliflower</strong>
                    <span class="quality">1 piece(500-700g)</span>
                    <span class="delprice"><del>₹47</del></span>
                    <span class="price">₹37</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Root">
                <div class="productbox">
                    <img src="images/carrot.jpeg" alt="img">
                    <strong>Carrot</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹53</del></span>
                    <span class="price">₹45</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cruciferous">
                <div class="productbox">
                    <img src="images/greenpeas.jpeg" alt="img">
                    <strong>Green Peas</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹57</del></span>
                    <span class="price">₹39</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Root">
                <div class="productbox">
                    <img src="images/sweetpotato.jpeg" alt="img">
                    <strong>Sweet Potato</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹60</del></span>
                    <span class="price">₹48</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cruciferous">
                <div class="productbox">
                    <img src="images/lady finger.webp" alt="img">
                    <strong>Lady's Finger</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹50</del></span>
                    <span class="price">₹37</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cruciferous">
                <div class="productbox">
                    <img src="images/grrencapsicum.jpeg" alt="img">
                    <strong>Green Capsicum</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹66</del></span>
                    <span class="price">₹45</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cruciferous">
                <div class="productbox">
                    <img src="images/broccoli.jpeg" alt="img">
                    <strong>Broccoli</strong>
                    <span class="quality">1 piece(200-350g)</span>
                    <span class="delprice"><del>₹52</del></span>
                    <span class="price">₹35</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Cruciferous">
                <div class="productbox">
                    <img src="images/cabbage.jpeg" alt="img">
                    <strong>Caddage</strong>
                    <span class="quality">i piece(450-650g)</span>
                    <span class="delprice"><del>₹38</del></span>
                    <span class="price">₹30</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Nightshade">
                <div class="productbox">
                    <img src="images/frenchbeans.jpeg" alt="img">
                    <strong>French Beans</strong>
                    <span class="quality">250 g</span>
                    <span class="delprice"><del>₹21</del></span>
                    <span class="price">₹17</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                <div class="filterDiv Nightshade">
                <div class="productbox">
                    <img src="images/localbeans.jpeg" alt="img">
                    <strong>Local Beans</strong>
                    <span class="quality">250 g</span>
                    <span class="delprice"><del>₹28</del></span>
                    <span class="price">₹22</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Nightshade"> 
                <div class="productbox">
                    <img src="images/greencucumber.webp" alt="img">
                    <strong>Green Cucumber</strong>
                    <span class="quality">2 pieces(400-600g)</span>
                    <span class="delprice"><del>₹24</del></span>
                    <span class="price">₹19</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cruciferous">
                <div class="productbox">
                    <img src="images/brinjal.jpeg" alt="img">
                    <strong>Brinjal</strong>
                    <span class="quality">250 g</span>
                    <span class="delprice"><del>₹36</del></span>
                    <span class="price">₹27</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cruciferous">
                <div class="productbox">
                    <img src="images/bottlegourd.jpeg" alt="img">
                    <strong>Bottle Gourd</strong>
                    <span class="quality">1 pieces(350-500 g)</span>
                    <span class="delprice"><del>₹41</del></span>
                    <span class="price">₹30</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cruciferous">
                <div class="productbox">
                    <img src="images/bittergourd.jpeg" alt="img">
                    <strong>Bitter Goud</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹72</del></span>
                    <span class="price">₹55</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Cruciferous">
                <div class="productbox">
                    <img src="images/ridgegourd.jpg" alt="img">
                    <strong>Ridge Gourd</strong>
                    <span class="quality">2 piece(400-650g)</span>
                    <span class="delprice"><del>₹85</del></span>
                    <span class="price">₹68</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Nightshade">
                <div class="productbox">
                    <img src="images/green chilli.jpeg" alt="img">
                    <strong>Green Chilli</strong>
                    <span class="quality">100 g</span>
                    <span class="delprice"><del>₹26</del></span>
                    <span class="price">₹20</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv Leafy">
                <div class="productbox">
                    <img src="images/spinach.jpeg" alt="img">
                    <strong>Spinach</strong>
                    <span class="quality">1 bunch(250-300g)</span>
                    <span class="delprice"><del>₹30</del></span>
                    <span class="price">₹25</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Leafy">
                <div class="productbox">
                    <img src="images/malabarspinach.webp" alt="img">
                    <strong>Malabar Spinach</strong>
                    <span class="quality">1 bunch(400-600g)</span>
                    <span class="delprice"><del>₹52</del></span>
                    <span class="price">₹39</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Nightshade">
                <div class="productbox">
                    <img src="images/coccinia.jpeg" alt="img">
                    <strong>Coccinia</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹26</del></span>
                    <span class="price">₹20</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Cruciferous">
                <div class="productbox">
                    <img src="images/cucumber.jpeg" alt="img">
                    <strong>Cucumber</strong>
                    <span class="quality">500 g</span>
                    <span class="delprice"><del>₹65</del></span>
                    <span class="price">₹50</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv Root">
                <div class="productbox">
                    <img src="images/ginger.jpeg" alt="img">
                    <strong>Ginger</strong>
                    <span class="quality">200 g</span>
                    <span class="delprice"><del>₹45</del></span>
                    <span class="price">₹34</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Root">
                <div class="productbox">
                    <img src="images/colocasia.webp" alt="img">
                    <strong>Colocasia</strong>
                    <span class="quality">250 g</span>
                    <span class="delprice"><del>₹31</del></span>
                    <span class="price">₹25</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Nightshade">
                <div class="productbox">
                    <img src="images/lemon.jpeg" alt="img">
                    <strong>Lemon</strong>
                    <span class="quality">200 g(4-5 pcs)</span>
                    <span class="delprice"><del>₹33</del></span>
                    <span class="price">₹26</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Leafy">
                <div class="productbox">
                    <img src="images/fenugreek.jpeg" alt="img">
                    <strong>Fenugreek</strong>
                    <span class="quality">1 bunch(250-300g)</span>
                    <span class="delprice"><del>₹36</del></span>
                    <span class="price">₹29</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Leafy">
                <div class="productbox">
                    <img src="images/gongura.jpg" alt="img">
                    <strong>Gongura leaves</strong>
                    <span class="quality">1 bunch(250-300g)</span>
                    <span class="delprice"><del>₹35</del></span>
                    <span class="price">₹29</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Nightshade">
                <div class="productbox">
                    <img src="images/mushroom.jpeg" alt="img">
                    <strong>Mushroom</strong>
                    <span class="quality">1 box(180-200g)</span>
                    <span class="delprice"><del>₹56</del></span>
                    <span class="price">₹45</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv Leafy">
                <div class="productbox">
                    <img src="images/greenlettuce.jpeg" alt="img">
                    <strong>Green Lettuce</strong>
                    <span class="quality">1 piece(100-150g)</span>
                    <span class="delprice"><del>₹57</del></span>
                    <span class="price">₹39</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
            </div>
        </section>

        <script src="script.js"></script>
    </body>
</html>