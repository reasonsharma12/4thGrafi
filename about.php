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
                <li><a href="index.phpl">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
                <li><a href="login.php">Login</a></li>
              <!--  <li><a href="SignUp.php">SignUp</a></li> -->
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    <section id="about-header">       
        <h2>#KnowUs</h2>       
        <p>Lorem ipsum dolor sit amet consectetur.</p>   
    </section>  

    <section id="about-head" class="section-p1">
        <img src="God/god5.jpg" alt="">
        <div>
            <h2>Who we Are?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, impedit.
                 Animi expedita incidunt labore, quibusdam quaerat aliquam fugit laborum.
                 Animi nihil nemo dolorem quia consequuntur officiis labore aut culpa perspiciatis.</p>

                 <abbr title="">Create stunning images with as much or as little control
                    as you like thanks to a choice of Basic and creative nodes.</abbr>

                    <br><br>

                    <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%"> Create stunning images with as much or as little control
                        as you like thanks to a choice of Basic and creative nodes.</marquee>
        </div>
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
    <section id="newsletters" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for online gift shop</h4>
            <p>Get E-mail address update our latest and <span>special offer.</span></p>
        </div>
        <div class="Form">
            <input type="text" placeholder="Your E-mail address">
            <button class="normal">Sign Up</button>
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
                <p>@ 2021 , Teach etc - HTML CSS Ecommerce Templet</p>
            </div>
        </footer>
    <script src="script.js"></script>
</body>
</html>