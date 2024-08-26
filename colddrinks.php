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
    <?php require('insert/header.php');?> 
        <section id="categories">
            <div class="categories-heading">
                <h2>Sweet Tooth & Cold Drinks</h2>
            </div>
            <div class="categories-container">
                <a class="categories-box">
                    <img src="images/img 10.jpg" alt="img">
                    <button class="btn active" onclick="filterSelection('all')"><span>Show All</button>
                </a>
                <a class="categories-box">
                    <img src="images/5star.jpg" alt="img">
                    <button class="btn " onclick="filterSelection('sweet')"><span>Chocolates</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/butterscotchcone.jpeg" alt="img">
                    <button class="btn" onclick="filterSelection('icecream')"><span>Ice Creams</span></button>
                </a>
                <a class="categories-box">
                    <img src="images/sprite.jpg" alt="img">
                    <button class="btn" onclick="filterSelection('colddrinks')"><span>Cold Drinks</span></button>
                </a>
            </div>
        </section>
        <section id="popular">
            <div class="product-container">
                <div class="filterDiv sweet">
                <div class="productbox">
                    <img src="images/daily milk oreo.jpeg" alt="img">
                    <strong>Dairy Milk Silk Oreo Chocolate Bar</strong>
                    <span class="quality">60 g</span>
                    <span class="price">₹85</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv sweet">
                <div class="productbox">
                    <img src="images/5star.jpg" alt="img">
                    <strong>5 Star Chocolate Bar</strong>
                    <span class="quality">40 g</span>
                    <span class="price">₹20</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv sweet">
                <div class="productbox">
                    <img src="images/fuse.jpg" alt="img">
                    <strong>Fuse Chocolate Bar</strong>
                    <span class="quality">24 g</span>
                    <span class="price">₹20</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv sweet">
                <div class="productbox">
                    <img src="images/ferrerorocher.jpg" alt="img">
                    <strong>Ferrero Rocher Chocolate</strong>
                    <span class="quality">200 g</span>
                    <span class="delprice"><del>₹549</del></span>
                    <span class="price">₹522</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv sweet">
                <div class="productbox">
                    <img src="images/dairymilkfruits,nuts.jpg" alt="img">
                    <strong>Dairy Milk Fruit & Nut Chocolate Bar</strong>
                    <span class="quality">80 g</span>
                    <span class="delprice"><del>₹90</del></span>
                    <span class="price">₹85</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv sweet">
                <div class="productbox">
                    <img src="images/kitkat.jpg" alt="img">
                    <strong>Kitkat Love Break 4 Finger Chocolate Bar</strong>
                    <span class="quality">37.3 g</span>
                    <span class="price">₹30</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv sweet">
                <div class="productbox">
                    <img src="images/kinderjoy.jpg" alt="img">
                    <strong>Kinder Joy</strong>
                    <span class="quality">20 g</span>
                    <span class="delprice"><del>₹45</del></span>
                    <span class="price">₹42</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv icecream">
                <div class="productbox">
                    <img src="images/vanilla.jpg" alt="img">
                    <strong>Kwality Wall's Shameless Vanilla Tub</strong>
                    <span class="quality">700 ml</span>
                    <span class="delprice"><del>₹150</del></span>
                    <span class="price">₹135</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv icecream">
                <div class="productbox">
                    <img src="images/butterscotch.jpeg" alt="img">
                    <strong>Kwality Wall's Butterscotch Tub</strong>
                    <span class="quality">700 ml</span>
                    <span class="delprice"><del>₹180</del></span>
                    <span class="price">₹158</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv icecream">
                <div class="productbox">
                    <img src="images/chocobrownie.jpg" alt="img">
                    <strong>Kwality Wall's Choco Brownie Fudge Tub</strong>
                    <span class="quality">700 ml</span>
                    <span class="delprice"><del>₹319</del></span>
                    <span class="price">₹255</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv icecream">
                <div class="productbox">
                    <img src="images/oreoicecream.jpg" alt="img">
                    <strong>Kwality Wall's Oreo and Cream tub</strong>
                    <span class="quality">700 ml</span>
                    <span class="delprice"><del>₹299</del></span>
                    <span class="price">₹239</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv icecream">
                <div class="productbox">
                    <img src="images/chocolate cone.jpeg" alt="img">
                    <strong>Kwality Wall's Cornetto Double Chocolate Cone</strong>
                    <span class="quality">105 ml</span>
                    <span class="price">₹40</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv icecream">
                <div class="productbox">
                    <img src="images/butterscotchcone.jpeg" alt="img">
                    <strong>Kwality Wall's Cornetto Butterscotch Cone</strong>
                    <span class="quality">105 ml</span>
                    <span class="price">₹45</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv icecream"> 
                <div class="productbox">
                    <img src="images/almondicecream.jpg" alt="img">
                    <strong>Kwality Wall's Magnum Almond Ice Cream stick</strong>
                    <span class="quality">62 g</span>
                    <span class="price">₹99</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv colddrinks">
                <div class="productbox">
                    <img src="images/sprite.jpg" alt="img">
                    <strong>Sprite Soft Drink Bottle</strong>
                    <span class="quality">750 ml</span>
                    <span class="delprice"><del>₹40</del></span>
                    <span class="price">₹38</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv colddrinks">
                <div class="productbox">
                    <img src="images/thumsup.jpg" alt="img">
                    <strong>Thums Up Soft Drink Bottle</strong>
                    <span class="quality">2.25 L</span>
                    <span class="delprice"><del>₹85</del></span>
                    <span class="price">₹81</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv colddrinks">
                <div class="productbox">
                    <img src="images/pepsi.jpg" alt="img">
                    <strong>Pepsi Soft Drink Bottle</strong>
                    <span class="quality">1.25 L</span>
                    <span class="price">₹60</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv colddrinks">
                <div class="productbox">
                    <img src="images/mountaindew.jpg" alt="img">
                    <strong>Mountain Dew Soft Drink</strong>
                    <span class="quality">1.25 L</span>
                    <span class="price">₹60</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv colddrinks">
                <div class="productbox">
                    <img src="images/sprite.jpg" alt="img">
                    <strong>Sprite Soft Drink Bottle</strong>
                    <span class="quality">1.25 L</span>
                    <span class="price">₹68</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div> 
                <div class="filterDiv colddrinks">
                <div class="productbox">
                    <img src="images/7up.jpg" alt="img">
                    <strong>7 Up Soft Drink Bottle</strong>
                    <span class="quality">2.25 L</span>
                    <span class="delprice"><del>₹99</del></span>
                    <span class="price">₹89</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv colddrinks">
                <div class="productbox">
                    <img src="images/realmixed.jpg" alt="img">
                    <strong>Real Fruit Power Mixed Fruits JUice</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹129</del></span>
                    <span class="price">₹114</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv colddrinks">
                <div class="productbox">
                    <img src="images/realmasalamixed.jpg" alt="img">
                    <strong>Real Masala Mixed Fruit Juice</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹140</del></span>
                    <span class="price">₹70</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div> 
                </div>
                <div class="filterDiv colddrinks">
                <div class="productbox">
                    <img src="images/rawfruitjuice.jpg" alt="img">
                    <strong>Raw Pressey Mixed Fruit Juice</strong>
                    <span class="quality">200 ml</span>
                    <span class="delprice"><del>₹60</del></span>
                    <span class="price">₹30</span>
                    <a href="cart.php" class="cart-button">Add</a>
                </div>
                </div>
                <div class="filterDiv colddrinks">
                <div class="productbox">
                    <img src="images/pulpyorange.jpg" alt="img">
                    <strong>Pulpy Orange Juice</strong>
                    <span class="quality">1 L</span>
                    <span class="delprice"><del>₹90</del></span>
                    <span class="price">₹77</span>
                    <a href="cart.php" class="cart-button"> Add</a>
                </div> 
                </div>
            </div>
        </section>
        
        <script src="script.js"></script>
</body>
</html>