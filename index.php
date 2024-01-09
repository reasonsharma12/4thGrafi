<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Gift Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <Link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="logo/gift-logo.jpg" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
                <li><a href="login.php">Login</a></li>
             <!--   <li><a href="SignUp.php">SignUp</a></li> -->
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    <section id="hero">
        <h1>Trade-in-offer</h1>
        <h2>Super value deals</h2>
        <h3>On all Products</h3>
        <p>Save more with 30% Discount</p>
        <!-- <button>Shop Now</button> -->
    </section>
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="image/d.jpg" alt="" style="height: 300px; width: 250px;">
            <h6>Free shipping</h6>
        </div>
        <div class="fe-box">
            <img src="image/g.jpg" alt="" style="height: 300px; width: 250px;">
            <h6>Happy sell</h6>
        </div>
        <div class="fe-box">
            <img src="image/s.jpg" alt="" style="height: 300px; width: 250px;">
            <h6>Save Money</h6>
        </div>
        
    </section>
    <section id="product1" class="section-p1">
    <h2>Feature Product</h2>
    <p>New Modern Design </p>
    <div class="pro-container">
        <?php include("connect.php");
                $sql="SELECT * FROM feature_product";
                $results=$con->query($sql);

                while($final=$results->fetch_assoc()){
?>
        <div class="pro">
            <img src="<?php echo $final['image'] ?>" alt="">
            <div class="des">
                <h5><?php echo $final['name'] ?></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4><?php echo $final['price'] ?></h4>
                <h4><?php echo $final['status'] ?></h4>
                <h4><?php echo $final['Details'] ?></h4>
            </div>
            <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping" ></i></a>
        </div>
        <?php };?>
                </div>

    <section id="banner" class="section-m1">
        <h4>Repair Service</h4>
        <h2>Up to <span>30% off</span></h2>
       <!-- <button class="normal">Explore More</button> -->
    </section>
    
    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>New Modern Design </p>
        <div class="pro-container">
        <?php include("connect.php");
                $sql="SELECT * FROM new_arrival";
                $results=$con->query($sql);

                while($final=$results->fetch_assoc()){
?>
        <div class="pro">
            <img src="<?php echo $final['image'] ?>" alt="">
            <div class="des">
                <h5><?php echo $final['name'] ?></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4><?php echo $final['price'] ?></h4>
                <h4><?php echo $final['status'] ?></h4>
                <h4><?php echo $final['Details'] ?></h4>
            </div>
            <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping" ></i></a>
        </div>
        <?php };?>
                </div>
                </section>

        <section id="banner3">
            <div class="banner-box">   
                <h2>Sesonal Seal</h2>
                <h3>Marriage Season 50% off</h3>
            </div>
            <div class="banner-box banner-box2">   
                <h2>New Gift collection</h2>
                <h3>Marriage Season 50% off</h3>
            </div>
            <div class="banner-box banner-box3">   
                <h2>New Design</h2>
                <h3>Marriage Season 50% off</h3>
            </div>
        </section>
        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="logo/gift-logo.jpg" alt="">
                <h4>Contact</h4>
                <p> <strong>Address: </strong> sainamaina-1,Rupandehi</p>
                <p><strong>Phone: </strong>9821450915</p>
                <p><strong>Hour: </strong>24 Hour,Mon-Sat</p>
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4>About</h4>
                <a href="#">About Us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Tearms and condition</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign in</a>
                <a href="#">View Cart</a>
                <a href="#">My wishlist</a>
                <a href="#">Track My Order</a>
                <a href="#">Help</a>
            </div>
            <div class="col install">
                <h4>Install App</h4>
                <p>From app store and Google play</p>
                <div class="row">
                    <img src="install/drive.jpg" alt="">
                </div>
                <p>Secured Payment Gateways</p>
                <img src="install/esewa.jpg" alt="">
            </div>
            <div class="Copyright">
                <p>@ 2021 , Teach etc - HTML CSS Ecommerce Templet</p>
            </div>
        </footer>
    <script src="script.js"></script>
</body>
</html>