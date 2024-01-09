<!-- <!DOCTYPE html>
<html lang="en"> -->
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
                <li><a href="shop.php">Shop</a></li>
                <!-- <li><a href="Blog.php">Blog</a></li> -->
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    <section id="about-header">       
        <h2>#Let's_talk</h2>       
        <p>LEAVE A MESSAGE,We love to hear from you!</p>   
    </section>  

    <section id="contact-details" class="section-p1">
       <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our location or contact us</h2>
        <h3>Head Office</h3>
        <div>
            <li>
                <i class="fas fa-map"></i>
                <p>Sainamaina-1,Rupandehi-Ranibagiya</p>
            </li>
            <li>
                <i class="fas fa-envelope"></i>
                <p>Contact@example.com</p>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <p>Contact@example.com</p>
            </li>
            <li>
                <i class="fas fa-clock"></i>
                <p>Sunday to Saturday:8:am to 8pm</p>
            </li>
        </div>
       </div>

       <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14136.
        67112161104!2d83.4447550418129!3d27.65028028594423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
        1!3m3!1m2!1s0x399685c907683133%3A0x2208eae6e554aed!2sSainamaina%201!5e0!3m2!1sen!2snp!4v1687427118973!5m2!1sen!2snp" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We Love To Hear From You!</h2>
            <input type="text" placeholder="Your Name" require>
            <input type="text" placeholder="E-mail" require>
            <input type="text" placeholder="subject" require>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" require></textarea>
            <button class="normal">Submit</button>
        </form>
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
            </div>
            <div class="Copyright">
                <p>@ 2021 , Teach etc - HTML CSS Ecommerce Templet</p>
            </div>
        </footer>
    <script src="script.js"></script>
</body>
</html>
